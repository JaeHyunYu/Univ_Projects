package com.example.exhp.network;

import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.icu.util.ULocale;
import android.os.AsyncTask;
import android.os.Build;
import android.os.Bundle;
import android.os.Handler;
import android.text.util.Linkify;
import android.util.TypedValue;
import android.view.View;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;

import com.example.exhp.CameraActivity;
import com.example.exhp.ChatBotActivity;
import com.example.exhp.LoadingActivity;
import com.example.exhp.LoginActivity;
import com.example.exhp.MainActivity;
import com.example.exhp.R;
import com.example.exhp.foodActivity;
import com.example.exhp.lecture.Lecture;
import com.example.exhp.lecture.ParseXML;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import org.json.XML;

import java.util.ArrayList;
import java.util.Base64;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import static android.content.Intent.FLAG_ACTIVITY_NEW_TASK;

public class NetworkTask extends AsyncTask<Void, Void, String> {
    private String url;
    private ContentValues values;
    private Context context;
    private String result;
    private Opcode opcode;
    private String type;
    private GoogleMap map;

    public NetworkTask(String url, ContentValues values, Context context, Opcode opcode, String type) {

        this.url = url;
        this.values = values;
        this.context = context;
        this.opcode = opcode;
        this.type = type;
    }

    public void setMap(GoogleMap map) {
        this.map = map;
    }

    public GoogleMap getMap() {
        return this.map;
    }

    @Override
    protected String doInBackground(Void... params) {

        String result; // 요청 결과를 저장할 변수.
        RequestHttpConnection requestHttpURLConnection = new RequestHttpConnection();
        result = requestHttpURLConnection.request(url, values, type); // 해당 URL로 부터 결과물을 얻어온다.

        return result;
    }

    @RequiresApi(api = Build.VERSION_CODES.O)
    @Override
    protected void onPostExecute(String s) {
        super.onPostExecute(s);
        result = s;
        Handler handler = new Handler(context.getMainLooper());
        //doInBackground()로 부터 리턴된 값이 onPostExecute()의 매개변수로 넘어오므로 s를 출력한다.
        switch ( opcode ) {
            case LoginRequest:
                handler.post(new Runnable() {
                    public void run() {
                        if (result.contains("success")) {
                            Intent intent = new Intent(context, MainActivity.class);
                            intent.addFlags(FLAG_ACTIVITY_NEW_TASK);
                            Toast.makeText(context, "login success!", Toast.LENGTH_SHORT).show();
                            context.startActivity(intent);
                        } else {
                            Toast.makeText(context, "login failed!", Toast.LENGTH_SHORT).show();
                        }
                    }
                });
                break;
            case RegisterRequest:
                handler.post(new Runnable() {
                    public void run() {
                        System.out.println("fuck"+result);

                        Intent intent = new Intent(context, LoginActivity.class);
                        intent.addFlags(FLAG_ACTIVITY_NEW_TASK);
                        if (!result.contains("error message : ")) {
                            Toast.makeText(context, "register success!", Toast.LENGTH_SHORT).show();
                            context.startActivity(intent);
                        } else {
                            Toast.makeText(context, "register failed!", Toast.LENGTH_SHORT).show();
                        }
                    }
                });
                break;
            case SurveyRequest:
                handler.post(new Runnable() {
                    public void run() {
                        Intent intent = new Intent(context, MainActivity.class);
                        intent.addFlags(FLAG_ACTIVITY_NEW_TASK);
                        if ( result.contains("success") ) {
                            Toast.makeText(context, "survey success!", Toast.LENGTH_SHORT).show();
                        } else {
                            Toast.makeText(context, "survey failed!", Toast.LENGTH_SHORT).show();
                        }
                        context.startActivity(intent);
                    }
                });
                break;
            case LocationRequest:
                final GoogleMap gmap = this.map;
                handler.post(new Runnable() {
                    public void run() {
                        System.out.println(result);
                        try {
                            JSONObject jsonObject = new JSONObject(result);
                            JSONArray results = jsonObject.getJSONArray("results");
                            for ( int i = 0; i < results.length(); i++ ) {
                                JSONObject location = results.getJSONObject(i).getJSONObject("geometry").getJSONObject("location");
                                String tmp_title = results.getJSONObject(i).getString("name");
                                gmap.addMarker(new MarkerOptions()
                                        .position(new LatLng(location.getDouble("lat"), location.getDouble("lng")))
                                        .title(tmp_title));
//                                System.out.println("#####################");
//                                System.out.println(tmp_title);
                                //System.out.println(location.getDouble("lat"));
                                //System.out.println(location.getDouble("lng"));
                            }
                        } catch (JSONException err){
                            err.printStackTrace();
                            //Log.d("Error", err.toString());
                        }

                    }
                });
                break;
            case ParseRequest:
                //String info = result;
                handler.post(new Runnable() {
                                 public void run() {
                                     String res = result;
                                     Base64.Decoder decoder = Base64.getDecoder();
                                     res = res.replace("b\'", "");
                                     res = res.replace("\'", "");
                                     byte[] decoded = decoder.decode(res);

                                     try {
                                         String plain = new String(decoded, "UTF-8");
                                         ArrayList<Lecture> lectures = ParseXML.parseXMLtoArray(plain);
                                         String parsedLectures = "";
                                         for (Lecture lec : lectures)
                                             parsedLectures += lec.getCuri_nm() + "\n";

                                         AppCompatActivity chatbot_context = (AppCompatActivity) context;
                                         final TextView ans_txt = (TextView) chatbot_context.findViewById(R.id.ans_txt);
                                         final ImageView ans_img = (ImageView) chatbot_context.findViewById(R.id.ans_img);
                                         ans_txt.setText(parsedLectures);
                                         ans_img.setVisibility(View.INVISIBLE);
                                         ans_txt.setTextSize(TypedValue.COMPLEX_UNIT_SP,25);
                                     } catch (Exception e) {
                                         e.printStackTrace();
                                     }
                                 }
                             });
                //Toast.makeText(context, result, Toast.LENGTH_SHORT).show();
                break;
            case ImageRequest:
                handler.post(new Runnable() {
                    public void run() {
                        String res2 = result;
                        Base64.Decoder decoder2 = Base64.getDecoder();
                        res2 = res2.replace("b\'", "");
                        res2 = res2.replace("\'", "");
                        byte[] decoded2 = decoder2.decode(res2);
                        try {
                            String plain2 = new String(decoded2, "UTF-8");
                            System.out.println(plain2);
                            Bundle b = new Bundle();
                            b.putString("data", plain2); //Your id
                            Intent food_intent = new Intent(context.getApplicationContext(), foodActivity.class);
                            food_intent.putExtras(b);
                            food_intent.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                            context.startActivity(food_intent);


                        } catch (Exception e) {
                            e.printStackTrace();
                        }
                    }
                });


                break;
            case WikiRequest:
                String codes = result;
                int start_idx = codes.indexOf("interwiki-en");
                int end_idx = codes.indexOf("English");
                codes = codes.substring(start_idx, end_idx);
                System.out.println(codes);
                start_idx = codes.indexOf("https://en.wikipedia.org/wiki/");
                codes = codes.substring(start_idx);
                end_idx = codes.indexOf("\"");
                codes = codes.substring(0, end_idx);
                System.out.println(codes);
                AppCompatActivity food_context = (AppCompatActivity)context;
                WebView mWebView = food_context.findViewById(R.id.webLayout);
                mWebView.setWebViewClient(new WebViewClient(){
                    @Override
                    public boolean shouldOverrideUrlLoading(WebView view, String url) {
                        view.loadUrl(url);
                        return true;
                    }
                });
                WebSettings mWebSettings = mWebView.getSettings();
                mWebSettings.setJavaScriptEnabled(true);
                mWebSettings.setLoadWithOverviewMode(true);
                mWebView.loadUrl(codes); //연결할 url

                break;
            default:
                break;
        }
    }
}

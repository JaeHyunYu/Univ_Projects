package com.example.exhp;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;

import android.Manifest;
import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.os.Build;
import android.os.Bundle;
import android.text.util.Linkify;
import android.view.MenuItem;
import android.view.View;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.PopupMenu;
import android.widget.TextClock;
import android.widget.TextView;
import android.widget.Toast;

import com.example.exhp.network.NetworkTask;
import com.example.exhp.network.Opcode;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class foodActivity extends AppCompatActivity {

    final AppCompatActivity appContext = this;
    private WebView mwv;
    private long pressedTime;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_food);

        mwv=(WebView)findViewById(R.id.webLayout);
        WebSettings mws=mwv.getSettings();
        mws.setLoadWithOverviewMode(true);
        mws.setJavaScriptEnabled(true);

        Bundle b = getIntent().getExtras();
        String value = ""; // or other values
        if ( b != null )
            value = b.getString("data");
        String url = "https://ko.wikipedia.org/wiki/";
        final String parse_url = url+value;

        NetworkTask networkTask = new NetworkTask(parse_url, null, appContext, Opcode.WikiRequest, "POST");
        networkTask.execute();
    }

    // 백버튼 터치시 웹뷰페이지 뒤로 가기. 더이상 뒤로 갈곳이 없으면 연속 두번 터치시 종료
    @Override
    public void onBackPressed() {
        if ( pressedTime == 0 ) {
            Toast.makeText(foodActivity.this, " 한 번 더 누르면 종료됩니다." , Toast.LENGTH_LONG).show();
            pressedTime = System.currentTimeMillis();
        }
        else {
            int seconds = (int) (System.currentTimeMillis() - pressedTime);

            if ( seconds > 2000 ) {
                Toast.makeText(foodActivity.this, " 한 번 더 누르면 종료됩니다." , Toast.LENGTH_LONG).show();
                pressedTime = 0 ;
            }
            else {
                super.onBackPressed();
                Intent intent = new Intent(foodActivity.this, MainActivity.class);
                startActivity(intent);
            }
        }
    }
}
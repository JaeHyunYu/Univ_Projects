package com.example.exhp;

import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.solver.state.Dimension;
import androidx.core.app.ActivityCompat;

import android.Manifest;
import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.os.Build;
import android.os.Bundle;
import android.util.TypedValue;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.PopupMenu;
import android.widget.TextView;
import android.widget.Toast;

import com.example.exhp.network.NetworkTask;
import com.example.exhp.network.Opcode;

import org.w3c.dom.Text;

public class ChatBotActivity extends AppCompatActivity {
    final AppCompatActivity app = this;
    int PERMISSION_ALL = 1;

    String[] PERMISSIONS = {
            Manifest.permission.ACCESS_COARSE_LOCATION,
            Manifest.permission.ACCESS_FINE_LOCATION,
    };


    public boolean hasPermissions(Context context, String... permissions) {
        if (context != null && permissions != null) {
            for (String permission : permissions) {
                if (ActivityCompat.checkSelfPermission(context, permission) != PackageManager.PERMISSION_GRANTED) {
                    return false;
                }
            }
        }
        return true;
    }

    private AppCompatActivity appContext;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chat_bot);

        Button lec_btn=(Button) findViewById(R.id.lec_btn);
        Button cul_btn=(Button)findViewById(R.id.cul_btn);
        Button caf_btn=(Button)findViewById(R.id.caf_btn);
        Button hlp_btn=(Button)findViewById(R.id.hlp_btn);
        final TextView ans_txt=(TextView)findViewById(R.id.ans_txt);
        final TextView question_txt=(TextView)findViewById(R.id.question_txt);
        final ImageView ans_img = (ImageView)findViewById(R.id.ans_img);

        final String url = "http://exchangehelp.ml/parse.php";
        final ContentValues values = new ContentValues();
        final Button lecture_button = (Button)findViewById(R.id.lec_btn);
        appContext = this;
        final ImageButton imageButton = findViewById(R.id.imageButton);

        lecture_button.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {

                        NetworkTask networkTask = new NetworkTask(url, null, appContext, Opcode.ParseRequest, "GET");
                        networkTask.execute();
                    }
                });



        imageButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                PopupMenu popup= new PopupMenu(getApplicationContext(), v);//v는 클릭된 뷰를 의미

                getMenuInflater().inflate(R.menu.menu, popup.getMenu());
                popup.setOnMenuItemClickListener(new PopupMenu.OnMenuItemClickListener() {
                    @RequiresApi(api = Build.VERSION_CODES.M)
                    @Override
                    public boolean onMenuItemClick(MenuItem item) {
                        ans_img.setVisibility(View.VISIBLE);
                        ans_txt.setTextSize(TypedValue.COMPLEX_UNIT_SP,15);
                        switch (item.getItemId()){
                            case R.id.menu1:
                                Intent intent1 = new Intent(ChatBotActivity.this, MainActivity.class);
                                startActivity(intent1);
                                break;
                            case R.id.menu2:
                                if ( !hasPermissions(app, PERMISSIONS) ) {
                                    ActivityCompat.requestPermissions(app, PERMISSIONS, PERMISSION_ALL);
                                }
                                else {
                                    Intent intent2 = new Intent(ChatBotActivity.this, EmbassyActivity.class);
                                    startActivity(intent2);
                                }
                                break;
                            case R.id.menu3:
                                if ( !hasPermissions(app, PERMISSIONS) ) {
                                    ActivityCompat.requestPermissions(app, PERMISSIONS, PERMISSION_ALL);
                                }
                                else {
                                    Intent intent3 = new Intent(ChatBotActivity.this, PrintActivity.class);
                                    startActivity(intent3);
                                }
                                break;
                            case R.id.menu5:
                                Toast.makeText(ChatBotActivity.this, " 현재 페이지 입니다." , Toast.LENGTH_LONG).show();
                                break;
                            case R.id.menu6:
                                Intent intent6 = new Intent(ChatBotActivity.this, CameraActivity.class);
                                startActivity(intent6);
                            default:
                                break;
                        }
                        return false;
                    }
                });

                popup.show();//Popup Menu 보이기
            }
        });

        cul_btn.setOnClickListener(new View.OnClickListener() {


            @Override
            public void onClick(View v) {
                PopupMenu popup = new PopupMenu(getApplicationContext(), v);//v는 클릭된 뷰를 의미
                ans_img.setVisibility(View.VISIBLE);
                ans_txt.setTextSize(TypedValue.COMPLEX_UNIT_SP,15);
                getMenuInflater().inflate(R.menu.k_culture_menu, popup.getMenu());
                popup.setOnMenuItemClickListener(new PopupMenu.OnMenuItemClickListener() {
                    @Override
                    public boolean onMenuItemClick(MenuItem item) {
                        switch (item.getItemId()) {
                            case R.id.menu1:
                                question_txt.setText("What is \'Korean Greeting manners\'?");
                                ans_txt.setText("\nThere are ways to greet someone by shaking hands, lowering your head, and saying hello. \n" +
                                        "when greet to an adult or a superior, Shake hands with two hands.\n" +
                                        "but to the underlings, shake hands with one hand. \n" +
                                        "The way to lowering your head is to polite.\n" +
                                        "The degree of courtesy varies depending on the how much bend your head down.\n" +
                                        "You may think that 15° is a moderate courtesy, and 45° is a deep courtesy. \n" +
                                        " In most other close relationships, we greet each other with words.\n");
                                ans_img.setImageResource(R.drawable.cul1);
                                break;
                            case R.id.menu2:
                                question_txt.setText("what is \'Korean Drinking ettiquette\'?");
                                ans_txt.setText("\nThere is a drinking culture in Korea, such as drinking manners, cheers, and n sessions.\n" +
                                        "Drinking with older people, when he pour-alchol you should be taken glass with both hands.\n" +
                                        "Also, when you drink, cover your glass with your hands and turn your head to drink.\n" +
                                        "In most cases, pouring alcohol into your glass may seem bad!\n" +
                                        "Cheers vary in the nature of each drinking party.\n" +
                                        "some times, the person who leads the drinking party sometimes says good things, and some times, we all shout meaningful words.\n" +
                                        "The N-times culture refers to the culture of drinking continuously, moving from place to place of drinking.\n" +
                                        "In Korea, there is a culture of moving places and drinking a lot of alcohol when you attend drinking parties, and they also show off how well you drink.\n\n");
                                ans_img.setImageResource(R.drawable.cul2);
                                break;
                            case R.id.menu3:
                                question_txt.setText("what is \'Just Saying\'?");
                                ans_txt.setText("\nJust saying is like \"Let's take a meal together later.\"\n" +
                                        "These words is that people often say in Korea, when they break up with someone.\n" +
                                        "However, these words do not actually come true.\n" +
                                        "These words are often used as greetings, and it's better to think of them as more intimate than just greetings.\n" +
                                        "Let's be careful not to get confused with the words that actually make an appointment!\n");
                                ans_img.setImageResource(R.drawable.cul3);
                                break;
                            case R.id.menu4:
                                question_txt.setText("what is \'Korean Sendentary Culture\'?");
                                ans_txt.setText("\nIn Korea, there is a place where you enter a building without wearing shoes.\n" +
                                        "When you eat, there is a restaurant where you go barefoot and sit on the floor and eat.\n" +
                                        "If the table is low in the restaurant, make sure that there are shoes at the entrance of the restaurant!\n");
                                ans_img.setImageResource(R.drawable.cul4);
                                break;
                            default:
                                break;
                        }
                        return false;
                    }
                });
                popup.show();
            }

        });


        caf_btn.setOnClickListener(new View.OnClickListener() {


            @Override
            public void onClick(View v) {
                PopupMenu popup = new PopupMenu(getApplicationContext(), v);//v는 클릭된 뷰를 의미
                ans_img.setVisibility(View.VISIBLE);
                ans_txt.setTextSize(TypedValue.COMPLEX_UNIT_SP,15);
                getMenuInflater().inflate(R.menu.cafeteria_menu, popup.getMenu());
                popup.setOnMenuItemClickListener(new PopupMenu.OnMenuItemClickListener() {
                    @Override
                    public boolean onMenuItemClick(MenuItem item) {
                        switch (item.getItemId()) {
                            case R.id.menu1:
                                question_txt.setText("where is school cafeteria?");
                                ans_txt.setText("");
                                ans_img.setImageResource(R.drawable.sc);
                                break;
                            case R.id.menu2:
                                question_txt.setText("where is cafeteria?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.c);
                                break;
                            case R.id.menu3:
                                question_txt.setText("where is coffee shop?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.cs);
                                break;
                            case R.id.menu4:
                                question_txt.setText("where is convenience store?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.conv);
                            default:
                                break;
                        }
                        return false;
                    }
                });
                popup.show();
            }

        });


        hlp_btn.setOnClickListener(new View.OnClickListener() {


            @Override
            public void onClick(View v) {
                PopupMenu popup = new PopupMenu(getApplicationContext(), v);//v는 클릭된 뷰를 의미
                ans_img.setVisibility(View.VISIBLE);
                ans_txt.setTextSize(TypedValue.COMPLEX_UNIT_SP,15);
                getMenuInflater().inflate(R.menu.help_menu, popup.getMenu());
                popup.setOnMenuItemClickListener(new PopupMenu.OnMenuItemClickListener() {
                    @Override
                    public boolean onMenuItemClick(MenuItem item) {
                        switch (item.getItemId()) {
                            case R.id.menu1:
                                question_txt.setText("Where can I print?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.pr);
                                break;
                            case R.id.menu2:
                                question_txt.setText("Where is the glasses store?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.gl);
                                break;
                            case R.id.menu3:
                                question_txt.setText("Where is the bank?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.bn);
                                break;
                            case R.id.menu4:
                                question_txt.setText("Where is book store?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.bs);
                            case R.id.menu5:
                                question_txt.setText("Where can I get help?");
                                ans_txt.setText(" ");
                                ans_img.setImageResource(R.drawable.hlp);
                            default:
                                break;
                        }
                        return false;
                    }
                });
                popup.show();
            }

        });
    }
}
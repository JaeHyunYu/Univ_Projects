package com.example.exhp;

import android.Manifest;
import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.graphics.Typeface;
import android.os.Build;
import android.os.Bundle;
import android.view.MenuItem;
import android.view.View;
import android.widget.ImageButton;
import android.widget.PopupMenu;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.RequiresApi;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;


public class MainActivity extends AppCompatActivity {

    final AppCompatActivity app = this;

    int PERMISSION_ALL = 1;
    String[] PERMISSIONS = {
            Manifest.permission.ACCESS_COARSE_LOCATION,
            Manifest.permission.ACCESS_FINE_LOCATION,
    };
    String[] PERMISSIONS2 = {
            Manifest.permission.CAMERA,
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

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        // this is a test revision 2
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        // aaaaaaa

        TextView money=findViewById(R.id.money);
        TextView address_card=findViewById(R.id.address_card);
        TextView check=findViewById(R.id.check);
        TextView cap = findViewById(R.id.cap);
        TextView visa = findViewById(R.id.visa);
        TextView industry = findViewById(R.id.industry);
        TextView envelope = findViewById(R.id.envelope);
        TextView user = findViewById(R.id.user);
        TextView list = findViewById(R.id.list);
        TextView key = findViewById(R.id.key);
        TextView bookmark = findViewById(R.id.bookmark);
        TextView picture = findViewById(R.id.picture);
        ImageButton imageButton = findViewById(R.id.imageButton);


        Typeface fontAwsome = Typeface.createFromAsset(getAssets(),"fontawesome-webfont.ttf");
        money.setTypeface(fontAwsome);
        address_card.setTypeface(fontAwsome);
        check.setTypeface(fontAwsome);
        cap.setTypeface(fontAwsome);
        visa.setTypeface(fontAwsome);
        industry.setTypeface(fontAwsome);
        envelope.setTypeface(fontAwsome);
        user.setTypeface(fontAwsome);
        list.setTypeface(fontAwsome);
        key.setTypeface(fontAwsome);
        bookmark.setTypeface(fontAwsome);
        picture.setTypeface(fontAwsome);


        money.setOnClickListener(
            new TextView.OnClickListener() {
                public void onClick(View v) {
                    Intent intent = new Intent(MainActivity.this, D1Activity.class);
                    startActivity(intent);
                }
            });
        address_card.setOnClickListener(
            new TextView.OnClickListener() {
                public void onClick(View v) {
                    Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                    intent.putExtra("type", "d2");
                    startActivity(intent);
            }
            });
        check.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d3");
                        startActivity(intent);
                    }
                });
        cap.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d4");
                        startActivity(intent);
                    }
                });
        visa.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d5");
                        startActivity(intent);
                    }
                });
        industry.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d6");
                        startActivity(intent);
                    }
                });
        envelope.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d7");
                        startActivity(intent);
                    }
                });
        user.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d8");
                        startActivity(intent);
                    }
                });
        list.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d9");
                        startActivity(intent);
                    }
                });
        key.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d10");
                        startActivity(intent);
                    }
                });
        bookmark.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d11");
                        startActivity(intent);
                    }
                });
        picture.setOnClickListener(
                new TextView.OnClickListener() {
                    public void onClick(View v) {
                        Intent intent = new Intent(MainActivity.this, DocumentsActivity.class);
                        intent.putExtra("type", "d12");
                        startActivity(intent);
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
                        switch (item.getItemId()){
                            case R.id.menu1:
                                Toast.makeText(MainActivity.this, " 현재 페이지 입니다." , Toast.LENGTH_LONG).show();
                                break;
                            case R.id.menu2:
                                if ( !hasPermissions(app, PERMISSIONS) ) {
                                    ActivityCompat.requestPermissions(app, PERMISSIONS, PERMISSION_ALL);
                                }
                                else {
                                    Intent intent2 = new Intent(MainActivity.this, EmbassyActivity.class);
                                    startActivity(intent2);
                                }
                                break;
                            case R.id.menu3:
                                if ( !hasPermissions(app, PERMISSIONS) ) {
                                    ActivityCompat.requestPermissions(app, PERMISSIONS, PERMISSION_ALL);
                                }
                                else {
                                    Intent intent3 = new Intent(MainActivity.this, PrintActivity.class);
                                    startActivity(intent3);
                                }
                                break;
                            case R.id.menu5:
                                Intent intent5 = new Intent(MainActivity.this, ChatBotActivity.class);
                                startActivity(intent5);
                                break;
                            case R.id.menu6:
                                if ( !hasPermissions(app, PERMISSIONS2) ) {
                                    ActivityCompat.requestPermissions(app, PERMISSIONS2, PERMISSION_ALL);
                                } else {
                                    Intent intent6 = new Intent(MainActivity.this, CameraActivity.class);
                                    startActivity(intent6);
                                }
                            default:
                                break;
                        }
                        return false;
                    }
                });

                popup.show();//Popup Menu 보이기
            }
        });

    }

    @Override
    public void onRequestPermissionsResult(int requestCode, @NonNull String[] permissions, @NonNull int[] grantResults) {
        super.onRequestPermissionsResult(requestCode, permissions, grantResults);

        if (Build.VERSION.SDK_INT >= 23) {

            // requestPermission의 배열의 index가 아래 grantResults index와 매칭
            // 퍼미션이 승인되면
            if(grantResults.length > 0  && grantResults[0]== PackageManager.PERMISSION_GRANTED){
                //Log.d(TAG,"Permission: "+permissions[0]+ "was "+grantResults[0]);
                // TODO : 퍼미션이 승인되는 경우에 대한 코드
            }
            // 퍼미션이 승인 거부되면
            else {
                //Log.d(TAG,"Permission denied");
                // TODO : 퍼미션이 거부되는 경우에 대한 코드
            }
        }
    }
}
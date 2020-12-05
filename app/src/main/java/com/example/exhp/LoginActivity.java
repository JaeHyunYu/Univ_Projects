package com.example.exhp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.example.exhp.network.NetworkTask;
import com.example.exhp.network.Opcode;

public class LoginActivity extends AppCompatActivity {

    private R r;
    @Override
    protected void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);


        final String url = "http://34.125.181.188/login/login_chk.php";
        // AsyncTask를 통해 HttpURLConnection 수행.
        final ContentValues values = new ContentValues();
        Button login_button = (Button)findViewById(R.id.login);
        Button signup_button = (Button)findViewById(R.id.Signup);
        final EditText user_id = (EditText)findViewById(R.id.user_id_area);
        final EditText password_id = (EditText)findViewById(R.id.register_pw_area);
        final Context appContext = this.getApplicationContext();
        login_button.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        values.put("username", user_id.getText().toString());
                        values.put("password", password_id.getText().toString());
                        NetworkTask networkTask = new NetworkTask(url, values, appContext, Opcode.LoginRequest, "POST");
                        networkTask.execute();
                    }
                });
        signup_button.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        Intent intent = new Intent(appContext, RegisterActivity.class);
                        startActivity(intent);
                    }
                });
    }
}
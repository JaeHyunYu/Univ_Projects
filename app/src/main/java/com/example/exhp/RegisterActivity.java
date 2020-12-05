package com.example.exhp;

import androidx.appcompat.app.AppCompatActivity;

import android.content.ContentValues;
import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.provider.MediaStore;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.ScrollView;

import com.example.exhp.network.NetworkTask;
import com.example.exhp.network.Opcode;

public class RegisterActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        final String url = "http://34.125.181.188/login/register_chk.php";
        final ContentValues values = new ContentValues();
        final EditText user_id = (EditText)findViewById(R.id.register_id_area);
        final EditText user_pw = (EditText)findViewById(R.id.register_pw_area);
        final RadioGroup rg = (RadioGroup)findViewById(R.id.radio_group);


        final ScrollView countries = (ScrollView)findViewById(R.id.countries);

        final Context appContext = this.getApplicationContext();
        Button register_button = (Button)findViewById(R.id.register_btn);
        Button back_button=(Button)findViewById(R.id.back_btn);

        register_button.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        values.put("ID", user_id.getText().toString());
                        values.put("password", user_pw.getText().toString());
                        values.put("stay",0);
                        values.put("gender",0);

                        values.put("form1","none");
                        values.put("form2","none");
                        values.put("form3","none");
                        values.put("form4","none");
                        values.put("form5","none");
                        values.put("form6","none");
                        values.put("form7","none");
                        values.put("form8","none");
                        values.put("form9","none");
                        values.put("form10","none");
                        values.put("form11","none");
                        values.put("form12","none");



                        //values.put("ccode", rg.getCheckedRadioButtonId());
                        RadioButton rb = (RadioButton)findViewById(rg.getCheckedRadioButtonId());
                        System.out.println("test : "+rb.getText().toString());
                        values.put("ccode", rb.getText().toString());
                        System.out.println("country selected : "+countries.getScrollY());
                        NetworkTask networkTask = new NetworkTask(url, values, appContext, Opcode.RegisterRequest, "POST");
                        networkTask.execute();
                    }
                });

        back_button.setOnClickListener(
                new View.OnClickListener() {
                    @Override
                    public void onClick(View view) {
                        Intent intent3 = new Intent(RegisterActivity.this, LoginActivity.class);
                        startActivity(intent3);
                    }
                });
    }


}
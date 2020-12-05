package com.example.exhp;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;

import com.google.android.gms.maps.MapFragment;

public class DocumentsActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        String k = this.getIntent().getExtras().getString("type");
        System.out.println(k);
        switch(k)
        {
            case "d2":
                setContentView(R.layout.d2);
                break;
            case "d3":
                setContentView(R.layout.d3);
                break;
            case "d4":
                setContentView(R.layout.d4);
                break;
            case "d5":
                setContentView(R.layout.d5);
                break;
            case "d6":
                setContentView(R.layout.d6);
                break;
            case "d7":
                setContentView(R.layout.d7);
                break;
            case "d8":
                setContentView(R.layout.d8);
                break;
            case "d9":
                setContentView(R.layout.d9);
                break;
            case "d10":
                setContentView(R.layout.d10);
                break;
            case "d11":
                setContentView(R.layout.d11);
                break;
            case "d12":
                setContentView(R.layout.d12);
                break;
            default:
                break;
        }
    }
}
package com.example.exhp.network;

import android.content.ContentValues;
import android.content.Context;

import androidx.appcompat.app.AppCompatActivity;

import com.google.android.gms.maps.GoogleMap;

public class RequestMap {
    private static String key = "AIzaSyCJi1FOkOJCC3xjjtuZwiS8vG1IIV7JZ8E";
    public static void addLocationMarkRequest(Context appContext, GoogleMap map, String keyword) {
//        if(keyword.equals("인쇄소"))
//        {
//            String url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query="+keyword+"&key="+key;
//            NetworkTask networkTask = new NetworkTask(url, null, appContext, Opcode.LocationRequest, "GET");
//            networkTask.setMap(map);
//            networkTask.execute();
//        }
//        else
        if(keyword.equals("대사관"))
        {
            // TODO : DB에서 나라 코드 가져와서 keyword 앞에 붙여주는 식으로 구현 ㄱㄱ 
            String tmp_embassy; // TODO
            String url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query="+keyword+"&key="+key;
            NetworkTask networkTask = new NetworkTask(url, null, appContext, Opcode.LocationRequest, "GET");
            networkTask.setMap(map);
            networkTask.execute();
        }
        else
        {
            String url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query="+keyword+"&key="+key;
            NetworkTask networkTask = new NetworkTask(url, null, appContext, Opcode.LocationRequest, "GET");
            networkTask.setMap(map);
            networkTask.execute();
        }
    }
}

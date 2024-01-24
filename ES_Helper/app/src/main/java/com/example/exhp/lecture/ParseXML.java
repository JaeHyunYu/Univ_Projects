package com.example.exhp.lecture;

import org.json.JSONObject;

import java.util.ArrayList;

public class ParseXML {
    public static ArrayList<Lecture> parseXMLtoArray(String XMLString) {
        ArrayList res = new ArrayList<Lecture>();
        int cur_pos;

        while ( true ) {
            cur_pos = XMLString.indexOf("<curi_nm>");
            if ( cur_pos == -1 )
                break;
            XMLString = XMLString.substring(cur_pos);
            cur_pos = XMLString.indexOf("<![CDATA[");
            XMLString = XMLString.substring(cur_pos);

            int start_string = 9;
            int end_string = XMLString.indexOf("]]>");

            String curi_nm = XMLString.substring(start_string, end_string);

            cur_pos = XMLString.indexOf("<remark>");
            XMLString = XMLString.substring(cur_pos);
            cur_pos = XMLString.indexOf("<![CDATA[");
            XMLString = XMLString.substring(cur_pos);

            end_string = XMLString.indexOf("]]>");

            String remark = XMLString.substring(start_string, end_string);

            if ( remark.contains("외국인대상강좌") ) {
                Lecture lec = new Lecture(curi_nm);
                lec.setRemark(remark);
                res.add(lec);
            }
        }

        return res;
    }
}

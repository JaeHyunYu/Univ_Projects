package com.example.exhp.lecture;

public class Lecture {
    private String curi_nm, remark;
    public Lecture(String curi_nm) {
        this.curi_nm = curi_nm;
    }

    public String getCuri_nm() {
        return this.curi_nm;
    }

    public String getRemark() {
        return this.remark;
    }

    public void setRemark(String remark) {
        this.remark = remark;
    }

}

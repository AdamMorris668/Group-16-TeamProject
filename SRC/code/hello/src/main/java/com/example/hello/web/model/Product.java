package com.example.hello.web.model;

import org.hibernate.annotations.OnDelete;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.Id;

@Entity
public class Product {
    @Id
    @GeneratedValue
    private Long id;
    private String name;
    private String desc;
    private int price;

    public Long getId() {
        return id;

    }

    public void setId(Long id) {
        this.id = id;

    }

    public String getName() {
        return name;

    }

    public void setName(String name) {
        this.name = name;

    }

    public String getDesc() {
        return desc;

    }

    public void setDesc(String desc) {
        this.desc = desc;

    }

    public int getPrice() {
        return price;

    }

    public void setPrice(int price) {
        this.price = price;

    }

}

package com.ecommerce.entity.enums;

import lombok.Getter;

@Getter
public enum Category {
    MONITOR("Monitor"), KEYBOARD("Keyboard"), MOUSE("Mouse"),
    CAMERA("Camera"), SPEAKER("Speaker");

    private String category;

    Category(String categoryName){
        this.category=categoryName;
    }

    String getCategory(){
        return category;
    }
}

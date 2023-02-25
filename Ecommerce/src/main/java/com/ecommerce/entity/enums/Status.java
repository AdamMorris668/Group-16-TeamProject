package com.ecommerce.entity.enums;

import lombok.Getter;

@Getter
public enum Status {
    INSTOCK("In Stock"), OUTSTOCK("Out Of Stock"), LESSSTOCK("Only few left");

    private String status;
    Status(String productStatus){
        this.status=productStatus;
    }
}

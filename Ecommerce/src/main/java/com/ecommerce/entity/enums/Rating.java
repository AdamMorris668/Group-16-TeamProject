package com.ecommerce.entity.enums;

import lombok.Getter;

@Getter
public enum Rating {
    ONE(1), TWO(2), THREE(3),
    FOUR(4), FIVE(5);

    private Integer rating;

    Rating(Integer RatingName){
        this.rating=RatingName;
    }

    public Integer getRating(){
        return rating;
    }
}
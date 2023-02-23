package com.example.hello.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class addProductController {

    @GetMapping("/addProduct")
    public String greeting(Model model) {
        return "addProduct";
    }

}

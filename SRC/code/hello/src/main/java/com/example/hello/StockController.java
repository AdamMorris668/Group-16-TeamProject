package com.example.hello;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class StockController {

    @GetMapping("/Stock")
    public String greeting(Model model) {
        return "stock";
    }
}

package com.ecommerce.controller;

import com.ecommerce.entity.UserRegistration;
import com.ecommerce.service.UserService;
import com.ecommerce.service.impl.UserServiceImpl;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/register")
public class UserRegistrationController {

	@Autowired
	private UserServiceImpl userService;
	
	@ModelAttribute("user")
	public UserRegistration userRegistration() {
		return new UserRegistration();
	}

	@GetMapping
	public String showRegistrationForm() {
		return "register";
	}

	@PostMapping
	public String registerUserAccount(@ModelAttribute("user")  UserRegistration userRegistration ) {
		userService.save(userRegistration);
		return "redirect:/shop";
	}
	
}

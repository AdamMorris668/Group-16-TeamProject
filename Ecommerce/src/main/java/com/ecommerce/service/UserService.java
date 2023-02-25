package com.ecommerce.service;

import com.ecommerce.entity.User;
import com.ecommerce.entity.UserRegistration;
import org.springframework.security.core.userdetails.UserDetailsService;

public interface UserService extends UserDetailsService{

    User save(UserRegistration userRegistration);

}

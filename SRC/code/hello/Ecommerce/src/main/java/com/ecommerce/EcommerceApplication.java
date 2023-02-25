package com.ecommerce;

import com.ecommerce.entity.User;
import com.ecommerce.repository.UserRepository;
import org.modelmapper.ModelMapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;

@SpringBootApplication
public class EcommerceApplication implements CommandLineRunner {

    @Autowired
    private UserRepository userRepository;

    @Bean
    public ModelMapper modelMapper() {
        return new ModelMapper();
    }

    public static void main(String[] args) {
        SpringApplication.run(EcommerceApplication.class, args);
    }

    @Override
    public void run(String... args) throws Exception {
        if(userRepository.findByUsername("admin").isEmpty()){
            User user = new User();
            user.setFirstName("Admin");
            user.setUsername("admin");
            user.setPassword(new BCryptPasswordEncoder().encode("123456"));
            user.setRole("ADMIN");
            this.userRepository.save(user);
        }
    }
}

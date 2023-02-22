package com.example.hello.Config;

import org.springframework.web.servlet.config.annotation.WebMvcConfigurer;
import org.springframework.web.servlet.i18n.LocaleChangeInterceptor;
import org.springframework.context.annotation.Configuration;
import org.springframework.web.servlet.config.annotation.DefaultServletHandlerConfigurer;
import org.springframework.web.servlet.config.annotation.EnableWebMvc;
import org.springframework.web.servlet.config.annotation.InterceptorRegistry;
import org.springframework.web.servlet.config.annotation.ResourceHandlerRegistry;
import org.springframework.web.servlet.config.annotation.ViewControllerRegistry;

@Configuration
@EnableWebMvc
public class MvcConfig implements WebMvcConfigurer {

    public MvcConfig() {

        super();

    }

    @Override
    public void addViewControllers(final ViewControllerRegistry r) {
        r.addViewController("/adminHome.html").setViewName("adminHome");

    }

    @Override
    public void addResourceHandlers(final ResourceHandlerRegistry r) {
        r.addResourceHandler("/images/**",
                "/css/**",
                "/js/**").addResourceLocations("classpath:/static/images/",
                        "classpath:/static/css/",
                        "classpath:/static/js/");

    }

    @Override
    public void configureDefaultServletHandling(final DefaultServletHandlerConfigurer c) {

        c.enable();

    }

    @Override
    public void addInterceptors(final InterceptorRegistry r) {

        final LocaleChangeInterceptor l = new LocaleChangeInterceptor();
        r.addInterceptor(l);

    }

}
package com.ecommerce.service.impl;

import com.ecommerce.entity.Order;
import com.ecommerce.repository.OrderRepo;
import com.ecommerce.repository.UserRepository;
import com.ecommerce.service.OrderService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class OrderServiceImpl implements OrderService {

    @Autowired
    private UserRepository userRepository;

    @Autowired
    private OrderRepo orderRepo;
    @Override
    public List<Order> getOrders() {
        List<Order> all = this.orderRepo.findAll();
        return all;
    }

    @Override
    public Optional<Order> getOrder(Integer id) {
        return orderRepo.findById(id);
    }

    @Override
    public Order markStatus(Integer id) {
        Order order = orderRepo.findById(id).get();
        if(order.getDeliveryStatus())
            order.setDeliveryStatus(false);
        else
            order.setDeliveryStatus(true);
        return orderRepo.save(order);
    }

    @Override
    public void deleteOrder(Integer id) {
        orderRepo.deleteById(id);
    }
}

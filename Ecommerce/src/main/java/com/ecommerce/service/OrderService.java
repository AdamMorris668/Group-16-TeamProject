package com.ecommerce.service;

import com.ecommerce.entity.Order;

import java.util.List;
import java.util.Optional;

public interface OrderService {

    List<Order> getOrders();

    Optional<Order> getOrder(Integer id);

    Order markStatus(Integer id);

    void deleteOrder(Integer id);
}

package com.ecommerce.repository;

import com.ecommerce.entity.OrderItem;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface OrderItemRepo extends JpaRepository<OrderItem,Integer> {

    @Modifying
    @Query("DELETE FROM OrderItem WHERE product.id= :id")
    void deleteByProductId(@Param("id") Integer id);
}

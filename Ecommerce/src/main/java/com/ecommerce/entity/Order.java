package com.ecommerce.entity;

import lombok.*;

import javax.persistence.*;
import java.util.Date;
import java.util.HashSet;
import java.util.Set;

@Entity
@Table(name = "orders")
@Getter
@Setter
@NoArgsConstructor
public class Order {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;

    private Date orderCreated;

    private Double totalAmount;

    @Column(columnDefinition = "boolean default false")
    private Boolean deliveryStatus;

    @OneToMany(mappedBy = "order",fetch = FetchType.EAGER,cascade = CascadeType.ALL, orphanRemoval = true)
    Set<OrderItem> items = new HashSet<>();

    @OneToOne(fetch = FetchType.LAZY)
    private User user;


}

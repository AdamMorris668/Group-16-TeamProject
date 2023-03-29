package com.ecommerce.controller;

import com.ecommerce.entity.*;
import com.ecommerce.entity.enums.Category;
// -----------------------------------------------------
import com.ecommerce.entity.enums.Rating;
// -----------------------------------------------------
import com.ecommerce.repository.OrderItemRepo;
import com.ecommerce.repository.ProductRepo;
import com.ecommerce.repository.UserRepository;
import com.ecommerce.service.OrderService;
import com.ecommerce.service.impl.UserServiceImpl;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.multipart.MultipartFile;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.security.Principal;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.stream.Collectors;

@Controller
public class UserController {

    public static String uploadDir = System.getProperty("user.dir") + "/src/main/resources/static/productImages";

    @Autowired
    private BCryptPasswordEncoder bCryptPasswordEncoder;

    @Autowired
    private UserServiceImpl userService;

    @Autowired
    private OrderItemRepo orderItemRepo;

    @Autowired
    private OrderService orderService;

    @Autowired
    private UserRepository userRepo;

    @Autowired
    private ProductRepo productRepo;

    @GetMapping("/adminLogin")
    public String login() {
        return "adminLogin";
    }

    @GetMapping("/")
    public String home(Principal principal) {
        String username = principal.getName();
        UserDetails details = userService.loadUserByUsername(username);
        return "redirect:/admin/home/0";

    }

    @GetMapping("/home")
    public String home2(Model m) {
        return "adminShop";
    }

    @GetMapping("/adminShop")
    public String home(Model m) {
        Map<Integer, String> map = new HashMap<>();
        map.put(1, Category.MONITOR.name());
        map.put(2, Category.KEYBOARD.name());
        map.put(3, Category.MOUSE.name());
        map.put(4, Category.CAMERA.name());
        map.put(5, Category.SPEAKER.name());

        m.addAttribute("categories", map);
        m.addAttribute("products", productRepo.findAll());

        return "adminShop";
    }

    @GetMapping("/adminShop/category/{id}")
    public String viewByCategory(Model m, @PathVariable("id") Integer id, Principal principal) {
        String username = principal.getName();
        User user = userRepo.findByUsername(username).orElseThrow();

        Map<Integer, String> map = new HashMap<>();
        map.put(1, Category.MONITOR.name());
        map.put(2, Category.KEYBOARD.name());
        map.put(3, Category.MOUSE.name());
        map.put(4, Category.CAMERA.name());
        map.put(5, Category.SPEAKER.name());

        m.addAttribute("categories", map);
        String category = map.get(id);
        m.addAttribute("products", productRepo.findByCategory(category));

        return "adminShop";
    }

    @GetMapping("/adminShop/normal/category/{id}")
    public String viewByCategoryNormal(Model m, @PathVariable("id") Integer id) {
        Map<Integer, String> map = new HashMap<>();
        map.put(1, Category.MONITOR.name());
        map.put(2, Category.KEYBOARD.name());
        map.put(3, Category.MOUSE.name());
        map.put(4, Category.CAMERA.name());
        map.put(5, Category.SPEAKER.name());

        m.addAttribute("categories", map);
        String category = map.get(id);
        m.addAttribute("products", productRepo.findByCategory(category));

        return "adminShop";
    }

    @GetMapping("/adminShop/viewproduct/{id}")
    public String viewProduct(Model m, @PathVariable("id") Integer id, Principal principal) {
        String username = principal.getName();
        User user = userRepo.findByUsername(username).orElseThrow();

        Product product = productRepo.findById(id).orElseThrow();
        m.addAttribute("product", product);
        return "viewProduct";
    }

    @GetMapping("/adminShop/normal/viewproduct/{id}")
    public String viewProduct(Model m, @PathVariable("id") Integer id) {
        Product product = productRepo.findById(id).orElseThrow();
        m.addAttribute("product", product);
        return "viewProduct";
    }


@GetMapping("/admin/home/{id}")
public String adminHome(Model m, @PathVariable("id") Integer id) {
    Map<Integer, String> map = new HashMap<>();
    map.put(1, Category.MONITOR.name());
    map.put(2, Category.KEYBOARD.name());
    map.put(3, Category.MOUSE.name());
    map.put(4, Category.CAMERA.name());
    map.put(5, Category.SPEAKER.name());

    Map<Integer, String> RMap = new HashMap<>();
    RMap.put(6, Rating.ONE.name());
    RMap.put(7, Rating.TWO.name());
    RMap.put(8, Rating.THREE.name());
    RMap.put(9, Rating.FOUR.name());
    RMap.put(10, Rating.FIVE.name());

    m.addAttribute("categories", map);
    m.addAttribute("ratings", RMap);

    if (id == 0) {
        m.addAttribute("products", productRepo.findAll());
    } else if (id >= 1 && id <= 5) {
        String category = map.get(id);
        m.addAttribute("products", productRepo.findByCategory(category));
    } else if (id >= 6 && id <= 10) {
        String rating = RMap.get(id);
        m.addAttribute("products", productRepo.findByRating(Rating.valueOf(rating).getRating()));
    } else {
  
    }

    return "products";
}

// ----------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------
 
    @GetMapping("/admin/products/add")
    public String productsAddGet(Model m) {
        Map<Integer, String> map = new HashMap<>();
        map.put(1, Category.MONITOR.name());
        map.put(2, Category.KEYBOARD.name());
        map.put(3, Category.MOUSE.name());
        map.put(4, Category.CAMERA.name());
        map.put(5, Category.SPEAKER.name());

        m.addAttribute("categories", map);
        m.addAttribute("productDTO", new Product());
        return "productsAdd";
    }

    @PostMapping("/admin/products/add")
    public String productsAddPost(@ModelAttribute("productDTO") Product productDto,
            @RequestParam("productImage") MultipartFile file,
            @RequestParam("imgName") String imgName) throws IOException {

        Product product = new Product();
        product.setId(productDto.getId());
        product.setName(productDto.getName());
        product.setCategory(productDto.getCategory());
        product.setDescription(productDto.getDescription());
        product.setPrice(productDto.getPrice());
        product.setQuantity(productDto.getQuantity());

        String imageUUID;
        if (!file.isEmpty()) {
            imageUUID = file.getOriginalFilename();
            Path fileNameAndPath = Paths.get(uploadDir, imageUUID);
            Files.write(fileNameAndPath, file.getBytes());
        } else {
            imageUUID = imgName;
        }
        product.setImageName(imageUUID);
        productRepo.save(product);
        return "redirect:/admin/home/0";
    }

    @GetMapping("/admin/product/delete/{id}")
    public String productDelete(@PathVariable("id") Integer id) {
        orderItemRepo.deleteByProductId(id);
        productRepo.deleteById(id);
        return "redirect:/admin/home/0";
    }

    @GetMapping("/orders")
    public String orders(Model m) {
        m.addAttribute("orders", orderService.getOrders());
        return "orders";
    }

    @GetMapping("/vieworder/{id}")
    public String viewOrderDetails(Model m, @PathVariable("id") Integer id) {
        User user = orderService.getOrder(id).get().getUser();
        Map<String, Integer> map = orderService.getOrder(id).get().getItems().stream()
                .collect(Collectors.toMap(i -> i.getProduct().getName(), i -> i.getProduct().getQuantity()));
        m.addAttribute("parameters", map);
        m.addAttribute("id", id);
        m.addAttribute("user", user);
        m.addAttribute("total",
                orderService.getOrder(id).get().getItems().stream().mapToDouble(i -> i.getProduct().getPrice()).sum());
        return "viewOrder";
    }

    @GetMapping("/markorder/{id}")
    public String markOrder(Model m, @PathVariable("id") Integer id) {
        Order order = orderService.markStatus(id);
        return "redirect:/orders";
    }

    @GetMapping("/order/delete/{id}")
    public String deleteOrder(Model m, @PathVariable("id") Integer id) {
        orderService.deleteOrder(id);
        return "redirect:/orders";
    }

    @GetMapping("/admin/product/update/{id}")
    public String productsUpdateGet(Model m, @PathVariable("id") Integer id) {
        Map<Integer, String> map = new HashMap<>();
        map.put(1, Category.MONITOR.name());
        map.put(2, Category.KEYBOARD.name());
        map.put(3, Category.MOUSE.name());
        map.put(4, Category.CAMERA.name());
        map.put(5, Category.SPEAKER.name());

        m.addAttribute("categories", map);
        Product productDTO = productRepo.findById(id).orElseThrow();
        m.addAttribute("productDTO", productDTO);

        return "productsAdd";
    }

    @PostMapping("/admin/product/update/{id}")
    public String productsUpdatePost(Model m) {
        return "redirect:/admin/home/0";
    }
}

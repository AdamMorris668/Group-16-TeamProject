class Item {
    constructor(name, price) {
      this.name = name;
      this.price = price;
    }
  
    getName() {
      return this.name;
    }
  
    getPrice() {
      return this.price;
    }
  
    toString() {
      return this.name + " (£" + this.price + ")";
    }
  }
  
  class ShoppingCart {
    constructor() {
      this.items = [];
      this.totalPrice = 0.0;
    }
  
    addItem(item) {
      this.items.push(item);
      this.totalPrice += item.getPrice();
    }
  
    removeItem(index) {
      const item = this.items[index];
      this.items.splice(index, 1);
      this.totalPrice -= item.getPrice();
    }
  
    displayCart() {
      let output = "<h2>=== Shopping Cart ===</h2>";
      for (let i = 0; i < this.items.length; i++) {
        output += "<p>" + (i + 1) + ") " + this.items[i].toString() + "</p>";
      }
      output += "<p>Total price: £" + this.totalPrice + "</p>";
      document.getElementById("cart").innerHTML = output;
    }
  }
  
  const cart = new ShoppingCart();
  
  function addItem() {
    const name = prompt("Enter item name:");
    const price = Number(prompt("Enter item price:"));
    const item = new Item(name, price);
    cart.addItem(item);
    cart.displayCart();
  }
  
  function removeItem() {
    const index = Number(prompt("Enter item number to remove:")) - 1;
    cart.removeItem(index);
    cart.displayCart();
  }
  
  document.addEventListener("DOMContentLoaded", () => {
    cart.displayCart();
  });
  
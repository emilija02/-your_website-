$(document).ready(function() {

    // Define Product class
    class Product {
      constructor(sku, name, price) {
        this.sku = sku;
        this.name = name;
        this.price = price;
      }
  
      get type() {
        return null;
      }
  
      get attributes() {
        return null;
      }
  
      validate() {
        return true;
      }
  
      toTableRow() {
        return `<tr><td>${this.sku}</td><td>${this.name}</td
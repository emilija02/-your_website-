<form id="product_form" method="POST">
  <div>
    <label for="sku">SKU:</label>
    <input type="text" id="sku" name="sku" required>
  </div>
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
  </div>
  <div>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" min="0" step="0.01" required>
  </div>
  <div>
    <label for="productType">Product type:</label>
    <select id="productType" name="productType">
      <option value="dvd">DVD</option>
      <option value="book">Book</option>
      <option value="furniture">Furniture</option>
    </select>
  </div>
  <div id="dvdFields" class="productFields">
    <div>
      <label for="size">Size (MB):</label>
      <input type="number" id="size" name="size">
      <span class="fieldDescription">Please, provide size (MB).</span>
    </div>
  </div>
  <div id="bookFields" class="productFields">
    <div>
      <label for="weight">Weight (Kg):</label>
      <input type="number" id="weight" name="weight">
      <span class="fieldDescription">Please, provide weight (Kg).</span>
    </div>
  </div>
  <div id="furnitureFields" class="productFields">
    <div>
      <label for="height">Height (CM):</label>
      <input type="number" id="height" name="height">
    </div>
    <div>
      <label for="width">Width (CM):</label>
      <input type="number" id="width" name="width">
    </div>
    <div>
      <label for="length">Length (CM):</label>
      <input type="number" id="length" name="length">
    </div>
    <span class="fieldDescription">Please, provide dimensions (HxWxL).</span>
  </div>
  <button type="submit" name="submit" id="saveButton">Save</button>
  <button type="button" id="cancelButton">Cancel</button>
</form>
<div id="notification"></div>
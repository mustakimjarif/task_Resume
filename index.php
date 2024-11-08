<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>

    <h2>Add Product</h2>
    <form action="resume.php" method="post" novalidate>
        <!-- Product Information & Details -->
         <fieldset>
        <fieldset>
            <legend>Product Information & Details</legend>

            <label for="productName">Product Name:</label><br>
            <input type="text" id="productName" name="productName" placeholder="Product Name"><br><br>

            <label for="category">Category:</label><br>
            <select id="category" name="category">
                <option>Select Category</option>
                <option>Category 1</option>
                <option>Category 2</option>
                <!-- Add more categories as needed -->
            </select><br><br>

            <label for="price">Price (USD):</label><br>
            <input type="number" id="price" name="price" step="0.01" value="0.00"><br><br>

            <label for="sku">SKU (Stock Keeping Unit):</label><br>
            <input type="text" id="sku" name="sku" placeholder="Unique SKU"><br><br>

            <label for="stockQuantity">Stock Quantity:</label><br>
            <input type="number" id="stockQuantity" name="stockQuantity" min="0" value="0"><br><br>

            <label for="productImage">Product Image:</label><br>
            <input type="file" id="productImage" name="productImage"><br><br>

            <label for="colors">Available Colors:</label>
            <select id="colors" name="colors">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
            </select> <br> <br>


            <label for="description">Description:</label><br>
            <textarea id="description" name="description" rows="4" cols="50" placeholder="Detailed description of the product"></textarea><br><br>

            <label for="brand">Brand:</label><br>
            <input type="text" id="brand" name="brand" placeholder="Brand Name"><br><br>

            <label for="weight">Weight (kg):</label><br>
            <input type="number" id="weight" name="weight" step="0.01" value="0.00"><br><br>
        </fieldset>

        <!-- Additional Information & Settings -->
        <fieldset>
            <legend>Additional Information & Settings</legend>

            <label>Available Online:</label><br>
            <input type="radio" id="availableYes" name="availableOnline" value="Yes"> Yes
            <input type="radio" id="availableNo" name="availableOnline" value="No"> No<br><br>

            <label>Discount Available:</label><br>
            <input type="checkbox" id="discountYes" name="discountAvailable" value="Yes"> Yes
            <input type="checkbox" id="discountYes" name="discountAvailable" value="No"> No<br><br>
            

            <label for="launchDate">Launch Date:</label><br>
            <input type="date" id="launchDate" name="launchDate"><br><br>

            <label for="customerRating">Customer Rating:</label><br>
            <input type="range" id="customerRating" name="customerRating" min="1" max="5" step="1"><br><br>

            <label for="tags">Tags:</label><br>
            <input type="text" id="tags" name="tags" placeholder="e.g., trending, bestseller"><br><br>
        </fieldset>

        <button type="submit">Create Product</button>
        <button type="reset">Clear Form</button>
        </fieldset>
    </form>
</body>
</html>

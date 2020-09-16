<?php
session_start();
include '../php/connection.php';
require "../components/header.php";
?>

<body>
    <div id="products-header"></div>
    <div class="products-catalog">
        <?php
        // If ADMIN => Show ADD Product Form
        if (isset($_SESSION['adminId'])) {
        ?>
            <!-- ADD PRODUCT Form -->
            <form id="addProductContainer" action="../php/products/createProduct.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="productName" placeholder="Product Name" id="productName" />
                <input type="number" name="productPrice" placeholder="Price" id="productPrice" />
                <input type="file" name="productImage" accept="image/png, image/jpeg" onChange="handleChangeImagePreview(event)"/>
                <div class="imagePreview-container">
                    <img id="image_preview" />
                </div>
                <button type="submit" name="addProduct_submit">
                    Add New Product
                </button>
            </form>

        <?php } ?>

        <?php
        $sql = "SELECT product_name, product_price, product_image FROM products;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
        ?>
            
            <div class="container mt-5">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        $image = $row['product_image'];
                    ?> 
                    <div id="productContainer" class="col-6 col-sm-4 col-md-3">
                    <a href="productPage.php">
                            <img id="product-image" src="http://localhost:8080/MURPHY/product_images/<?php echo $image ?>" alt="<?php echo $row['product_name'] ?>" />
                            <div id="product-name">
                                <p><?php echo $row['product_name']; ?></p>
                            </div>
                            <div id="product-price">
                                <p><?php echo "$", $row['product_price']; ?></p>
                            </div>
                    </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        <?php } ?>

        <!-- if ($resultCheck > 0)
        while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['product_image'];
        ?>
        <div class="product-image-container"><img id="product-image" src="http://localhost:8080/murphy/uploads/" /></div>
    
    </div>

    </div>
    ?> -->
    </div>
</body>
<?php
if (isset($_POST['addProduct_submit'])) {
    require '../connection.php';

    // Input Field Values
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_FILES['productImage'];

    // Validating input fields
    if (empty($productName) || empty($productPrice) || empty($productImage['name'])) {
        header("Location: ../../pages/products.php?error=emptyfields");
        echo "Input fields must not be empty";
        exit();
    }

    // Accessing ProductImage Specifications
    $imageFileName = $productImage['name'];
    $imageTempName = $productImage['tmp_name'];
    $imageSize = $productImage['size'];
    $imageError = $productImage['error'];
    $imageType = $productImage['type'];

    // Get ProductImage's Extension
    $fileExt = explode('.', $imageFileName);
    $fileActualExt = strtolower(end($fileExt));

    // Check file extension is valid
    $allowed = array('jpg', 'jpeg', 'png');
    if (!in_array($fileActualExt, $allowed)) header("Location: ../../pages/products.php?error=invalidFileType");
    else if ($imageError !== 0) header("Location: ../../pages/products.php?error=serverError");
    else if ($imageSize > 500000) header("Location: ../../pages/products.php?error=fileSizeTooBig");
    else {
        // Set new filename for the image to be stored
        $imageFileNameNew = time() . "." . $fileActualExt;
        $fileDestination = '../../product_images/'.$imageFileNameNew;
        // @params: temp location of the file, and the new file destination where to be stored
        // STORE ProductImage on static '.uploads/' folder

        if(!move_uploaded_file($imageTempName, $fileDestination)) {
            header("Location: ../../pages/products.php?error=moveUploadedFileError");
            exit();
        }

        // Add Product into Database...
        $sql = "INSERT INTO products (product_name, product_price, product_image) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) exit();
        mysqli_stmt_bind_param($stmt, "sss", $productName, $productPrice, $imageFileNameNew);
        mysqli_stmt_execute($stmt);

        // Successfully addded product to Database
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header("Location: ../../pages/products.php?success");
    } 
}

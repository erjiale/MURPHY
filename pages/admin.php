<?php
session_start();
include '../php/connection.php';
require "../components/header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/admin.css" type="text/css"/>
        <script src="../js/admin.js"></script>
    </head>
    <body>  
        <div id="header"></div>
        <div id="welcomeText">
            <h1>Welcome ADMIN</h1>
        </div>
        <div id="selectionContainer">
            <ul>
                <li onclick="product()">Add Product</li>
                <li onclick="view()">View/Update</li>
            </ul>
        </div>
        <div id="viewContentContainer">
            <div id="addProduct">
                <p>Add Products</p>
                <div id ="productInsert">
                    <form action="">
                    <div id="productInsertLeft">
                    <input type="text" name="productName" placeholder="Product Name" id="productInput">
                    <input type="text" name="productPrice" placeholder="Price" id="productPrice">
                    </div>
                    <div id="productInsertRight">
                    <button id="uploadImagebtn" onclick="document.getElementById('imageSelection').click(); return false;"><span>Add</span></button>
                    <input id="imageSelection" type="file" name="productImage" accept="image/png, image/jpeg" onChange="handleChangeImagePreview(event)"/>
                    <div class="displayProductImage"></div>
                    </div>
                    </form>
                </div>
            </div>
            <div id="viewUpdate">
                <p>View/Update Products</p>
            </div>
        </div>
    </body>
</html>
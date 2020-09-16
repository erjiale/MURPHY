<?php
    require "../components/header.php";
    ?>

<body>

    <div id="products-header"></div>
    <div class="container single-product">
        <div class="row">
            <div class="col-12 col-md-4 p-0">
                <img src="../images/test-img2.jpg" width="100%;" alt="product" />
                <div class=“small-img-row>
                    <div class="small-img-col">
                        <img src="../images/header-bg.jpg" width="100%;" />
                    </div>
                    <div class="small-img-col">
                        <img src="../images/header-bg.jpg" width="100%;" />
                    </div>
                    <div class="small-img-col">
                        <img src="../images/header-bg.jpg" width="100%;" />
                    </div>
                    <div class="small-img-col">
                        <img src="../images/header-bg.jpg" width="100%;" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <p>Home / T-Shirt</p>
                <h1>{{Product Name}}</p>
                <h4>$ {{Product Price}}</p>
                <select>
                    <option>Select Size</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <input type="number" value="1" />
                    <a href="" class="btn btn-primary">Add To Cart</a>

                    <h3>Product Details <i class="fa fa-indent"></i></p>
                    <p>bUENO, bONITO, Y bARATO !!! </p>
                    <p>bUENO, bONITO, Y bARATO !!! </p>
                    <p>bUENO, bONITO, Y bARATO !!! </p>
                    <p>bUENO, bONITO, Y bARATO !!! </p>
                    <p>bUENO, bONITO, Y bARATO !!! </p>
                </select>
            </div>
        </div>
    </div>
</body>

<?php
    require "../components/footer.php";
    ?>
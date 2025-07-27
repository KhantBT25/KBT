<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php include('css.php'); ?>

</head>

<body>

    <?php include('connection.php'); ?>

    <?php include('header.php'); ?>

    <?php include('navbar.php'); ?>

    <!-- heading section start -->

    <section class="heading">
        <h3>our shop</h3>
        <p><a href="index.php">home</a> / <span>shop</span></p>
    </section>

    <!-- heading section end -->


    <!-- category section start -->

    <section class="category">
        <h1 class="title"> <span>our categories</span> <a href="category_create.php" class="btn title-btn">Add new category</a> </h1>

        <div class="box-container">

            <a href="#" class="box">
                <img src="image/icon-1.png" alt="">
                <h3>house sofa</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-2.png" alt="">
                <h3>working table</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-3.png" alt="">
                <h3>corner table</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-4.png" alt="">
                <h3>office chair</h3>
            </a>

            <a href="#" class="box">
                <img src="image/icon-5.png" alt="">
                <h3>new wardrobe</h3>
            </a>

        </div>
    </section>

    <!-- category section end -->


    <!-- products section start -->

    <section class="products">
        <h1 class="title"> <span>our products</span> <button onclick="window.location.href='product_create.php'" class="btn title-btn">Add new product</button></h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-1.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-2.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-3.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-4.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-5.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-6.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-7.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="ri-shopping-cart-line"></a>
                    <a href="#" class="ri-heart-line"></a>
                    <a href="#" class="ri-eye-line"></a>
                </div>
                <div class="image">
                    <img src="image/product-8.png" alt="">
                </div>
                <div class="content">
                    <div class="price">$140.00</div>
                    <h3>modern furniture</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- products section end -->

    <?php include('footer.php'); ?>

    <?php include('js.php'); ?>

</body>

</html>
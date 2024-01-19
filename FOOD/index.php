<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="img/logo.png" height="50px" width= "90px" alt="Restaurant Logo" >
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <!-- <li>
                        <a href="index_main.html">Home</a>
                    </li> -->
                    <li>
                        <a href="categories.php">Food Categories</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="about_us.php">About Us</a>
                    </li>
                    <li>
                        <a href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <div class="box-3 float-container">
                <img src="img/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>

            <div class="box-3 float-container">
                <img src="img/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>

            <div class="box-3 float-container">
                <img src="img/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            <div class="box-3 float-container">
                <img src="img/biriyani.jpeg" alt="biriyani" class="img-responsive img-curve">

                <h3 class="float-text text-white">Biriyani</h3>
            </div>
            <div class="box-3 float-container">
                <img src="img/KathiRoll.jpg" alt="KathiRoll" class="img-responsive img-curve">

                <h3 class="float-text text-white">KathiRoll</h3>
            </div>
            <div class="box-3 float-container">
                <img src="img/TandooriChicken.jpg" alt="TandooriChicken" class="img-responsive img-curve">

                <h3 class="float-text text-white">Tandoori Chicken</h3>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Appetizers.jpg" alt="Indian Appetizers" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>INDIAN APPETIZERS</h4>
                    <p class="food-price">
                        &#8377 30-50</p>
                    <p class="food-detail">
                        Bhaji, Samosa, Vada Pav etc.
                    </p>
                    <br>

                    <a href="categories.php#appetizers" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/IndianBread.jpg" alt="IndianBread" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Indian Bread</h4>
                    <p class="food-price">&#8377 40-90</p>
                    <p class="food-detail">
                        Naan, Roti, Poori, Paratha etc.
                    </p>
                    <br>

                    <a href="categories.php#bread" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/INDIANMEALS.jpg" alt="INDIANMEALS" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>INDIAN MEALS</h4>
                    <p class="food-price">&#8377 40-70</p>
                    <p class="food-detail">
                        Tikka Masala, Chana Masala etc.
                    </p>
                    <br>

                    <a href="categories.php#meal" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/Indian-Chai.jpg" alt="Indian-Chai" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Indian Drinks</h4>
                    <p class="food-price">&#8377 15-30</p>
                    <p class="food-detail">
                        Falooda, Lassi, Chas etc.
                    </p>
                    <br>

                    <a href="categories.php#drink" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/INDIANDESSERTS.jpg" alt="INDIANDESSERTS" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>INDIAN DESSERTS</h4>
                    <p class="food-price">&#8377 50-140</p>
                    <p class="food-detail">
                        Gulab Jamun, Halwa, Barfi etc.
                    </p>
                    <br>

                    <a href="categories.php#dessert" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/other.jpg" alt="other" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>other</h4>
                    <p class="food-price">&#8377 60-170</p>
                    <p class="food-detail">
                        Chaat, Idli, Dosa, Tadka etc.
                    </p>
                    <br>

                    <a href="categories.php#other" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>

    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. <a href="#"></a></p>
        </div>
    </section>


</body>
</html>
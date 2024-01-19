<?php
session_start();
// echo "Welcome " . $_SESSION['data']['Name'];
// echo "row :" . $_SESSION['data'];
// echo "row: " . $_SESSION['data'][0];
// print_r($_SESSION['data']['Name']);

include("connect.php");
error_reporting(0);
$userMobile = $_SESSION['mobile'];
if ($userMobile == true) {

    // header('location:login.php');
} else {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
    <title>Food Website</title>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/categories.css">
</head>
<body>

    <!-- desktop view -->
    <section class="navbar">
        <div class="container2">
            <div class="logo">
                <a href="index.php" title="Logo">
                    <img src="img/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <!-- <li>
                        <a href="foods.html">Cart</a>
                    </li> -->
                    <li>
                        <a href="contact_us.php">Contact</a>
                    </li>
                    <!-- <li>
                        <a href="login.html">Login</a>
                    </li> -->
                    <li id="user">
                            <i class="fa fa-user" aria-hidden="true" height="10px" width="10px"></i>
                        <select id="prof" onchange="location = this.value;">  
                            <option id="op1">
                                <a href="#">
                                    <?php echo $_SESSION['data']['Name']; ?>
                                </a>
                            </option>
                            <option value="logout.php" id="op2">   
                                <a href="logout.php">
                                    Log out
                                </a>
                            </option> 
                        </select>        
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <div class="container" id="container">
        <div id="menu">
            <!-- <div class="title">
                <img src="/images/foodie hunter.png" alt="">
            </div> -->
            <div class="menu-item">
                <a href="#">Your Orders</a>
                <a href="#">Wishlists</a>
                <a href="about_us.php">About us</a>

            </div>
        </div>

        <div id="food-container">
            <div id="header">
                <div class="add-box">
                    <i class="fa fa-map-marker your-address" id="add-address"> <?php echo $_SESSION['data']['address']; ?></i>
                </div>
                <div class="util">
                    <i class="fa fa-search"> Search</i>
                    <i class="fa fa-tags"> Offers</i>
                    <i class="fa fa-cart-plus" id="cart-plus"> 0 Items</i>
                </div>
            </div>
            <div id="food-items" class="d-food-items">
                <div id="appetizers" class="d-appetizers">
                    <p id="category-name">Indian Appetizers</p>    
                </div>

                <div id="bread" class="d-bread">
                    <p id="category-name">Indian Breads</p>    
                </div>

                <div id="meal" class="d-meals">
                    <p id="category-name">Indian Meals</p>
                </div>

                <div id="drink" class="d-drink">
                    <p id="category-name">Indian Drinks</p> 
                </div>

                <div id="dessert" class="d-dessert">
                    <p id="category-name">Indian Desserts</p> 
                </div>

                <div id="other" class="d-other">
                    <p id="category-name">Others</p>
                </div>
            </div>

            <div id="cart-page" class="cart-toggle">
                <p id="cart-title">Cart Items</p>
                <p id="m-total-amount">Total Amout : 100</p>
                <table>
                    <thead>
                        <td>Item</td>
                        <td>Name</td>
                        <td>Quantity</td>
                        <td>Price</td>
                    </thead>
                    <tbody id="table-body">
                        
                    </tbody>
                </table>
                <!-- <div class="btn-box">
                    <button class="cart-btn">Checkout</button>
                </div> -->
            </div>
        </div>

        <div id="cart">
            <!-- <div class="taste-header">
                <div class="user">
                    <i class="fa fa-user-circle" id="circle"> Account</i>
                    
                </div>
            </div> -->
            <div id="category-list">
                <p class="item-menu">Go For Hunt</p>
                <div class="border"></div>                
            </div>
            <div id="checkout" class="cart-toggle">
                <p id="total-item">Total Item : 5</p>
                <p id="total-price"></p>
                <p id="delievery">Free delievery on ₹ 200</p>
                <button class="cart-btn">
                    <a href="checkout.php">
                        Checkout
                    </a>
                </button>
            </div>
        </div>
    </div>


    <!-- mobile view -->
    <div id="mobile-view" class="mobile-view">
        <div class="mobile-top">
            <div class="logo-box">
                <img src="/images/foodielogo.png" alt="" id="logo">
                <i class="fa fa-map-marker your-address" id="m-add-address"> <?php echo $_SESSION['data']['address']; ?></i>
            </div>
            <div class="top-menu">
                <i class="fa fa-search"></i>
                <i class="fa fa-tag"></i>
                <i class="fa fa-heart-o"></i>
                <i class="fa fa-cart-plus" id="m-cart-plus"> 0</i>
            </div>
        </div>
        
        <div class="item-container">
            <div class="category-header" id="category-header">  
            </div>

            <div id="food-items" class="food-items">
                <div id="appetizers" class="m-appetizers">
                    <p id="category-name">Indian Appetizers</p>    
                </div>
                <div id="bread" class="m-bread">
                    <p id="category-name">Indian Breads</p>    
                </div>
                <div id="meal" class="m-meals">
                    <p id="category-name">Indian Meals</p>
                </div>
                <div id="drink" class="m-drink">
                    <p id="category-name">Indian Drinks</p> 
                </div>
                <div id="dessert" class="m-dessert">
                    <p id="category-name">Indian Desserts</p> 
                </div>
                <div id="other" class="m-other">
                    <p id="category-name">Others</p>
                </div>
            </div>            
        </div>

        <div class="mobile-footer">
            <p>Home</p>
            <p>Cart</p>
            <p>offers</p>
            <p>orders</p>
        </div>
    </div>
    <script src="js/index.js" type="module"></script>
</body>
</html>

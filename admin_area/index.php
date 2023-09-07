<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="../css/styles.css" />
    <title>ecommerce Website</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <p>Order Online Or Call Us: (001) 2222-55555</p>
          <ul class="d-flex">
            <li><a href="#">About Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center container d-flex">
            <a href="../index.html" class="logo"><h1>Shopzz</h1></a>
            <h3 class="welcome-note">Welcome Admin</h3>
        </div>
        <hr>
    </div>

    <section class="main-container">
      <h1 class="main-heading">Manage Details</h1>
      <div class="columns">
        <div class="profile">
          <img class="admin-image" src="../images/shopping-online.png" alt="This is Admin's profile" width="100px" height="100px">
          <p class="admin-name">Admin's Name</p>
        </div>
        <div class="tabs">
          <button><a href="">Insert Products</a></button>
          <button><a href="">View Products</a></button>
          <button><a href="">View Categories</a></button>
          <button><a href="">Insert Brands</a></button>
          <button><a href="index.php?insert_category">Insert Categories</a></button>
          <button><a href="">View Brands</a></button>
          <button><a href="">All Orders</a></button>
          <button><a href="">All Payments</a></button>
          <button><a href="">List Users</a></button>
          <button style="background-color:red;"><a href="">Logout</a></button>
        </div>
      </div>
    </section>

    <div class="php-container">
      <?php
      if(isset($_GET['insert_category']))
      {
        include "insert_categories.php";
      }
      ?>
    </div>


    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="">About us</a>
          <a href="">Contact Us</a>
          <a href="">Term & Conditions</a>
          <a href="">Shipping Guide</a>
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="">Online Store</a>
          <a href="">Customer Services</a>
          <a href="">Promotion</a>
          <a href="">Top Brands</a>
        </div>
        <div class="col d-flex">
          <span><i class='bx bxl-facebook-square'></i></span>
          <span><i class='bx bxl-instagram-alt' ></i></span>
          <span><i class='bx bxl-github' ></i></span>
          <span><i class='bx bxl-twitter' ></i></span>
          <span><i class='bx bxl-pinterest' ></i></span>
        </div>
      </div>
    </footer>
  </body>
  <style>
    .welcome-note{
        color: green;
        text-align: right;
    }
    .main-heading{
      text-align:center;
        padding: 20px;
    }
    .columns{
      background-color: #e2ffd7;
      padding: 50px;
      margin: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .profile{
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      width: 200px;
    }

    .profile .admin-name{
      text-align: center;
      font-weight: bolder;
      margin-top: 10px;
    } 

    .tabs{
      display: flex;
      padding: 0px 10px;
      flex-wrap: wrap;
    }

    .tabs button{
      padding: 10px;
      background-color: rgb(7, 185, 7);
      margin: 5px;
      border: none;
      border-radius: 10px;
    }

    .tabs button a{
      color: white;
      font-weight: bold;
    }

    .myForm{
      margin-bottom: 50px;
    }

    .cat-input{
      margin-bottom: 20px;
      width: 500px;
      height: 30px;
      padding-left: 10px;
    }

    .myForm .btn{
      color: white;
      font-weight: bold;
      background-color: rgb(7, 185, 7);
      border: none;
      width: 500px;
      padding: 5px;
      border-radius: 5px;
      cursor: pointer;
    }

  </style>
</html>

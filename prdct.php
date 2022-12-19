<html>
    <head>
        <link rel="stylesheet" href="prdct.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      </head>
    <body>
        <div class="top">
           <ul>
               <li><i class="fa fa-phone"></i>+917608069321</li>
               <li><i class="fa fa-paper-plane"></i>frutavita123@email.com</li>
               <li>3-5 Business Days Delivery & Free Returns</li>
           </ul>
        </div>
        <nav>
        <div class="bottom">
            <div class="Brand">
               <p>FRUTAVITA</p>
            </div>
            <ul class="nav-links">
                <li><a href="./index.php">HOME</a></li>
                
                <li><a href="./about.php">ABOUT</a></li>
                <li><a href="./blog.php">BLOG</a></li>
                <li><a href="./contact.php">CONTACT</a></li>
                <i class="fa fa-phone"></i>
               </ul>
         </div>
    </nav>
    <div class="center">
         <img src="./images/food.jpg" class="d-block w-100" height="645">
         <div class="prdct">PRODUCTS</div>
        </div>
        <div class="menu">
            <ul>
            <li><a href="">All</a></li>
            <li><a href="">Fruits</a></li>
            <li><a href="">Dried</a></li>
            </ul>
        </div>
        <section class="product-list">
            <div class="container">
            <?php
                  include('config.php');
                $query = mysqli_query($con, "SELECT * FROM fruits");
                while ($row = mysqli_fetch_assoc($query)) {
               ?>
            <div class="card">
             <div class="title"><?php echo $row['name'] ?><br><br><p><?php echo $row['price'] ?> </p></div>
             <div class="image">
                 <img src="./productimg/<?php echo $row['img'] ?>" alt="">
             </div>
             <div class="text">&#10148;<?php echo $row['description'] ?></div>
            <div>
                <button class ="add-btn">
                    Add to cart
                </button>
            </div>
            </div>
            <?php
              }
              ?>
             
        </section>
    </body>
    </html>
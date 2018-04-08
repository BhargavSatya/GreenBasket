
<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(isset($_SESSION['username']) || !empty($_SESSION['username'])){

$user= ($_SESSION['username']);

}








?>


<!DOCTYPE html>
<html lang="en">
   <head>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="sumit kumar">
      <title>Green Basket</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="./css/style.css" rel="stylesheet" type="text/css">
      <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
       <link href="./css/footer.css" rel="stylesheet"/>
      <script src=".js/footer.js"></script>
      




    <!-- Bootstrap css      -->
    <link rel="stylesheet" href="./css/mid/bootstrap.css">
    
    <!-- Main css   -->
    <link rel="stylesheet" href="./css/singlepro.css">
    <link rel="stylesheet" href="./css/mid/responsive.css">


<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!------ Include the above in your HEAD tag ---------->


   </head>
   <body>
      <!--=========-TOP_BAR============-->
      <nav class="topBar">
         <div class="container">
            <ul class="list-inline pull-left hidden-sm hidden-xs">
               <li><span class="text-primary">Have a question? </span> Call +120 558 7885</li>
                 <li>           <h3>An e-Vegetable Market</h3></li>
            </ul>
            <ul class="topBarNav pull-right">
               <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-usd mr-5"></i>USD<i class="fa fa-angle-down ml-5"></i>
                  </a>
                  <ul class="dropdown-menu w-100" role="menu">
                    <li><a href="#"><i class="fa fa-eur mr-5"></i>EUR</a>
                    </li>
                    <li class=""><a href="#"><i class="fa fa-usd mr-5"></i>USD</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gbp mr-5"></i>GBP</a>
                    </li>
                  </ul>
                  </li> -->
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <span class="hidden-xs"> More <i class="fa fa-angle-down ml-5"></i></span> </a>
                  <ul class="dropdown-menu w-100" role="menu">
                      <li>
                        <a href="#">Edit Profile</a>
                     </li>
                     <li>
                        <a href="#">Your Orders</a>
                     </li>
                     <li>
                        <a href="#">Sell on GreenBasket</a>
                     </li>
                     <li>
                        <a href="#">Contact Us</a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">My Account<i class="fa fa-angle-down ml-5"></i></span> </a>
                  <ul class="dropdown-menu w-150" role="menu">

                    <li><a href="./profile/profile.php"><?php echo $user ?> </a>

                     </li>
                    <li><a href="cart.html">My Orders</a>
                     </li>
                     <li><a href="./login/logout.php">Logout</a>
                     </li>
                     <li class="divider"></li>
                     <li><a href="wishlist.html">Wishlist</a>
                     </li>
                     <li><a href="./cart/vcart.php">My Cart</a>
                     </li>
                     <li><a href="checkout.html">Checkout</a>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-shopping-basket mr-5"></i> <span class="hidden-xs">
                  Cart <i class="fa fa-angle-down ml-5"></i>
                  </span> </a>
                  <ul class="dropdown-menu w-150" role="menu">
                     <li><a href="./cart/vcart.php">View Cart</a>
                     </li>
                     <li><a href="checkout.html">Check Out</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </nav>
      <!--=========-TOP_BAR============-->
      <!--=========MIDDEL-TOP_BAR============-->
      <div class="middleBar">
         <div class="container">
            <div class="row display-table">
               <div class="col-sm-3 vertical-align text-left hidden-xs">
                  <a href="./index.php"><img width="180px" src="./img/logo.png" alt="Green Basket"></a>
                 
               </div>
               <!-- end col -->
               <div class="col-sm-7 vertical-align text-center">
                  <form>
                     <div class="row grid-space-1">
                        <div class="col-sm-6">
                           <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                        </div>
                        <!-- end col -->
                        <div class="col-sm-3">
                           <select class="form-control input-lg" name="category">
                              <option value="all">Categories</option>
                              <optgroup label="Vegetables">
                                 <option value="tomato">Tomato</option>
                                 <option value="potato">Potato</option>
                                 <option value="ladys-finger">Lady's Finger</option>
                                 <option value="brinjals">Brinjals</option>
                                 <option value="carrot">Carrot</option>
                                 <option value="cucumber">Cucumber</option>
                              </optgroup>
                              <optgroup label="Daily Vegetables">
                                 <option value="onion">Onioins</option>
                                 <option value="Garlic">Garlic</option>
                                 <option value="ginger">Ginger</option>
                                 </optgroup>
                              <optgroup></optgroup>
                           </select>
                        </div>
                        <!-- end col -->
                        <div class="col-sm-3">
                           <input type="submit" class="btn btn-default btn-block btn-lg" value="Search">
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end row -->
                  </form>
               </div>
               <!-- end col -->
               <!-- end col -->
            </div>
            <!-- end  row -->
         </div>
      </div>
      <nav class="navbar navbar-main navbar-default" role="navigation" style="opacity: 1;">
         <div class="container">
            <!-- Brand and toggle -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>             
            </div>
            <!-- Collect the nav links,  -->
            <div class="collapse navbar-collapse navbar-1" style="margin-top: 0px;">
               <ul class="nav navbar-nav">
                  <li><a href="./index.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Home</a></li>
                  <li class="dropdown megaDropMenu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Shop <i class="fa fa-angle-down ml-5"></i></a>
                     <ul class="dropdown-menu row">
                        <li class="col-sm-3 col-xs-12">
                           <ul class="list-unstyled">
                              <li>Products Grid View</li>
                              <li><a href="#">Products</a></li>
                              <li><a href="#">Sidebar Left</a></li>
                              <li><a href="#">Products Left</a></li>
                           </ul>
                        </li>
                        <li class="col-sm-3 col-xs-12">
                           <ul class="list-unstyled">
                              <li>Products List View</li>
                              <li><a href="#"> Sidebar Left</a></li>
                              <li><a href="#">Products Left</a></li>
                              <li><a href="#">Products Sidebar</a></li>
                           </ul>
                        </li>
                        <li class="col-sm-3 col-xs-12">
                           <ul class="list-unstyled">
                              <li>Checkout</li>
                              <li><a href="#">Step 1</a></li>
                              <li><a href="#">Step 2</a></li>
                              <li><a href="#">Step 3</a></li>
                           </ul>
                        </li>
                        <!--
                        <li class="col-sm-3 col-xs-12">
                           <ul class="list-unstyled">
                              <li>Sumit Kumar</li>
                           </ul>
                           <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive" alt="menu-img">
                        </li>  -->
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Page <i class="fa fa-angle-down ml-5"></i></a>
                     <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="./login/logout.php">Logout</a></li>
                        <li><a href="#">Password Recovery</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">About Us</a></li>
                     </ul>
                  </li>
                  <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Help-Section</a></li>
                  <li><a href="./feedback_form/formpage.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">FeedBack</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
      </nav> 

<!-- START OF singleproduct BASKET -->







<div class="single-product-area section-padding">
         <div class="container">
            <div class="row">
                      <?php 
                          session_start();
                          $name=$_GET['name'];
                          $image=$_GET['image'];
                                                        
                          echo '
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                          <a href="#"><img src="./img/vegetables/'.$image.'" alt="">
                                          </a>

                                          <div class="hot-wid-rating">
                                              <h4><a href="" style="color:black;margin-left:33%;font-weight:bold;">'.
                                              $name.'
                                              </a></h4>
                                             
                                          </div>
                                      
                                      </div>
                                </div>';

                        ?>

                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="single-product-content">
                              <h3><?php   echo $name ?></h3>
                              <div class="product-review">
                                 
                                 <h4>Availability <span>: In Stock 20 Item(s)</span>
                                 </h4>
                                 <div class="product-wid-price">
                                    <ins>$75</ins> <del>$85</del>
                                 </div>
                                 <p>Descriptions</p>

                              </div>
                              <p>Compare Differences***CHOOSE ROLE IN PHP - CREATE VIEW***</p>
                              <div class="single-color">
                                 
                                 <div class="product-size">
                                    <p>Retailer :</p>
                                    <select>
                                        <?php 
                                          include './login/config.php';
                                          $vegname=$name;             
                                          $result = mysqli_query($link,"SELECT dealerid FROM stock where vegname='$vegname'");

                                          if (mysqli_num_rows($result)) {
                                              // output data of each row
                                              while($row = mysqli_fetch_assoc($result)) {

                                                  $dealerid= $row["dealerid"];
                                                    echo ' <option>'.$dealerid.'</option>
                                                    ';                                                  

                                                  }
                                                 }
                                                 ?>
                                    </select>
                                 </div>
                                 <div class="product-size">
                                    <p>Whole-Seller :</p>
                                    <select><?php 
                                          include './login/config.php';
                                          $vegname=$name;             
                                          $result = mysqli_query($link,"SELECT dealerid FROM stock where vegname='$vegname'");

                                          if (mysqli_num_rows($result)) {
                                              // output data of each row
                                              while($row = mysqli_fetch_assoc($result)) {

                                                  $dealerid= $row["dealerid"];
                                                    echo ' <option>'.$dealerid.'</option>
                                                    ';                                                  

                                                  }
                                                 }
                                                 ?>
                                    </select>
                                 </div>
                                 <div>



                                 </div>


                              </div>
                              <div class="single-color last-color-child">
                                 <div class="size-heading">
                                    <h5>Qty :</h5>
                                 </div>
                                 <div class="size-down">
                                    <input type="number" step="1" min="0" max="119" name="quantity[113]" value="1" title="Qty" class="input-text qty text" size="4">
                                 </div>
                                  <div class="size-cart">
                                    <a href="" class="fa fa-shopping-cart"> Add to cart</a>
                                   </div>
                                 
                              </div>

                           </div>
                          
                        </div>
                     </div>
                  </div>
                  <!--
                     <div class="product-tab product-tab-single">
                         <ul class="nav nav-tabs" role="tablist">
                             <li role="presentation" class="active"><a href="http://premiumlayers.net/demo/html/ecom/single-product.html#home" aria-controls="home" role="tab" data-toggle="tab">Product description</a>
                             </li>
                             <li role="presentation"><a href="http://premiumlayers.net/demo/html/ecom/single-product.html#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a>
                             </li>
                             <li role="presentation"><a href="http://premiumlayers.net/demo/html/ecom/single-product.html#messages" aria-controls="messages" role="tab" data-toggle="tab">Product tags</a>
                             </li>
                         </ul>
                        
                         <div class="tab-content">
                             <div role="tabpanel" class="tab-pane active" id="home">Then along come two they got nothin' but their jeans. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Today still wanted by the government they survive as soldiers of fortune. Boy the way Glen Miller played. Songs that made the hit parade. Guys like us we had it made. Those were the days.</div>
                             <div role="tabpanel" class="tab-pane" id="profile">
                     <div class="review_panel">
                     <div class="review_comments">
                     <div class="review_heading">
                     <div class="review_heading_left">
                     <h2><span>Review for </span> "Gray Structured T-Shirt"</h2>
                     </div>
                     <div class="review_heading_right">
                     <ul id="review_heading_star">
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     </ul>
                     </div>
                     </div>
                     <div class="single_review_comment">
                     <div class="single_review_img">
                     <img src="./Ecomshop _ Ecommerce HTL5 template _ Single Product page_files/kous.png" alt="">
                     </div>
                     <div class="single_review_text">
                     <h4>A Stunning Beauty!</h4>
                     <ul id="single_review_star">
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     <li><a href="http://premiumlayers.net/demo/html/ecom/single-product.html" class="fa fa-star"></a></li>
                     </ul>
                     <p>Semper orci etiam ac ultricies ante. Donec lobortis variusjusto et. Curabitur egestas aliquet massa non elementum. Quisque at risus nisl. Aliquam erat volutpat. Suspendisse potenti. Nullam porta faucibus elit.</p>
                     <div class="review_italic">
                     <p><span>Nicole Bailey,</span> 12.05.2013</p>
                     </div>
                     </div>
                     </div>
                     </div>
                     <div class="Review_input">
                     <div class="review_input_heading">
                     <h3>Write your review</h3>
                     </div>
                     <div class="review_comment_input">
                     <input type="text" placeholder="Enter Your Nickname"><br>
                     <input type="text" placeholder="Summary of your Review"><br>
                     <textarea cols="30" rows="10" placeholder="Write your review"></textarea><br>
                     <input type="submit" value="Submit Review">
                     </div>
                     </div>
                     </div>
                     </div>
                             <div role="tabpanel" class="tab-pane" id="messages">Boy the way Glen Miller played.Then along come two they got nothin' but their jeans. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. Today still wanted by the government they survive as soldiers of fortune. Boy the way Glen Miller played. Songs that made the hit parade. Guys like us we had it made. Those were the days.</div>
                         </div>
                     </div>
                     
                     
                     -->                  
               </div>
            </div>
         </div>
      </div>

<!-- END OF singleproduct BASKET -->




<!-- START OF FOOTER -->
<div class="footer-section">
    <div class="footer">
   <div class="container">
          <div class="col-md-4 footer-one">
            <div class="foot-logo">
                <img src="./img/logo.png">
            </div> 
             
             <p>Providing Life Changing Experiences Through Education. Class That Fit Your Busy Life. Closer to Home
                </p>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
               <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
               <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
           </div>
          </div>
          <div class="col-md-2 footer-two">
             <h5>Quick Links</h5>
                <ul>
                    <li><a href="#"> About Us</a> </li>
                    <li><a href="#"> Our News</a> </li>
                    <li><a href="#"> Our Services</a> </li>
                    <li><a href="#"> Contact Us</a> </li>
                  </ul>
                  
          </div>
          <div class="col-md-2 footer-three">
             <h5>Services</h5>
                <ul>
                    <li><a href="#"> About Us</a> </li>
                    <li><a href="#"> Our News</a> </li>
                    <li><a href="#"> Our Services</a> </li>
                    <li><a href="#"> Contact Us</a> </li>
                  </ul>
                  
          </div>
          <div class="col-md-4 footer-four">
             <h5>Contact Us</h5>
                <ul>
                    <li><i class="fa fa-map-marker"></i>350 Avenue, India, Delhi 110001 </li>
                    <li><i class="fa fa-envelope-o"></i>info@mailme.com </li>
                    <li><i class="fa fa-phone"></i>+91-xxx-xxx-2040 </li>
                    
                  </ul>
                  
          </div>
          
      
      
      
      
      
      <div class="clearfix"></div>
   </div>
</div>

</div>
<div class="footer-bottom">
        <div class="container">
               <div class="row">
                  <div class="col-sm-6 ">
                     <div class="copyright-text">
                        <p>CopyRight © 2017 Digital All Rights Reserved</p>
                     </div>
                  </div> <!-- End Col -->
                  <div class="col-sm-6  ">
                      <div class="copyright-text pull-right">
                        <p> <a href="#">Home</a> | <a href="#">Privacy</a> |<a href="#">Terms & Conditions</a> | <a href="#">Refund Policy</a> </p>
                     </div>               
                                       
                  </div> <!-- End Col -->
               </div>
            </div>
    </div>
   </div>

   <!-- END OF FOOTER -->
      <script src="./js/jquery.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="./js/hover.js"></script>


  

   </body>
</html>
<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p> Classy Heaven is an online flower store that delivers flowers all over pune. We deliver the best quality - fresh cut flowers in pune city with the help of our strong affiliate network and channel stores. Each and every one of our flowers is handpicked at the right stage of bloom by our expert florists.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We bring you an exclusive range of goodies and doorstep delivery services so reliable, that you would not have to sweat about the order once it's placed.In addition to delivering flowers, we also strive to make that special occasion for you and your loved ones even more special by delivering surprise gifts like cakes, chocolates, teddy bears and sweets.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Classy Heaven is always there where ‘Words are not Enough..’. We at Classy Heaven know how important it is to express your feelings with the same amount of zeal that your presence would have brought to the occasion. Bringing a smile on your face and being your messenger with perfection is our motto. We define our success by our satisfied customers.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>You guys made my day. Great service n gifts delivered on time. Thanks for making my dad happy. Cake was super delicious 👌👌👌. Commandable job 👏👏👏👏.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Satish Moningi</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Thank you so much Classy Heaven for your service.I would reccommend it for all my friends who want to make their celebrations beautiful..Prompt delivery which i feel is the best in karve nagar pune..Thank you</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>smita wagh</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>hi, thank u for sending my gift to my husband for the first time i used this site for sending this cake and flowers u have made my wish true am very happy for this. thank u</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Tejas jaha</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Best!! Number of time when I was confused when I had to buy gifts. Classy Heaven helped me to make a decision really it is. It has a nice collection to choose from. I have compared various other sites and this one is by the best.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Tejaswi gupta</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>On time delivery!! Quick and reliable delivery, pretty much easier to order, quite smooth website and promising service am quite happy with the offered service of Classy Heaven and the product was really good in quality.Delivery was very fast. I really appreciate the service provided by Classy Heaven and they have captured the moment.I was quite happy good job</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ankit raj</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Super service!! I was searching for a good online bouquet delivery service. Came across Classy Heaven which had some positive reviews.Tried it for the first time today on Mother's day and I must say, very impressed with their promptness, delivery time and the quality of flowers were excellent! Thanks Classy Heaven for helping in making the day special!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>siddhi singh</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
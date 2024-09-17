<?php 

include 'config.php';

session_start();

$user_id =  $_SESSION['user_id'];

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
    <title>About</title>

     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<?php include 'header.php'; ?>

<div class="heading">
    <h3>About us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/tree1.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p>Welcome to our book lovers paradise! We've gathered books that are so good they'll raise your self-esteem. From classic books older than your grandfather's jokes to new releases fresher than the scent of peppermint, we've got your reading needs covered. Whether you want to laugh, cry or just want something that makes you say "wow", our books are here to entertain, enlighten and maybe even make you laugh. So, dive in and let the adventure begin!</p>
           
            <a href="contact.php" class="btn">Contact us</a>
        </div>

    </div>

</section>

<section class="reviews">

    <h1 class="title">Client's reviews </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/mohit1.jpeg" alt="">
            <p> "Found a rare classic quickly, with fast delivery and meticulous packaging—now my go-to for unique finds!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Mohit Prajapati</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"Love their easy-to-navigate site and spot-on recommendations, plus books always arrive promptly and well-protected."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star star"></i>
            </div>
            <h3>Mahi</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p> "Consistently impressed with their wide selection and quick service, making book hunting effortless and enjoyable."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Harshit </h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p> "Perfect for rare book collectors—accurate descriptions, secure packaging, and delightful finds every time."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="far fa-star star"></i>
            </div>
            <h3>Pallavi</h3>
        </div>

        <div class="box">
            <img src="images/dolly.jpeg" alt="">
            <p>"Effortless shopping experience, from user-friendly interface to speedy delivery of high-quality books."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dolly Chaiwala</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"Reliably excellent service and a diverse selection make them my first choice for book shopping online."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jessica</h3>
        </div>

    </div>

</section>

<section class="authors">

    <h1 class="title">Great authors</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Sonal_Goel.jpg" alt="">
            <div class="share">
            <a href="https://www.facebook.com/sonalgoeliaspage" target="blank" class="fab fa-facebook-f"></a>
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fsonalgoelias%3Fs%3D09%26fbclid%3DIwZXh0bgNhZW0CMTAAAR1K1nu5CGBtZ8wnBidnX56lUKTeaRWkV_pjj6bR-v3gMg6jdh5SRM-Cdu0_aem_GysZEELie4XDm32iCDPA5A&h=AT0bmVzt1NtEeSDYRcbDpQmBtae7ChNPQou2CQlF0o9I1ZOl73O3I7MPIMKd2SsI8J1c8q3fwuvqFXSgfnLiUYeZQGW1a-KVgavErQIq92iWOWQE1OLXQAXVLncXGA" target="blank" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/iassonalgoel/" target="blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/sonal-goel-ias/?originalSubdomain=in" target="blank" class="fab fa-linkedin"></a>
            </div>
            <h3>Sonal Goel</h3>
        </div>

        <div class="box">
            <img src="images/sanjeev01.png" alt="">
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Sanjeev Joshi</h3>
        </div>

        <div class="box">
            <img src="images/ShubhraGupta.jpeg" alt="">
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Shubhra Gupta</h3>
        </div>

        <div class="box">
            <img src="images/ruskinbond.jpg" alt="">
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Ruskin Bond</h3>
        </div>

        <div class="box">
            <img src="images/rammadhav.jpeg" alt="">
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Ram Madhav</h3>
        </div>

        <div class="box">
            <img src="images/sanjeev.jpg" alt="">
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Anurag Behar</h3>
        </div>

    </div>

</section>










<?php include 'footer.php'; ?>


<!-- custom js file link -->
<script src="js/script1.js"></script>

</body>
</html>
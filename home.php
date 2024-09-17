<?php 

include 'config.php';

session_start();

$user_id =  $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'Already added to cart!';
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'Product added to cart!';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

     <!-- Font Awesome CDN Link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<?php include 'header.php'; ?>

<section class="home">

    <div class="content">
        <h3>Hand Picked Books to Your Door</h3>
        <p>In another world, adventure awaits. Explore countless stories, ignite your imagination, and find your perfect escape. Join the bookish community and lose yourself in the pages.</p>
        <a href="about.php" class="white-btn">Discover more</a>
    </div>

</section>

<section class="products">

    <h1 class="title">Latest Products</h1>

    <div class="box-container">

        <?php
        
            $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
            if(mysqli_num_rows($select_products) > 0){
                while($fetch_products = mysqli_fetch_assoc($select_products)){    
        ?>
        <form action="" method="post" class="box" onsubmit="return checkQuantity(this);">
            <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
            <div class="name"><?php echo $fetch_products['name']; ?></div>
            <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>
            <input type="number" min="1" name="product_quantity" value="1" class="qty">
            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
            <input type="submit" value="Add to Cart" name="add_to_cart" class="btn">
        </form>
        <?php
             }
            }else{
                echo '<p class="empty">No products added yet!</p>';
            }
        ?>
    </div>

    <div class="load-more" style="margin-top:2rem; text-align:center;">
        <a href="shop.php" class="option-btn">Load more</a>
    </div>

</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Welcome to Bookiverse! We love books and want to share that love with you. From new hits to timeless classics, we have something for everyone. Our goal is to make book shopping easy and fun while supporting authors and publishers. Join us and start your reading adventure. Happy reading!</p>
            <a href="about.php" class="btn">Read more</a>
        </div>

    </div>

</section>

<section class="home-contact">

    <div class="content">
        <h3>Have any questions?</h3>
        <p>We're here to assist you! Reach out to us for any questions or support you need.</p>
        <a href="contact.php" class="white-btn">Contact us</a>
    </div>
   
</section>

<?php include 'footer.php'; ?>

<!-- Custom JS File Link -->
<script src="js/script1.js"></script>

<!-- Quantity Check Script -->
<script>
function checkQuantity(form) {
    var quantity = form.product_quantity.value;
    if (quantity > 5) {
        alert('Out of stock! Please select a quantity of 5 or less.');
        form.product_quantity.value = 5; // Reset the quantity to 5
        return false; // Prevent the form from being submitted
    }
    return true; // Allow form submission if quantity is 5 or less
}
</script>

</body>
</html>

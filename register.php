
<?php 

include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $user_type = $_POST['user_type'];

    // Check if the password meets the requirements
    if (strlen($pass) < 8 || strlen($pass) > 16 || !preg_match('/[A-Z]/', $pass) || !preg_match('/[\W]/', $pass)) {
        $message[] = 'Password must be 8-16 characters long, include one symbol, and one capital letter!';
    } else {
        $pass = mysqli_real_escape_string($conn, md5($pass));
        $cpass = mysqli_real_escape_string($conn, md5($cpass));

        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

        if(mysqli_num_rows($select_users) > 0){
            $message[] = 'User already exists!';
        } else {
            if($pass != $cpass){
                $message[] = 'Confirm password not matched!';
            } else {
                mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type') ") or die('query failed');
                $message[] = 'Registered successfully!';
                header('Refresh: 2; URL=login.php');
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style1.css">
    <style>
        .password-container {
            position: relative;
        }

        .password-container .fa-eye {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 24px; /* Adjust the font size as needed */
        }

        .password-strength {
            margin-top: 5px;
            font-size: 1.5em;
        }
    </style>
</head>
<body>

<?php 
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<div class="form-container">
    <img class="myimage" src="images/bookshelf.png" alt="not loading" width="200px" height="auto">
    <img class="myimage1" src="images/books.png" alt="not loading" width="200px" height="auto">

    <form action="" method="post">
        <h3>Register Now</h3>
        <input type="text" name="name" placeholder="Enter your name" required class="box">
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <div class="password-container">
            <input type="password" name="password" placeholder="Enter your password" required class="box" id="password">
            <i class="fas fa-eye" id="togglePassword"></i>
        </div>
        <div class="password-strength" id="password-strength"></div>
        <div class="password-container">
            <input type="password" name="cpassword" placeholder="Confirm your password" required class="box" id="confirm-password">
            <i class="fas fa-eye" id="toggleConfirmPassword"></i>
        </div>
        <select name="user_type" class="box">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" name="submit" value="Register Now" class="btn">
        <p>Already have an account? <a href="login.php">Login Now</a></p>
    </form>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
    const confirmPassword = document.querySelector('#confirm-password');
    const passwordStrength = document.querySelector('#password-strength');

    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });

    toggleConfirmPassword.addEventListener('click', function () {
        const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPassword.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });

    password.addEventListener('input', function () {
        const val = password.value;
        let strength = 'Weak';
        let color = 'red';
        const lengthCheck = val.length >= 8 && val.length <= 16;
        const uppercaseCheck = /[A-Z]/.test(val);
        const symbolCheck = /[\W]/.test(val);

        // if (lengthCheck && uppercaseCheck && symbolCheck) {
        //     strength = 'Strong';
        //     color = 'green';
        // } else if (lengthCheck && (uppercaseCheck || symbolCheck)) {
        //     strength = 'Medium';
        //     color = 'orange';
        // }
        
        // passwordStrength.textContent = `Password Strength: ${strength}`;
        // passwordStrength.style.color = color;
    });
</script>

</body>
</html>
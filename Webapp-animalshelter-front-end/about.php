<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>About | Unknown Animal Shelter</title>
    <link rel="shortcut icon" href="images/logoAS.png" type="image/x-icon">
</head>
<body>
<!-- ==================================LOGIN-FORM======================================== -->
<div class="form-container" id="login-form-container">
    <span class="close-form-container-button"><i class="fa fa-times" aria-hidden="true"></i></span>
    <form method="POST" class="login-form">
        <h2>Log In</h2>
        <input type="text" name="" id="" placeholder="Email">
        <span>
            <input type="password" name="" id="password-login" placeholder="Password"><i class="fa fa-eye-slash" aria-hidden="true" id="eye"></i>
        </span>
        <button type="submit">Log In</button>
        <p class="signup-link">Create new account</p>
    </form>
</div>

<!-- ==================================SIGNUP-FORM======================================== -->
<div class="form-container" id="signup-form-container">
    <span class="close-form-container-button"><i class="fa fa-times" aria-hidden="true"></i></span>
    <form method="POST" class="signup-form">
        <span>
            <h2>Create Account</h2>
            <p>We need some of your personal information.</p>
        </span>

        <div>
            <div class="left">
                <span>
                 <label>First Name:</label>
                 <input type="text" name="firstname" id="firstname">
                </span>
     
                <span>
                 <label>Last Name:</label>
                 <input type="text" name="lastname" id="lastname">
                </span>
     
                <span>
                 <label>Birthday</label>
                 <input type="date" name="birthday" id="birthday" value="2000-01-01" min="1995-01-01" max="2018-01-01">
                </span>
     
                <span>
                 <label>Address:</label>
                 <textarea name="address"></textarea>
                </span>
     
             </div>
     
             <div class="right">
                 <span>
                     <label>Mobile Number:</label>
                     <input type="text" name="mobilenumber" id="mobilenumber">
                 </span>
     
                 <span>
                     <label>Email:</label>
                     <input type="email" name="email" id="email" placeholder="Please put valid email.">
                 </span>
     
                 <span>
                     <label>New Password:</label>
                     <input type="password" name="new-password" id="new-password" minlength="8">
                     <i class="fa fa-eye-slash" aria-hidden="true" id="eye1"></i>
                 </span>
     
                 <span>
                     <label>New Password:</label>
                     <input type="password" name="retyped-password" id="retyped-password" placeholder="Type your password again." minlength="8">
                     <i class="fa fa-eye-slash" aria-hidden="true" id="eye2"></i>
                 </span>
     
                 <span>
                     <label>Generate ID:</label>
                     <input type="text" name="generate-id" id="generate-id" readonly>
                     <i class="fa fa-refresh" aria-hidden="true" id="refresh"></i>
                 </span>
     
                 <button>Create Account</button>
     
             </div>
        </div>
      
    </form>
</div>

    <nav>
        <ul class="navbarlinks">
            <a href="index.php"><img src="images/logoAS.png" alt="" class="small-logo"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php"  class="active">About</a></li>
            <li><a href="animals.php">Animals</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <button class="login-button">Log in</button>
    </nav>

    <div class="main-wrapper">
        <div class="wrapper">
            <img src="images/logoAS.png">
            <div>
                <h3>About Us</h3>
                <p>Unknown Animal Shelter. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quod eveniet quas alias nisi ipsum ducimus maiores sed! Quis fugiat delectus dolorem earum qui assumenda est animi, praesentium ad tempore maiores officia consequatur accusamus laboriosam neque aliquam tenetur odit repellat esse at a? A eos dolor itaque officia voluptatibus quaerat, consectetur tempore amet possimus ab quod nesciunt esse quia ipsam quis ipsa quasi ut iste qui quae ullam sed eaque. Eum repellat hic eligendi facilis ab modi nesciunt iusto, id quaerat debitis dolorem explicabo quis vitae recusandae reprehenderit saepe quidem animi alias placeat harum sapiente quia? Consequatur, facere optio. Magnam?</p>
            </div>
        </div>

        <div class="wrapper">
            <img src="images/logoAS.png">
            <div>
                <h3>People of UAS</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nesciunt quisquam laboriosam error iusto optio recusandae veniam dolorum ipsum. Fuga nesciunt, cum neque obcaecati unde facilis voluptates culpa accusantium iste maxime a atque doloribus repellendus. Iusto labore molestiae nesciunt sunt. Tempora, iste. Sequi, commodi tempora ullam natus ea dicta enim.</p>
            </div>
    </div>
</div>


    <footer>
        <p>©2022 by Christian Virrey</p>
    </footer>
</body>

<script src="js/main.js" defer></script>
</html>
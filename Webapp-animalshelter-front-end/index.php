<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Unknown Animal Shelter</title>
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

<!-- ==================================DONATE-FORM======================================== -->
<div class="form-container" id="donate-container">
    <span class="close-form-container-button"><i class="fa fa-times" aria-hidden="true"></i></span>
    <div class="donation-form">
        <img src="" alt="">
         <span>
            <img src="images/logoAS.png" alt="">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut aliquam assumenda animi placeat nostrum explicabo itaque dolores iusto praesentium quod.</p>
        </span>
    </div>
</div>

    <nav>
        <ul class="navbarlinks">
            <a href="index.php"><img src="images/logoAS.png" alt="" class="small-logo"></a>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="animals.php">Animals</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <button class="login-button">Log in</button>
    </nav>

    <div class="main-wrapper">
        <header>
            <h1>Unknown Animal Shelter.</h1>
            <p>Where we care about animals.</p>
            <span>
                <p>Want to adopt?</p>
                <button class="white-button">See Animals</button>
                <p> | </p>
                <p>Willing to donate?</p>
                <button class="white-button" id="donate-button">Donate</button>
            </span>

            <img src="images/logoAS.png">
        </header>
    </div>


    <footer>
        <p>©2022 by Christian Virrey</p>
    </footer>
</body>

<script src="js/main.js" defer></script>
<script>
    const formDonateContainer = document.getElementById('donate-container');
    const showDonateFormBtn = document.getElementById('donate-button');
    let closeFormContainerBtnD =  document.querySelectorAll('.close-form-container-button');

    showDonateFormBtn.addEventListener('click', () =>{
        formDonateContainer.style.display = 'flex';
    })

    closeFormContainerBtnD.forEach(button =>{
    button.addEventListener('click', () =>{
        if(formDonateContainer.style.display === 'flex'){
            formDonateContainer.style.display = 'none';
        }else{}
    })
})
</script>
</html>
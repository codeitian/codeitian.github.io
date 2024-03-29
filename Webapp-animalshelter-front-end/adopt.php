<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/adopt.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Adopt Now | Unknown Animal Shelter</title>
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
<!-- ==================================NAVIGATION_BAR======================================== -->
    <nav>
        <ul class="navbarlinks">
            <a href="index.php"><img src="/images/logoAS.png" alt="" class="small-logo"></a>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="animals.php" class="active">Animals</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <button class="login-button">Log in</button>
    </nav>

    <div class="main-wrapper">
        <ul class="specific-animal-info-bar">
            <li><label>Name:</label><p>Aspina</p></li>
            <li><label>Sex:</label><p></p></li>
            <li><label>Age:</label><p></p></li>
            <li class="button-container"><button id='adoptThis'>ADOPT NOW</button></li>
        </ul>

        <ul class="more-images">
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
            <li><img src="" alt=""></li>
        </ul>
    </div>

    <div class="form-container" id="reservation-container">
        <span class="close-form-container-button"><i class="fa fa-times" aria-hidden="true"></i></span>
        <form id="reservation-form">
            <label>Unknown Animal Shelter</label>
            <div class="top">
                <span>
                    <p>I am <input type="text" name="" id="" value=""></p>
                    <p>I would like to adopt <input type="text" name="" id="" value=""></p>
                    <p>I will pick up <input type="date" name="" id="" required></p>
                </span>
                <img src="" alt="">
            </div>

            <div class="bottom">
            <p> <input type="checkbox" name="" id="agreed">I agree that if I don't pick up Peeny in the given date without any notice, my account will be deleted and Peeny will be available again for adoption. If the given date seems like a bogus or is too long for reservation it will be cancelled.</p>

            <button id="adopt-button">ADOPT</button>
            </div>
        </form>
        
    </div>

    <footer>
        <p>©2022 by Christian Virrey</p>
    </footer>
</body>

<script src="js/main.js" defer></script>
<script>
    const adoptButton = document.querySelector('#adoptThis');
    const formReserveContainer = document.getElementById('reservation-container');
    let closeFormContainerBtnR =  document.querySelectorAll('.close-form-container-button');
    const chckB = document.querySelector('#agreed');

    adoptButton.addEventListener('click', () =>{
        formReserveContainer.style.display = 'flex';
    })

closeFormContainerBtnR.forEach(button =>{
button.addEventListener('click', () =>{
    if(formReserveContainer.style.display === 'flex'){
        formReserveContainer.style.display = 'none';
    }else{}
})
})

chckB.addEventListener('click', () => {
    if(chckB.checked == true){
        document.querySelector('#adopt-button').disabled = false;
        document.querySelector('#adopt-button').style.opacity = 1;
    }else{
        document.querySelector('#adopt-button').disabled = true;
        document.querySelector('#adopt-button').style.opacity = .5;
    }
})

</script>
</html>
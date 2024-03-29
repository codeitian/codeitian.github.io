<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-panel.css">
    <link rel="stylesheet" href="../css/user-page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>My Reservation | Unknown Animal Shelter</title>
    <link rel="shortcut icon" href="../images/logoAS.png" type="image/x-icon">
</head>
<body>

<div class="logOut">
    <p>Are you sure you want to log out?</p>
    <span>
        <a href="" id="yes-btn"><button>YES</button></a>
        <button id="no-btn">NO</button>
    </span>
</div>

<div class="main-wrapper">
    <section class="sub-wrapper">
        <aside class="sidebar">
            <div>
                <h2>PROFILE</h3>
                <p>Logged in as</p>
            </div>
            <a href="reservation.php" class="links active"><i class="fa fa-clock-o" aria-hidden="true"></i>Reservation</a>
            <a href="user-inbox.php" class="links"><i class="fa fa-envelope" aria-hidden="true"></i>Inbox</a>
            <a href="account-management.php" class="links"><i class="fa fa-user" aria-hidden="true"></i>Account Management</a>
            <a href="../index.php" class="links"><i class="fa fa-home" aria-hidden="true"></i>Home Page</a>
            <a href="" class="links"  id="logOutLink"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

        </aside>

        <div class="content-wrapper">
            <h3 class="title">MY RESERVED PET</h3>
            <div class="content-bar">
                <div class="left-side"></div>
                <button id="cancel-button">Cancel</button>
            </div>

            <div class="user-reservation-container">
                <div class="card">
                    <div class="left">
                        <span>
                            <label>New Owner:</label>
                            <p></p>
                        </span>

                        <span>
                            <label>Chosen Animal:</label>
                            <p></p>
                        </span>

                        <span>
                            <label>Characteristic: </label>
                            <p></p>
                        </span>

                        <span>
                            <label>Reservation Date:</label>
                            <p></p>
                        </span>

                        <span>
                            <label>Pick Up Date:</label>
                            <p></p>
                        </span>

                    </div>
    
                    <div class="right">
                        <img src="" alt="Image of your chosen pet.">
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</div>

<div class="form-container" id="cancelform-container">
    <span class="close-form-container-button"><i class="fa fa-times" aria-hidden="true"></i></span>
    <form id="cancel-form">
        <label>Cancel My Reservation</label>
        <div class="top">
            <span>
                <label>Name:</label>
                <input type="text" name="" id="" class="text-display" readonly>
            </span>

            <span>
                <label>Pet Name(s):</label>
                <input type="text" name="" id="" class="text-display" readonly>
            </span>

            <span>
                <label>Pickup Date:</label>
                <p></p>
            </span>
        </div>


        <div class="bottom-card">
            <label>Tell us why:</label>
            <textarea name="" id=""placeholder="Reason for cancellation." required></textarea>
            <button id="adopt-button">Cancel Reservation</button>
        </div>
    </form>
    
</div>

</body>

<script src="../js/admin-panel.js" defer></script>
<script>
    const adoptButton = document.querySelector('#cancel-button');
    const formCancelContainer = document.getElementById('cancelform-container');
    let closeFormContainerBtnC =  document.querySelectorAll('.close-form-container-button');

    adoptButton.addEventListener('click', () =>{
        formCancelContainer.style.display = 'flex';
    })

    closeFormContainerBtnC.forEach(button =>{
    button.addEventListener('click', () =>{
        if(formCancelContainer.style.display === 'flex'){
            formCancelContainer.style.display = 'none';
        }else{}
    })
})

</script>
</html>
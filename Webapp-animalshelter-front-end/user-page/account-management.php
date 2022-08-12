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
    <title>My Account | Unknown Animal Shelter</title>
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

<div class="messagebox-delete">
    <p>Delete Account?</p>
    <input type="password" name="" id="" placeholder="Please type your password.">
    <span>
        <a href="" id="yes-delete"><button>YES</button></a>
        <button id="no-delete">NO</button>
    </span>
</div>

<div class="main-wrapper">
    <section class="sub-wrapper">
        <aside class="sidebar">
            <div>
                <h2>PROFILE</h3>
                <p>Logged in as</p>
            </div>
            <a href="reservation.php" class="links"><i class="fa fa-clock-o" aria-hidden="true"></i>Reservation</a>
            <a href="user-inbox.php" class="links"><i class="fa fa-envelope" aria-hidden="true"></i>Inbox</a>
            <a href="account-management.php" class="links active"><i class="fa fa-user" aria-hidden="true"></i>Account Management</a>
            <a href="../index.php" class="links"><i class="fa fa-home" aria-hidden="true"></i>Home Page</a>
            <a href="" class="links"  id="logOutLink"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

        </aside>

        <div class="content-wrapper">
            <h3 class="title">ACCOUNT MANAGEMENT</h3>
            <form id="update-account-form">
            <div class="content-bar">
                <div class="left-side"></div>
                <div class="right-side">
                    <button>UPDATE</button>
                    <button id="delete-account-button">DELETE</button>
                </div>
            </div>

            <div class="user-info">
                <h1>ASID-YUSW-741652</h1>
                <span><label>Full Name:</label><input type="text"><input type="text"></span>
                <span><label>Address:</label><textarea name="" id="" cols="30" rows="10"></textarea></span>
                <span><label>Birthday:</label><input type="date" name="" id=""></span>
                <span><label>Mobile:</label><input type="text"></span>
                <span><label>Email:</label><input type="email" name="" id=""></span>
                <span><label>Password:</label><input type="password" name="" id="current-password"><i class="fa fa-eye-slash" aria-hidden="true" id="eye1"></i></span>
                <span><label>New Password:</label><input type="password" name="" id="new-password"><i class="fa fa-eye-slash" aria-hidden="true" id="eye2"></i></span>
                <span><label>Re-type Password:</label><input type="password" name="" id="retyped-password"><i class="fa fa-eye-slash" aria-hidden="true" id="eye3"></i></span>
            </div>  
        </form>
    </div>

</body>

<script src="../js/admin-panel.js" defer></script>
<script>
    const deleteButton = document.querySelector('#delete-account-button');
    const deleteMessagebox = document.querySelector('.messagebox-delete');
    const noButton = document.querySelector('#no-delete');

    deleteButton.addEventListener('click', (e) =>{
        e.preventDefault();
        deleteMessagebox.style.display ="flex";
    })

    noButton.addEventListener('click', () =>{
        deleteMessagebox.style.display = "none";
    })

    const eye1 = document.querySelector('#eye1');
    const cPwInputField = document.querySelector('#current-password');

    eye1.addEventListener('click', () =>{
        if(cPwInputField.type === "password"){
            cPwInputField.type ="text";
            eye1.className = "fa fa-eye";
            eye1.style.color = "var(--red-orange)";
        }else if(cPwInputField.type === "text"){
            cPwInputField.type = "password";
            eye1.className = "fa fa-eye-slash";
            eye1.style.color = "#888";
        }
    })

    const eye2 = document.querySelector('#eye2');
    const nPwInputField = document.querySelector('#new-password');

    eye2.addEventListener('click', () =>{
        if(nPwInputField.type === "password"){
            nPwInputField.type ="text";
            eye2.className = "fa fa-eye";
            eye2.style.color = "var(--red-orange)";
        }else if(nPwInputField.type === "text"){
            nPwInputField.type = "password";
            eye2.className = "fa fa-eye-slash";
            eye2.style.color = "#888";
        }
    })

    const eye3 = document.querySelector('#eye3');
    const rtPwInputField = document.querySelector('#retyped-password');

    eye3.addEventListener('click', () =>{
        if(rtPwInputField.type === "password"){
            rtPwInputField.type ="text";
            eye3.className = "fa fa-eye";
            eye3.style.color = "var(--red-orange)";
        }else if(rtPwInputField.type === "text"){
            rtPwInputField.type = "password";
            eye3.className = "fa fa-eye-slash";
            eye3.style.color = "#888";
        }
    })

</script>
</html>
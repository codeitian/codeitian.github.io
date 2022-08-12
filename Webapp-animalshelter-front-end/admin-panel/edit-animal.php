<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-panel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
            integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Edit Animal</title>
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
                <h2>Admin Panel</h3>
                <p>Logged in as</p>
            </div>
            <a href="dashboard.php" class="links"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
            <a href="animal-records.php" class="links active"><i class="fa fa-paw" aria-hidden="true"></i>Animal Records - Edit</a>
            <a href="reservations-adoptions.php" class="links"><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Reservations & Adoptions</a>
            <a href="users.php"  class="links"><i class="fa fa-users" aria-hidden="true"></i>Users Management</a>
            <a href="messages.php" class="links"><i class="fa fa-envelope" aria-hidden="true"></i>Messages</a>
            <a href="expenses.php" class="links"><i class="fa fa-money" aria-hidden="true"></i>Expenses</a>
            <a href="webpage.php" class="links"><i class="fa fa-globe" aria-hidden="true"></i>Webpage Management</a>
            <a href="../index.php" class="links"><i class="fa fa-home" aria-hidden="true"></i>Home Page</a>
            <a href="" class="links"  id="logOutLink"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

        </aside>

        <div class="content-wrapper">
            <h3 class="title">EDIT ANIMAL INFO - </h3>

            <div class="content-bar">
                <div class="left-side"></div>
                <div class="right-side">
                   <a href=""><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="top-container">
                <form enctype="multipart/form-data">
                    <img src="">
                    <input type="hidden" name="image" value="">
                    <input type="hidden" name="id" value="">
                    <input type="file" name="newImage" required>
	                <button type="submit" name="delImg" class="trash-button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
	                <button type="submit" name="replace" class="replace">Update</button>
                </form>

                <form enctype="multipart/form-data">
                    <img src="">
                    <input type="hidden" name="image" value="">
                    <input type="hidden" name="id" value="">
                    <input type="file" name="newImage" required>
	                <button type="submit" name="delImg" class="trash-button"> <i class="fa fa-trash-o" aria-hidden="true"></i></button>
	                <button type="submit" name="replace" class="replace">Update</button>
                </form>

                <form enctype="multipart/form-data">
                    <img src="">
                    <input type="hidden" name="image" value="">
                    <input type="hidden" name="id" value="">
                    <input type="file" name="newImage" required>
	                <button type="submit" name="delImg" class="trash-button"> <i class="fa fa-trash-o" aria-hidden="true"></i></button>
	                <button type="submit" name="replace" class="replace">Update</button>
                </form>

            </div>

            <div class="bottom-container">
                <form>
                    <ul>
                        <li>
                            <label>Name:</label>
                            <input type="text" name="" id="">
                        </li>

                        <li>
                            <label>Kind</label>
                            <select name="" id="">
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Others">Others</option>  
                            </select>
                        </li>

                        <li>
                            <label>Sex:</label>
                            <select name="" id="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="---">---</option>  
                            </select>
                        </li>

                        <li>
                            <label>Age:</label>
                            <input type="text" name="" id="">
                        </li>

                        <li>
                            <label>Characteristic:</label>
                            <input type="text" name="" id="">
                        </li>

                        <li>
                            <label>Status:</label>
                            <select name="" id="">
                                <option value="Adoptable">Adoptable</option>
                                <option value="Reserved">Reserved</option>
                                <option value="Adopted">Adopted</option>  
                            </select>
                        </li>

                        <li>
                            <button>UPDATE</button>
                        </li>
                    </ul>
                </form>
            </div>

        </div>
    </section>

</div>
</body>

<script src="../js/admin-panel.js" defer></script>

</html>
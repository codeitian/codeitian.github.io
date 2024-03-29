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
    <title>Animal Records</title>
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
            <a href="animal-records.php" class="links active"><i class="fa fa-paw" aria-hidden="true"></i>Animal Records</a>
            <a href="reservations-adoptions.php" class="links"><i class="fa fa-hand-paper-o" aria-hidden="true"></i>Reservations & Adoptions</a>
            <a href="users.php"  class="links"><i class="fa fa-users" aria-hidden="true"></i>Users Management</a>
            <a href="messages.php" class="links"><i class="fa fa-envelope" aria-hidden="true"></i>Messages</a>
            <a href="expenses.php" class="links"><i class="fa fa-money" aria-hidden="true"></i>Expenses</a>
            <a href="webpage.php" class="links"><i class="fa fa-globe" aria-hidden="true"></i>Webpage Management</a>
            <a href="../index.php" class="links"><i class="fa fa-home" aria-hidden="true"></i>Home Page</a>
            <a href="" class="links"  id="logOutLink"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

        </aside>

        <div class="content-wrapper">
            <h3 class="title">ANIMAL RECORDS MANAGEMENT</h3>

            <div class="content-bar">
                <div class="left-side"></div>

                <div>
                    <input type="text" id="search-animal" placeholder="Search for animal name">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                </div>
            </div>

            <div class="table-container">
                <table class="tablefor" id="animals-tb">
                    <thead>
                        <tr>
                            <th class="a-pic-col">Photo</th>
                            <th class="a-name-col">Name</th>
                            <th class="a-kind-col">Kind</th>
                            <th class="a-sex-col">Sex</th>
                            <th class="a-age-col">Age</th>
                            <th class="a-desc-col">Description</th>
                            <th class="a-datea-col">Date Added</th>
                            <th class="a-status-col">Status</th>
                            <th class="a-buttons-col"></th>
                        </tr>
                    </thead>
    
                    <tbody>
                        <tr>
                            <td class="a-pic-col"><img src="" alt=""></td>
                            <td class="a-name-col">Luna</td>
                            <td class="a-kind-col">Dog</td>
                            <td class="a-sex-col">Female</td>
                            <td class="a-age-col">3 months</td>
                            <td class="a-desc-col">Black, mahilig matulog.</td>
                            <td class="a-datea-col">2001-01-01</td>
                            <td class="a-status-col">Adoptable</td>
                            <td class="a-buttons-col">
                                <form action="" method="post">
                                   <button><a href="">EDIT</a></button>
                                   <button>DELETE</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Adding animal form -->
            <label class="label-ana">Add New Animal</label>
            <form id="add-animal-form" enctype="multipart/form-data">
               <div class="left">
                    <span>
                        <label>Image: </label>
                        <input type="file" required>
                    </span>

                    <span>
                        <label>Image: </label>
                        <input type="file">
                    </span>

                    <span>
                        <label>Image: </label>
                        <input type="file">
                    </span>

               </div>

               <div class="center">
                    <span>
                        <label>Name:</label>
                        <input type="text" placeholder="Please put a unique animal name." required>
                    </span>

                    <span>
                        <label>Kind:</label>
                        <select name="" id="">
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                            <option value="Others">Others</option>
                        </select>
                    </span>

                    <span>
                        <label>Sex:</label>
                        <select name="" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="---">---</option>
                        </select>
                    </span>

                    <span>
                        <label>Age:</label>
                        <input type="text">
                    </span>

                    
               </div>

               <div class="right">
                    <label>Characteristic/Description:</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Put a short description or note. Limits to 125 characters."></textarea>
                        <button type="submit">ADD</button>
               </div>

            </form>

        </div>
    </section>

</div>
</body>

<script src="../js/admin-panel.js" defer></script>

</html>
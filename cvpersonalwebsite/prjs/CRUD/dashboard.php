<?php
    require_once("../inc/snClass.php");
    $userdetails = $system->getUserData();
    $user = $system->currentUser($_GET['user']);
    date_default_timezone_set('Asia/Manila');
    $current_timezone = date_default_timezone_get();
    $currentDate = date("Y-m-d");
    $dateCreated = date("F j, Y", strtotime($currentDate));
    $specificDate = new DateTime($currentDate); // Create a DateTime object from the current date
    $specificDate->sub(new DateInterval('P5D')); // Subtract 5 days from the specific date
    $pastDate = $specificDate->format('Y-m-d'); // Format the result as a string (YYYY-MM-DD)

    if(!$userdetails){
        header("Location: ../index.php");
    }else{
        $users = $system->displayAllCustomers();


        $years = $system->showAllYears();

        //forGuestsChart
        $guests = $system->displayAllGuests();
        $adultCount = $guests['adultCount'];
        $childCount = $guests['childCount'];
        $totalCount = $adultCount + $childCount;
        $adultPercentage = ($adultCount / $totalCount) * 100;
        $childPercentage = ($childCount / $totalCount) * 100;

        $months = $system->showMostReservation();
        
        $bookings = $system->displayAllBookingsToday($currentDate);

        //forSentimentChart
        $sentiments = $system->showSentiment();
        $goodCount = $sentiments[0];
        $okayCount = $sentiments[2];
        $badCount = $sentiments[1];
        $totalCount1 = $goodCount + $badCount + $okayCount;
        $goodPercentage = ($goodCount / $totalCount1) * 100;
        $badPercentage = ($badCount / $totalCount1) * 100;
        $okayPercentage = ($okayCount / $totalCount1) * 100;

        $website = $system->displayWebsiteSetting();
        // $bookings = $system->showAllAppointmentsToday($currentDate);
        if(isset($bookings)){
            $bookingCount = count($bookings);
        }else{
            $bookingCount = 0;
        }

        $pendings = $system->showAllPendingAppointments();
        if(isset($pendings)){
            $pendingCount = count($pendings);
        }else{
            $pendingCount = 0;
        }
       
        $users =  $system->showAllUsers();
        if(isset($users)){
            $newUsersCount = count($users);
        }else{
            $newUsersCount = 0;
        }

        $testimonials =  $system->displayTestimonialsUserActive($userdetails['id']);
        $totalRating = 0;
        if($testimonials){
            foreach($testimonials as $testimony){
                $totalRating += $testimony['rating'];
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
    <title>Star Resort - Admin Dashboard!</title>
    <link rel="icon" href="../snlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>

<?php if(isset($website)){ ?>
    <style>
        :root{
            --my-orange: <?php echo $website['color'];?>
        }
    </style>
<?php }?>

<body>
    <div class="top-level-container">
    <?php if(isset($website['logo']) && $website['logo'] != ""){ ?>
        <a href="../index.php"><img src="../uploaded/users/<?php echo $website['logo'];?>" alt="" class="logo"></a>
    <?php }else{ ?>
        <a href="../index.php"><img src="../snlogo.png" alt="" class="logo"></a>
    <?php }?>


        <div>
        <a href="account.php?user=<?php echo $userdetails['id'];?>"><?php echo $userdetails['fullname'];?></a>
            <a href="logout.php">Log Out</a>
        </div>
    </div>

    <div class="navbar Backend">
        <div class="navbarlinks-container">
            <a href="dashboard.php?user=<?php echo $userdetails['id'];?>" class="active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            <a href="reservations.php?user=<?php echo $userdetails['id'];?>"><i class="fa fa-calendar" aria-hidden="true"></i>Reservations</a>
            <a href="fees.php?user=<?php echo $userdetails['id'];?>"><i class="fa fa-money" aria-hidden="true"></i></i>Pricing</a>
            <a href="gallery.php?user=<?php echo $userdetails['id'];?>"><i class="fa fa-picture-o" aria-hidden="true"></i>Gallery</a>
            <a href="testimonials.php?user=<?php echo $userdetails['id'];?>" ><i class="fa fa-comments" aria-hidden="true"></i>Reviews</a>
            <a href="website.php?user=<?php echo $userdetails['id'];?>" ><i class="fa fa-globe" aria-hidden="true"></i>Website</a>
            <a href="account.php?user=<?php echo $userdetails['id'];?>" ><i class="fa fa-user-circle" aria-hidden="true"></i>
            Account</a>
        </div>
        <img src="../myicons/menu-burger.png" alt="=" class="menu-btn">
        <p id="pageName">ACCOUNT</p>
    </div>



    <section class="all-content-container Backend">


    
<?php
    if(isset($_GET['sm'])){ ?>
        <div class="messagebox success" style="max-width:none;border-radius:0; margin:0;">
            <p><?php echo $_GET['sm'];?></p>
        </div>
    <?php }
?>

        <div class="items-container">

            <div class="item">
                <p><?php echo $bookingCount;?></p>
                <label>RESERVATIONS TODAY</label>
                <a href=""><?php echo $dateCreated;?></a>
                <i class="fa fa-calendar" id="item-logo" aria-hidden="true"></i>
            </div>

            <div class="item">
                <p><?php echo $pendingCount;?></p>
                <label>PENDING RESERVATIONS</label>
                <a href="reservationsall.php?user=<?php echo $userdetails['id'];?>&type=pending">Show Pending <i class="fa fa-arrow-right"></i></a>
                <!-- <a href="orders.php?user=<?php echo $userdetails['id'];?>">Show Info <i class="fa fa-arrow-right"></i></a> -->
                <i class="fa fa-calendar-plus-o" id="item-logo" aria-hidden="true"></i>
            </div>

            <div class="item">
                <p><p><?php echo $newUsersCount;?></p></p>
                <label>USERS</label>
                <a href="users.php?user=<?php echo $userdetails['id'];?>">Show Info <i class="fa fa-arrow-right"></i></a>
                <i class="fa fa-users" id="item-logo" aria-hidden="true"></i>
            </div>

            <div class="item">
                <?php $ave = $totalRating / count($testimonials);?> 
                <p><?php echo number_format($ave, 2)."<i class='fa fa-star'></i>";?></p>
                <label>RESORT RATING</label>
                <a href="testimonials.php?user=<?php echo $userdetails['id'];?>">Show Info <i class="fa fa-arrow-right"></i></a>
                <i class="fa fa-star-half-o" id="item-logo" aria-hidden="true"></i>
            </div>
        </div>

        
        <br>

        <div class="chartWrapper">
            <div><span>Guests (%)</span><canvas id="myPieChart"></canvas></div>
            <div class="sentimentDetectionContainer"><span>Sentiment Detection (%)</span><canvas id="myDonutChart"></canvas></div>
            <div id="allMonths">
                <span>Reservation
                    <select name="" id="" onchange="showDataByYear(this.value)">

                    <?php
                        if($years){
                            foreach($years as $y){ ?>
                                <option value="<?php echo $y['year'];?>"
                                <?php echo (date('Y') ==  $y['year'])?"selected":"";?>><?php echo $y['year'];?></option>
                    <?php       }
                        }
                    ?>
                    
                    </select>
                </span>
                <canvas id="mySBChart"></canvas>
            </div>
        </div>

        <div id="dataContainer">

        </div>

        <table class="backendTable bookings todayOnly" >
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Guests</th>
                    <th><input type="search" name="" id="searchRsrv" onkeyup="showReservationByUserName(this.value)" placeholder="Search reservation"></th>
                </tr>
            </thead>
            <tbody id="rows">
                <?php
                    if($bookings){
                        foreach($bookings as $book){ ?>
                            <tr onclick="redirect(<?php echo $book['booking_id'];?>)" title="Click to process">
                                <?php
                                    if(isset($book['profile_img']) && $book['profile_img'] != ""){ ?>
                                         <td style="text-align:center"><img src="../uploaded/users/<?php echo $book['profile_img'];?>" alt=""></td>
                                    <?php }else{ ?>
                                        <td style="text-align:center"><img src="../uploaded/users/default.png" alt=""></td>
                                    <?php }
                                ?>
                                <td><?php echo $book['name'];?></td>
                                <td><?php echo date("F j, Y", strtotime($book['date']));;?></td>
                                <td><?php echo $book['time'];?></td>
                                <td>Adult: <?php echo $book['adults'];?><br>
                                    Child: <?php echo $book['child'];?>
                                </td>
                                <td><i class="fa fa-pencil-square" aria-hidden="true" style="font-size: 1.3rem; color: var(--my-orange);"></i>
                                </td>
                            </tr>
                        <?php }
                    }else{ ?>
                        <tr>
                            <td></td>
                            <td>No reservations today.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                   <?php }
                ?>
            </tbody>
        </table>
        <br>
        <a href="" style="display:none" id="redirectTo"></a>
    </section>

    <!-- // JavaScript function to draw the pie chart
    function drawPieChart(data) {
        var canvas = document.getElementById('pieChartCanvas');
        var ctx = canvas.getContext('2d');

        var total = data.reduce(function (acc, value) {
            return acc + value;
        }, 0);

        var centerX = canvas.width / 2;
        var centerY = canvas.height / 2;
        var radius = Math.min(centerX, centerY) - 10;

        var startAngle = 0;
        data.forEach(function (value) {
            var sliceAngle = (Math.PI * 2 * value) / total;
            ctx.beginPath();
            ctx.moveTo(centerX, centerY);
            ctx.arc(centerX, centerY, radius, startAngle, startAngle + sliceAngle);
            ctx.closePath();
            ctx.fillStyle = getRandomColor(); // You can define a function to generate random colors
            ctx.fill();

            // Draw text label for the slice
            var labelX = centerX + (radius / 2) * Math.cos(startAngle + sliceAngle / 2);
            var labelY = centerY + (radius / 2) * Math.sin(startAngle + sliceAngle / 2);
            ctx.textAlign = 'center';
            ctx.fillStyle = 'black';
            ctx.fillText(Math.round((value / total) * 100) + '%', labelX, labelY);

            startAngle += sliceAngle;
        });
    }

    // Function to fetch data from PHP
    function fetchDataAndDrawChart() {
        fetch('data.php') // Replace 'data.php' with your PHP script URL
            .then(response => response.json())
            .then(data => drawPieChart(data))
            .catch(error => console.error(error));
    }

    // Call the function to fetch data and draw the chart
    fetchDataAndDrawChart();

    // Function to generate random colors
    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    } -->
</script>
</body>

<script src="../js/navbar.js"></script>

<!-- GUESTS -->
<script>
    // let data = <?php echo json_encode($guests); ?>;
    let adult = <?php echo json_encode($adultPercentage); ?>;
    let kid = <?php echo json_encode($childPercentage); ?>;

    let labels = ["Adults", "Kids"];
    let values = [adult, kid];

        let ctx =  document.querySelector("#myPieChart").getContext('2d');
        let myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        '#001F3F',
                        ' #87CEEB',
                        // Add more colors as needed
                    ],
                }]
            },

            options: {
                plugins: {
                    datalabels: {
                        color: 'white', // Label text color
                        anchor: 'end',  // Position of the labels (e.g., 'start', 'center', 'end')
                        align: 'end',   // Alignment of the labels (e.g., 'start', 'center', 'end')
                        font: {
                            size: 140,     // Label font size
                        },
                    },
                    
                },
            },
        });
</script>


<!-- MOST BOOKED MONTHS -->
<script>
    let newdata1 = <?php echo json_encode($months); ?>;
    // Extract data for the chart
    let newlabels1 = newdata1.map(item => item.month);
    let newvalues1 = newdata1.map(item => item.occurrence);

        let newctx1 =  document.querySelector("#mySBChart").getContext('2d');
        let mySBChart = new Chart(newctx1, {
            type: 'bar',
            data: {
                labels: newlabels1,
                datasets: [{
                    label: <?php echo date('Y');?>,
                    data: newvalues1,
                    backgroundColor: [
                        '#00274e',
                        '#003366',
                        '#004080',
                        '#005099',
                        '#0066b3',
                        '#0079cc',
                        '#008ce6',
                        '#00a0ff',
                        '#1ab3ff',
                        '#33bfff',
                        '#4dc3ff',
                        '#66ccff',
                        // Add more colors as needed
                    ],
                }]
            },

            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Total Reservations'
                        },ticks: {
                            stepSize: 5
                        }
                    }, x: {
                        title: {
                            display: true,
                            text: 'Months'
                        },
                        ticks: {
                            precision: 0 // Set precision to 0 to display only whole numbers
                        }
                    }
                }
            },

            // options: {
            //     label: {
            //         display: false, // Hide the legend
            //     }
            // }

        });
</script>

 <!-- EMOTIONS -->
<script>
   
    // Extract data for the chart
        let newlabels = ["Positive", "Neutral", "Negative"];
        let newvalues = [<?php echo $goodPercentage;?>, <?php echo $okayPercentage;?>, <?php echo $badPercentage;?>];
        // let newlabels = newdata.map(item => item.sex);
        // let newvalues = newdata.map(item => item.count);

            let newctx =  document.querySelector("#myDonutChart").getContext('2d');
            let myDonutChart = new Chart(newctx, {
                type: 'doughnut',
                data: {
                    labels: newlabels,
                    datasets: [{
                        data: newvalues,
                        backgroundColor: [
                            '#008000',
                            '#808080',
                            '#ff0000',
                            // Add more colors as needed
                        ],
                    }]
                },

                options: {
                    legend: {
                        position: 'bottom', // Position of the legend (top, bottom, left, right)
                    },
                    title: {
                        display: true,
                        text: 'Donut Chart Example',
                    },
                    cutout: '55%', // Control the size of the central hole (e.g., 80% for a smaller hole)
                   
                },

        
            });
       
</script>

<script>
      function redirect(id){
            const redirectTo = document.getElementById("redirectTo");
            redirectTo.href = "reservation-detail.php?id=" + id + "&GuestCheckin";
            redirectTo.click();
        }

        function showReservationByUserName(name){
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function(){
                    document.querySelector("#rows").innerHTML = this.responseText;
                }

                xhttp.open("GET", "../result/getBookingsByName.php?name=" + name + "&todayOnly");
                xhttp.send();
        }

       
</script>

<!-- <script>
     function showDataByYear(year){
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function(){
                    document.querySelector("#allMonths").innerHTML = this.responseText;
                }

                // xhttp.open("GET", "../result/getDataByYear.php?year=" + year);
                xhttp.open("GET", "../result/getDataByYear.php?year=" + year);
                xhttp.send();

                console.log(year);
        }
</script> -->

<script>
     function showDataByYear(year){
                const xhttp = new XMLHttpRequest();
                    xhttp.onload = function () {
                    const data = JSON.parse(this.responseText);

                    destroyChart();

                    // Assuming renderChart is a function that renders the chart
                    renderChart(data, year);
                };

                xhttp.open("GET", "../result/getDataByYear.php?year=" + year);
                xhttp.send();

                console.log(year);
        }


        function destroyChart() {
            // Assuming 'mySBChart' is the ID of your canvas element
            const existingChart = Chart.getChart("mySBChart");
            if (existingChart) {
                existingChart.destroy();
            }
        }


        function renderChart(data, y){
            // Extract data for the chart
            let newlabels1 = data.map(item => item.month);
            let newvalues1 = data.map(item => item.occurrence);

                let newctx1 =  document.querySelector("#mySBChart").getContext('2d');
                let mySBChart = new Chart(newctx1, {
                    type: 'bar',
                    data: {
                        labels: newlabels1,
                        datasets: [{
                            label: y,
                            data: newvalues1,
                            backgroundColor: [
                                '#00274e',
                                '#003366',
                                '#004080',
                                '#005099',
                                '#0066b3',
                                '#0079cc',
                                '#008ce6',
                                '#00a0ff',
                                '#1ab3ff',
                                '#33bfff',
                                '#4dc3ff',
                                '#66ccff',
                                // Add more colors as needed
                            ],
                        }]
                    },

                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Total Reservations'
                                },ticks: {
                                    stepSize: 5
                                }
                            }, x: {
                                title: {
                                    display: true,
                                    text: 'Months'
                                },
                                ticks: {
                                    precision: 0 // Set precision to 0 to display only whole numbers
                                }
                            }
                        }
                    },

                    // options: {
                    //     label: {
                    //         display: false, // Hide the legend
                    //     }
                    // }

                });
            }
</script>



</html>
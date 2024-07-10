<?php
    require_once('inc/mainClass.php');
    date_default_timezone_set('Asia/Manila');
    $current_timezone = date_default_timezone_get();
    $currentDate = date("Y-m-d");
    $system->removeData($currentDate);
    $system->addRecord($currentDate);
    $system->deleteRecord();
    $records = $system->showAllRecords();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD - Christian Virrey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <form method="POST" id="mainForm" enctype="multipart/form-data">
        <p>Add new record</p>
        <input type="hidden" name="id" id="idTxt">
        <input type="hidden" name="currentProfileTxt" id="currentProfileTxt">
        <img src="uploads/default.png" alt="" id="profile">
        <input type="file" name="image" id="fileField" accept=".jpg, .jpeg, .png" hidden>

        <label for="">First Name</label>
        <input type="text" name="fname" id="fnameTxt" required>

        <label for="">Middle Name</label>
        <input type="text" name="mname" id="mnameTxt">

        <label for="">Last Name</label>
        <input type="text" name="lname" id="lnameTxt" required>

        <label for="">Birthday</label>
        <input type="date" name="birthday" id="bdayTxt" required>

        <label for="">Gender</label>
        <select name="gender" id="" required>
            <option value="">Select gender:</option>
            <option class="options" value="Male">Male</option>
            <option class="options" value="Female">Female</option>
            <option class="options" value="Other">LGBTQIA++</option>
        </select>
        <br>
        <button type="submit" name="add" id="submitBtn">ADD</button>
        <button type="reset" id="clearBtn">CLEAR</button>
        <br>
    </form>
    <div class="container">

    <div class="topBar"><button id="addrbtn">Add Record</button></div>
        <div class="graphsWrapper">
            <div><canvas id="myPieChart"></canvas></div>
            <div class="sentimentDetectionContainer"><canvas id="myDonutChart"></canvas></div>
            <div class="barGraph"><canvas id="myBars"></canvas></div>
        </div>

        <span><p>Designed and Developed  by Christian Virrey</p> <input type="search" name="" id="" onkeyup="searchRecord(this.value)" placeholder="Search a name"></span>
        <?php
            $system->updateRecord();
        ?>
        <form method="POST">
            <table>
                <thead>
                    <th class="idsContainer"><button id="deleteBtn" name="delete" type="submit"><i class="fa fa-trash"></i></button></th>
                    <th></th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Age</th>
     
                </thead>
                <tbody id="rows">
                    <?php if($records){
                        foreach($records as $rec){ ?>
                            <tr class="rows" onclick="selectRow(
                                this,
                                `<?php echo $rec['id'];?>`,
                                `<?php echo $rec['image'];?>`,
                                `<?php echo $rec['fname'];?>`,
                                `<?php echo $rec['mname'];?>`,
                                `<?php echo $rec['lname'];?>`,
                                `<?php echo $rec['birthday'];?>`,
                                `<?php echo $rec['gender'];?>`,
                            )">
                                <td><input class="checkbox" type="checkbox" name="" id="" onclick="selectRecord(this,`<?php echo $rec['id'];?>`)"></td>
                                <td><img src="uploads/<?php  echo $rec['image'] != '' ?  $rec['image'] : 'default.png'; ?>" alt=""></td>
                                <td><?php echo $rec['fname'];?></td>
                                <td><?php echo $rec['mname'];?></td>
                                <td><?php echo $rec['lname'];?></td>
                                <td><?php echo $rec['gender'] == 'Other'  ? 'LGBTQIA++' : $rec['gender']; ?></td>
                                <td><?php echo $rec['age'];?></td>
                            </tr>
                    <?php   }
                    }else{ ?>
                            <tr>
                                <td>Empty records.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </form>
        <p class="noteText">NOTE: Don't waste your time. This system does not do anything, and it has automatic deletion of data. <br> <br> This is a project I did just for my PHP(OOP) CRUD skills.</p> 
    </div>
    
</body>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito+Sans&family=Orbitron:wght@500&family=Roboto&family=Poppins&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
</html>
<script>
    const fileField = document.getElementById("fileField");
    const profile = document.getElementById("profile");

    profile.addEventListener('click', () =>{
        console.log('here');
        fileField.click();
    })

    fileField.addEventListener('change', () =>{
        profile.src = URL.createObjectURL(fileField.files[0]);
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="chart.js"></script>

<script src="main.js"></script>
<script>
    let checkBoxes = document.querySelectorAll('.checkbox');
    let deleteBtn = document.querySelector('#deleteBtn');
    let idsContainer = document.querySelector('.idsContainer');


    function showTrashButton(recordId){
        let checkBoxes = document.querySelectorAll('.checkbox');
        let deleteBtn = document.querySelector('#deleteBtn');
        
            if(checkBoxes){
                let checkedBox = 0;
                checkBoxes.forEach(element => {
                   element.checked ? checkedBox++ : '';
                });
                deleteBtn.style.setProperty('display', checkedBox > 0 ? 'flex' : 'none');
            }
    }

    function selectRecord(chck, recordId){
        let idsContainer = document.querySelector('.idsContainer');

        console.log(recordId);
        showTrashButton(recordId);

        if(chck.checked){
            let inp = document.createElement('input');
            inp.id = "data"+recordId;
            inp.value = recordId;
            inp.name = "recordID[]";
            inp.hidden = true;
            idsContainer.appendChild(inp);
        }else{
            let childToRemove = document.getElementById(`data${recordId}`);
            childToRemove.remove();
        }

    }
</script>
<script>
    document.getElementById('clearBtn').addEventListener('click', ()=>{
        document.getElementById('clearBtn').textContent = "CLEAR";
        document.getElementById('submitBtn').textContent = "ADD";
        document.getElementById('submitBtn').className = "";
        document.getElementById('profile').src = "uploads/default.png";
        
        let tableRows = document.querySelectorAll('.rows');
        tableRows.forEach(element => {
            element.className = "rows";
        });
    })

    function searchRecord(name){

        let checkBoxes = document.querySelectorAll('.checkbox');
        let deleteBtn = document.querySelector('#deleteBtn');
        
        if(checkBoxes){
            checkBoxes.forEach(element => {
                element.checked ? element.checked = false : '';
            });
            deleteBtn.style = "dispay: none;";
        }

        let xhttp = new XMLHttpRequest();
        xhttp.onload = function (){
            document.getElementById('rows').innerHTML = this.responseText;
        }

        xhttp.open("GET", "results/name.php?name="+ name);
        xhttp.send();
    }


</script>
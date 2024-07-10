let screenWidth =  window.innerWidth;
let mainForm = document.getElementById('mainForm');
let addrbtn = document.getElementById('addrbtn');
let clearBtn = document.getElementById('clearBtn');

function toggleForm(){
    if(window.innerWidth <= 500){
        mainForm.style = "display:none;";
        addrbtn.addEventListener('click', () =>{
            mainForm.style = "display:flex;";
        });

        clearBtn.addEventListener('click', () =>{
            mainForm.style = "display:none;";
        });
        
     }else{
        mainForm.style = "display:flex;";
     }
}

function selectRow(row, rId, image, fname, mname, lname, bday, gender){
     
    let  submitBtn = document.getElementById('submitBtn');

    let tableRows = document.querySelectorAll('.rows');

    tableRows.forEach(element => {
        element.className = "rows";
    });
    row.className = "rows selected";

    document.getElementById('idTxt').value = rId;
    document.getElementById('profile').src =  image ? 'uploads/'+image : 'uploads/default.png';
    document.getElementById('currentProfileTxt').value =  image;
    document.getElementById('fnameTxt').value = fname;
    document.getElementById('mnameTxt').value = mname;
    document.getElementById('lnameTxt').value = lname;
    document.getElementById('bdayTxt').value = bday;

    submitBtn.textContent = "UPDATE";
    submitBtn.className = "update";
    document.getElementById('clearBtn').textContent = "CANCEL";
    submitBtn.name = "update";

    let genderOptions = document.querySelectorAll('.options');
    genderOptions.forEach(element => {
        element.value == gender ? element.selected = true : '';
    });
    
    if(window.innerWidth <= 500){
            mainForm.style = "display:flex;";
     }

}

toggleForm();

 window.addEventListener('resize', ()=>{
    toggleForm();
 })

<?php

include('Connection.php');
error_reporting(0);
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $workEmail = $_POST['workEmail'];
    $pfNumber = $_POST['pfNumber'];
    $designation = $_POST['designation'];
    $tag = $_POST['tag'];
    $serialNo = $_POST['serial_number'];
    $date = $_POST['date'];
    $bag = $_POST['bag'];
    $mouse = $_POST['mouse'];
    $charger = $_POST['charger'];
    $assetType = $_POST['Asset_type'];
    $remarks = $_POST['remarks'];

    $query = mysqli_query($con, "insert into assets (Username, Work_Email, PF_Number, Designation, IRA_Tag, Serial_No, Date_Issued, Laptop_Bag, Mouse, Charger, Asset_Type, Remarks)
     Values ('$name', '$workEmail', '$pfNumber', '$designation', '$tag', '$serialNo', '$date', '$bag', '$mouse', '$charger', '$assetType', '$remarks')");

     if($query){
          echo "<script> alert('Data inserted successfully!')
          
          </script>";
     }
     else{
        echo "<script> alert('An Error Occurred!') </script>";
     }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Log New Device</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
  
body {
  font-family: "Poppins", sans-serif;
    margin: 0;
    padding-left: 10px;
    padding-right: 10px;
  background-color: #f4f4f4;

  }
  
  .header {
    display: flex;
    justify-content: space-between; 
    border-bottom: 1px solid darkgray;  
    background-color: white;
    align-items: center;
    padding: 10px 20px;
    color: #fff;
  }
  
  .logo img {
    margin-top: 17px;
    margin-left: 20px;
    width: 160px;
    height: 80px;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #81eb07; /* Green color */
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  ul{
    list-style: none;
  }
  .dropdown-content a {
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {
    background-color: #5D4037; /* Darker brown on hover */
  }
  
  .container {
  position: absolute;
  top: 25%;
  right: 10%;
  width: 60%; /* Adjust the width as needed */
  height: auto;
  margin: 0;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
  
  h1 {
    text-align: center;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  label {
    display: block;
    font-weight: bold;
  }
  
  input[type="text"],
  
  select {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 14px;
    margin-top: 5px;
  }
  
  button {
    padding: 10px 20px;
    background-color: rgb(172, 123, 33);
    width: 100px;
     height: 40px;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  
  button:hover {
    background-color: #ffffff;
    color: black;
    border: 1px solid black;
  }
  
nav {
  position:absolute;  
  top: 25%;
  left: 0;
  margin-left: 10px;
  height: 206%;
  width: 250px;
  box-shadow: 2px 2px 3px grey;
  background: #fff;
  z-index: 100; 
  display: flex;
}

.navbar {
  width: calc(100% - 250px);
  margin-left: 250px;
}



a{
    position: relative;
    color: rgb(85, 83, 83);
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    display: table;
    width: 250px;
    padding: 20px;
}
a span:after{
    content: "";
    position: absolute;
    background-color: palevioletred;
    height: 3px;
    width: 0;
    left: -10px;
    bottom: -5px;
    transition: 0.3s;
}
a span:hover:after{
    width: 100px;
}
nav .fas{
    position: relative;
    width: 70px;
    height: 30px;
    top: 14px;
    font-size: 20px;
    text-align: center;}
   
    .nav-item {
  margin-left: -12%;
  width: 250px;
}
#upload{
    padding: 10px 10px;
    padding-left: 15px;
    background-color: rgb(172, 123, 33);
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: normal;
    height: 20px;
    width: 75px;
    margin-top: 4px;
}
 #upload:hover{
  background-color: #ffffff;
    color: black;
    border: 1px solid black;

 }


  
  </style>
    <script type ="text/javascript">
    
    /**function preventBack(){window.history.forward()}
           setTimeout("preventBack()", 0)
        window.onunload = function(){null;}*/
 
 
 
 </script>
</head>
<body>
    <header class="header">
        <div class="logo">
          <img src="logo.png" alt="Company Logo">
        </div>
      
          <div class="dropdown" id="logoutDropdown">
            <button class="dropbtn">Admin</button>
            <div class="dropdown-content">
              <a href="#">Logout</a>
          
          </div>
        </div>
      </header>
      <div class="container2">
<nav>
    <ul>
        <li><a href="Index.php">
            <i class="fas fa-new Dashboard"></i>
            <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="index(2).php">
            <i class="far fa-new envelope"></i>
            <span class="nav-item">New Entries</span>
        </a></li>
        <li><a href="Searchbar.php">
            <i class="fas fa-search"></i>
            <span class="nav-item">Details</span>
        </a></li>
        <li><a href="help.php">
            <i class="far fa-question-circle"></i>
            <span class="nav-item">Help</span>
        </a></li>
        <li><a href="Login.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
        </a></li>
    </ul>
</nav>
</div>
  <div class="container">
    <h1>Enter New Asset</h1>

    <form id="deviceForm" method = "POST">


      <div class="form-group">
        <label for="staffName">Name of Staff or Client:</label>
        <input type="text" id="staffName" name="name">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="workEmail">
      </div>

      <div class="form-group">
        <label for="pfNumber">PF Number:</label>
        <input type="text" id="pfNumber" name="pfNumber">
      </div>

      <div class="form-group">
        <label for="designation">Designation:</label>
        <input type="text" id="designation" name="designation">
      </div>

      <div class="form-group">
        <label for="iraTag">IRA Tag:</label>
        <input type="text" id="iraTag" name="tag">
      </div>

      <div class="form-group">
        <label for="serialNumber">Serial Number:</label>
        <input type="text" id="serialNumber" name="serial_number">
      </div>

      <div class="form-group">
        <label for="dateIssued">Date Issued:</label>
        <input type="date" id="dateIssued" name="date">
      </div>

      <div class="form-group">
        <label>Additional Items:</label><br>

        <input type="checkbox" id="laptopBag" name="bag">
        <label for="laptopBag">Laptop Bag</label><br>

        <input type="checkbox" id="mouse" name="mouse">
        <label for="mouse">Mouse</label><br>

        <input type="checkbox" id="charger" name="charger">
        <label for="charger">Charger</label><br>

      </div>
      <div class="form-group">
        <label for="assetType">Asset Type:</label>
        <select id="assetType" name="Asset_type">
          <option value="laptop">Laptop</option>
          <option value="desktop">Desktop</option>
        </select>
      </div>

      <div class="form-group">
        <label for="remarks">Remarks:</label><br>
        <textarea id="remarks" name="remarks" rows="4" cols="50"></textarea>
      </div>
     <button type="submit" name = "submit">Submit</button>
     <a href="Downloadfm.php" id = "upload" onclick = "downloadPDF(event)">Download</a>
    </form>

    
  
  </div>

  <script>

/**if( window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}*/

 
function downloadPDF(event) {
   event.preventDefault()
// Get form data
 

  // Use html2pdf to generate PDF from the form container
  
let formData = {
'Name': document.getElementById('staffName').value,
'Email': document.getElementById('email').value,
'PF Number': document.getElementById('pfNumber').value,
'Designation': document.getElementById('designation').value,
'IRA Tag': document.getElementById('iraTag').value,
'Serial Number': document.getElementById('serialNumber').value,
'Date Issued': document.getElementById('dateIssued').value,
'Laptop Bag': document.getElementById('laptopBag').checked,
'Mouse': document.getElementById('mouse').checked,
'Charger': document.getElementById('charger').checked,
'Asset Type': document.getElementById('assetType').value,
'Remarks': document.getElementById('remarks').value
}

// Convert form data to JSON
let jsonData = JSON.stringify(formData, null, 2)

// Create a Blob containing the JSON data
let blob = new Blob([jsonData], { type: 'application/json' })

// Create a download link
let downloadLink = document.createElement('a')
downloadLink.href = window.URL.createObjectURL(blob)
downloadLink.download = 'form_data.json'

// Append the link to the document and trigger the download
document.body.appendChild(downloadLink)
  
// Remove the link from the document
document.body.removeChild(downloadLink)

let formContainer = document.querySelector('#deviceForm')

 

// Create options for html2pdf
let options = {
  margin: 10,
  filename: 'form_data.pdf',
  image: { type: 'jpeg', quality: 0.98 },
  html2canvas: { scale: 2 },
  jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
  jsPDFCustomizer: { function (doc) {
      // Adjust the position of the content in the PDF
      doc.fromHTML(document.querySelector('#deviceForm'), 15, 15)
    }}
  }
   
  // Use html2pdf to generate PDF from the form container
  html2pdf(formContainer, options)



}

 

</script>

</body>
</html>

  

         
   
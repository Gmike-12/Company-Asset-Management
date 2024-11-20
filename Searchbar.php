
 

<?php 
include('Connection.php');
error_reporting(0);

if(isset($_GET['User_Id'])){
  $User_id = $_GET['User_Id'];
  $delete = mysqli_query($con, "DELETE FROM `assets` WHERE `User_Id` = $User_id");
  header("Location: Searchbar.php");
  die;
}

$query = "SELECT * FROM assets";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

body {
  font-family: "Poppins", sans-serif;
    margin: 0;
    padding-left: 10px;
    padding-right: 10px;
    background-color: #f4f4f4;
    margin-left: 20%;
  }
  a{
    text-decoration: none;
  }
  button {
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-right: 5px;
  }
 
  
  button:hover {
    background-color: #bbb; 
  }
  
  
  .search-bar {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 10px;
    margin-top: 8px;
    justify-content: start;
  }
  
  input[type="text"] {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    margin-right: 10px;
  }
  #searchInput{
    width: 250px;
  }
  
  button {
    padding: 8px 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-right: 5px;
  }
  
  button:hover {
    background-color: #bbb; 
  }
 
  tr:nth-child(even){
    background-color: lightgrey;
  }
  #submit, #refresh{
    background-color: rgb(172, 123, 33);
    border: none;
    width: 75px;
    height: 30px;
    border-radius: 2px;
    margin-left: 0px;
  }
  #submit:hover, #refresh:hover{
     background-color: wheat;
  }
  #refresh{
      margin-right: 50%;
  }
  
  .content-table {
    width:60%;
    font-size: small;
    margin: 20px auto;
    border-collapse: collapse;
    margin-left: 9px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
  }
  #searchdisp{
    font-size: small;
    width: 98%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .content-table th,#searchdisp td, #searchdisp th,
  .content-table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
  }
  
  .content-table th {
    background-color: #f2f2f2;
  }
  nav {
  position:absolute; /* Change to fixed for a sticky effect */
  top: 25%;
  left: 0;
  height: 200%;
  width: 250px;
  box-shadow: 2px 2px 3px grey;
  background: #fff;
  z-index: 100; 
  display: flex;/* Ensure the navbar is above other elements */
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
    display: table;
    width: 150px;
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
ul{
  list-style: none;
}
.header {
    display: flex;
    position: relative;
    justify-content: space-between;
    background-color: white;
    border-bottom: 1px solid darkgray;
    padding: 10px 20px;
    color: #fff;
    width:143%;
    right: 25%;
  }
  
  .logo img {
    margin-top: 17px;
    margin-left: 20px;
    width: 160px;
    height: 80px;
  }
  
  .dropdown {
    position: relative;
    margin-top: 2%;
    display: inline-block;
  }
  .dropbtn{
    background-color:rgb(172, 123, 33) ;
  }
  .dropbtn:hover{
    background-color: wheat;
  }
  #upload{
    padding: 10px 10px;
    padding-left: 15px;
    background-color: rgb(172, 123, 33);
    color: black;
    border: none;
    border-radius: 2px;
    margin-left: 10px;
    cursor: pointer;
    font-size: small;
    font-weight: normal;
    height: 20px;
    width: 100px;
    margin-top: 4px;
}
 #upload:hover{
  background-color: #ffffff;
    color: black;
    border: 1px solid black;

 }
  
  .btn{
    background: rgb(172, 123, 33);
    font-family: "Poppins", sans-serif;
    text-decoration: none;
    border-radius: 2px;
    height: 25px;
    color: black;
    width: 100px;

  }
  
  .btn:hover{
    border-bottom: none;
    background: wheat;
     
  }
  .btn:after{
    content: "";
    position: absolute;
    height: 3px;
    width: 0;
    left: -10px;
    bottom: 5px;
  }
  @media screen and (max-width: 1022px) {
    
  }
  
    </style>
      <script type ="text/javascript">
    
    function preventBack(){window.history.forward()}
           setTimeout("preventBack()", 0)
        window.onunload = function(){null;}
 
 
 
 </script>
    <meta charset="UTF-8">
    <title>Issued Assets</title>
</head>
<body>
<header class="header">
        <div class="logo">
          <img src="logo.png" alt="Company Logo">
        </div>
      
          <div class="dropdown" id="logoutDropdown">
            <button class="dropbtn">Admin</button>
        </div>
      </header>
  

<div class="search-bar">
    <form method="GET">
        <input type="text" id="searchInput" name="search" placeholder="Search..." value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
        <button type="submit" id="submit">Search</button>
    </form>
</div>
<a href="" id = "upload" onclick = "downloadPDF(event)">Download PDF</a>
    
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


<?php if(!isset($_GET['search'])): ?>
    <!-- Display the original table when no search parameter is set -->

    <table class="content-table">
        <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Work Email</th>
        <th>PF/NO</th>
        <th>Designation</th>
        <th>IRA Tag</th>
        <th>S/N</th>
        <th>DateIssued</th>
        <th>bag</th>
        <th>mouse</th>
        <th>charger</th>
        <th>Asset</th>
        <th>Remarks</th>
        <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?php echo $row['User_Id']; ?></td>
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Work_Email']; ?></td>
        <td><?php echo $row['PF_Number']; ?></td>
        <td><?php echo $row['Designation']; ?></td>
        <td><?php echo $row['IRA_Tag']; ?></td>
        <td><?php echo $row['Serial_No']; ?></td>
        <td><?php echo $row['Date_Issued']; ?></td>
        <td><?php echo $row['Laptop_Bag']; ?></td>
        <td><?php echo $row['Mouse']; ?></td>
        <td><?php echo $row['Charger']; ?></td>
        <td><?php echo $row['Asset_Type']; ?></td>
        <td><?php echo $row['Remarks']; ?></td>
                <td>
                    <a href="Searchbar.php?User_Id=<?php echo $row['User_Id']; ?>" class="btn">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
    <!-- Display the searched results in a new table -->
    <table id="searchdisp">
        <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Work Email</th>
        <th>PF/NO</th>
        <th>Designation</th>
        <th>IRA Tag</th>
        <th>S/N</th>
        <th>DateIssued</th>
        <th>bag</th>
        <th>mouse</th>
        <th>charger</th>
        <th>Asset</th>
        <th>Remarks</th>
        <th>Action</th>
        </tr>
        <?php include('searchFunctionality.php'); ?>
    </table>
  
<?php endif; ?>

</body>


<script>
document.addEventListener("DOMContentLoaded", function () {
    let input = document.getElementById("searchInput");
    let originalTable = document.querySelector(".content-table");
    let searchTable = document.getElementById("searchdisp");

    function clicked() {
        input.value = "";
    }

    function downloadPDF(event) {
        event.preventDefault();

        let formContainer;
        let tableId;

        if (searchTable.style.display === "none") {
            formContainer = originalTable.outerHTML;
            tableId = "content-table";
        } else {
            formContainer = searchTable.outerHTML;
            tableId = "searchdisp";
        }

        // Create options for html2pdf
        let options = {
            margin: 10,
            filename: 'table_data.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' },
            jsPDFCustomizer: function (doc) {
                // Adjust the position of the content in the PDF
                doc.fromHTML(document.getElementById(tableId).outerHTML, 15, 15);
            }
        };

        // Use html2pdf to generate PDF from the form container
        html2pdf().from(formContainer).set(options).outputPdf(function (pdf) {
            // Create a Blob containing the PDF data
            let blobPDF = new Blob([pdf], { type: 'application/pdf' });

            // Create a download link for PDF file
            let downloadLinkPDF = document.createElement('a');

            // Set attributes for the download link
            downloadLinkPDF.href = window.URL.createObjectURL(blobPDF);
            downloadLinkPDF.download = 'table_data.pdf';

            // Append the link to the document and trigger the download
            document.body.appendChild(downloadLinkPDF);
            downloadLinkPDF.click();

            // Remove the link from the document
            document.body.removeChild(downloadLinkPDF);
        });
    }

    // Add event listener to the Download PDF link
    document.getElementById("upload").addEventListener("click", downloadPDF);
})
 



 

    // Add event listener to the Download PDF link




 /**function downloadPDF(event) {
   event.preventDefault()
// Get form data
 

  // Use html2pdf to generate PDF from the form container

// Convert form data to JSON
let jsonData = JSON.stringify(formData, null, 2)

// Create a Blob containing the JSON data
let blob = new Blob([jsonData], { type: 'application/json' })

// Create a download link
let downloadLink = document.createElement('a')
downloadLink.href = window.URL.createObjectURL(blob)
downloadLink.download = 'table_data.json'

// Append the link to the document and trigger the download
document.body.appendChild(downloadLink)
  
// Remove the link from the document
document.body.removeChild(downloadLink)

let formContainer = document.querySelector('.content-table').innerHTML

 

// Create options for html2pdf
let options = {
  margin: 10,
  filename: 'table_data.pdf',
  image: { type: 'jpeg', quality: 0.98 },
  html2canvas: { scale: 2 },
  jsPDF: { unit: 'mm', format: 'a4', orientation: 'landscape' },
  jsPDFCustomizer: { function (doc) {
      // Adjust the position of the content in the PDF
      doc.fromHTML(document.querySelector('.content-table').innerHTML, 15, 15)
    }}
  }
   
  // Use html2pdf to generate PDF from the form container
  html2pdf(formContainer, options)



}*/



</script>
</html>






   


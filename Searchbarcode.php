


<?php

include('Connection.php');




if(isset($_GET['User_id'])){

    $User_id = $_GET['User_id'];
    $delete = mysqli_query($con, "DELETE FROM `assets` WHERE `User_id` = $User_id");

    header("Location:Searchbar.php");
    die;

}

$query = "SELECT * FROM assets";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  
  .top-left-buttons {
    position: absolute;
    top: 20px;
    left: 20px;
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
    background-color: #bbb; /* Darker grey on hover */
  }
  
  
  .search-bar {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 10px;
    margin-top: 20px;
    margin-right: 20px;
  }
  
  input[type="text"] {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    margin-right: 10px;
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
    background-color: #bbb; /* Darker grey on hover */
  }
  .btn{
    background: rgb(172, 123, 33);
    padding: 7px 30px;
    text-decoration: none;
    color: black;

  }
  .btn:hover{
    background: wheat;
  }
  
  .content-table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .content-table th,
  .content-table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
  }
  
  .content-table th {
    background-color: #f2f2f2;
  }
  
    </style>
  <meta charset="UTF-8">
  <title>Search Bar with Table</title>
  <link rel="stylesheet" href="searchbar.css">
</head>
<body>
  <div class="top-left-buttons">
    <button>Add</button>
     
    
  </div>

  <div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search...">
    <button>Search</button>
  </div>

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
    
      <tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <td><?php echo $row['User_id']; ?></td>
        <td><?php echo $row['Name']; ?></td>
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
            <a href="Searchbar.php?User_id=<?php echo $row['User_id']; ?>" class="btn">Delete</a>
        </td>
</tr>
    <?php endwhile; ?>

        

  </table>

 
</body>
</html>










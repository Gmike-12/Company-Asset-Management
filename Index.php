
<?php

include('Connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

*{
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    left: 0;
}
body{
  font-family: "Poppins", sans-serif;
    background: whitesmoke;
    user-select: none;
}
.container{
    display: flex;
}
nav{
    
    margin-top: 11%;
    position: relative;
    left: 0;
    bottom: 0;
    box-shadow: 2px 2px 3px grey;
    width: 250px;
    height:532px;
    background: #fff;
  }
  .navbar{
    width: 80%;
    margin: 0 auto;
}

.logo span{
    font-weight: bold;
    padding-left: 15px;
    font-size: 10px;
    text-transform: uppercase;
}
a{
    position: relative;
    color: rgb(85, 83, 83);
    font-size: 14px;
    font-weight: bold;
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
    left: 30px;
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
    text-align: center;
   
}
.nav-item{
    position: center;
    top: 10px;
    margin-left: 10px;
    width: 250px;
}

.logout{
    position: relative;
    bottom: 0;
}
/*main section*/
.main{
    position: relative;
    padding: 20px;
    width: 100%;
    left: 0;
}
.main-top{
  border-bottom: 1px solid darkgray;
   margin-top: -2%;
    display: flex;
    width: 100%;
}
.semibody{
  margin-bottom: -3%;
}
.main-top i{
    position: relative;
    right: 0;
    margin: 10px 30px;
    color: rgb(11, 100, 109);
    cursor: pointer;
}
.main-skills{
    display: inline-block;
    margin-top: 20px;
}
.main-skills .card{
    display: flex;
    width: 100%;
    margin: 10px;
    background: white;
    text-align: center;
    border-radius: 30px;
    padding: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
 
.main{
  width: 100%;
}
.main-top{
  width: 130%;
  margin-left: -28%;
  background: #fff;
  padding: 10px;
  justify-content: space-around;
  text-align: center;
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgb(43, 43, 43);
}
.main-body{
  padding: 10px 10px 10px 20px;
}
h1{
  margin: 20px 10px;
}
.logo{
  height: 80px;
    text-align: center;
    margin-left: -8px;
    margin: 10px 0 0 10px;
}
.logo img{
    width: 100px;
    border-radius: none;
}
.headertxt{
  margin-left: 25%;
  margin-top: 3%;
}


.row p{
  color: rgb(54, 54, 54);
  font-size: 15px;
}
.row p span{
  color: blueviolet;
}
.job_card{
  width: 100%;
  padding: 15px;
  cursor: pointer;
  display: flex;
  border-radius: 10px;
  background: #fff;
  margin-bottom: 15px;
  justify-content: space-between;
  border: 2px solid rgb(190, 190, 190);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}
.job_details{
  display: flex;
}
.job_details .img{
  display: flex;
  justify-content: center;
  align-items: center;
}
.job_details .img i{
  width: 70px;
  font-size: 3rem;
  margin-left: 1rem;
  padding: 10px;
  color: rgb(82, 22, 138);
  background: rgb(216, 205, 226);
}
.job_details .text{
  margin-left: 2.3rem;
}
.job_details .text span{
  color: rgb(116, 112, 112);
}
.job_salary{
  text-align: right;
  color: rgb(54, 54, 54);
}
.job_card:active{
  border: 2px solid blueviolet;
  transition: 0.4s;
}</span>
@media screen and (max-width: 1022px) {
 
  }
    </style>

    <script type ="text/javascript">
    
       function preventBack(){window.history.forward()}
              setTimeout("preventBack()", 0)
           window.onunload = function(){null;}
    
    
    
    </script>
    <meta charset="UTF-8"/>
    <title>Homepage</title>
    
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                
                <li><a href="">
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
        <section class="main">
                    
            <div class="main-top">
            <img class="logo" src="logo.png" alt="IRA/ICT">
                <h1 class= "headertxt">IRA/ICT RESOURCES IN CIRCULATION</h1>
                <i class="fas-fa-user-cog"></i>
            </div>
            <div class = "semibody">
            <div class="row">
                <h4>All Items</h4>
              </div>
        
              <div class="job_card">
                <div class="job_details">
                  <div class="img">
                    <i class="fab fa-google-drive"></i>
                  </div>
                  <div class="text">
                    <h2>Laptops</h2>
                  </div>
            </div>
                <div class="job_salary">
                  <h4><?php
                     $sql = "SELECT * FROM `assets`";   
                     $result = mysqli_query($con, $sql);

                     $rowcount = mysqli_num_rows($result);
                     printf($rowcount);
                  
                  ?></h4>
                </div>
              </div>
              
              <div class="job_card">
                <div class="job_details">
                  <div class="img">
                    <i class="fab fa-google"></i>
                  </div>
                  <div class="text">
                    <h2>Laptop Bags/Mouse/chargers</h2>
                  </div>
                </div>
                <div class="job_salary">
                  <h4><?php
                   $sql1 = "SELECT Laptop_Bag FROM `assets`";
                   

                   $result1 = $con->query($sql1);
                   
                   $totalLaptopBags = 0;
        
                   if ($result1->num_rows > 0) {
                        
                       while ($row = $result1->fetch_assoc()) {
                            
                           if (!empty($row['Laptop_Bag'])) {
                                
                               $totalLaptopBags++;
                               
                           }
                          
                       }
                        
                      
                   }

                 $sql2 = "SELECT Mouse FROM `assets`";
                   

                   $result2 = $con->query($sql2);
                   
                   $totalMouse = 0;
        
                  if ($result2->num_rows > 0) {
                        
                       while ($row1 = $result2->fetch_assoc()) {
                            
                           if (!empty($row1['Mouse'])) {
                                
                               $totalMouse++;
                               
                           }
                          
                       }
                       
                      
                   }

                   $sql3 = "SELECT Charger FROM `assets`";
                   

                   $result3 = $con->query($sql3);
                   
                   $totalChargers = 0;
        
                   if ($result3->num_rows > 0) {
                        
                       while ($row2 = $result3->fetch_assoc()) {
                            
                           if (!empty($row2['Charger'])) {
                                
                               $totalChargers++;
                               
                           }
                          
                       }
                      
                      
                   } 
                   printf("%d / %d / %d", $totalLaptopBags, $totalMouse, $totalChargers);
                  
                  ?></h4>
                </div>
              </div>
        
              <div class="job_card">
                <div class="job_details">
                  <div class="img">
                    <i class="fab fa-facebook"></i>
                  </div>
                  <div class="text">
                    <h2>Telephone extensions</h2>
                  </div>
                </div>
                <div class="job_salary">
                  <h4>0</h4>
                </div>
              </div>
        
              <div class="job_card">
                <div class="job_details">
                  <div class="img">
                    <i class="fab fa-git-alt"></i>
                  </div>
                  <div class="text">
                    <h2>Total Assets</h2>
                  </div>
                </div>
                <div class="job_salary">
                  <h4><?php
                  
              $totalAssets = $rowcount +  $totalLaptopBags + $totalMouse + $totalChargers;

              echo $totalAssets;
                  
                  
                  ?></h4>
                  
                </div>
              </div>
              </div>
              </div>
        </section>
        
    </div>
</body>

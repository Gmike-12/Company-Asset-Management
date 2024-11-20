<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Help Page</title>
  <style>
    
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
 
body {
    margin: 0;
    padding-left: 10px;
    padding-right: 10px;
    font-family: "Poppins", sans-serif;
  }
  
  .container {
    width: 80%;
    margin: 0 auto;
    max-width: 1200px;
    padding: 20px;
  }
  
 
  
  .content {
    top: 19%;
    padding: 20px 0;
  }
  
  .slider {
    background-color: #f5f5f5;
    padding: 40px 0;
    text-align: center;
  }
  
  .slide {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
  }
  
   img {
    max-width: 10%;
    height: auto;
    margin-bottom: 10px;
  }
  
  .slide h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .slide p {
    color: #777;
    font-size: 16px;
  }
  
  .contact-info {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
    text-align: center;
  }
  
  .info {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  
  .info-item {
    margin: 0 20px;
    text-align: left;
  }
  
  .info-item i {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .footer {
    background-color: #f5f5f5;
    padding: 20px 0;
    text-align: center;
  }
  nav {
  position:absolute; /* Change to fixed for a sticky effect */
  top: 29%;
  height: 100%;
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
    text-decoration: none;
    display: table;
    width: 250px;
    padding: 20px;
}
a:after{
    content: "";
    position: absolute;
    background-color: palevioletred;
    height: 3px;
    width: 0;
    left: -10px;
    bottom: 5px;
    transition: 0.3s;
}
a:hover:after{
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
 
  .logo{
    margin-top: 12px;
    margin-left: 17px;
    
  }
  .line{
    margin-top: 15px;
    border-bottom: 1px solid darkgray;
  }
  .logo img{
    max-width: none;
    margin-top: 15px;
    margin-left: 17px;
    width: 165px;
    height: 80px;
  }
  ul{
    list-style: none;
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
  
  .dropdown-content a {
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {
    background-color: #5D4037; /* Darker brown on hover */
  }

  </style>
    <script type ="text/javascript">
    
    function preventBack(){window.history.forward()}
           setTimeout("preventBack()", 0)
        window.onunload = function(){null;}
 
 
 
 </script>
</head>
<header>

    <div class = "logo">
        <img src="logo.png">
    </div>
</header>
<body>



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
  <div class = "line"></div>

  <main class="content">
    <section class="slider">
      <div class="container">
        <div class="slide">
          <h2>Efficient HP Laptops</h2>
          <p>Discover our range of efficient HP laptops.</p>
        </div>
        <div class="slide">
          <h2>Get Help Instantly</h2>
          <p>Our support team is here to assist you 24/7.</p>
        </div>
        <div class="slide">
          <h2>Stay Connected</h2>
          <p>Follow us on social media for updates and tips.</p>
        </div>
        <!-- Add more slides with different content -->
      </div>
    </section>

    <section class="contact-info">
      <div class="container">
        <h2>Contact Us</h2>
        <p>If you need further assistance, feel free to contact us:</p>
        <div class="info">
          <div class="info-item">
            <i class="fas fa-envelope"></i>
           
          </div>
          <div class="info-item">
            <i class="fas fa-phone"></i>
            
          </div>
          <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            
          </div>
        </div>
      </div>
    </section>
  </main>
  <img src="HP Laptop 14s-dq2233nia.webp" alt="Slide 1">
          <img src="HP-S500-2.4GHz-Wireless-Optical-Mouse-Black.jpg" alt="Slide 3">
          <img src="HP-65W-19.5V-3.42-usb-type-c-2-2-300x300.jpg.webp" alt="Slide 2">
          

  <footer class="footer">
    <div class="container">
    </div>
  </footer>

</body>
</html>

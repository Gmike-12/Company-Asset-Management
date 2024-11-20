<!DOCTYPE html>
<html lang="eng">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
       
 <style>
       
@keyframes fadeIn{
    0%{ opacity: 0}
    100%{ opacity: 1}

}

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
body{
    font-family: "Poppins", sans-serif;
    user-select: none;
    background-color: rgb(172, 123, 33);
}
.logo{
    border-radius: 3px;
     margin-bottom: 2px;
     margin-right: 60%;
     animation: fadeIn 3S;
     -webkit-animation: fadeIn 3S;
     -moz-animation: fadeIn 3S;
     -o-animation: fadeIn 3S;
     -ms-animation: fadeIn 3S;
    
}

#pass{
    margin-left: auto;
    margin-right: auto;
    display: flex;
    border: 1px solid black;
    background-color: white;
    width: 305px;
    height: 50px;
    margin-bottom: 3%;
    border-radius: 7px;
}
 #togglePassword{
    position: relative;
    margin-top: 3%;
    width: 5%;
    height: 4%;
 }
.cont{
   animation: fadeIn 3S;
  -webkit-animation: fadeIn 3S;
  -moz-animation: fadeIn 3S;
  -o-animation: fadeIn 3S;
  -ms-animation: fadeIn 3S;
   text-align: center;
   margin-top: 5%;
   margin-left: auto;
   margin-right: auto;
  border:1px solid black;
  width: 500px;
  border-radius: 10px;
  background-color: #f4f4f4;
  box-shadow: black 4px 4px 4px;
    
}
#head{
    font-weight: bold;
}
h3, h3{
    margin-bottom: 2px;
    color: black;
    font-weight: normal;
}
#username{
    border: 1px solid black;
}

input{
    height: 40px;
    width: 300px;
    border-radius: 7px;
    background-color: white ;
    font-size: large;  
    outline: none;
    text-align: center;
}
#password{
    border: none;
    width: 270px;
}
#submit{
    width: 310px;
    margin-bottom: 20px;
    border: none;
    color: white;
    cursor: pointer;
    background-color: rgb(84, 173, 6);
}
 
#password{
    margin-bottom: 30px;
    
}
 
        </style>
    </head>
    <body>
       <div class="logo">
          <img src="logo2.png">
      </div>
        <div class="cont">
            <h3 id="head">ICT ASSET MANAGEMENT<br> LOGIN</h3>
        <form method="post" id="form">
            <h3>Username</h3><br>
            <input type="text" id="username" placeholder="Username" name="username" required><br>

            <h3>Password</h3><br>
            <div id="pass">
                
                <input id="password" type="password" placeholder="Password" name="password" required>
                <img id="togglePassword" src="eye.png" onclick="view()">
          </div>
            <input id="submit" type="submit" value = "Login" onclick="SubmitForm()">
        </form>
</div>
     </body>
 <script>


function preventBack(){window.history.forward()}
       setTimeout("preventBack()", 0)
    window.onunload = function(){null}

let Submit = document.getElementById("submit")

let i = 0
let Username = document.getElementById("username")
let Password = document.getElementById("password")
let Eye = document.getElementById("togglePassword")
let Form = document.getElementById("form")

  function view() {
    i++
    
    if(i % 2 == 0){
        Password.type = "text"
    }
    else if(i == 1){
        Password.type = "password"
    }
    else{
        Password.type = "password"
    
    }

}



function SubmitForm() {

   
  if(Username.value === "ictsupport" && Password.value === "IctP@ssw0rd2021"){
    alert("Login successful!")
    Form.action = "Index.php"
   
  }
  else{

    alert("Invalid username or password. Please try again")
    
  }


  
}
 

 </script>
   

     </html>
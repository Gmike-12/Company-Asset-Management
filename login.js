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

    
function preventBack(){window.history.forward()}
       setTimeout("preventBack()", 0)
    window.onunload = function(){null;}


function SubmitForm() {

   
  if(Username.value === "ictsupport" && Password.value === "IctP@ssw0rd2021"){
    Form.action = "Index.php"
    alert("Login successful!")
   
  }
  else{

    alert("Invalid username or password. Please try again")
    
  }


  
}
 

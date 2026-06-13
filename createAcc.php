<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>   
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class='box'>
  <div class='box-form'>
    <div class='box-login-tab'></div>
    <div class='box-login-title'>
      <div class='i i-login'></div><h2>Create Account</h2>
    </div>
    <div class='box-login'>
      <div class='fieldset-body' id='login_form'>
        <button onclick="openLoginInfo();" class='b b-form i i-more' ></button>
        <form action="" method="post">
            <p class='field' style="color:red"><?php
                if(isset($_GET["msg"])){echo  $_GET["msg"] ;}?>
            </p>
        	<p class='field'>
          <label for='user'>User Name</label>
          <input type='text' id='username' name='username'/>
          <span id='ErrUsername' style="color: red; font-family: sans-serif;"></span>
        </p>
      	  <p class='field'>
          <label for='pass'>Password</label>
          <input type='password' id='pass' name='pass' />
          <span id='ErrPassword' style="color: red; font-family: sans-serif;"></span>
        </p>
        <p class='field'>
          <label for='pass'>Password Confirmation</label>
          <input type='password' id='passC' name='passC' />
          <span id='ErrPasswordC' class='i i-close'></span>
        </p>
        	<input type='submit' id='do_login' value='CREATE ACCOUNT' title='Get Started' />
            </form>
      </div>
    </div>
  </div>
  <div class='box-info'>
					    <p><button onclick="closeLoginInfo();" class='b b-info i i-left' title='Back to Sign In'></button><h3>Need Help?</h3>
    </p>
					    <div class='line-wh'></div>
    <button onclick="" class='b-support' title='Contact Support'> Contact Support</button>
    					<div class='line-wh'></div>
                        <a href="login.php">
    <button  class='b-cta' title='Sign up now!'> LOG IN</button></a>
  				</div>
</div>


 <div class='icon-credits'>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a>, <a href="http://www.flaticon.com/authors/budi-tanrim" title="Budi Tanrim">Budi Tanrim</a> & <a href="http://www.flaticon.com/authors/nice-and-serious" title="Nice and Serious">Nice and Serious</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  
<script>
    let form = document.querySelector("form") ; 
  form.addEventListener("submit" , (event)=>{
        let username = document.querySelector("#username") ; 
        let pass = document.querySelector("#pass").value ; 
        let passC = document.querySelector("#passC").value ; 

        let errpass  = document.querySelector("#ErrPassword") ;
        let  errusername = document.querySelector("#ErrUsername") ;
        errpass.innerText = "" ; 
        errusername.innerText = "" ;  

        if(pass !== passC){
            event.preventDefault() ; 
            errpass.innerText = "Not identique !!" ;
        } 
        regUsername = /^[A-Za-z\s0-9]{3,15}$/ ; 
        if(!regUsername.test(username.value)){
            event.preventDefault() ; 
            errusername.innerText = "Invalid username ! " ; 
        }
    })
</script>
</body>
</html>

<?php 
if(isset($_POST['username'] , $_POST['pass'] , $_POST['passC'])){
    require_once "database.php" ;
    if($_POST['pass'] !== $_POST['passC']){
        header("location:createAcc.php?err=The password and the confirmationpassword are not identique !") ; 
    }
    if($db->findUser($_POST['username'])){
        header("location:createAcc.php?err=User name exists Already !") ; 
    }

    $db->createAcc($_POST['username'] , $_POST['pass']) ;
    header("location:createAcc.php?msg=New Account Created !") ; 

    }
?>


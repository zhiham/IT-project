<!DOCTYPE html>
<html>
    <head>
        <title>SUN ROOM STUDENT PORTAL</title>
        <link rel="stylesheet" href="mainpage.css">
        <link rel="stylesheet" href="navigation.css">
        <nav>
            <div class="navigation">
                <div class="left-section">
                    <a href="mainpage.php"><img class="logo" src="pictures/logo.png"></a>
                </div>
				<div class="middle-section">
                    <i><p style="font-size: 15px; padding-left: 50px; margin: auto; font-family: Inconsolata, monospace;">"A healthy outside starts from the inside"</p></i>
                </div>
                
                <div class="right-section">
                    <div class="navigation-div">
                        <button class="navigation-button"><img class="navpic" src="pictures/body.png"></button> 
                        <div class="navigation-text">Body</div>
                    </div>
                    <div class="navigation-div">
                        <button class="navigation-button"><img class="navpic" src="pictures/fitness.png"></button> 
                        <div class="navigation-text">Exercise</div>
                    </div>
                    <div class="navigation-div">
                        <button class="navigation-button"><img class="navpic" src="pictures/food.svg"></button> 
                        <div class="navigation-text">Food</div>
                    </div>
					<div class="navigation-div">
                        <button class="navigation-button"><img class="navpic" src="pictures/water.png"></button> 
                        <div class="navigation-text">water consumption</div>
                    </div>
                    <div class="navigation-div">
                        <button class="navigation-button"><img class="navpic" src="pictures/account.png"></button> 
                        <div class="navigation-text">Account Page</div>
                    </div>
                </div>
            </div>
        </nav>
    </head>
    <body>
        <br>
        <div class="maintitle">
              <h1 class="maintext">Healthy Body, Happy Life</h1>
              <p class="mainsubtext">When you got your Health in your control, you got everything!</p>
              
              <button class="startbutton" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Get Started Now!</button>
			  <img class="mainbg" src="pictures/backgroundmain.jpg">

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pictures/account.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="id"><b>ID</b></label>
      <input type="text" placeholder="Enter IC No." name="id" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <input type="submit" value="Login" class="loginbtn">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container login">
      <span class="register"><a href="registeraccount.php">Create Account</a></span>
      <span class="psw">Forgot <a href="forgotpw.php">password?</a></span>
    </div><br>

    <div class="container" style="background-color:#f1f1f1">
      <input type="button" value="Cancel" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

              
        </div>

       
        
        


    </body>
</html>


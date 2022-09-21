<!DOCTYPE html>
<head>
    <title>SignUp Form</title>
<link rel="stylesheet" href="css/style.css">

<script src ="javascript/validation.js" ></script>

</head>

<body>

   
<form onsubmit="return validate();">
    <header> 
        <!-- MENU BUTTON -->
        <div id="menu" onclick="showMenu();">
        <b style="font-size: 2em;"> &#8801</b>

    </div>

    <div id="menu-container">
        <ul>
            <li>Homepage</li>
            <li>Login</li>
            <li>Forum</li>
            <li>Tutorials</li>
            <li>About Us</li>
        </ul>


    </div>
    <span float="right">Registration</span>
    
    </header>


<img src="img/lily.jpg" width="20%"> <br>
<div >
<input  id="email" class="error" type="text" placeholder="Enter your fullname"  required autofocus>
<div id="errorMsg">&#9746; Sorry! Username already used </div>
 </div>

<div>
<input id="username" type="email" placeholder="Email address" >
<div id="errorMsg"> &#9746; Sorry! Username already used </div>
   </div>
<input type="date"> <br>
<div class="gender">
<label>Gender</label>
<input type="radio" name="sex" > Male
<input type="radio" name="sex"  checked > Female
</div>

<select>

    <option>Nationality</option>
    <option>China</option>
    <option>Cameroon</option>
    <option>Chad</option>
    <option>Benin Republic</option>
    <option>Iraq</option>
    <option>Canada</option>
    <option>Russia</option>
    <option>USA</option>
    <option>South Africa</option>

</select>
<br>
<div class="terms">
<input type="checkbox" checked > I agree to the <a href="facebook.com/terms">Terms</a>
</div>



<input type="submit" value="REGISTER">

<br><br>
</form>
<br><br>
<br><br>
<br><br>

<script>
    var menu=document.querySelector('#menu-container');

    function showMenu(){
        if (  menu.style.width=='0px') {
            menu.style.width='60%';
            menu.style.opacity='1';


        }
        else{
            menu.style.width='0px';
            menu.style.width='0';
        }
       
    }

    </script>




</body>    
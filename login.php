



<!DOCTYPE html>
<head>
    <title>Login Form</title>


    <style>

        body {
            background-color: grey;
            font-family: monospace;
        }

        form {
            background-color: white;
            margin: 5%;
            padding: 10px;
            height: auto;
            line-height: 20px;
        }

        img {
            border-radius: 50%;
            margin-left: 35%;
        }

        input[type=submit] {
            background-color: rgb(38, 158, 38);
            color: white;
            width: 100%;
            padding: 5px;
            margin: 5px;
            border: none;
        }


        button {
            background-color: rgb(202, 61, 61);
            color: white;
            border: none;
            padding: 5px;
        }

        span {
            float: right;
        }

        footer {
            background-color: silver;
            margin: 0%;
            padding: 10px;
        }

        input[type=text], input[type=password]{
            width: 95%;
            margin: 5px;
            padding: 2px;
           
            outline: none;
        }

        label {
            font-weight: bolder;
        }

        input[type=submit]:hover {
            background-color:rgb(97, 158, 97); ;
            cursor: pointer;
            transform: scale(.89);
        } 


        input[type=submit]:active {
            background-color: brown;
        }
    </style>

</head>

cars.length   // Returns the number of elements
//cars.sort()   // Sorts the array
//fruits.push("Lemon");  // Adds a new element (Lemon) to fruits


//ASSIGNMENT
//create a to-do list
//there will be serialnumber, items and action to inside twhree  columns
//Using HtML and JAVASCRIPT
//AN array list will be used
//list=[...]
//use for loop to display content
//inside action there will be delete action
//there will submit BUTTON using a push button below the table
// also use pop action to delete a recent action which will be in the delete column.


<body>
    
<form>

<img src="avatar.png" width="30%"> <br>


<label> Username</label>  <br>
<input type="text" placeholder="Enter your username"> <br>

<label> Password</label>  <br>
<input type="password" placeholder="*******"> <br>

<input type="submit" value="Login"> <br>

<input type="checkbox" checked> Remember me <br>


<footer>
    <button>Cancel</button>
    <span>Forgot   <a href="www.facebook.com"> password? </a>        </span>
</footer>

</form>
</body>
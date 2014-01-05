<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Demo</title>
<link href="css/demo.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"> </script>
<script type="text/javascript" src="js/scriptko.js"></script>
</head>

<body>
	<div id="wrap"> <!--wrap -->
    	<div id="wrap2">  <!--wrap2 -->

       	<h2 class="register">Register to Starfleet Academy!</h2>
        <p>It's easy to register for Starfleet. Just follow steps 1,2,3! Easy!</p>
    	
        <form action="register.php" method="post" id="register_form">

                <p class="validate_msg">Please fix the errors below!</p>
                <fieldset>
                <img style="float:left" src="1.png" alt="1" title="Step 1" />
                <p> <label for="firstname">First Name:</label> <input name="firstname" type="text" /> <span class="val_firstname"></span> </p>
                <p> <label for="lastname">Last Name:</label>  <input name="lastname" type="text" />  <span class="val_lastname"></span> </p>
                </fieldset>
                <fieldset>
                <img style="float:left" src="2.png" alt="2" title="Step 2" />
                <p> <label for="email">Address:</label> <input name="address" type="text" /> <span class="val_address"></span> </p>
                <p> <label for="city">City:</label>  <input name="city" type="text" /> <span class="val_city"></span> </p>
                </fieldset>
                <fieldset>

                <img style="float:left" src="3.png" alt="3" title="Step 3" />
                <p> <label for="state">State:</label>  <input name="state" type="text" /> <span class="val_state"></span> </p>
                <p> <label for="zip">Zip:</label> <input name="zip" type="text" /> <span class="val_zip"></span> </p>
                </fieldset>
                <input type="submit" name="submit" value="Register">
        </form>

        </div>  <!--wrap2 end-->
    </div>  <!--wrap start-->
</body>
</html>
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

       	<h2 class="register">Register!</h2>

    	<form action="register.php" method="post" id="register_form">

                <p class="validate_msg">Please fix the errors below!</p>

                <p> <label for="firstname">First Name:</label> <input name="firstname" type="text" /> <span class="val_firstname"></span> </p>
                <p> <label for="lastname">Last Name:</label>  <input name="lastname" type="text" />  <span class="val_lastname"></span> </p>
                <p> <label for="email">Address:</label> <input name="address" type="text" /> <span class="val_address"></span> </p>
                <p> <label for="city">City:</label>  <input name="city" type="text" /> <span class="val_city"></span> </p>
                <p> <label for="state">State:</label>  <input name="state" type="state" /> <span class="val_state"></span> </p>
                <p> <label for="zip">Zip:</label> <input name="zip" type="text" /> <span class="val_zip"></span> </p>
                <input type="submit" name="submit" value="Register">
        </form>

        </div>  <!--wrap2 end-->
    </div>  <!--wrap start-->
</body>
</html>
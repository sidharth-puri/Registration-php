<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<title> Registration </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="validation.js"></script>
<link rel="stylesheet" type="text/css" href="style.css?version=51"/>
</head>
<body>
    <div class="container">
        <div><h1 class="header"> Registeration </h1></div>
        
   
    <form name="myForm" action="register.php" method="post" onsubmit="return validateForm()">
        
    <?php include('errors.php')?>
        <div class="label">
        <label for="Name">Name</label></br>
        <input type="text" name="name" value="<?php echo $name; ?>">
        </div>


        <div class="label">
        <label for="Email">Email</label></br>
        <input id="email" type="text" name="email" value="<?php echo $email; ?>">
        
        </div>

        
        <div class="label">
        <label for="Password">Password</label></br>
        <input type="text" name="password" value="<?php echo $password; ?>">
        </div>


        <div class="label">
        <label for="Address">Address</label></br>
        <input type="text" name="address" value="<?php echo $address; ?>">
        </div>


        <div class="label">
        <label for="Pincode">Pincode</label></br>
        <input type="text" name="pincode" value="<?php echo $pincode; ?>">
        </div>


        <div class="label">
        <label for="Phone">Phone</label></br>
        <input type="text" name="phone" value="<?php echo $phone; ?>" >
        </div>

        <button class="button" type="submit" name="reg_user">Submit</button>
        </form>
        </div>
</body>
</html>

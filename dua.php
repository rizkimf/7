<!DOCTYPE html>
<html>
<head>
  <title>Dua</title>
</head>
<body>

<?php

$nameErr = $emailErr = $genderErr = $paserr = "";
$name = $email = $gender = $comment = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-z ]*$/",$name)) {
      $nameErr = "Username Invalid"; 
    } else {
      $nameErr = "Username Valid";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Email Invalid"; 
    } else {
      $emailErr = "Email Valid";
    }
  }

  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
    
    if (!preg_match("/^[a-z]*$/",$password)) {
      $paserr = "Password Invalid"; 
    } else {
      $paserr = "Password Valid";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>String Validasi</h2>
<p><span class="error">* wajib diisi.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="password" value="<?php echo $password;?>">
  <span class="error"><?php echo $paserr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
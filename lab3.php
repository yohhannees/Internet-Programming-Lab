<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab3</title>
</head>
<body>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Name:<br>
  <input type="text" name="name"><br>
   F Name:<br>
  <input type="text" name="fname"><br>
   Middle Name:<br>
  <input type="text" name="mname"><br>
  Email:<br>
  <input type="text" name="email"><br>
   website:<br>
  <input type="text" name="website"><br>
    comment:<br>
  <input type="textfield" name="comment"><br>
  gender:<br>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other


</form>
<?php
$servername = "localhost:4000";
$username = "name";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$fnameErr=$emailErr=$genderErr=$mnameErr="";
$fname=$email=$comment=$mname="";

function test_input($data) 
{
  $data=trim();
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return ;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["name"]))
    {
      $nameErr="name is required";
    }
     if (empty($_POST["fname"]))
    {
      $fnameErr="fname is required";
    }
        if (empty($_POST["mname"]))
    {
      $mnameErr="middle name is required";
    }

}


?>
    
</body>
</html>
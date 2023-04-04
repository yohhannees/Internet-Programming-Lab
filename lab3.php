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
    
</body>
</html>
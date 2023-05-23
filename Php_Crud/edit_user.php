<?php
require_once 'DB_con.php';

$id = $_GET['id'];
$db = new DB_con();
$row = $db->fetchonerecord($id);

if (isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];

    $db->update($first_name, $last_name, $age, $id);

    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="./index.css" rel="stylesheet">
</head>

<body>
    <div class="container " class="form-container">
        <h2>Edit User</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $row['age']; ?>" required>
            </div>
            <button type="submit" name="update">Update</button>
            <button class="cancel"><a class="linkk" href="index.php">Cancel</a></button>
        </form>
    </div>
</body>

</html>
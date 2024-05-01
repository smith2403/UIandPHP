<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "dbconfig.php";

    $id=$_GET["id"];
    $sql="SELECT * FROM `contact` WHERE `id`=$id";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($result);
    mysqli_close($conn);

    ?>
<form action="update.php" method="post">

<label for="name">ID</label>
        <input type="text" name="id"
        value="<?php echo"{$rows['id']}"; ?>"><br>

        <label for="name">Name</label>
        <input type="text" name="name"
        value="<?php echo"{$rows['name']}"; ?>"><br>

        <label for="email">Email</label>
        <input type="text" name="email"
        value="<?php echo"{$rows['email']}"; ?>"><br>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone"
        value="<?php echo"{$rows['phone']}"; ?>"><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
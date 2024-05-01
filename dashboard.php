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
    $sql="SELECT * FROM `contact`";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>";

        while($rows=mysqli_fetch_assoc($result)){
            echo" <tr>
            <td>{$rows['id']}</td>
            <td>{$rows['name']}</td>
            <td>{$rows['email']}</td>
            <td>{$rows['phone']}</td>
            <td><a href='edit.php?id={$rows['id']}' role='button'>Edit</a>
          <a href='delete.php?id={$rows['id']}' role='button'>Delete</a>
          </td>
            <td></td>
        </tr>";

        }
    echo "</tbody>
</table>";
        }
        else{

        }


    ?>

</body>
</html>
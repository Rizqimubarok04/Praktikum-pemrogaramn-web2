<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data user</title>
</head>
<body>
    <h2>Data User</h2>
    <a href="form_users.html">tambah user</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Email</th>
             <th>Password</th>
            <th>Dibuat Pada</th>
        </tr>
        <?php
        $squery = mysqli_query($conn,"SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($squery)){
       echo "<tr>
                <td>".$row['user_id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
                <td>".$row['created_at']."</td>
              </tr>";

        }?>
    </table>
</body>
</html>

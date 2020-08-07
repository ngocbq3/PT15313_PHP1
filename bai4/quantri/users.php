<?php
require_once "../connection.php";

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách users</title>
</head>

<body>
    <h3>Danh sách users</h3>
    <table border="1">
        <tr>
            <th>user id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>

        </tr>
        <?php foreach ($user as $u) : ?>
            <tr>
                <td><?= $u['user_id'] ?></td>
                <td><?= $u['username'] ?></td>
                <td><?= $u['email'] ?></td>
                <td>
                    <a href="capnhat_user.php?id=<?= $u['user_id'] ?>">Sửa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
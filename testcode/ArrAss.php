<?php
    include_once 'ArrData.php';
    $keyword = "/".$_GET['keyword']."/i";

    function viewData($keyword,$user){
        foreach ($user as $values) {
            foreach ($values as $k => $v) {
                if (preg_match($keyword,$v)) {
                    echo "<tr>";
                    foreach ($values as $k => $v) {
                        echo "<td>".$v."</td>";
                    }
                    echo "</tr>";
                    break;
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrAss</title>
</head>
<body>
    <table border="1">
        <Thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>IP-Address</th>
        </Thead>
        <tbody>
            <?php
                viewData($keyword,$user);
            ?>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid ;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </table>
    <?php
        $hostname = 'localhost'; 
        $username = 'root'; 
        $userpass = ''; 
        $dbname = 'suraj'; 

        $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
        $sql = "select * from student";
        $result = mysqli_query($conn,$sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>".$rows['rollno'].
            "</td> <td>".$rows['name'].
            "</td> <td>".$rows['email']."</td> </tr>";
        }
    ?>
</body>
</html>
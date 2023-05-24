<?php 
    $hostname = 'localhost';
    $username = 'root';
    $userpass = '';
    $dbname = 'surajdb';

    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    @$a = $_POST['txt1'];
    @$b = $_POST['txt2'];
    @$c = $_POST['txt3'];
    @$d = $_POST['txt4'];
    
    if (@$_POST['insert']) {
        $insertQ = "INSERT INTO student_info VALUES ('$a','$b','$c','$d')";
        mysqli_query($conn,$sql);
        echo "Record is added in Database Successfully";
    }
    
    if (@$_POST['select']) {
        $selectQ = "SELECT * FROM student_info";
        mysqli_query($conn,$sql);
        echo "<table bgcolor = skyblue border= '2'>
        <tr>
        <th colspan = 4> Student Infromation </th> </tr>
        <tr>
        <th>Name</th>
        <th>Desgination</th>
        <th>Sal</th>
        <th>Qualification</th>
        </tr> ";
        
        while ($row = mysqli_fetch_assoc($result)) {
           echo "<tr>";
           echo "<th>.$row['Name'].</th>";
           echo "<th>.$row['Designation'].</th>";
           echo "<th>.$row['sal'].</th>";
           echo "<th>.$row['Qualification'].</th>";
           echo "</tr>";
        }
    }
    echo"</table>"
?>

<html>
</html>
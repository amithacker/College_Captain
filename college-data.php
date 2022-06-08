<!DOCTYPE html>
<html>
<head>
    <title> Doctor Data</title>
    <style>
        div{
            margin-left: 3%;
            margin-right: 10%;
            margin-top: 3%;
            background-color: whitesmoke;
            height: 750px;
            padding-top: 1%;
            border-radius: 5%;
        }
        table, th, td{
            border: 1Px solid black;
            border-collapse: collapse;
            text-align: center;
            background-image: linear-gradient(to bottom right, #0052b0, #b340b3);
        }

        table{
            margin-left: 10%;
            font-size: x-large;
        }
    </style>
</head>
<body>
<div>
    <h2 style="color: blue;text-align: center">COLLEGE DATA LIST</h2>
    
    <?php
    if(isset($_POST['display'])){

        $myConnection = mysqli_connect('localhost', 'root', '', 'college-capton');

        $read_query = "SELECT id,Name,Phone,Email,CentreName,Address FROM college_registration";
        $data = mysqli_query($myConnection, $read_query);

        if(mysqli_num_rows($data)>0){

            echo "<table style= border:1px solid black>
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>CENTRE NAME</th>
            <th>ADDRESS</th>";

            while($row = mysqli_fetch_array($data)){

                echo"<tr>";

                echo "<td>".$row['id']."</td>";

                echo "<td>".$row['Name']."</td>";

                echo "<td>".$row['Phone']."</td>";

                echo "<td>".$row['Email']."</td>";

                echo "<td>".$row['CentreName']."</td>";

                echo "<td>".$row['Address']."</td>";

                echo "</tr>";
            }
        } else {
            echo "Record Not found";
        }
    }
    ?>
</div>

</body>

</html>
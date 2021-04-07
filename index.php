<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "stock";

// Create connection
$db = new mysqli($servername, $user, $password, $db) or die("unable to connect");
$sql= "SELECT * FROM pro";
$result = $db->query($sql);
$db->close();
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Sweet</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>DETAILS OF THE PRODUCTS</h1>
        
        <table>
            <tr>
                <th>S.no</th>
                <th>PrOduct name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
            
            <?php  
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['S.no'];?></td>
                <td><?php echo $rows['Product name'];?></td>
                <td><?php echo $rows['price'];?></td>
                <td><?php echo $rows['Stock in/out'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
</html>

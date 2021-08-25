<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<?php

$servername = "localhost";
$username = "min20120907";
$password = "jefflin123";
$dbname = "ii525";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Bids ORDER BY Sold";
$i = 0;
$result = $conn->query($sql);
echo"
        <table class='table table-borderless'>
            <tbody>
        ";
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
	if($i==4) break;
        $picPath = "uploads/" . $row["Picture"] . "";
        
        echo "
	
        <td>
        <div class='item-$i' >
        <button class='btn btn-1'></button><br/>
        <button class='btn btn-2'></button><br/>
        <button class='btn btn-3'></button><br/>
        </div>
        </td>
        ";
        echo "
        <style>
        .item-$i{
            height: 100pt;
            width: 100pt;
        background-image: url('$picPath');
        background-size: cover;
        }
        .btn-1{
            background-image: url('images/btns/search.svg');
            background-size: cover;
            border: none;
        }
        .btn-2{
            background-image: url('images/btns/heart.svg');
            background-size: cover;
            border: none;
        }
        .btn-3{
            background-image: url('images/btns/shopping-cart.svg');
            background-size: cover;
            border: none;
        }
        .item-$i .btn{
            width: 15pt;
            height: 15pt;
            display: none;
        }
        .item-$i:hover .btn{
            display: inline;
            opacity: 0.25;
        }
        .item-$i .btn:hover{
            opacity: 1;
        }
        
        </style>
        ";
        // echo "ID: " . $row["ID"] . "<br/> Name: " . $row["Name"] . "<br/> Price: " . $row["Price"] . "<br>";
        // echo "Stock: " . $row["Stock"] . "<br/>";
        // echo "Sold: " . $row["Sold"] . "<br/>";
        // // echo "Picture Path: " . $row["Picture"] . "<br/>";
        // echo "------------------------------<br/>";
        
        $i++;
    }
} else {
    echo "0 results";
}
echo "</tbody>
</table>
";
$conn->close();
?>



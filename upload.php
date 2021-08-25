<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
$servername = "localhost";
$username = $_POST["username"];
$password = $_POST["password"];
$itemName = $_POST["itemName"];
$itemPrice = $_POST["itemPrice"];
$itemStock = $_POST["itemStock"];
$allowTypes = array('jpg', 'png', 'jpeg', 'gif');
$dbname = "ii525";
$total = count($_FILES['itemPic']['name']);
// File upload path
$targetDir = "/var/www/html/htmlproject/uploads/";
for( $i=0 ; $i < $total ; $i++ ) {

echo '檔案名稱: ' . $_FILES['itemPic']['name'][$i] . '<br/>';
echo '檔案類型: ' . $_FILES['itemPic']['type'][$i] . '<br/>';
echo '檔案大小: ' . ($_FILES['itemPic']['size'][$i] / 1024) . ' KB<br/>';
echo '暫存名稱: ' . $_FILES['itemPic']['tmp_name'][$i] . '<br/>';
$fileName = basename($_FILES["itemPic"]["name"][$i]);
$targetFilePath = $targetDir . $fileName;
echo $targetFilePath . "</br>";
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if ($_FILES['itemPic']['error'][$i] === UPLOAD_ERR_OK) {
	if (file_exists($targetFilePath)) {
		echo '檔案已存在。<br/>';
	} else {
		if(move_uploaded_file($_FILES['itemPic']['tmp_name'][$i], $targetFilePath)){
		echo "upload successfully <br/>";
		}
	}
} else {
	echo '錯誤代碼：' . $_FILES['itemPic']['error'][$i] . '<br/>';
}


	echo "Photo is in the right format.";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Database Server Logged in!";
	$sql = "INSERT INTO Bids (Name, Price, Stock, Picture, Deduction, Description)
 VALUES ('" . $itemName . "', " . $itemPrice . ", " . $itemStock . ",'" . $fileName . "', '" . $_POST['Deduction'] . "', '" . $_POST['Description'] . "')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}
?>
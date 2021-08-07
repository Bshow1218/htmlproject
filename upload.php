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

// File upload path
$targetDir = "/var/www/html/htmlproject/uploads/";
echo '檔案名稱: ' . $_FILES['itemPic']['name'] . '<br/>';
echo '檔案類型: ' . $_FILES['itemPic']['type'] . '<br/>';
echo '檔案大小: ' . ($_FILES['itemPic']['size'] / 1024) . ' KB<br/>';
echo '暫存名稱: ' . $_FILES['itemPic']['tmp_name'] . '<br/>';
$fileName = basename($_FILES["itemPic"]["name"]);
$targetFilePath = $targetDir . $fileName;
echo $targetFilePath . "</br>";
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if ($_FILES['itemPic']['error'] === UPLOAD_ERR_OK) {
	if (file_exists($targetFilePath)) {
		echo '檔案已存在。<br/>';
	} else {
		if(move_uploaded_file($_FILES['itemPic']['tmp_name'], $targetFilePath)){
		echo "upload successfully <br/>";
		}
	}
} else {
	echo '錯誤代碼：' . $_FILES['itemPic']['error'] . '<br/>';
}

if (in_array($fileType, $allowTypes)) {
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO Bids (Name, Price, Stock, Picture)
 VALUES ('" . $itemName . "', " . $itemPrice . ", " . $itemStock . ",'" . $fileName . "')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
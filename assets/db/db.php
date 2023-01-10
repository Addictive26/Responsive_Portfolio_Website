<?php
//	$conn = mysqli_connect("sql209.epizy.com", "epiz_33279059", "EFxmy9eXY0", "epiz_33279059_form1");
//
//if ($conn->connect_error) 
//	{
//		die("Connection failed: " . $conn->connect_error);
//	}
    ?>

<?php
 
$conn = "";
  
try {
    $servername = "sql209.epizy.com";
    $dbname = "epiz_33279059_form1";
    $username = "epiz_33279059";
    $password = "EFxmy9eXY0";
  
    $conn = mysqli_connect($servername, $username,$password,$dbname);
    $conn = new PDO(
        "mysql:host=$servername; dbname=epiz_33279059_form1",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>
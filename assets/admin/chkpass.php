
<?php
  
    include("../db/db.php");
?>
<!DOCTYPE html>
<html>

	<head>
		<title>password</title>
	</head>

	<body>
		<center>

			<?php
                
                function test_input($data) 
                {     
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
  
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    $email = test_input($_POST["email"]);
                    $password = test_input($_POST["password"]);
                    $stmt = $conn->prepare("SELECT * FROM admin_login");
                    $stmt->execute();
                    $users = $stmt->fetchAll();
                    
                    foreach($users as $user) 
                    {
                        
                        if(($user['email'] == $email) &&
                            ($user['password'] == $password)) {
                                header("location: showtable.php");
                        }
                        else {
                            echo "<script language='javascript'>";
                            echo "alert('WRONG INFORMATION')";
                            echo "</script>";
                            die();
                        }
                    }
                }
 
?>
   
		</center>
	</body>
</html>

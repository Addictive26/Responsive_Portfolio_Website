<!DOCTYPE html>
<html>

	<head>
		<title>Insert Page page</title>
	</head>

	<body>
		<center>
			<?php

			    $conn = mysqli_connect("sql209.epizy.com", "epiz_33279059", "EFxmy9eXY0", "epiz_33279059_form1");
         
        // Check connection
                if($conn === false)
                {
                    die("ERROR: Could not connect. "
                        . mysqli_connect_error());
                }
         
        // Taking all 5 values from the form data(input)

                $user_id =  NULL;
                $user_name =  $_REQUEST['user_name'];
                $user_email = $_REQUEST['user_email'];
                $user_subject =  $_REQUEST['user_subject'];
                $user_message = $_REQUEST['user_message'];
         
                // Performing insert query execution
                // here our table name is college
                $sql = "INSERT INTO form  VALUES ('$user_id','$user_name',
                    '$user_email','$user_subject','$user_message')";
                
                if(mysqli_query($conn, $sql))
                {
            ?>
            
                    <script>
                        alert("we will contact you soon");
                        window.location = "../../index.php";
                    </script>
            
            <?php

                }
                else
                {
                    echo "ERROR: Hush! Sorry $sql. "
                        . mysqli_error($conn);
                }
         
                // Close connection
                mysqli_close($conn);
            ?>
		</center>
	</body>
</html>

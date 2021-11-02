<?php

if ($_SERVER['REQUEST_METHOD'] =='POST') {

    $username = $_POST['username'];

    require_once 'connect.php';

    $sql = "SELECT * FROM mobileappusers WHERE username='$username' ";

	$sqlverify = "UPDATE mobileappusers SET status = 'Verified' WHERE username='$username'";
	
    $response = mysqli_query($conn, $sql);
	
	$verify = mysqli_query($conn, $sqlverify);

    
    if ( mysqli_num_rows($response) === 1 ) 
	{
        
      $row = mysqli_fetch_assoc($response);

       
      echo '<script>alert("YOU ARE NOW VERIFIED USER!\nYou can now close this tab")</script>';
				
			
      mysqli_close($conn);

    } else 
			{

				echo '<script>alert("ERROR")</script>';

				mysqli_close($conn);

			}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SpeakUp Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align:center;}
        .wrapper{ width: 360px; padding: 20px; margin: auto;}
    </style>
</head>
<body>
    <div class="wrapper" id="body">
        <h2>SpeakUp VERIFICATION</h2>
        <p>Please fill this form to verify your account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control ">
                
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>    
</body>
</html>
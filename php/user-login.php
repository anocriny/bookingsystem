<?php
require( "config.php" );

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

// if(isset($_SESSION['USER_ID']) && !empty($_SESSION['USER_ID'])) {
// 	header("Location: " . $REDIRECT_ADMIN );
// }


$SUCCESS = "<script>window.location='../user/index.php'</script>";
$FAILED = "<script>alert('Wrong username or password');window.history.back();</script>";


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (isset($_POST['submit'])) {

  $username=$_POST['username']; 
  $password=$_POST['password']; 
  $loginPassword=md5($password);


  $LoginRS__query="SELECT * FROM user WHERE username='$username' AND password='$loginPassword'";

  $LoginRS = $connection->query($LoginRS__query);

  $loginFoundUser = $LoginRS->num_rows;

  if ($loginFoundUser > 0) {
    $row = mysqli_fetch_assoc($LoginRS);
        $userid = $row['id'];
        $_SESSION['userid'] = $userid; 
        $_SESSION['role'] = "user"; 
    
    echo $SUCCESS;
  }
  else {
    echo $FAILED;
  }
}

?>
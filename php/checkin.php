<?php
require( "config.php" );

// *** Validate request to login to this site.
// if (!isset($_SESSION)) {
//   session_start();
// }

$SUCCESS = "<script>alert('Checkin success');window.location='../admin/admin-checkin.php';</script>";
$FAILED = "<script>alert('Checkin failed');window.location='../admin/admin-checkin.php';</script>";


// if(!isset($_SESSION['USER_ID']) && empty($_SESSION['USER_ID'])) {
// 	header("Location: " . $REDIRECT_LOGIN );
// }


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $id=$_GET['id'];

$ApproveRS__query="UPDATE reservation SET ischeckin = 'true' WHERE id = $id";
$ApproveRS = $connection->query($ApproveRS__query);

  if ($ApproveRS) {
  	echo $SUCCESS;
    }
  else {
  	echo $FAILED;
  }
?>
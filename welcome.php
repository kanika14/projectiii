<?php
session_start();
if(!isset($_SESSION['user_session'])){
	header("Location: index.php");
}
include('inc/header.php');
include_once("dbcon.php");
$sql = "SELECT name FROM myguests WHERE id='".$_SESSION['user_session']."' OR name='".$_SESSION['user_session']."'";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
$row = mysqli_fetch_assoc($resultset);
include('container.php');
?>


<div class="container">
  <div class="row">
  <div class="col s3">
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/download.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo $row['name']; ?><i class="material-icons right">more_vert</i></span>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo $row['name']; ?><i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>
  </div>

  <div class="row"> 
  <div class="col s4">
     <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>Upload</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>
  </form>
  </div>
  </div>
</div>
<?php include('footer.php');?>
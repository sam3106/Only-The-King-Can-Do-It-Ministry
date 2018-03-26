<?php include "database.php";?>
<!DOCTYPE html>
<html class="cf">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="view-all.css">
<title>OTKCDIM</title>
</head>
<body>
   <div id="all">
    <nav>
    <div class="container-fluid banner ">
      <div class="container-fluid ">
    	<ul class="nav nav-tabs nav-justified text-center">
          <li class="active-link col-sm-2">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="col-sm-2">
            <a class="nav-link text-nowrap" href="about-us.html">About Us</a>
          </li>
          <li class="col-sm-2">
            <a class="nav-link" href="event.html">Events</a>
          </li>
          <li class="col-sm-2">
            <a class="nav-link " href="inspiration.html">Inspiration</a>
          </li>
          <li class="col-sm-2">
            <a class="nav-link " href="products.html">Products</a>
          </li>
          <li class="col-sm-2">
            <a class="nav-link text-nowrap" href="contact.html">Contact Us</a> 
          </li>
        </ul>
      </div>
      <div class="text-center">
         <h1 class="text-center"><span class="left">Only The </span><span class="down">King Can Do </span><span class="right">It Ministry</span></h1>
         <img class="bird-img up" src="bird.png" />
      </div>
    </div>
    </nav>
<?php 
   global $connect;
$sql = "SELECT * FROM entries ORDER BY id DESC";
$query = mysqli_query($connect, $sql);
$numrows = mysqli_num_rows($query);
    if($numrows > 0){
        while($row = mysqli_fetch_assoc($query) ){
            $id = $row["id"];
            $name = $row["fullName"];
            $email = $row["email"];
            $comment = $row["comment"];
            
            echo "
            <div class='container'>
            <div class='row'>
            <div class='col-sm-12 text-center' style='color:fuchsia;' >
            <h5 style='color:black;'><strong>$name</strong></h5>
            <br>
            <p>$comment</p>
            <br>
            <h6>Email: $email</h6>
            </div>
          <div class='container-fluid bottom-pad ' style='border-top:2px solid purple;margin:0;'></div>
            </div>
            </div>
            ";
}
 }else{
echo "no post were found.";
}
?>
    <footer>
    <div class="container-fluid text-center footer">
        <h6 style="margin: 0; color: black;" >Only The King Can Do It Ministry<br>Powered By: Teron Sampson</h6>
    </div>
    </footer>
   </div>
</body>
</html>

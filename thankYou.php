<?php include "database.php" ?>
<?php
        if(isset($_POST["submit"])){
            global $connect;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST["comment"];
            $sql = "INSERT INTO entries (fullName,email,comment)
            VALUES ('$name', '$email', '$comment')";
            $result = mysqli_query($connect, $sql);
            if(!$result){
                die("try again" .mysqli_error());
            }
        }
?>
<!DOCTYPE html>
<html class="cf">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="thankYou.css">
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
            <a class="nav-link text-nowrap" href="about.html">About Us</a>
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
      <section>
   <?php
       global $connect;
       $sql = "SELECT fullName FROM entries ORDER BY id DESC LIMIT 1;";
       $query = mysqli_query($connect, $sql);
       while($row = mysqli_fetch_assoc($query)){
        $name = $row["fullName"];echo "
        <div class='container text-center bottom-pad'>
       <h2 class='text-center mt-4' style='color:black'>Thank you for leaving a comment</h2><br><br>
       <h1 class='text-center' style='color:
        fuchsia;'>$name</h1><br>
        <h2>To see all Entries click below!
        </h2><br>
         <a href='view-all.php'><img  id='viewAll-img' src='http://www.undercoverprinter.com/images/buttons/VIEW-ALL-Button.png'/></a>
         </div>";
 }
?>
    </section>
    <footer>
    <div class="container-fluid text-center footer">
        <h6 style="margin: 0; color: black;" >Only The King Can Do It Ministry<br>Powered By: Teron Sampson</h6>
    </div>
    </footer>
</div>
</body>
</html>
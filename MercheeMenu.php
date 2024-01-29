<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<link rel="stylesheet" href="MercheeMenuCss.css">
<a href="logout.php" class="button"><?php 
      error_reporting(0);
      $fname = $user_data['Firstname']; 
      if($fname=$fname){echo "Log Out"; }
      else {echo "Login/Signup";}?></a>

<body>

<h></h>
  <img src="Logoicon.png" alt="logoicon" width="70" height="45">

  <button  class="tablink" onclick="openPage('Shop', this, '#274472') "id="defaultOpen"; style="margin-left: 80px;">Shop</button>
  <button class="tablinks" onclick="openPage('Profile', this, '#f6ce39')">Profile</button>
  <br>

  <div id="Shop" class="tabcontent">
      <div class="container">
    	<input type="text" placeholder="Search" name="smerch" size="120">
    	 
      </div>
    
      <div class="fixed">
      	<img src="cart.png" alt="scart" width="30" height="30">
      </div>
      
      <div class="slideshow-container">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="sample.jpg" style="padding-left: 345px;""width=300px height=300px">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="sample2.jpg" style="padding-left: 345px;""width=300px height=300px">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="sample3.jpg" style="padding-left: 345px;""width=300px height=300px">

      </div>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

      <hr class="line">
      
      <div class="card">
        <img src="sample.jpg" style="border-radius: 20px;" alt="sample"width="250" height="265"/> 
      </div>
      
      <div id ="dForm" class="des">
      <p style="font-size: 30px;">Yae Miko Costume</p>
      <p class="price">$19.99</p>
      <p>Gender:Unisex
                  Department Name:Adult
                  Item Type:Sets
                  Characters:Yae Miko.</p>
      <p><button class="open-button" onclick="openForm()">Buy Now / Add to Cart</button></p>

        <div class="form-popup" id="myForm">
          <form1 class="form-container">
            <img src="sample.jpg" id="S1" style="border-radius: 20px;" alt="sample"width="500" height="620"/> 
            <div id="infos" style=" margin-left: 690px; max-width: 500px;">
              <p id="Pname" style="font-size: 30px;">Yae Miko Costume</p>
              <p id="price">$19.99</p>
              <p id="desc">Gender:Unisex
                  Department Name:Adult
                  Item Type:Sets
                  Characters:Yae Miko
                  Components:Dresses
                  Source Type:GAME
                  Origin:CN(Origin)
                  CN:Zhejiang
                  Material:Polyester
                  Model Number:Genshin Impact
                  Special Use:Costumes</p>
            </div>
            <div id="btns">
              <button type="submit" class="btnbuy">Buy</button>
              <button type="submit" class="btncart">Add to Cart</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </div>
          </form1>
        </div>

      </div>

  </div>
  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<div id="Profile" class="tabcontent">
    <!--link rel="stylesheet" href="Profile.css"-->
    <img src="resources/icon.png" id="ProPic" alt="" width="150" height="150">
    
    <form >
    
    <div id="Infotext">
      
      <p1 id="fullname">
        <?php 
      error_reporting(0);
      $fname = $user_data['Firstname']; 
      if($fname=$fname){echo $user_data['Firstname']; }
      else {echo "No Loged In";}
      ?>  <?php echo $user_data['Lastname']; ?>
      </p1>
      <br>
      <p2 id="age">
        <?php echo $user_data['Birthdate'];  ?>
        <br>
        <p2 id="Location">
          <?php echo $user_data['Address'];  ?>
        </p2>
    </div>
  </form>

  <form2>
    <div class="orders1">
      <div class="orders">
        <p3>
          Ongoing-orders
        </p3>
      </div>
    </div>

    <div class="orders2">
      <div class="orders">
        <p3>
          Completed orders
        </p3>
      </div>
    </div>
  </form2>


</div>

<script src="MenuJS.js"></script>

</body>
</html> 

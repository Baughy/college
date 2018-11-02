<?
// Start the session
session_start();
$slug = 'about';
?>




<?php include 'header.php';?>







<!--Registration!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->



  <div class="row">
<div class="col-lg-12">
<br>
<h1>Registration</h1>
<hr>
<br>
  <div class="row">
  <div class="col-lg-6">
  <form action="register.php" method="post" enctype="multipart/form-data">
  
    First Name:<br>
  <input type="text" name="firstname" class="form-control" placeholder="First Name"><br>
</div>
  <div class="col-lg-6">
  Last Name:<br>
  <input type="text" name="lastname" class="form-control" placeholder="Last Name"><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">
   Email:<br>
  <input type="text" name="emailaddress" class="form-control" placeholder="Email"><br>
</div>
  <div class="col-lg-6">
  Phone Number:<br>
 <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number"><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">
 Street Address:<br>
<input type="text" name="streetaddress" class="form-control" placeholder="Street Address"><br>
</div>
  <div class="col-lg-6">
Street Address line 2:<br>
<input type="text" name="streetaddress2" class="form-control" placeholder="Steet Address line 2"><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">
City:<br>
<input type="text" name="city" class="form-control" placeholder="City"><br>
</div>
  <div class="col-lg-6">
State:<br>
			<select id="state" name="state" class="form-control" placeholder="State"><option value="---">---</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Northern Marianas Islands">Northern Marianas Islands</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Virgin Islands">Virgin Islands</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select>

</div>
</div>

<div class="row">
<div class="col-lg-6">
Zip Code:<br>
<input type="text" name="postalcode" class="form-control" placeholder="Zip Code"><br>
</div>
  <div class="col-lg-6">
Gender:<br>
<input type="text" name="gender" class="form-control" placeholder="Gender"><br><br>
</div>
</div>

<div class="row">
<div class="col-lg-6">



    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">



</div>
</div>

</div>
</div>
<!--Registration!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
<input type="submit" value="Submit" name="submit">
</form>



</body>
</html>
<?php

$dbhost = 'localhost:3306';
$dbuser = 'asclepi1_fd';
$dbpass = 'hardstarboard';
$dbname = 'asclepi1_fd';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_error) {

  die('Connection Error:' . $conn->connect_error);

}

$result = $conn->query("SELECT COUNT(Phone) AS total FROM donors");
$row = $result->fetch_assoc();
$count = $row['total'];

$area = $conn->query("SELECT DISTINCT District FROM donors");

echo '

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>finddonor - Finding Blood Donors made easy</title>
<meta name="keywords" content="Find,Blood,Donor,Bangladesh,Finddonor,BD">
<meta name="description" content="Find Blood Donors Easily in Bangladesh. Just Select your Location. Or Become a Donor yourself. &hearts;">
<link rel="icon" href="faviconwhite.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="theme-color" content="#D50000">
  <script data-ad-client="ca-pub-9904750019397374" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
  <div class="loader-body" id="loader">
  	<div class="loader"></div>
  </div>
  <div id="myDiv">
    <div class="main">
      <center><img src="fd.png" width="20%"></center><br>
      <div class="card_text2">Total Registered Donors: '.$count.'</div>
      <ul class="cards">
        <li class="cards_item">
        <a href="find/find_step1.php">  <div class="card">
            <div class="card_image"></div>
            <div class="card_content1">
              <h2 class="card_title">Find a donor</h2>
              <p class ="card_text">Our Current Coverage: ';
      
      while ($locs = $area->fetch_assoc()) {

                                      echo '<b>'.$locs["District"].', </b>';
                                    }
      
      echo'</p>
                <p class="card_text">রক্তদাতা সন্ধান করতে এখানে প্রবেশ করুন।
নিজ জেলা এবং উপজেলা নির্বাচন করে কাঙ্খিত রক্তের গ্রূপ খুজে নিন।</p>
            </div>
          </div> </a>
        </li>
        <li class="cards_item">
          <a href="donate/donate_step1.php"> <div class="card">
            <div class="card_image"></div>
            <div class="card_content2">
              <h2 class="card_title">Become a donor</h2>
             <p class="card_text">রক্তদাতা হিসেবে নিজেকে নিবন্ধন করতে এখানে প্রবেশ করুন। 
আপনার সকল তথ্যের গোপনীয়তা রক্ষা করা হবে।<br><br><b>(জাতীয় পরিচয়পত্র অথবা জন্ম সনদ নং আবশ্যক)</b></p>
            </div>
          </div> </a>
        </li>
        <li class="cards_item">
        <a href="about.php">  <div class="card">
            <div class="card_image"></div>
            <div class="card_content3">
              <h2 class="card_title">About Us</h2>
              <p class="card_text">My purpose is to help people look at themselves and begin to shift their concepts. Remember, we are not our country, our race, or religion. We are eternal spirits. Seeing ourselves as spiritual beings without label is a way to transform the world and reach a sacred place for all of humanity.</p>
              <p class="card_text"><i>- Wayne Dyer</i></p>

            </div>
          </div> </a>
        </li>
      </ul>
    </div>

    <h3 class="made_by">With &hearts; from Asclepius Tech, Department of Biomedical Engineering, JUST</h3>
</div>
</body>

<style>
  /* Font */
@import url(\'https://fonts.googleapis.com/css?family=Quicksand:400,700\');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
}

body {
  text-align: center;
  font-family: \'Quicksand\', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

a {
  text-decoration:none;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content1 {
  padding: 1rem;
  background: #D50000;
}

.card_content2 {
  padding: 1rem;
  background: #00C853;
}

.card_content3 {
  padding: 1rem;
  background: #00B0FF;
}


.card_title {
  color: #ffffff;
  font-size: 1.8rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
  font-weight: 400;
}

.card_text2 {
  color: red;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
  font-weight: bold;
}

.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}





.loader-body {
	width: 100%;
	height: 100vh;
	background-color: white;
	position: fixed;
	z-index: 2;
	visibility: visible;
	top: 0;
	left: 0;
	text-align: center;
	justify-content: center;
	align-content: center;
	transition: 0.5s all;
}
.loader {
	width: 100px;
	height: 100px;
	border: 12px white solid;
	border-radius: 50%;
	position: absolute;
	border-top-color: red ; /*Here you can change color of the loader spin*/
	transform: translate(-50%, -50%);
	top: 50%;
	left: 50%;
	-webkit-animation: 1s spin infinite linear;
	-o-animation: 1s spin infinite linear;
	animation: 1s spin infinite linear;

}
.loader-body.done {
	visibility: hidden;
	opacity: 0;
}
@keyframes spin {
	from {
		transform: translate(-50%, -50%) rotate(0deg);
	}
	to {
		transform: translate(-50%, -50%) rotate(360deg);
	}
}
</style>
<script>

document.body.onload = function(){
  setTimeout(function() {
    var preloader = document.getElementById(\'loader\');
    if( !preloader.classList.contains(\'done\') )
    {
      preloader.classList.add(\'done\');
    }
  }, 1000)
}


</script>

</html>

'
?>

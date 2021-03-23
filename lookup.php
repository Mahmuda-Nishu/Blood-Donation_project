<?php

$dbhost = 'localhost:3306';
$dbuser = 'asclepi1_fd';
$dbpass = 'hardstarboard';
$dbname = 'asclepi1_fd';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_error) {

  die('Connection Error:' . $conn->connect_error);

}

$blood = $_POST['blood'];
$upazilla = $_POST['upazilla'];
$district = $_POST['district'];
$division = $_POST['division'];

$result1 = $conn->query("SELECT Phone FROM donors WHERE Upazilla = '$upazilla' AND District = '$district' AND Division = '$division' AND Blood = '$blood' ORDER BY `donors`.`ID` ASC");

$result2 = $conn->query("SELECT Street FROM donors WHERE Upazilla = '$upazilla' AND District = '$district' AND Division = '$division' AND Blood = '$blood' ORDER BY `donors`.`ID` ASC");


echo '

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Find A Donor</title>
<link rel="icon" href="faviconred.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <div class="loader-body" id="loader">
  	<div class="loader"></div>
  </div>
  <div id="myDiv">
    <div class="main">
      <center><a href="index.php"><img src="fdw.png" width="20%"></a></center><br>
              <h2 class="card_title">Showing '.$blood.' Donors at '.$upazilla.', '.$district.', '.$division.'</h2><br>
              <div class="card_text">

              <section>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Location</th>
          <th>Phone</th>
          <th>Click to Call</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>';

while (($street = $result2->fetch_assoc()) && ($phone = $result1->fetch_assoc())) {

      echo '  <tr>
          <td>'.$street["Street"].'</td>
          <td>'.$phone["Phone"].'</td>
          <td><a href="tel:+88'.$phone["Phone"].'">Call &#9990;</a></td>
        </tr>';
      }


echo '

      </tbody>
    </table>
  </div>
</section>

              </div>

    </div>
<br>
    <h3 class="made_by">With &hearts; from Asclepius Tech</h3>
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
  background: #D50000;
}

a {
  text-decoration:none;
  color:yellow;
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
  text-align: left;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;
  font-weight: 400;
  text-align: left;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
  color: #ffffff;
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


input:not([type="radio"]), select, textarea {

             width:100%;
             border: 1px solid #ccc;
             border-radius: 8px;
             box-sizing: border-box;
             resize: vertical;
             font-family: \'Quicksand\', serif;
             font-style: normal;
             font-weight: 400;
             letter-spacing: 0;
             padding: 1rem;


}

.radio {

            padding: 2px;
            margin: 2px 2px 2px 2px;
}


legend {

             font-size: 2.4rem;
             font-weight: bold;
}

label {

             padding: 12px 12px 12px 0;
             font-size: 1.2rem;
             font-weight: bold;
             display: inline-block;
}



input[type=submit] {

            background-color: #00C853;
            color: white;
            padding: 12px 20px;
            border: 2px;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin: 2px;
}

input[type=reset] {

            background-color: red;
            color:white;
            padding: 12px 20px;
            border: 2px;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            margin: 2px;
}

.container {

           border-radius: 5px;
           background-color: ;
           padding: 20px;

}

.col-25 {

          float:left;
          width: 25%;
          margin-top: 6px;

}

.col-75 {

         float: left;
         width: 75%;
         margin-top: 6px;

}

.row.after {

        content:"";
        display: table;
        clear: both;

}

@media screen and (max-width: 600px) {

        .col-25, .col-75, .input[type=reset,submit] {

                   width: 100%;
                   margin-top: 0;
        }
}


table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: center;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
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

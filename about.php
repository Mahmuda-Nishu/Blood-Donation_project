<?php

echo'

<html lang="en">
<head>
<title>About Us</title>
<link rel="icon" href="faviconblue.png">
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
              <h2 class="card_title">About Us</h2>
              <p class="card_text">Something should be written here...</p>
    </div>

    <h3 class="made_by">With ♡ from Asclepius Tech</h3>
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
  text-align: left;
  font-family: \'Quicksand\', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
  background: #00B0FF;
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

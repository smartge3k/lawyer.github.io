
<!DOCTYPE html>
<html lang="en">
<head>
  <title>talktolawyer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  

  <style>
    /* Add padding to container elements */
    .navbar {
        padding: 10px 30px;
        width: 100%;
    }

    .nav-item{
      padding: 10px;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: #ff4c1a;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

  body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
  }

/* Style the hero image */
.hero-image {
  background-image: url("b.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

/*Style the parallax scrolling effect */
.bgimg-2 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-2 {
  background-image: url("b.jpg");
  min-height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

/

.checkoutbtn{
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.social {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.checkoutbtn:hover, .social:hover {
  opacity: 0.7;
}



/* ---------------review slider-------------------*/
* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}


/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}


/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.avatar {
    vertical-align: middle;
    width: 80px;
    height: 80px;
    border-radius: 50%;
}

/*style footer */
.footer1 {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  height: auto;
  background-color:#282E34;
  color: white;
  text-align: center;
  padding:2%;
}

.fa {
  padding: 10px;
  font-size: 15px;
  width: 3%;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 1.0;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

  </style>
</head>
<body>
	<?php  require_once('includes/header.php'); ?>

<div class="bgimg-2">
  <div class="caption">
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px"><font color="#ff4c1a"> Don't Hesistate To Ask.</font></h1>
        <p style="font-size:20px">We aim to provide you the best legal advice to get you started and point you in the right direction.</p>
    
            <select class="form-control mr-sm-2" name="location">
              <option value="day"> Choose Your Location </option>
              <option value="one">Taxila</option>
              <option value="two">Rawalpindhi</option>
              <option value="three">Islamabad</option>
              <option value="four">Hassanabdal</option>
              <option value="five">Fateh-Jang</option>
              <option value="six">Haripur Hazara</option>
            </select>
            <button type="submit" class="checkoutbtn" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width:20%;">CheckOut</button>

            <p style="font-size:16px">Experienced lawyers. On-demand service. Fixed fee.</p>
      </div>
    </div>
  </div>
</div>


 <!-- Footer -->

 <?php  require_once('includes/footer.php'); 
        require_once('includes/head.php');
  ?>

</body>
</html>

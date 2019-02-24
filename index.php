
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>goLegal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php  require_once('includes/header.php'); ?>

<div class="bgimg-1">
  <div class="caption">
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px"><font color="#ff4c1a"> Get Justic By Experienced Lawyers</font></h1>
        <p style="font-size:20px">Find a lawyer</p>
        <form class="form-inline my-2 my-lg-0" action='search_results.php' method='post'>
            <input class="form-control mr-sm-2" name='category' type="text" placeholder="Category">
            <input class="form-control mr-sm-2" name='city_province' type="text" placeholder="City, Province">
			<input name='search_submit' type="hidden" value="Yes">
            <button type="submit" class="searchbtn" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width:20%;">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid bg-4 text-center">    <br>
  <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Top Rated Lawyer</h3><br>
  <div class="row">
    
    <div class="col-sm-4"> 
      <p>Family</p>
        <div class="card">
          <img src="b.jpg" alt="John" style="width:100%">
          <h1>John Doe</h1>
          <p class="title">CEO & Founder, Example</p>
          <p>Harvard University</p>
          <div>
            <div>
              <a href="https://www.facebook.com" class="fa fa-facebook"></a>
              <a href="https://www.twitter.com" class="fa fa-twitter"></a>
              <a class="social" href="#"><i class="fa fa-linkedin"></i></a>  
           </div>
         <p><button class="contactbtn">Contact</button></p>
          </div>
        </div>
      </div>
    <div class="col-sm-4"> 
      <p>Business</p>
      <div class="card">
          <img src="c.jpg" alt="John" style="width:100%">
          <h1>John Doe</h1>
          <p class="title">CEO & Founder, Example</p>
          <p>Harvard University</p>
          <div>
            <div>
              <a href="https://www.facebook.com" class="fa fa-facebook"></a>
              <a href="https://www.twitter.com" class="fa fa-twitter"></a>
              <a class="social" href="#"><i class="fa fa-linkedin"></i></a>  
           </div>
         <p><button class="contactbtn">Contact</button></p>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
      <p>Property</p>
      <div class="card">
          <img src="a.png" alt="John" style="width:100%">
          <h1>John Doe</h1>
          <p class="title">CEO & Founder, Example</p>
          <p>Harvard University</p>
          <div>
            <div>
              <a href="https://www.facebook.com" class="fa fa-facebook"></a>
              <a href="https://www.twitter.com" class="fa fa-twitter"></a>
              <a class="social" href="#"><i class="fa fa-linkedin"></i></a>  
            </div>
            <p><button class="contactbtn">Contact</button></p>
          </div>
        </div>
    </div>
  </div>
</div>
</div>



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

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34; text-align:center; padding:50px 80px; text-align: justify;">
  <h3 style="text-align:center;"><font color="white">Reviews And Feedback</font></h3><br>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <center><img src="a.png" alt="Avatar" class="avatar"></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <center><img src="b.jpg" alt="Avatar" class="avatar"></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <center><img src="c.jpg" alt="Avatar" class="avatar"></center>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <center><img src="a.png" alt="Avatar" class="avatar"></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <center><img src="b.jpg" alt="Avatar" class="avatar"></center>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <center><img src="c.jpg" alt="Avatar" class="avatar"></center>
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="a.png" style="width:100%" onclick="currentSlide(1)" alt="John">
    </div>
    <div class="column">
      <img class="demo cursor" src="b.jpg" style="width:100%" onclick="currentSlide(2)" alt="Sara">
    </div>
    <div class="column">
      <img class="demo cursor" src="c.jpg" style="width:100%" onclick="currentSlide(3)" alt="Ibrahim">
    </div>
    <div class="column">
      <img class="demo cursor" src="a.png" style="width:100%" onclick="currentSlide(4)" alt="Bens">
    </div>
    <div class="column">
      <img class="demo cursor" src="b.jpg" style="width:100%" onclick="currentSlide(5)" alt="Rohail">
    </div>    
    <div class="column">
      <img class="demo cursor" src="c.jpg" style="width:100%" onclick="currentSlide(6)" alt="Sona">
    </div>
  </div>
</div>

  </div>
</div>



<div class="bgimg-3">
  <div class="caption">
    <div class="hero-image">
      <div class="hero-text">
        <h1 style="font-size:50px"><font color="#ff4c1a"> Get Free Legal Form</font></h1>
        <p style="font-size:20px">Print or download your customized legal document in 5-10 minutes. Create forms for Real Estate, Business, Estate, and more.</p>
        
            <button type="submit" name="viewformsbtn" style="background-color: #ff4c1a; color: white; padding: 8px 20px; margin: 8px 0; border: none; border-radius: 8px; cursor: pointer; width:30%;">View Forms</button>
        
      </div>
    </div>
  </div>
</div>

<div style="position:relative;">
  <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
    <div class="tab tapnav">
      <button class="tablinks" onclick="openCity(event, 'practice')">By practice area</button>
      <button class="tablinks" onclick="openCity(event, 'province')">By province</button>
      <button class="tablinks" onclick="openCity(event, 'city')">By city</button>
      <button class="tablinks" onclick="openCity(event, 'name')">By name</button>
    </div>

    <div id="practice" class="tabcontent">
      <h3>Practice</h3>
      <p>Practice areas are</p>
    </div>

    <div id="province" class="tabcontent">
      <h3>Province</h3>
      <p>Punjab</p> 
    </div>

    <div id="city" class="tabcontent">
      <h3>City</h3>
      <p>City are</p>
    </div>

    <div id="name" class="tabcontent">
      <h3>Name</h3>
      <p>Names are.</p>
    </div>
  </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

/*review slider */
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<!-- Footer -->

  <?php  require_once('includes/footer.php'); 
        require_once('includes/head.php');
  ?>


</body>
</html>

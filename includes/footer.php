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
	
	<div class="footer1">
		<div class="row">

			<div class="col-footer col-md-4 col-xs-6">
             	<h4><font color="white">About Us</font></h4>
              	<font color="gray">GoLegal is a local profit organization that serves and caters to the needs of people
					of Pakistan. It provide you with detailed information on lawyers and legal issues so
					that you can make the choices that are right for you. It will honor and empower you by legal ways.</font>
            </div>


	        <div class="col-footer col-md-4 col-xs-6">
	            <h4><font color="white">Reach Us at</font></h4>
	              	<font color="gray">GT Road, Wah Cantt<br>
					Pakistan<br>
					<b>Phone:</b> +92 300 1234567<br/>
					<b>Email:</b> kulsoomayyaz26@gmail.com<br></font>
	        </div>

	        <div class="col-footer col-md-4 col-xs-6">
	            <h4><font color="white">Follow Us</font></h4>
	            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
			     <a href="https://www.twitter.com" class="fa fa-twitter"></a>
			     <a href="https://www.instagram.com" class="fa fa-instagram"></a>
	        </div>

        </div>
	</div>
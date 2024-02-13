<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R'45 cricket club</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <!------- font awesome link ----------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<section class="header">


<!---------navbar file included-----------------> 
<?php
    include "navbar.php";
?>

<!---------------------- code for slide show-------------->    
<div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="Photos/slideshow 2.jpeg" style="width:100%">
          <div class="text">Rohit Sharma Playing as India caption</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="Photos/slideshow 4.jpeg" style="width:100%">
          <div class="text">Practice matches played by our students</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="Photos/slideshow3.jpeg" style="width:100%">
          <div class="text">Coaching is an important for building excelent players</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
</div> 
<div class="text-box">

    <h1>R-45 Cricket Academy</h1>
</div>
</section>


<!------course--------->
<section class="course">
    <h1>Courses we offer</h1>
    <p>Join us for exciting matches, engaging training sessions</p>

  <div class="row">
    <div class="course-col">
      <h3>Net Practices</h3>
      <p>we have two nets you have one devoted to spin bowling and the other to seam. 
        With 6 people in each net you will have two batsmen and 4 bowlers. 
        Spend 12/15 mins in each net alternating between the two. 
        For the batsmen after every 3rd ball struck they have to run and swap 
        with their partner who is at the other end.</p>
    </div>
    <div class="course-col">
      <h3>Coaching</h3>
      <p>The coach education program consists of 3 courses which are aimed at coaches of all levels. 
        The coaching pathway begins with the Level 1 course, which is aimed at the development level and thereafter,
         the Level 2 course which builds upon the Level 1 and has more technical components.</p>
    </div>
    <div class="course-col">
      <h3>Gym Sessions</h3>
      <p>A good fitness training for cricket players should include Endurance, 
        Sprint Fitness & Speed/Agility/Quickness (SAQ), 
        Muscular Strength, Flexibility and Cricket specific training. 
        AEROBIC TRAINING - Aerobic exercises are 'energy generating' 
        exercises that is extremely essential for crickets.</p>
    </div>
  </div>
</section>

<!------Grounds--------->
<section class="Grounds">
    <h1>Our Grounds</h1>
    <p>In reality,though, the unity and coherence of ideas among sentences is what constitutes a paragraph</p>
    <div class="row">
        <div class="Grounds-col">
          <img src="Photos/ground 1.jpg">
          <div class="layer">
            <h3>BANDRA</h3>
        </div>
    </div>
</section>


<!------Facilities------->















<!----------javascript for Toggle menu ----->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }   

</script>
<!----------javascript for Slide show ----->

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
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
    }
</script>  



</body>
</html>
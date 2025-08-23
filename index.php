<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hill Country Awards &amp; Trophies</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/logo/QA1_symbol.png">
  </head>
<body>
  <?php include 'header.php'; ?>

  <main>
      <section class="hero">
        <div class="slide active" style="background-image:url('images/hero/football1_slider3D_2.png');">
          <div class="caption">
            <h2>When Memories Matter</h2>
          </div>
        </div>
        <div class="slide" style="background-image:url('images/hero/celebration_1SLD.jpg');">
          <div class="caption">
            <h2>Celebrate</h2>
          </div>
        </div>
        <div class="slide" style="background-image:url('images/hero/Americabg3.jpg');">
          <div class="caption">
            <h2>Reward</h2>
            <p>Commending hard work</p>
          </div>
        </div>
        <div class="slide" style="background-image:url('images/hero/champ_girl1.png');">
          <div class="caption">
            <h2>Drive</h2>
            <p>Custom Recognition</p>
          </div>
        </div>
        <button class="prev" aria-label="Previous slide">&#10094;</button>
        <button class="next" aria-label="Next slide">&#10095;</button>
      </section>

    <section class="about-preview">
      <div class="about-image">
        <img src="images/about/interior6-about-pic2.jpg" alt="Inside Hill Country Awards">
      </div>
      <div class="about-text">
        <h2>Welcome to Hill Country Awards &amp; Trophies</h2>
        <p>We craft custom awards and trophies to commemorate achievements of every kind. From corporate recognition to youth sports, our team is dedicated to honoring your moments.</p>
        <a class="btn" href="about.php">Learn More</a>
      </div>
    </section>

    <section class="showcase">
      <h2>Our Products</h2>
      <div class="showcase-grid">
        <a href="awards.php"><img src="images/showcase/auto_site.png" alt="Auto"></a>
        <a href="awards.php"><img src="images/showcase/trophy_site-1.png" alt="Trophy"></a>
        <a href="awards.php"><img src="images/showcase/EAGLE.png" alt="Eagle"></a>
        <a href="awards.php"><img src="images/showcase/gormet_site.png" alt="Gourmet"></a>
        <a href="awards.php"><img src="images/showcase/LEATHER.png" alt="Leather"></a>
        <a href="awards.php"><img src="images/showcase/DRINKWARE.png" alt="Drinkware"></a>
        <a href="awards.php"><img src="images/showcase/crystal.png" alt="Crystal"></a>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <script>
    const slides = document.querySelectorAll('.hero .slide');
    const nextBtn = document.querySelector('.hero .next');
    const prevBtn = document.querySelector('.hero .prev');
  let currentSlide = 0;
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
  }
  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }
  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
  setInterval(nextSlide, 5000);
  </script>
</body>
</html>

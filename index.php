<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hill Country Awards &amp; Trophies</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <main>
    <section class="hero">
      <div class="overlay"></div>
      <div class="hero-content">
        <h1 class="tagline">When Memories Matter</h1>
        <div class="carousel">
          <div class="slide active">
            <img src="images/hero/hero_football.png" alt="Football Trophy">
            <p>Rewarding Success with Perfection</p>
          </div>
          <div class="slide">
            <img src="images/hero/hero_champ_girl.png" alt="Champion Girl">
            <p>Effort Rewarded</p>
          </div>
          <div class="slide">
            <img src="images/hero/hero_celebration.jpg" alt="Celebration">
            <p>Celebrate Every Victory</p>
          </div>
          <button class="prev" aria-label="Previous slide">&#10094;</button>
          <button class="next" aria-label="Next slide">&#10095;</button>
        </div>
      </div>
    </section>

    <section class="about-preview">
      <div class="about-image">
        <img src="images/about/about_interior.jpg" alt="Inside Hill Country Awards">
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
        <a href="awards.php"><img src="images/showcase/auto.png" alt="Auto"></a>
        <a href="awards.php"><img src="images/showcase/trophy.png" alt="Trophy"></a>
        <a href="awards.php"><img src="images/showcase/eagle.png" alt="Eagle"></a>
        <a href="awards.php"><img src="images/showcase/gourmet.png" alt="Gourmet"></a>
        <a href="awards.php"><img src="images/showcase/leather.png" alt="Leather"></a>
        <a href="awards.php"><img src="images/showcase/drinkware.png" alt="Drinkware"></a>
        <a href="awards.php"><img src="images/showcase/crystal.png" alt="Crystal"></a>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <script>
  const slides = document.querySelectorAll('.carousel .slide');
  const nextBtn = document.querySelector('.carousel .next');
  const prevBtn = document.querySelector('.carousel .prev');
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

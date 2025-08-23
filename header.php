<header>
  <div class="logo">
    <a href="index.php"><img src="images/logo.png" alt="Hill Country Awards &amp; Trophies logo"></a>
  </div>
  <div class="menu-toggle" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav>
    <ul id="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="awards.php">Awards &amp; Trophies</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="clients.php">Clients</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>
<script>
function toggleMenu() {
  var nav = document.getElementById('nav-links');
  nav.classList.toggle('show');
}
</script>

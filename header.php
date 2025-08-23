<header>
  <div class="logo">Logo</div>
  <div class="menu-toggle" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav>
    <ul id="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Awards &amp; Trophies</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Clients</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
</header>
<script>
function toggleMenu() {
  var nav = document.getElementById('nav-links');
  nav.classList.toggle('show');
}
</script>

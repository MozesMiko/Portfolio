<?php
$currentFolder = basename(dirname($_SERVER['PHP_SELF'])) ?: 'home';
?>

<nav class="navbar">
  <div class="navbar-content">
    <div class="logo">
      <a href="index.html">
        <svg>
          <use href="#personal-logo"></use>
        </svg>
      </a>
    </div>
    <div class="nav-links">
      <ul>
        <li><a href="/" class="<?php echo ($currentFolder === 'home') ? 'active' : ''; ?>">Home</a></li>
        <li><a href="/cases" class="<?php echo ($currentFolder === 'cases') ? 'active' : ''; ?>">Cases</a></li>
        <li><a href="/about" class="<?php echo ($currentFolder === 'about') ? 'active' : ''; ?>">About</a></li>
        <li><a href="/contact" class="<?php echo ($currentFolder === 'contact') ? 'active' : ''; ?>">Contact</a></li>
      </ul>
    </div>
    <div class="theme-and-burger">
      <div class="theme-control">
        <svg id="moon">
          <use href="#moon-icon"></use>
        </svg>
        <svg id="sun">
          <use href="#sun-icon"></use>
        </svg>
      </div>
      <div class="burger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</nav>
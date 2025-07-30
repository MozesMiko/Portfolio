<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/shared_assets/favicon.ico">
  <script src="/javascript/theme.js"></script>
  <link rel="stylesheet" href="/css/components/navigation.css">
  <link rel="stylesheet" href="/css/main.css">  
  <link rel="stylesheet" href="/css/pages/homepage.css">
  <link rel="stylesheet" href="/css/components/case-card.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <title>Mozes Miko</title>
</head>
<body class="no-animate">
  <?php include 'components/navigation.php'; ?>
  <div class="hero-section">
    <div id="dot-grid"></div>
    <div class="content-container">
      <div id="hero-text">
        <h1>Hello, I'm Mózes!</h1>
        <div id="i-am-text">
          <h1>I am a</h1>
          <div id="typewriter-container">
            <h1 id="typewriter"></h1>
          </div>
        </div>
        <p id="intro-text">
          I combine data-driven design with creative thinking to deliver user-centered
          solutions that align user needs with business goals. Passionate about my 
          craft, I continuously develop myself in various areas to ensure seamless 
          cross-functional collaboration.
        </p>
        <!-- <a href="contact/index.html"><button>Contact me</button></a>
        <a href="contact/index.html"><button>Download CV</button></a> -->
      </div>
      <img id="hero-image" src="/img/homepage/hero_image.webp" alt="">
      <div class="blob one"></div>
      <div class="blob two"></div>
    </div>
  </div>
  <div class="cases-section">
    <div class="content-container">
      <div class="header-and-button">
        <h1>Cases</h1>
        <a href="/cases/index.html" class="button large wide">See more</a>
      </div>
      <div class="case-card">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1>Big ol' penis</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra 
            mauris at turpis sodales, sed placerat felis tincidunt. Integer ac dui 
            viverra, blandit diam in, commodo ante.</p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>Penis</p>
              <p>Penis</p>
              <p>Penis</p>
            </div>
            <a href="/cases/project_template/index.html" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1>Big ol' penis</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra 
            mauris at turpis sodales, sed placerat felis tincidunt. Integer ac dui 
            viverra, blandit diam in, commodo ante.</p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>Penis</p>
              <p>Penis</p>
              <p>Penis</p>
            </div>
            <a href="#" class="button large">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-me-section">
    <div class="floating-particles" id="particles-js"></div>
    <div class="content-container">
      <h1>About me</h1>
      <div class="section-content">
        <img src="/img/homepage/about_me.webp" alt="">
        <div class="text-and-cta">
          <h2>Who am I?</h2>
          <p>
            Researcher, designer, husband, father, nerd—I'm someone who wears many hats,
             each tied to a passion for both my work and personal life. As a strong 
             collaborator, communicator, and listener, my focus is on creating meaningful
              solutions that solve real problems. I strive to design seamless, 
              user-friendly experiences that elevate digital products. I invite you to 
              explore more about me and discover how I can help your business achieve its
              goals.
          </p>
          <a href="about/index.html" class="button large wide">Read more</a>
        </div>
      </div>
    </div>
  </div>
  <?php include 'components/footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/javascript/script.js"></script>
  <script src="/javascript/particles.js"></script>
  <script src="/javascript/app.js"></script>
  <script src="/javascript/homepage.js"></script>
</body>
</html>
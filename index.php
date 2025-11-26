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
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/img/shared_assets/icons.svg'; ?>
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
        <a href="/cases/" class="button large wide">See more</a>
      </div>
      <div class="case-card" id="minforening">
        <div class="case-thumbnail">
          <img src="/cases/card-img/minforening-card.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Club Management App Redesign</h1>
            <p class="case-card-text">
              Redesigned the complete UI and UX for an association management app, 
              streamlining member and event administration, and communication in
               a user-friendly platform.
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>End-to-End UX/UI</p>
              <p>Member Management</p>
              <p>Digital Platform Design</p>
            </div>
            <a href="/cases/association-management/" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card" id="content-creator">
        <div class="case-thumbnail">
          <img src="/cases/card-img/content-creator-card.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Updating Content Creator UI & UX</h1>
            <p class="case-card-text">
              Modernized an outdated content creator tool with a cleaner interface and 
              improved user experience, streamlining the creation process for efficiency 
              and ease of use.
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>UI Design</p>
              <p>Usability Improvement</p>
              <p>Workflow Optimization</p>
            </div>
            <a href="/cases/content-creator/" class="button large">Read more</a>
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
          <a href="/about/" class="button large wide">Read more</a>
        </div>
      </div>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="/javascript/script.js"></script>
  <script src="/javascript/particles.js"></script>
  <script src="/javascript/app.js"></script>
  <script src="/javascript/homepage.js"></script>
</body>
</html>
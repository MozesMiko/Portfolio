<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/shared_assets/favicon.ico">
  <script src="/javascript/theme.js"></script>
  <link rel="stylesheet" href="/css/components/navigation.css">
  <link rel="stylesheet" href="/css/main.css">  
  <link rel="stylesheet" href="/css/pages/contact-page.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <title>Contact me</title>
</head>
<body class="contact-page">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/img/shared_assets/icons.svg'; ?>
  <div class="content-container">
    <div class="contact-element">
      <div class="contact-img-container">
        <img id="contact-image-light" src="/img/contact_me/contact-me-light.webp" alt="">
        <img id="contact-image-dark" src="/img/contact_me/contact-me-dark.webp" alt="">
      </div>      
      <div class="contact-form-container">
        <div class="contact-banner">
          <img src="/img/about_me/about_me_hero.webp" alt="">
          <div class="contact-banner-text">
            <p class="banner-top-row">Do I seem like the right match?</p>
            <p class="banner-bottom-row">Let's get in touch today!</p>
          </div>
        </div>
        <form action="">
          <div class="form-name-and-email">
            <div class="form-name-container">
              <label for="name">Your name</label>
              <input type="text" placeholder="Name Surname" name="name" id="name">
            </div>
            <div class="form-email-container">
              <label for="email">Email</label>
              <input type="email" placeholder="name@email.com" name="email" id="email">
            </div>            
          </div>
          <div class="form-message">
            <label for="message">Message</label>
            <textarea placeholder="Type your message here" name="message" id="message"
            rows="3"></textarea>
          </div>
          <input class="button" type="submit" value="Send message" id="form-submit-btn">
        </form>
        <div class="separator"><p>or</p></div>
        <div class="contact-method-container">
          <div class="contact-method" id="emailContact">
            <div class="contact-method-text">
              <p class="content-method-top-row">Email me directly</p>
              <p class="content-method-bottom-row" id="emailDisplay">
                Click this box to reveal
              </p>
            </div>
            <div class="contact-method-icon-container">
              <svg>
                <use href="#email-icon"></use>
              </svg>
            </div>
          </div>
          <div class="contact-method" id="phoneContact">
            <div class="contact-method-text">
              <p class="content-method-top-row">Give me a call</p>
              <p class="content-method-bottom-row" id="phoneDisplay">
                Click this box to reveal
              </p>
            </div>
            <div class="contact-method-icon-container">
              <svg>
                <use href="#phone-icon"></use>
              </svg>
            </div>
          </div>
          <a href="https://www.linkedin.com/in/mozesmiko" target="_blank" 
          rel="noopener noreferrer" class="contact-method" 
          id="linkedInContact">
            <div class="contact-method-text">
              <p class="content-method-top-row">Add me to your network</p>
              <p class="content-method-bottom-row">Connect on LinkedIn</p>
            </div>
            <div class="contact-method-icon-container">
              <svg>
                <use href="#linkedin-icon"></use>
              </svg>
            </div>
          </a>
          <a href="https://www.github.com/MozesMiko" target="_blank" 
          rel="noopener noreferrer" class="contact-method" id="githubContact">
            <div class="contact-method-text">
              <p class="content-method-top-row">Check out my other work</p>
              <p class="content-method-bottom-row">See my code on Github</p>
            </div>
            <div class="contact-method-icon-container">
              <svg>
                <use href="#github-icon"></use>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
  <script src="/javascript/script.js"></script>
  <script src="/javascript/contactpage.js"></script>
</body>
</html>
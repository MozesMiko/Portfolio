<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/shared_assets/favicon.ico">
  <script src="/javascript/theme.js"></script>
  <link rel="stylesheet" href="/css/components/navigation.css">
  <link rel="stylesheet" href="/css/main.css">  
  <link rel="stylesheet" href="/css/pages/case-page.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <title>QA & UR</title>
</head>
<body class="case-page">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/img/shared_assets/icons.svg'; ?>
  <div class="content-container top-padding">
    <a href="/cases/" class="button">
      <svg>
        <use href="#left-arrow-icon"></use>
      </svg>
      Back to cases
    </a>
    <img class="case-header-img" src="img/hold-me-closer-hero.webp" alt="">
    <h1>Quality Assurance & User Research for mobile game development</h1>
    <div class="content-and-index">
      <div class="case-index">
        <noscript style="text-align: center;">
            Please enable JavaScript to access index
          </noscript>
          <div class="index-header">
            <p>Index</p>
            <div id="item-counter">
              <p id="current-item"></p>
              <p>/</p>
              <p id="total-items"></p>
            </div>  
          </div>
      </div>
      <div class="case-description">
        <section id="overview">
          <h1>Overview</h1>
          <p>
            During my 9th semester, I took part in a game development project through 
            DADIU (The National Academy for Digital Interactive Entertainment), I worked 
            as User Research & QA Manager on Hold Me Closer, a mobile game exploring 
            themes of grief. Our team developed two mini-games and a final graduation 
            game, released on iOS and Android. The role gave me hands-on experience in 
            bridging player insights and development work.
          </p>
          <!-- <img class="case-desc-img" src="/img/case-page/desk.webp" alt=""> -->
        </section>
        <section id="role">
          <h1>Role</h1>
          <p class="margin-bottom">
            As User Research & QA Manager, I was part of the Lead Team, and I worked 
            closely with the Project Manager, Game Director, Lead Programmer and Game 
            Designers. My responsibilities and tasks included:
          </p>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Quality Assurance</p>
              <p>
                I designed and executed QA processes, including bug tracking and 
                reporting.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>User Research and Testing</p>
              <p>
                I conducted player research, usability and narrative testing.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Cross-functional collaboration</p>
              <p>
                I acted as a liaison between players, designers, and developers to align 
                the game with user expectations.
              </p>
            </div>
          </div>
          <img class="case-desc-img" src="img/hold-me-closer-game-map.webp" alt="" 
              loading="lazy">
        </section>
        <section id="zmet">
          <h1>Mapping Player Thoughts with ZMET</h1>
          <p>
            Early on, I used the Zaltman Metaphor Elicitation Technique to explore how 
            players unconsciously connect to grief. Volunteers brought images representing
             their feelings, and I mapped out patterns that influenced our visuals and 
             game elements. It was fascinating to see how differently people interpreted 
             the same topic, and it reinforced how important early user research is for 
             guiding design.
          </p>
        </section>
        <section id="bugs">
          <h1>Bug Tracking & Test Planning</h1>
          <p>
            I set up a Trello board with standardized test cases and IDs, which kept the 
            team on the same page and made it easy to reproduce issues. I also created a 
            living test plan that outlined scope, risks, and milestones. Keeping this 
            structured documentation allowed the team to move quickly without losing 
            oversight.
            <img class="case-desc-img" src="img/hold-me-closer-bugs.webp" alt="" 
              loading="lazy">
        </section>
        <section id="testing">
          <h1>Testing Usability and Narrative</h1>
          <p>
            I ran three rounds of player tests: usability, narrative, and appreciation. 
            Usability tests uncovered controls that confused players, which we quickly 
            adjusted. Narrative testing showed that while not all game elements were 
            interpreted exactly as intended, players could “feel” the story, confirming 
            our design was on track. Appreciation surveys later helped us prioritize 
            polish and small improvements that made the game more enjoyable.
          </p>
          </p>
        </section>
        <section id="collaboration">
          <h1>Collaborating Across Disciplines</h1>
          <p>
            Being part of the lead team meant I acted as a bridge between designers, 
            developers, and the project manager. I learned the value of translating player
             feedback into actionable changes, and how critical it is to have someone 
             focused on connecting users to the development process.
          </p>
        </section>
        <section id="impact">
          <h1>Impact</h1>
          <p>
            <ul>
              <li>
                Key usability issues were resolved before launch.
              </li>
              <li>
                Narrative elements resonated with players, validating our approach.
              </li>
              <li>
                QA processes improved development efficiency and reduced duplicate 
                bug reports.
              </li>
            </ul>
          </p>
        </section>
        <section id="reflection">
          <h1>Reflection</h1>
          <p class="margin-bottom">
            This project taught me how structured processes, player research, and clear 
            communication can directly influence the success of a game. I also discovered 
            the joy of observing players interact with a product and translating their 
            experiences into improvements. It reinforced my passion for roles that sit at 
            the intersection of research, design, and quality assurance. You can watch
            the trailer to the game below.
          </p>
          <iframe 
            style="border-radius: 12px"
            src="https://www.youtube.com/embed/t4cD9MPkDs4" 
            width="100%" 
            height="480" 
            frameborder="0" 
            allow="autoplay; fullscreen" 
            allowfullscreen>
          </iframe>
        </section>
      </div>
    </div>
    <div class="popup-modal">
      <span>&times;</span>
        <img src="/img/case-page/desk.webp" alt="">
    </div>
    <div class="cta-container">
          <div class="cta">
            <h2>Feel like we'd be a great fit?</h2>
            <p>I’d love to hear from you! If you’re looking for someone to bring 
              thoughtful, user-centered solutions to your team, I’d love to hear from you.
            </p>
            <div class="cta-button-container">
              <a href="/contact/" class="button">Get in touch</a>
            </div>
          </div>
          <div class="cta">
            <h2>Curious to see more?</h2>
            <p>
              Check out my other case studies on the Cases page or head over to the About 
              page to get a better sense of who I am and how I work.
            </p>
            <div class="cta-button-container">
              <a href="/cases/" class="button ghost">See more cases</a>
              <a href="/about/" class="button">Get to know me</a>
            </div>
          </div>
        </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
  <script src="/javascript/script.js"></script>
  <script src="/javascript/casepage.js"></script>
</body>
</html>
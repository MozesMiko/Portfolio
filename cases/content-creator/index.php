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
  <title>Content Creator</title>
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
    <img class="case-header-img" src="img/content-creator-hero.webp" alt="">
    <h1>Updating Content Creator UI & UX</h1>
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
            Users of the web admin platform were increasingly avoiding the built-in 
            content creation tool, opting for the mobile app instead—despite it being less
             feature-rich. The feedback was clear: frustration with the web experience was
              pushing users away.
          </p>
          <br>
          <p>
            My task was to redesign the content creator for long-form publishing. The goal
             was not just a visual overhaul, but a complete rethinking of the tool’s 
             usability, interaction flow, and overall experience based on user feedback 
             and research.
          </p>
        </section>
        <section id="problem">
          <h1>The Problem</h1>
          <p class="margin-bottom">
            The existing content creator was built around content “blocks,” forcing users 
            to manually piece together different types of elements—paragraphs, images, 
            links—in a rigid order. Combined with a clunky file manager, this led to 
            frustration and reduced productivity.
          </p>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Cumbersome UI</p>
              <p>
                The interface was visually cluttered, with too many elements on screen at 
                once—including a persistent preview pane that added little value and 
                increased cognitive load.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Confusing Post Settings</p>
              <p>
                Options like post scheduling, expiration, and audience targeting were 
                poorly placed and often misunderstood. Users frequently missed or 
                misconfigured them.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Lack of Familiarity</p>
              <p>
                The editor didn’t align with users’ mental models or expectations based 
                on tools they already used (e.g., LinkedIn, WordPress). This made it 
                harder to adopt or trust the tool.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Workflow Disruption</p>
              <p>
                Many users resorted to writing content in Microsoft Word or other external
                 tools before copying it into the editor, defeating the purpose of having 
                 an integrated solution.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Clunky File Management</p>
              <p>
                Uploading media was a major pain point due to the outdated file manager. 
                Users often switched to the mobile app just to access images stored on 
                their devices more easily.
              </p>
            </div>
          </div>
          <img class="case-desc-img" src="img/content-creator-old.webp" alt="">
        </section>
        <section id="research">
          <h1>Research</h1>
          <h2 class="margin-bottom">User interviews</h2>
          <p>
            To uncover what was truly causing user frustration, I interviewed content 
            creators from multiple client teams. Some used our platform regularly; others 
            preferred alternatives like LinkedIn or WordPress. Interview goals included:
          </p>
          <ul>
            <li>Understand what tools users currently rely on</li>
            <li>Discover pain points with our platform</li>
            <li>Identify must-have features for long-form publishing</li>
            <li>Visualize their ideal flow for content creation</li>
          </ul>
          <p>
            A surprising insight emerged: users preferred the mobile app—not because it 
            was more powerful, but because uploading content was simpler. The legacy file 
            manager on the web added friction that users actively avoided.
          </p>
          <h2 class="margin-bottom">Key Takeaways</h2>
          <ul>
            <li>
              Users wanted <span class="bold"> one fluid text editor</span>, not 
              separate content blocks.
            </li>
            <li>
              <span class="bold">Uploading</span> images/files <span class="bold">needed 
                to be easier</span>.
            </li>
            <li>
              <span class="bold">Settings</span>  like post expiration were 
              <span class="bold">placed poorly</span> and were confusing.
            </li>
            <li>
              Users wanted to <span class="bold">preview content only on demand</span>.
            </li>
            <li>
              The UI needed to <span class="bold">reduce cognitive load</span>, not add 
              to it.
            </li>
          </ul>
          <img class="case-desc-img" src="img/content-creator-user-mockups.webp" alt=""
          loading="lazy">
        </section>
        <section id="design-process">
          <h1>Design Process</h1>
          <p class="margin-bottom">
            Based on research and competitive analysis (LinkedIn, WordPress, Facebook), 
            I began wireframing an interface optimized for long-form content while 
            preserving flexibility.
          </p>
          <p>
            We introduced a single rich-text editor as the core element, with inline 
            options to add media, embeds, and links. Content settings were redesigned into
             a collapsible panel, accessible but out of the way.
          </p>
        </section>
        <section id="enhancements">
          <h1>UI Enhancements Based on Feedback</h1>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Removed always-visible preview</p>
              <p>
                The always-visible preview was removed since the new editor closely 
                reflects the final output. Users may still see the preview to check how
                it would look like on different viewports.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Replaced “post expiration” with default publish logic</p>
              <p>
                If left untouched, post is visible to all, immediately.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Redesigned post settings panel as a right-aligned accordion.</p>
              <p>
                Clean look, easy access.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Introduced new Gallery component.</p>
              <p>
                Upload up to 15 images in one go. Easier, cleaner, and faster. The 
                original design allowed up to 4 images, which had to be uploaded one at a 
                time.
              </p>
            </div>
          </div>
        </section>
        <section id="file-organization">
          <h1>Design File Organization</h1>
          <p>
            To help developers, I broke down the design into smaller flows:
          </p>
          <ul>
            <li>Basic content input (title, body, image)</li>
            <li>Separate flows for each content type</li>
            <li>Post settings logic documented with default vs. custom behavior</li>
          </ul>
          <p>
            This made the design file more modular and dev-friendly.
          </p>
          <img class="case-desc-img" src="img/content-creator-design-file.webp" alt=""
          loading="lazy">
        </section>
        <section id="testing">
          <h1>Validation and Testing</h1>
          <p>
            To measure impact, I ran counterbalanced usability testing with 6 users. 
            Each completed the same content creation task with both the old and new 
            editors.
            <ul>
              <li>
                <span class="bold">Result:</span> Every user completed the task faster 
                with the new UI.
              </li>
              <li>
                <span class="bold">Feedback:</span> The new flow felt “natural,” “clean,” 
                and “familiar.”
              </li>
            </ul>
          </p>
        </section>
        <section id="final-thoughts">
          <h1>Final Thoughts</h1>
          <p>
            The redesign achieved its core goals:
            <ul>
              <li>
                Reduced cognitive load.
              </li>
              <li>
                Improved user satisfaction.
              </li>
              <li>
                Retained backend compatibility (minimizing dev lift).
              </li>
              <li>
                Boosted adoption of the web version over the app.
              </li>
            </ul>
          </p>
          <p>            
            The only new component (an image gallery) required minimal backend adjustment 
            and addressed a longstanding pain point.
          </p>
          <br>
          <p>
            I’m proud of how the solution balanced user needs, technical feasibility, and 
            business goals all while modernizing a critical part of the platform.
          </p>
          <img class="case-desc-img" src="img/content-creator-new.webp" alt=""
          loading="lazy">
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
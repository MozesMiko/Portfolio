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
  <title>Project template</title>
</head>
<body class="case-page">
  <?php include '../../components/navigation.php'; ?>
  <div class="content-container top-padding">
    <a href="/cases/index.html" class="button">
      <svg>
        <use href="/img/shared_assets/icons.svg#left-arrow-icon"></use>
      </svg>
      Back to cases
    </a>
    <img class="case-header-img" src="case-placeholder-img.webp" alt="">
    <h1>This is a big ol' penis right here, boi</h1>
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
            Our team set out to redesign a content management system (CMS) used by 
            administrators to schedule and publish updates to a company-wide internal 
            platform. The existing system lacked clarity, had an outdated UI, and was 
            cumbersome to use. Our goal was to improve usability, streamline workflows, 
            and create a more intuitive interface for content scheduling and post settings
            .
          </p>
          <img class="case-desc-img" src="/img/case-page/desk.webp" alt="">
        </section>
        <section id="background">
          <h1>Background</h1>
          <p>
            The CMS was originally designed as an add-on to a larger platform but had 
            grown into a critical tool for administrators. However, as new features were 
            added, the interface became cluttered, and users struggled to complete simple 
            tasks like scheduling posts or editing drafts. Through feedback from users and
             stakeholders, we identified pain points and opportunities for improvement.
          </p>
          <img class="case-desc-img" src="/img/case-page/gameboy.webp" alt="">
        </section>
        <section id="research">
          <h1>Research and competitive analysis</h1>
          <p>
            To better understand industry standards and user expectations, we conducted a 
            competitive analysis of similar CMS platforms, including WordPress, 
            Contentful, and Medium. We examined their approaches to scheduling, draft 
            management, and post organization. This helped us identify best practices, 
            such as clear visual hierarchies, real-time previews, and flexible scheduling 
            options.
          </p>
        </section>
        <section id="user-interviews">
          <h1>User interviews</h1>
          <p>
            We interviewed five administrators who regularly used the CMS. Our goal was to
             understand their workflows, frustrations, and desired improvements. We asked 
             questions about their daily tasks, challenges they faced, and features they 
             wished they had. The insights from these interviews directly informed our 
             design decisions.
          </p>
        </section>
        <section id="findings">
          <h1>Findings</h1>
          <p>
            From our research and interviews, we identified key pain points:
            <ul>
              <li>
                The post-scheduling system was confusing, leading to missed or duplicated 
                updates.
              </li>
              <li>
                Users had difficulty finding drafts and past posts due to a lack of 
                filtering and search options.
              </li>
              <li>
                The UI was cluttered, making it hard to locate key functions.
              </li>
              <li>
                There was no clear indication of post status (draft, scheduled, published,
                 archived).
              </li>
            </ul>
            These insights guided our redesign strategy.
          </p>
        </section>
        <section id="interface-mockups">
          <h1>Interface mockups</h1>
          <p>
            Using Figma, we created wireframes to explore different layout possibilities. 
            We tested various navigation structures, post organization methods, and 
            scheduling interfaces. Low-fidelity prototypes helped us validate our ideas 
            before moving to high-fidelity designs.
          </p>
        </section>
        <section id="new-design">
          <h1>Creating the new designs</h1>
          <p>
            Our final design featured:
            <ul>
              <li>
                A calendar-based scheduling system for a clear overview of upcoming posts.
              </li>
              <li>
                A streamlined post creation workflow, reducing steps to publish or 
                schedule content.
              </li>
              <li>
                Improved filtering and search functionality to quickly find drafts and 
                past posts.
              </li>
              <li>
                Visual indicators for post status to minimize confusion.
              </li>
            </ul>
          </p>
        </section>
        <section id="organizing">
          <h1>Organizing the design file</h1>
          <p>
            To maintain efficiency, we structured the design file with clear sections:
            <ul>
              <li>
                A component library with reusable UI elements.
              </li>
              <li>
                Separate pages for wireframes, mockups, and final designs.
              </li>
              <li>
                Version history tracking to document design changes.
              </li>
            </ul>
          </p>
        </section>
        <section id="post-settings">
          <h1>Post settings</h1>
          <p>
            We improved the post settings panel to be more user-friendly, including:
            <ul>
              <li>
                Flexible scheduling options (immediate, future date, recurring posts).
              </li>
              <li>
                Custom visibility settings for targeting specific teams or departments.
              </li>
              <li>
                A preview mode to see how posts would appear before publishing.
              </li>
            </ul>
          </p>
        </section>
        <section id="validation">
          <h1>Validation</h1>
          <p>
            To test our designs, we conducted usability testing with five administrators. 
            Results showed:
            <ul>
              <li>
                A 40% reduction in time spent scheduling posts.
              </li>
              <li>
                A 30% decrease in user errors related to post visibility and status.
              </li>
              <li>
                Positive feedback on the intuitive layout and improved search 
                functionality.
              </li>
            </ul>
          </p>
        </section>
        <section id="conclusion">
          <h1>Conclusion</h1>
          <p>
            The redesigned CMS significantly improved the user experience, making content 
            scheduling and management more efficient. By focusing on user needs and 
            industry best practices, we created an intuitive, streamlined system that 
            reduced frustration and increased productivity for administrators. Future 
            iterations will include additional analytics features to track post engagement
             and user interactions.
          </p>
          <img class="case-desc-img" src="/img/case-page/gameboy.webp" alt="">
          <!-- <img class="case-image" src="newpostsettings.png" alt=""> -->
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
              <a href="/contact/index.html" class="button">Get in touch</a>
            </div>
          </div>
          <div class="cta">
            <h2>Curious to see more?</h2>
            <p>
              Check out my other case studies on the Cases page or head over to the About 
              page to get a better sense of who I am and how I work.
            </p>
            <div class="cta-button-container">
              <a href="/cases/index.html" class="button ghost">See more cases</a>
              <a href="/about/index.html" class="button">Get to know me</a>
            </div>
          </div>
        </div>
  </div>
  <?php include '../../components/footer.php'; ?>
  <script src="/javascript/script.js"></script>
  <script src="/javascript/casepage.js"></script>
</body>
</html>
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
  <title>Knowledge Base Redesign</title>
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
    <img class="case-header-img" src="img/knowledge-base-hero.webp" alt="">
    <h1>Knowledge Base Revamp for Improved UX</h1>
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
            Our FAQ module needed more than just a facelift — the whole structure was 
            messy and hard to navigate. Users could create endless layers of subgroups, 
            which turned finding anything into a guessing game. We decided to rebuild it 
            as a proper Knowledge Base with a clear structure, better navigation, and a 
            consistent experience across mobile, responsive web, and the admin portal.
          </p>
        </section>
        <section id="problem">
          <h1>The Problem</h1>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Infinite nesting</p>
              <p>
                Users could create subgroups within subgroups with no limit. This made the 
                structure confusing and articles hard to locate quickly.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">
              <p>Poor structure</p>
              <p>
                Many top-level groups contained only a single short article. Related content
                was often spread out instead of being grouped logically.
              </p>
            </div>            
          </div>
          <div class="numbered-point">
            <div class="point-content">
              <p>Unclear and outdated user experiences</p>
              <p>
                The mobile app’s hierarchy looked identical at every level, making it hard 
                for users to know how deep they were in the structure.
              </p>
            </div>            
          </div>
          <div class="numbered-point">
            <div class="point-content">
              <p>Complex terminology</p>
              <p>
                Terms like “sub-sub group” were common when talking about the module. This 
                made communication harder internally and didn’t help users understand the 
                hierarchy.
              </p>
            </div>            
          </div>
        </section>
       <section id="research">
          <h1>Research & insights</h1>
          <p>
            To establish a benchmark for best practices, I reviewed help centers from 
            companies such as Lyft, Spotify, and Zendesk.
          </p>
          <h2>Key takeaways</h2>
          <p>
            <ul>
              <li>
                <span class="bold">Keep the hierarchy concise:</span> typically no more 
                than 3 or 4 levels
              </li>
              <li>
                Make <span class="bold">search functionality prominent</span> and easily 
                accessible.
              </li>
              <li>
                <span class="bold">Use breadcrumbs</span> and/or a 
                <span class="bold">sidebar index</span> to help users stay oriented.
              </li>
            </ul>
          </p>
          <p>
            I also analyzed how our clients had organized their existing FAQs. 
            Interestingly, most were already following a loose three‑level structure, 
            even if unintentionally.
          </p>
        </section>
        <section id="solution">
          <h1>Solution</h1>
          <p>
            I proposed a clear, capped hierarchy:
          </p>
          <ol>
            <li><span class="bold">Collections</span></li>
            <li><span class="bold">Categories</span></li>
            <li><span class="bold">Sections</span> (optional)</li>
            <li><span class="bold">Articles</span></li>
          </ol>
          <p>
            This made it easier to communicate internally and provided a scalable 
            structure for clients.
          </p>
          <img class="case-desc-img" src="img/knowledge-base-ia.webp" alt=""
          loading="lazy">
          <h2>Design highlights:</h2>
          <ul>
            <li><span class="bold">Fully responsive site</span> for our web app</li>
            <li>
              <span class="bold">Improved navigation:</span> Breadcrumbs, persistent 
              search, index navigation on responsive web.
            </li>
            <li>
              <span class="bold">Better admin tools:</span> Drag-and-drop reordering, 
              inline actions, visual hierarchy.
            </li>
          </ul>
          <img class="case-desc-img" src="img/knowledge-base-responsive.webp" alt=""
          loading="lazy">
        </section>
        <section id="implementation">
          <h1>Cross-platform implementation</h1>
          <h2 class="margin-bottom">Mobile & Responsive Web</h2>
          <p>
            The redesign established a consistent layout across both platforms, with a 
            strong focus on usability and quick navigation.
          </p>
          <ul>
            <li>
              <span class="bold">Search‑first layout:</span> A prominent search bar helps 
              users quickly locate information.
            </li>
            <li>
              <span class="bold">Tile‑based previews for categories and articles:</span> 
              Improves scannability and visual structure.
            </li>
            <li>
              <span class="bold">Horizontal ribbon navigation for collections:</span> 
              Makes browsing top‑level topics easier without overwhelming the interface.
            </li>
          </ul>
          <img class="case-desc-img" src="img/knowledge-base-main.webp" alt=""
          loading="lazy">
          <p>
            The redesigned mobile experience introduced visually distinct hierarchy 
            levels, making it easier for users to understand where they were within the 
            Knowledge Base. Each level—collections, categories, sections, and articles—has
             its own clear visual treatment, avoiding the “everything looks the same” 
             issue of the old FAQ. The new design also surfaces more information at a 
             glance through tile previews that include article counts and short summaries,
              helping users quickly decide where to navigate without unnecessary drilling.
          </p>
          <img class="case-desc-img" src="img/knowledge-base-compare.webp" alt=""
          loading="lazy">
          <h2 class="margin-bottom">Web admin</h2>
          <p>
            The admin portal was redesigned for clarity, replacing the old nested table 
            structure with a more organized, flexible layout.
          </p>
          <ul>
            <li>
              <span class="bold">Accordion‑based hierarchy for clarity:</span> Gives content managers a clear 
              overview of structure at all levels.
            </li>
            <li>
              <span class="bold">Drag‑and‑drop sorting:</span> Makes reordering content intuitive and efficient.
            </li>
            <li>
              <span class="bold">Context‑specific actions per level:</span> Streamlines workflow by only showing 
              relevant actions for collections, categories, sections, or articles.
            </li>
          </ul>
          <img class="case-desc-img" src="img/knowledge-base-admin.webp" alt=""
          loading="lazy">
        </section>
        <section id="outcome">
          <h1>Outcome</h1>
          <p class="margin-bottom">
            The redesigned knowledge base introduced a much simpler three‑level structure,
             which significantly improved both navigation and maintenance. Users could 
             find relevant information faster, and admins could manage content without 
             getting lost in overly complex hierarchies.
          </p>
          <p class="margin-bottom">
            A more consistent UI across mobile, responsive web, and the admin portal 
            created a unified experience on all devices. The shared design patterns meant
             users no longer had to relearn the interface when switching platforms, and 
             content felt more cohesive.
          </p>
          <p>
            Feedback from clients was very positive. Several described the new system as 
            “much easier to use and manage”, and reported that the updated structure and 
            clearer organization saved them time on both finding and maintaining 
            information.
          </p>
          <img class="case-desc-img" src="img/knowledge-base-outcome.webp" alt=""
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
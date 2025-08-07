<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/shared_assets/favicon.ico">
  <script src="/javascript/theme.js"></script>
  <link rel="stylesheet" href="/css/components/navigation.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/pages/cases-page.css">
  <link rel="stylesheet" href="/css/components/case-card.css">
  <link rel="stylesheet" href="/css/components/button.css">
  <title>Cases</title>
</head>
<body class="cases-page no-animate">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/img/shared_assets/icons.svg'; ?>
  <div class="content-container top-padding">
    <div class="header-and-display-control">
      <h1>Cases</h1>
      <div class="display-control">
        <button class="display-control-btn" id="view-default">
          <svg>
            <use href="#card-default-icon"></use>
          </svg>
        </button>
        <button class="display-control-btn" id="view-small">
          <svg>
            <use href="#card-small-icon"></use>
          </svg>
        </button>
        <button class="display-control-btn" id="view-row">
          <svg>
            <use href="#card-row-icon"></use>
          </svg>
        </button>
      </div>
    </div>
    <div class="card-container">
      <div class="case-card" id="knowledge-base">
        <div class="case-thumbnail">
          <img src="card-img/knowledge-base-card.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Knowledge Base Revamp for Improved UX</h1>
            <p class="case-card-text">
              Redesigned the structure and interface of a client knowledge base, 
              transforming a basic FAQ module into a responsive, intuitive hub for quick 
              and efficient information access.
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>Information Architecture</p>
              <p>Responsive Design</p>
              <p>UX Optimization</p>
            </div>
            <a href="/cases/knowledge_base/" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card" id="content-creator">
        <div class="case-thumbnail">
          <img src="card-img/content-creator-card.webp" alt="">
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
      <div class="case-card" id="task-management">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Task Management Module</h1>
            <p class="case-card-text">
              Designed a task management module for a mobile employee engagement platform,
               enabling clear task assignment, tracking, and completion in a streamlined 
               interface.
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>Feature Design</p>
              <p>Mobiel UI/UX</p>
              <p>Productivity Tools</p>
            </div>
            <a href="/cases/project_template/" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card" id="minforening">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Association Management App</h1>
            <p class="case-card-text">
              Developed the complete UI and UX for an association management app, 
              streamlining member administration, event coordination, and communication in
               a user-friendly platform.
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>End-to-End UX/UI</p>
              <p>Member Management</p>
              <p>Digital Platform Design</p>
            </div>
            <a href="/cases/project_template/" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card" id="easyr">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">EasyR, a mobile Cleaning Service Platform</h1>
            <p class="case-card-text">
              Designed a complete mobile platform for booking cleaning services, creating 
              an intuitive experience that simplifies service selection, scheduling, 
              and payment.  
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>Mobile App Design</p>
              <p>Booking Flow</p>
              <p>User-Centered Design</p>
            </div>
            <a href="/cases/project_template/" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card" id="dadiu">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">QA & UR for mobile game development</h1>
            <p class="case-card-text">
              Led QA and user research for a mobile game project, ensuring a polished 
              experience through thorough testing, player feedback analysis, and iterative
               improvements.
            </p>
          </div>
          <div class="tags-and-button">
            <div class="tag-container">
              <p>Quality Assurance</p>
              <p>User Research</p>
              <p>Iterative Testing</p>
            </div>
            <a href="/cases/project_template/" class="button large">Read more</a>
          </div>
        </div>
      </div>
      <div class="case-card ghost-card">
      </div>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
  <script src="/javascript/script.js"></script>
</body>
</html>
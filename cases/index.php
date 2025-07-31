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
  <?php include '../components/navigation.php'; ?>
  <div class="content-container top-padding">
    <div class="header-and-display-control">
      <h1>Cases</h1>
      <div class="display-control">
        <button class="display-control-btn" id="view-default">
          <svg>
            <use href="img/shared_assets/icons.svg#card-default-icon"></use>
          </svg>
        </button>
        <button class="display-control-btn" id="view-small">
          <svg>
            <use href="img/shared_assets/icons.svg#card-small-icon"></use>
          </svg>
        </button>
        <button class="display-control-btn" id="view-row">
          <svg>
            <use href="img/shared_assets/icons.svg#card-row-icon"></use>
          </svg>
        </button>
      </div>
    </div>
    <div class="card-container">
      <div class="case-card">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Big ol' penis</h1>
            <p class="case-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra 
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
      <div class="case-card">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Big ol' penis</h1>
            <p class="case-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra 
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
      <div class="case-card">
        <div class="case-thumbnail">
          <img src="/img/shared_assets/case-placeholder.webp" alt="">
        </div>
        <div class="case-content">
          <div class="case-information">
            <h1 class="case-card-title">Big ol' penis penis penis pneis</h1>
            <p class="case-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pharetra 
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
      <div class="case-card ghost-card">
      </div>
    </div>
  </div>
  <?php include '../components/footer.php'; ?>
  <script src="/javascript/script.js"></script>
</body>
</html>
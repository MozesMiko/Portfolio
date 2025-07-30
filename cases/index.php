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
          <svg width="1em" height="1em" viewBox="0 0 18 16" fill="none" 
            xmlns="http://www.w3.org/2000/svg">
            <path d="M2.625 7.0625C1.42969 7.0625 0.5 6.13281 0.5 4.9375V2.8125C0.5 
            1.65039 1.42969 0.6875 2.625 0.6875H15.375C16.5371 0.6875 17.5 1.65039 17.5 
            2.8125V4.9375C17.5 6.13281 16.5371 7.0625 15.375 7.0625H2.625ZM17.5 
            13.4375C17.5 14.6328 16.5371 15.5625 15.375 15.5625H2.625C1.42969 15.5625 0.5 
            14.6328 0.5 13.4375V11.3125C0.5 10.1504 1.42969 9.1875 2.625 
            9.1875H15.375C16.5371 9.1875 17.5 10.1504 17.5 11.3125V13.4375ZM15.375 
            10.7812H2.625C2.32617 10.7812 2.09375 11.0469 2.09375 11.3125V13.4375C2.09375 
            13.7363 2.32617 13.9688 2.625 13.9688H15.375C15.6406 13.9688 15.9062 13.7363 
            15.9062 13.4375V11.3125C15.9062 11.0469 15.6406 10.7812 15.375 10.7812Z" 
            fill="currentColor"/>
          </svg>
        </button>
        <button class="display-control-btn" id="view-small">
          <svg width="1em" height="1em" viewBox="0 0 16 16" fill="none" 
          xmlns="http://www.w3.org/2000/svg">
            <path d="M6.9375 2.28125V5.46875C6.9375 6.36523 6.20703 7.0625 5.34375 
            7.0625H2.15625C1.25977 7.0625 0.5625 6.36523 0.5625 5.46875V2.28125C0.5625 
            1.41797 1.25977 0.6875 2.15625 0.6875H5.34375C6.20703 0.6875 6.9375 1.41797 
            6.9375 2.28125ZM6.9375 10.7812V13.9688C6.9375 14.8652 6.20703 15.5625 5.34375 
            15.5625H2.15625C1.25977 15.5625 0.5625 14.8652 0.5625 13.9688V10.7812C0.5625 
            9.91797 1.25977 9.1875 2.15625 9.1875H5.34375C6.20703 9.1875 6.9375 9.91797 
            6.9375 10.7812ZM9.0625 2.28125C9.0625 1.41797 9.75977 0.6875 10.6562 
            0.6875H13.8438C14.707 0.6875 15.4375 1.41797 15.4375 2.28125V5.46875C15.4375 
            6.36523 14.707 7.0625 13.8438 7.0625H10.6562C9.75977 7.0625 9.0625 6.36523 
            9.0625 5.46875V2.28125ZM15.4375 10.7812V13.9688C15.4375 14.8652 14.707 
            15.5625 13.8438 15.5625H10.6562C9.75977 15.5625 9.0625 14.8652 9.0625 
            13.9688V10.7812C9.0625 9.91797 9.75977 9.1875 10.6562 9.1875H13.8438C14.707 
            9.1875 15.4375 9.91797 15.4375 10.7812Z" fill="currentColor"/>
          </svg>
        </button>
        <button class="display-control-btn" id="view-row">
          <svg width="1em" height="1em" viewBox="0 0 16 13" fill="none" 
          xmlns="http://www.w3.org/2000/svg">
            <path d="M0.5625 1.54688C0.5625 1.11523 0.894531 0.75 1.35938 
            0.75H14.6406C15.0723 0.75 15.4375 1.11523 15.4375 1.54688C15.4375 2.01172 
            15.0723 2.34375 14.6406 2.34375H1.35938C0.894531 2.34375 0.5625 2.01172 
            0.5625 1.54688ZM0.5625 6.85938C0.5625 6.42773 0.894531 6.0625 1.35938 
            6.0625H14.6406C15.0723 6.0625 15.4375 6.42773 15.4375 6.85938C15.4375 
            7.32422 15.0723 7.65625 14.6406 7.65625H1.35938C0.894531 7.65625 0.5625 
            7.32422 0.5625 6.85938ZM14.6406 12.9688H1.35938C0.894531 12.9688 0.5625 
            12.6367 0.5625 12.1719C0.5625 11.7402 0.894531 11.375 1.35938 
            11.375H14.6406C15.0723 11.375 15.4375 11.7402 15.4375 12.1719C15.4375 
            12.6367 15.0723 12.9688 14.6406 12.9688Z" fill="currentColor"/>
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
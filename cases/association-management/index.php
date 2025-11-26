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
  <title>Club Management App</title>
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
    <img class="case-header-img" src="img/minforening-hero.webp" alt="">
    <h1>Club Management App Redesign</h1>
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
            This project involved a full end-to-end redesign of MinForening, a club 
            management application used by administrators and members. The goal was to 
            modernize the experience, streamline core workflows such as event creation, 
            membership handling, and communication, and introduce a clearer information 
            structure. Through research, flow restructuring, and a complete UI overhaul, 
            the new design improves usability, improves communication, and supports a more
             scalable product foundation. Throughout the case study, selected screenshots 
             and before-and-after comparisons illustrate how core workflows and interface 
             elements were improved in the redesign.
          </p>
        </section>
        <section id="challenges-project">
          <h1>Challenges with the project</h1>
          <p>
            The project <strong>lacked foundational design resources</strong>—no existing 
            design files, design system, component library, documentation, or information 
            architecture. This necessitated reverse-engineering the product’s structure, 
            workflows, and visual language entirely from screenshots and exploratory 
            testing of the current application, making the redesign process particularly 
            challenging and comprehensive. 
          </p>
        </section>
        <section id="challenges-experience">
          <h1>Challenges in the existing experience</h1>
          <p class="margin-bottom">
            The existing application presented several key usability and design challenges
             that hindered user experience and product scalability:
          </p>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Lack of centralized club view</p>
              <p>
                The app doesn’t provide a page for each club’s own communications and 
                payments. These items are aggregated on global pages and cannot be 
                filtered or searched, making it difficult for users to find club-specific
                 information.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Excessive color usage</p>
              <p>
                The interface employed multiple brand colors across buttons and 
                components, which created visual noise and reduced clarity. The 
                redesign streamlined the color palette to maintain a friendly, vibrant
                  feel while improving hierarchy and readability. 
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Inconsistent sizing and spacing</p>
              <p>
                The interface lacks consistency in typography scale and spacing, which 
                breaks visual rhythm. I introduced defined size and spacing tokens to 
                improve structure and overall polish.
              </p>
            </div>
          </div>
          <div class="numbered-point">
            <div class="point-content">              
              <p>Non-standard UI elements</p>
              <p>
                The app uses inconsistent and unconventional component styles that reduce 
                clarity, like input fields that look like blank areas with only a “+Add” 
                placeholder. These were replaced with standardized, recognizable patterns 
                aligned with best practices.
              </p>
            </div>
          </div>
        </section>
        <section id="methodology">
          <h1>Methodology</h1>
          <p>
            The redesign process began with exploratory testing of the existing 
            application and analysis of screenshots to understand workflows and pain 
            points. I conducted heuristic evaluations and reviewed user feedback to 
            identify key areas for improvement. The new design was iterated through 
            wireframes and high-fidelity prototypes, incorporating consistent UI 
            components and design tokens. User testing sessions validated the improved 
            flows and interface clarity. 
          </p>
        </section>
        <section id="authentication-login">
          <h1>Authentication & Account Creation</h1>
          <p>
            The sign-in and forgot password screens received minor updates to improve 
            clarity and consistency. The account creation process, originally a single 
            screen, was restructured into a four-step flow covering account details, 
            personal information, child account additions, and acceptance of terms and 
            privacy policies. This multi-step approach enabled earlier data validation and
             reduced cognitive load by breaking the process into manageable segments. 
          </p>
          <img class="case-desc-img" src="img/minforening-accountcreation.webp" alt="">
        </section>
        <section id="activity-wheel">
          <h1>The Activity Wheel</h1>
          <p>
            While the activity wheel was a unique feature of the original app, it 
            introduced inconsistent and confusing interactions. Its appearance changed 
            drastically when no upcoming events were available, and it was the only 
            navigation method to user profiles and club pages. In the redesign, I removed 
            the activity wheel and enhanced the existing list view of upcoming events to 
            provide clearer and more consistent navigation. 
          </p>
          <img class="case-desc-img" src="img/minforening-activitywheel.webp" alt="">
        </section>
        <section id="user-profile">
          <h1>User Profile Page</h1>
          <p>
            I redesigned the user profile page to consolidate all relevant account 
            information and provide straightforward access for making changes. Previously,
             important data and actions—such as logging out—were hidden behind a settings 
             menu at the top of the page, reducing discoverability. Additionally, 
             management of child and related accounts was located elsewhere in the app, 
             which users identified as a significant pain point. By centralizing these 
             features within the profile page, I improved usability and streamlined 
             account management based on direct user feedback. 
          </p>
          <img class="case-desc-img" src="img/minforening-profilepage.webp" alt="">
        </section>
        <section id="home-screen">
          <h1>Home screen</h1>
          <p>
            The original home screen focused mainly on events the user participated in, 
            displayed through the activity wheel, which limited content discoverability. 
            The redesigned home and club pages consolidate communications, events, and 
            payment information into separate, streamlined feeds. This restructuring 
            enhances the information architecture, giving users immediate access to 
            relevant content and facilitating deeper exploration through dedicated club 
            pages. 
          </p>
          <img class="case-desc-img" src="img/minforening-homescreen.webp" alt="">
        </section>
        <section id="club-page">
          <h1>Club page</h1>
          <p>
            The existing club page had limited functionality, showing only basic club 
            details. The redesign consolidates all club-related events, communications, 
            payments, and detailed club and user information into a holistic view. This 
            approach improves communication within the app and makes it easier for users 
            to find club-specific content. 
          </p>
          <img class="case-desc-img" src="img/minforening-club.webp" alt="">
        </section>
        <section id="event-message">
          <h1>Event and Message page </h1>
          <p>
            I applied consistent spacing, typography, and styling across event and message
             pages to create a cohesive and polished user experience. These improvements 
             help users navigate content intuitively and reduce visual distractions. 
          </p>
          <img class="case-desc-img" src="img/minforening-event-message.webp" alt="">
        </section>
        <section id="payment-pages">
          <h1>Payment pages</h1>
          <p>
            Payment pages were redesigned to clearly present key information such as 
            payment status and details. Completed payments are displayed on a dedicated 
            page styled to resemble physical payment stubs, enhancing familiarity and 
            ease of reference.  
          </p>
          <img class="case-desc-img" src="img/minforening-payment.webp" alt="">
        </section>
        <section id="chat">
          <h1>Chat</h1>
          <p>
            The chat feature received a visual refresh to create a cleaner, more polished 
            messaging experience. Beyond UI improvements, the redesign introduces threaded
             replies, enabling users to respond directly to specific messages for clearer 
             conversations. Chat settings were also expanded to support essential 
             management tasks, including leaving group chats, updating chat details, 
             and managing participants more easily. These enhancements make communication 
             more intuitive and give users greater control over their conversations.
          </p>
          <img class="case-desc-img" src="img/minforening-chat.webp" alt="">
        </section>
        <section id="notifications">
          <h1>Notifications</h1>
          <p>
            The notification system remains largely unchanged, except for uncoupling 
            notifications from payments to clarify context. Each notification now includes
             an image representing the relevant user or club, improving clarity and visual
              recognition. 
          </p>
          <img class="case-desc-img" src="img/minforening-notification.webp" alt="">
        </section>
        <section id="new-content">
          <h1>Creating new content</h1>
          <p>
            The new content creation flow leverages a Floating Action Button menu, 
            enabling users to easily create multiple content types from a single entry 
            point. The previous UI limited users to creating events only, and required 
            manually selecting a club even when the correct one was already chosen. A 
            significant enhancement is the addition of payment creation directly within 
            the app—a feature previously available only on the web—streamlining user 
            workflows and expanding functionality.  
          </p>
          <img class="case-desc-img" src="img/minforening-newcontent1.webp" alt="">
          <img class="case-desc-img" src="img/minforening-newcontent2.webp" alt="">
        </section>
        <section id="new-club">
          <h1>Creating new club</h1>
          <p>
            The club creation process was improved by replacing non-standard input fields 
            with standardized components used throughout the redesign. A visual update 
            across the app included consistent use of elliptical user profile pictures and
             square club cover images. Since club pages display the cover image as a 
             header, the creation flow now shows this image in full, providing a clear 
             preview during setup. 
          </p>
          <img class="case-desc-img" src="img/minforening-newclub.webp" alt="">
        </section>
        <section id="bottom-sheets">
          <h1>Visual & Interaction Improvements: Bottom Sheets</h1>
          <p>
            To enhance usability, I replaced full-screen selection flows and multi-button 
            popups with standardized bottom sheets. This change reduces visual clutter, 
            ensures design consistency, and offers users a clearer, more focused way to 
            make selections. 
          </p>
          <img class="case-desc-img" src="img/minforening-bottomsheets.webp" alt="">
        </section>
        <section id="results">
          <h1>Results & Learnings</h1>
          <p>
            The redesign significantly improved the app’s usability and information 
            clarity. User feedback highlighted better navigation and easier access to 
            club-specific content. The standardized design system and tokens provide a 
            scalable foundation for future development. Challenges included working 
            without prior design documentation, which strengthened my skills in product 
            analysis and reverse engineering. Future iterations will focus on adding more 
            personalization features and enhancing accessibility.  
          </p>
        </section>
        <section id="prototype">
          <h1>View the prototype</h1>
          <p class="margin-bottom">
            Below is the interactive Figma prototype of the redesigned MinForening app, 
            featuring separated flows for each key interaction such as account creation, 
            home navigation, and club management. The prototype highlights improvements in
             usability and information architecture, demonstrating how users can 
             efficiently access communications, events, payments, and profile settings 
             within a clearer, more intuitive interface. 
          </p>
          <p>
            The prototype was created using the free version of Figma, which introduced 
            some limitations but still enabled effective testing and collaboration. It 
            played a crucial role during exploratory testing and internal reviews, helping
             validate design decisions and ensure alignment between stakeholders, 
             developers, and users. 
          </p>
          <iframe 
          loading="lazy"
          style="border: 1px solid rgba(0, 0, 0, 0.1);
          margin-top: 24px" width="100%" height="450" 
          
          src="https://embed.figma.com/design/GunFsvVPe1dv1ysqKDjosD/MinForening?node-id=24-129&embed-host=share" allowfullscreen></iframe>
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
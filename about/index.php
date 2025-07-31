<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/shared_assets/favicon.ico">
  <script src="/javascript/theme.js"></script>
  <link rel="stylesheet" href="/css/components/navigation.css">
  <link rel="stylesheet" href="/css/main.css">  
  <link rel="stylesheet" href="/css/pages/about-page.css">
  <title>About me</title>
</head>
<body class="about-me-page">
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/navigation.php'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/img/shared_assets/icons.svg'; ?>
  <div class="about-me-hero">
    <div class="content-container">
      <img id="about-me-hero-img" src="/img/about_me/about_me_hero.webp" alt="">
      <div class="about-me-intro">
        <h1 class="about-me-title">I take a data-driven, user-centered approach to design.</h1>
        <p>
          As a product designer, I advocate for users by conducting research and testing to
          ensure seamless, user-friendly experiences that eliminate pain points and enhance
          the journey through your product.
          </p>
      </div>
    </div>
  </div>
  <div class="skills-section">
    <div class="svg-wrapper">
      <svg id="svg-bg">
        <use href="#svg-bg-icon"></use>
      </svg>
      <div class="content-container">
        <div class="section-header">
          <h1>What I bring to your team</h1>
        </div>
        <div class="skill-container-wapper">
          <div class="skill-container">
            <h2>Core skills</h2>
            <ul>
              <li>User-centered design</li>
              <li>Design thinking</li>
              <li>Usability testing & iteration</li>
              <li>User research & testing</li>
              <li>Responsive & accessible design</li>
              <li>Interaction design</li>
              <li>Design systems & component libraries</li>
            </ul>
          </div>
          <div class="skill-container">
            <h2>Soft skills</h2>
            <ul>
              <li>Cross-functional collaboration</li>
              <li>Excllent communication</li>
              <li>Adaptability</li>
              <li>Critical thinking</li>
              <li>Problem solving</li>
              <li>Attention to detail</li>
              <li>Time management</li>
            </ul>
          </div>
          <div class="skill-container">
            <h2>Related skills</h2>
            <ul>
              <li>Figma</li>
              <li>HTML, CSS, JavaScript</li>
              <li>Version control (Git)</li>
              <li>Agile methodology</li>
              <li>JIRA, Confluence</li>
              <li>Adobe Creative Suite</li>
              <li>Product Strategy</li>
            </ul>
          </div>
        </div>
      </div>
    </div> 
  </div>    
  <div class="personal-section">
    <div class="content-container">
      <div class="section-header">
        <h1>About me</h1>
      </div>
      <div class="personal-content">
        <div class="personal-text">
          <p>
          I am a digital product and user experience designer with a strong background in 
          academic and user research. My focus is on creating and refining products to 
          enhance usability by identifying and eliminating pain points that lead to user 
          frustration.
          </p>
          <p>
          With experience in design, project scoping, planning, and programming, I often 
          operate at the intersection of design, development, and project management. This
           allows me to effectively communicate with both project managers and developers,
            ensuring a smoother and more efficient design and development process.
          </p>
          <p>
          Mastering my design tools is essential to me, enabling me to leverage them to 
          their full potential. I stay up to date with industry advancements and 
          incorporate new methodologies into my workflow. I believe in continuous learning
           and exploration, which keeps my work fresh and prevents it from becoming 
           routine. As a lifelong learner, I am always looking to expand my skill set and 
           refine my craft.
          </p>
        </div>
        <img id="about-me-working" src="/img/about_me/about_me_working.webp" alt="">
      </div>
    </div>
  </div>
  <div class="experience-section">
    <div class="content-container">
      <div class="section-header no-after">
        <h1>Work experience</h1>
      </div>
      <div class="experience-container">
        <div class="experience" id="merkle">
          <div class="company-logo-container">
            <img class="company-light" src="/img/about_me/merkle-light.svg" alt="">
            <img class="company-dark" src="/img/about_me/merkle-dark.svg" alt="">
          </div>
          <div class="experience-content">
            <div class="experience-header">
              <p class="position">Experience Architect</p>
              <p class="company-location-period">
                Merkle, Copenhagen, 2025
              </p>
            </div>
            <div class="experience-text">
              <p>
                I joined Merkle as an Experience Architect to support the redesign and 
                restructuring of the company’s intranet. My work focused on user research,
                 information architecture, and content strategy. I also contributed to 
                 select external client projects, gaining hands-on experience in product 
                 storytelling and UX documentation.
              </p>
            </div>
          </div>
        </div>
        <div class="experience" id="pppraksis">
          <div class="company-logo-container">
            <img class="company-light" src="/img/about_me/pppraksis-light.svg" alt="">
            <img class="company-dark" src="/img/about_me/pppraksis-dark.svg" alt="">
          </div>
          <div class="experience-content">
            <div class="experience-header">
              <p class="position">IT Supporter</p>
              <p class="company-location-period">
                Psykoterapeutisk Psykiatrisk Praksis, Remote, 2025
              </p>
            </div>
            <div class="experience-text">
              <p>
                At PPPraksis, I provided hands-on IT support to streamline internal 
                operations and enhance the digital infrastructure. I worked on bridging 
                solutions across various platforms and ecosystems, helping ensure a smooth
                 and consistent experience for staff.
              </p>
            </div>
          </div>
        </div>
        <div class="experience" id="empact">
          <div class="company-logo-container">
            <img class="company-light" src="/img/about_me/empact-light.svg" alt="">
            <img class="company-dark" src="/img/about_me/empact-dark.svg" alt="">
          </div>
          <div class="experience-content">
            <div class="experience-header">
              <p class="position">UX/UI Designer</p>
              <p class="company-location-period">
                Empact, Copenhagen, 2022 - 2024
              </p>
            </div>
            <div class="experience-text">
              <p>
                As a Designer at Empact, I played a key role in shaping and enhancing our 
                product by developing new modules and refining existing ones. My work led 
                to a more cohesive and consistent user experience across the platform, 
                resulting in increased adoption and user engagement. I also spearheaded 
                the development of a responsive web application, expanding our product’s 
                accessibility across multiple devices and user groups. Additionally, I 
                established and maintained our Design System, ensuring visual and 
                functional consistency, and introduced user research methodologies into 
                our workflow, embedding a more data-driven approach to design.
              </p>
            </div>
          </div>
        </div>
        <div class="experience" id="digitalguest">
          <div class="company-logo-container">
            <img class="company-light" src="/img/about_me/digitalguest-light.svg" alt="">
            <img class="company-dark" src="/img/about_me/digitalguest-dark.svg" alt="">
          </div>
          <div class="experience-content">
            <div class="experience-header">
              <p class="position">UX/UI Designer</p>
              <p class="company-location-period">
                Digitalguest, Aarhus, 2022
              </p>
            </div>
            <div class="experience-text">
              <p>
                I joined DigitalGuest as an intern to further develop my expertise in UX 
                and UI design. During my time there, I worked extensively with the 
                company’s design system, ensuring consistency across the platform. I was 
                responsible for wireframing and designing new features, modernizing legacy
                 designs to align with current UI standards, and conducting user testing 
                 to validate and refine the user experience. Additionally, I played a role
                 in QA for upcoming features, ensuring design integrity and functionality
                 before release.
              </p>
            </div>
          </div>
        </div>
        <div class="experience" id="minforening">
          <div class="company-logo-container">
            <img src="/img/about_me/minforening.svg" alt="">
          </div>
          <div class="experience-content">
            <div class="experience-header">
              <p class="position">UX/UI Designer & Researcher</p>
              <p class="company-location-period">
                MinForening, Aalborg, 2021
              </p>
            </div>
            <div class="experience-text">
              <p>
                At MinForening, I worked on a project to enhance the UX across both the 
                web platform and mobile app. My focus was on designing a chat interface 
                and a user control panel to improve usability and provide a clearer 
                overview for users. Following an iterative process, I conducted user 
                research to gather insights, refine concepts, and ensure the designs 
                effectively addressed user needs. I was responsible for designing new 
                features and modules, maintaining visual consistency, and creating 
                wireframes, low- and high-fidelity prototypes to validate design concepts.
                 Additionally, I contributed to graphic design, documentation, and bug 
                 testing and reporting to enhance product quality and performance.
              </p>
            </div>
          </div>
        </div>
        <div class="experience" id="easyr">
          <div class="company-logo-container">
            <img class="company-light" src="/img/about_me/easyr-light.svg" alt="">
            <img class="company-dark" src="/img/about_me/easyr-dark.svg" alt="">
          </div>
          <div class="experience-content">
            <div class="experience-header">
              <p class="position">UX/UI Designer & Researcher</p>
              <p class="company-location-period">
                EasyR, Aalborg, 2020
              </p>
            </div>
            <div class="experience-text">
              <p>
                I worked with a startup as a UX and UI Designer, contributing to the 
                development of their mobile application for ordering cleaning services. 
                The company aimed to expand its offerings with additional features such as
                 car washing and window cleaning, and my role was to optimize the user 
                 experience and improve the overall app flow. I focused on enhancing 
                 onboarding, implementing quick-fix solutions to refine navigation, and 
                 conceptualizing and designing new features to support the platform’s 
                 growth. Additionally, I collaborated closely with the visual designer to 
                 ensure a cohesive and polished user interface. Through this project, I 
                 gained valuable insights into the challenges and opportunities of working
                  with an emerging company while delivering practical UX improvements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <div class="education-section">
    <div class="content-container">
      <div class="section-header">
        <h1>Education</h1>
      </div>
      <div class="education-container">
        <div class="education" id="aau-msc">
          <div class="university-logo-container">
            <img class="university-light" src="/img/about_me/aau-light.svg" alt="">
            <img class="university-dark" src="/img/about_me/aau-dark.svg" alt="">
          </div>
          <div class="education-content">
            <div class="education-header">
              <p class="university">Aalborg University</p>
              <p class="study-period">
                Mediatechnology MSc, Aalborg, 2018 - 2020
              </p>
            </div>
            <div class="education-text">
              <p>
                During my Master’s program, I focused on academic research, user research,
                 data gathering, synthesis and evalutaion. I co-authored a published 
                 research paper, and I took part in creating gamified projects for our 
                 research papers. I also served as User Research and Quality Assurance 
                 Manager for a mobile game development team at DADIU.
              </p>
            </div>
          </div>
        </div>
        <div class="education" id="aau-bsc">
          <div class="university-logo-container">
            <img class="university-light" src="/img/about_me/aau-light.svg" alt="">
            <img class="university-dark" src="/img/about_me/aau-dark.svg" alt="">
          </div>
          <div class="education-content">
            <div class="education-header">
              <p class="university">Aalborg University</p>
              <p class="study-period">
                Mediatechnology BSc, Aalborg, 2015 - 2018
              </p>
            </div>
            <div class="education-text">
              <p>
                My Bachelor’s studies focused on Problem-Based Learning, where I worked in
                 small project groups in which I did research, programming and evaluation 
                 of our solutions. I focused on Human-Computer Interaction (HCI), 
                 User-Centered Design, and a Data-Driven Approach.
              </p>
            </div>
          </div>
        </div>
        <div class="education" id="elte">
          <div class="university-logo-container">
            <img class="university-light" src="/img/about_me/elte-light.svg" alt="">
            <img class="university-dark" src="/img/about_me/elte-dark.svg" alt="">
          </div>
          <div class="education-content">
            <div class="education-header">
              <p class="university">Eötvös Loránd Science University</p>
              <p class="study-period">
                Biology BSc, Budapest, 2010 - 2014
              </p>
            </div>
            <div class="education-text">
              <p>
                I studied Biology which covered a wide assorment of subjects such as 
                Chemistry, Mathematics, Taxonomy, Anatomy, and more. I felt like I wanted 
                to take part in something that is more generative with an impact on 
                people’s lives, so I switched studies to Medialogy and started anew in 
                Denmark.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/footer.php'; ?>
  <script src="/javascript/script.js"></script>
</body>
</html>
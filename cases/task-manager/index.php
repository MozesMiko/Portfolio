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
  <title>Task Manager</title>
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
    <img class="case-header-img" src="img/task-manager-hero.webp" alt="">
    <h1>Task Management Module</h1>
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
          <p class="margin-bottom">
            The client needed a task manager module for our mobile app to help employees 
            organize and complete daily tasks more efficiently. While the initial ask was 
            a simple to-do list, the long-term goal was to support more complex workflows 
            like recurring tasks, team assignments, and tracking.
          </p>
          <p class="margin-bottom">
            I led UX research, design, prototyping, testing, and documentation. Despite 
            unclear requirements and shifting priorities, I delivered a tested MVP and 
            helped lay the groundwork for internal process improvements like a design 
            system and better developer handoff.
          </p>
          <!-- <p>
            Designs shown here have been reworked post-project to reflect the intended UI 
            direction, unconstrained by the time and resource limitations of the original 
            engagement.
          </p> -->
        </section>
        <section id="challenge">
          <h1>The Challenge</h1>
          <p>
            The project was challenging from the outset. Stakeholders declined user 
            interviews, stating they wanted a design first and then we'd discuss the next
            steps. This meant starting the design without access to user needs, workflows,
             or technological context. To add to the complexity:
          </p>
          <ul>
            <li>We had no design system or component library at this point</li>
            <li>Many UI elements in the live app were deprecated or undocumented.</li>
            <li>
              The UI had to be simple enough to function as a module of a larger solution,
              something dedicated task management applications do not have to worry about.
            </li>
            <li>
              Communication with the client was managed by a project manager who excluded 
              design from key decisions.
            </li>
            <li>
              Late-stage scope creep transformed the project from a module into a 
              full-featured task management platform.
            </li>
          </ul>
          <p>
            Despite all of this, I focused on grounding the design in research, iterative
             validation, and user experience best practices.
          </p>
        </section>
        <section id="process">
          <h1>Process</h1>
          <h2 class="margin-bottom">Research & Benchmarking</h2>
          <p class="margin-bottom">
            Since I couldn’t interview end-users, I conducted a competitive analysis of 
            tools like Trello, Monday, Any.do, and Microsoft To Do. I mapped out common 
            features, interaction patterns, and core use cases to understand the industry 
            standard and avoid overcomplicating the MVP.
          </p>
          <p>
            I worked with the PM to define an initial feature set centered around:
          </p>
          <ul>
            <li>Task lists (one-time or recurring)</li>
            <li>Completion and block states</li>
            <li>Manager and user roles</li>
            <li>Lightweight flows optimized for mobile use</li>
          </ul>
          <h2 class="margin-bottom">Wireframing & Scoping</h2>
          <p class="margin-bottom">
            This was my first project at the company, and I quickly ran into 
            inconsistencies across existing modules. Since we didn't have a design system 
            or a component library, I had to replicate UI elements based on screenshots I 
            took while exploring the app. I found out that our live app featured UI 
            elements that were either deprecated and were replaced by slightly changed
            versions in some modules (but not others), or the elements were custom created
            for specific clients.
             
          </p>
          <p>
            Since the Task Management module was a big depearture from the current content
            of our app, it became clear that existing UI elements and interaction patterns
            will not be sufficient in the long run. This prompted a key conversation with 
            developers and project management: could we introduce new patterns?
            I argued for modern interaction design—bottom sheets for quick content 
            previews, floating action buttons for task creation, and gesture-based task 
            completion. These improvements were approved after discussion, and I refined 
            the wireframes accordingly.
          </p>
          <img src="img/task-manager-wireframes.webp" alt="" class="case-desc-img">
        </section>
        <section id="design">
          <h1>High-Fidelity Design & MVP</h1>
          <p>
            With the wireframes validated, I built the MVP prototype in Figma. 
            Core flows included:
          </p>
          <ol>
            <li>Managers creating task lists</li>
            <li>Managers adding tasks</li>
            <li>Users marking tasks as complete or blocked</li>
          </ol>
          <p>
            While the MVP was functional, it lacked deletion controls and reminders—small 
            issues that were resolved in a quick iteration. The client approved the design
             and greenlit further work.
          </p>
          <img src="img/task-manager-mvp.webp" alt="" class="case-desc-img">
        </section>
        <section id="scope-creep">
          <h1>Scope Creep & Redesign</h1>
          <p class="margin-bottom">
            Just before development began, the client introduced new requirements: 
              <span class="italic">notifications, due dates, employee groups, assignments,
                 attachments, priorities, comments, tags, collaboration features, quick 
                 tasks, and task templates</span>. I had less than one sprint to redesign 
                 and expand the module to account for these.
          </p>
          <p>
            Some features were straightforward, while others introduced UX and technical 
            complexity (e.g., recurring task deadlines). To prevent deadline conflicts,
              I proposed simplifying the recurrence logic and eliminating deadline dates 
              in recurring lists. We documented and tracked features to be phased in 
              later, and some (e.g., tags, templates) were ultimately shelved or delayed 
              due to complexity.
          </p>
        </section>
        <section id="user-testing">
          <h1>User Testing</h1>
          <p>
            Even without access to end users, I performed usability testing internally:
              <ol>
                <li>
                  <span class="bold">Participants:</span> Colleagues unfamiliar with the 
                  project
                </li>
                <li>
                  <span class="bold">Method:</span> Task-based testing in Figma on mobile 
                  devices
                </li>
                <li>
                  <span class="bold">Focus:</span> Task creation, interaction, and 
                  recurrence usability
                </li>
                <li>
                  <span class="bold">Evaluation:</span> I documented results in a matrix 
                  (correct/incorrect answers, pain points, suggestions)
                </li>
              </ol>
          </p>
          <p class="margin-bottom">
            I also A/B tested recurrence settings to determine the most intuitive 
            configuration, leading to more streamlined task list creation.
          </p>
          <p class="margin-bottom">
            All responses, notes, and observations gathered during user testing were 
            arranged in a matrix to help visualize the usability and state of the MVP. 
            This helped get an easier overview as to which aspect of the user flows needed
            to be addressed.
          </p>
          <p>
            Feedback showed that the module was easy to understand across tech literacy 
            levels, and iterative improvements followed each round of testing.
          </p>
          <img src="img/task-manager-userreaserch.webp" alt="" class="case-desc-img">
        </section>
        <section id="final-outcome">
          <h1>Final Outcome</h1>
          <p class="margin-bottom">
            The task manager module was implemented and adopted by the client. Key usage 
            metrics showed daily engagement, and leadership saw potential for expanding 
            task visibility across locations. While some features were pruned, we 
            established a clear roadmap for future development.
          </p>
          <p>
            However, implementation diverged in places due to uncommunicated changes from 
            the PM, causing mismatches between design and build. This emphasized the 
            importance of better alignment going forward.
          </p>
          <img src="img/task-manager-final.webp" alt="" class="case-desc-img">
        </section>
        <section id="reflection">
          <h1>Reflection</h1>
          <p class="margin-bottom">
            This project taught me how to design under ambiguity, advocate for scalable 
            solutions, and stay user-focused even when removed from the user. It was a 
            practical lesson in stakeholder management, UI consistency, and rapid 
            iteration under pressure.
          </p>
          <p class="margin-bottom">
            While the process wasn’t ideal, the outcome demonstrated that even in 
            difficult situations, good UX practices can lead to solid solutions and 
            organizational change.
          </p>
          <p>
            The challenges I faced during this project ended up being a push for lasting 
            change. I called attention to inefficiencies like unclear requirements, 
            limited user access, and outdated components, and pushed for better ways of 
            working. It set the stage for more structure, stronger collaboration, and a 
            focus on user needs that carried over into future projects.
          </p>
          <img src="img/task-manager-impact.webp" alt="" class="case-desc-img">
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
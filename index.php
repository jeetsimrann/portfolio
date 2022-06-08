<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="assets\icons\logo.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="assets\icons\logo.png" sizes="180x180" />
  <meta name="msapplication-TileImage" content="assets\icons\logo.png" sizes="270x270"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="favicon.ico?" rel="icon" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Nanum+Pen+Script&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/2a20f3910e.js" crossorigin="anonymous">
  </script>

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <title>Simranjeet Singh - Portfolio</title>
</head>

<body>
  <div class="headerBg wrapper">
    <nav role="navigation">
      <div class="menu-toggle"><span>Menu</span></div>
      <ul class="menu">
        <li>
          <a href="#projects" class="link"><span>Projects</span></a>
        </li>
        <li>
          <a href="#aboutMe" class="link"><span>About Me</span></a>
        </li>
        <li>
          <a href="#contact" class="link"><span>Contact</span></a>
        </li>
      </ul>
    </nav>
    <header data-aos="fade-up" data-aos-once="true">
      <div class="headerText">
        <h1>Hello! <span>I'm Simran. 👋</span></h1>
        <p>
          A multidisciplinary <span>developer</span> and
          <span>designer</span>
          <span class="smallerText">(sometimes)</span> with a passion for
          creating engaging, entertaining user experiences. ✨
        </p>
        <p>
          Currently working at
          <a href="https://www.afasystemsinc.com">AFA Sytems</a>
          as a Front-End Developer. 👩🏻‍💻
        </p>
        <!-- <p><span class="smallerText">Psst! My portfolio is a WIP so viewing on desktop is the best for now!</span></p> -->
      </div>
      <div class="imageContainer">
        <img src="assets/avatar.png" alt="" />
      </div>
      <p class="scrollDownText"><i class="fas fa-angle-down"></i></p>
    </header>
  </div>
  <main>
    <p class="notesText" data-aos="fade-up" data-aos-once="true">click on any project to learn more!</p>
    <section class="portfolioProjects" id="projects" data-aos="fade-up" data-aos-once="true">
      <div class="firstRow wrapper">
        <div class="portfolioOne" data-aos="fade-right" data-aos-once="true">
          <video autoplay loop muted playsinline class="videoOne hideMobile">
            <source src="assets/one.mp4" type="video/mp4" />
          </video>
          <img src="assets/one.jpg" alt="" class="imageOne hideDesktop" />
          <div class="overlayOne">
            <i class="fas fa-times fa-2x closeOverlayOne"></i>
            <h3>Habit Tracker</h3>
            <p>
              A simple React habit tracker that uses firebase database to
              keep track of your daily habits.
            </p>
            <ul class="toolsUsed">
              <li>Firebase</li>
              <li>React</li>
              <li>Sass</li>
            </ul>
            <div class="viewProject">
              <a href="https://sharon-yi.github.io/sharon-yi-project-five/" target="_blank" class="button">view
                live</a>
              <a href="https://github.com/sharon-yi/sharon-yi-project-five" target="_blank" class="button">github</a>
            </div>
          </div>
          </a>
        </div>

        <div class="portfolioTwo" data-aos="fade-left" data-aos-once="true">
          <video autoplay loop muted playsinline class="videoTwo hideMobile">
            <source src="assets/two.mp4" type="video/mp4" />
          </video>
          <img src="assets/two.jpg" alt="" class="imageOne hideDesktop" />

          <div class="overlayTwo">
            <i class="fas fa-times fa-2x closeOverlayTwo"></i>

            <h3>Into The Void</h3>
            <p>
              A javascript mini-game application where you are dodging
              asteroids with your rocket!
            </p>
            <ul class="toolsUsed">
              <li>HTML5</li>
              <li>Javascript</li>
              <li>jQuery</li>
              <li>Sass</li>
            </ul>
            <ul class="viewProject">
              <a href="https://sharon-yi.com/intoTheVoid/" target="_blank" class="button">view live</a>
              <a href="https://github.com/sharon-yi/project3" target="_blank" class="button">github</a>
            </ul>
          </div>
          </a>
        </div>
      </div>

      <div class="secondRow wrapper">
        <div class="portfolioThree" data-aos="fade-right" data-aos-once="true">
          <video autoplay loop muted playsinline class="videoThree hideMobile">
            <source src="assets/three.mp4" type="video/mp4" />
          </video>
          <img src="assets/three.jpg" alt="" class="imageOne hideDesktop" />

          <div class="overlayThree">
            <i class="fas fa-times fa-2x closeOverlayThree"></i>

            <h3>Beeline</h3>
            <p>
              A web app that uses APIs and datasets to find the nearest
              bike-share station to you and how many bikes/docks are
              available.
            </p>
            <ul class="toolsUsed">
              <li>APIs</li>
              <li>HTML5</li>
              <li>Javascript</li>
              <li>jQuery</li>
              <li>Sass</li>
            </ul>
            <ul class="viewProject">
              <a href="https://sharon-yi.com/beeline/" target="_blank" class="button">view live</a>
              <a href="https://github.com/sandyAndSharonProject4/sandyAndSharonProject4" target="_blank"
                class="button">github</a>
            </ul>
          </div>
          </a>
        </div>

        <div class="portfolioFour" data-aos="fade-left" data-aos-once="true">
          <video autoplay loop muted playsinline class="videoFour hideMobile">
            <source src="assets/four.mp4" type="video/mp4" />
          </video>
          <img src="assets/four.jpg" alt="" class="imageOne hideDesktop" />

          <div class="overlayFour">
            <i class="fas fa-times fa-2x closeOverlayFour"></i>
            <h3>Versus</h3>
            <p>
              A React app that allows users to create anonymous polls. Users
              can vote and keep track of their polls.
            </p>
            <ul class="toolsUsed">
              <li>Firebase</li>
              <li>React</li>
              <li>Sass</li>
            </ul>
            <ul class="viewProject">
              <a href="https://anonvotingbooth.github.io/anonymousVotingBooth/" target="_blank" class="button">view
                live</a>
              <a href="https://github.com/anonVotingBooth/anonymousVotingBooth" target="_blank"
                class="button">github</a>
            </ul>
          </div>
          </a>
        </div>
      </div>
    </section>

    <section class="aboutMe" id="aboutMe">
      <div class="wrapper" data-aos="fade-up" data-aos-once="true">
        <div class="aboutMeTop">
          <div class="aboutMeBio">
            <h2>About Me 🧐</h2>
            <p>
              Hello again! Thanks for scrolling this far!! 🤗 I recently
              graduated from <a href="https://junocollege.com/">Juno
                College of
                Technology</a> <span class="smallerText">(cohort 24 aka uno juno!)</span>. I also graduated from York
              University & Sheridan
              College with a bachelor of honors in design.
            </p>
            <p>
              Other than coding, I spend most of my free time playing Animal Crossing <span class="smallerText">(add
                me!)</span> or any
              other video games. 🤓 I've also been trying to read more so feel free to reach out to me with any book
              recommendations!
            </p>
          </div>
          <div class="aboutMeImage">
            <img src="assets/aboutMe.jpg" alt="" />
          </div>
        </div>
        <div data-aos="fade-up" data-aos-once="true">
          <h2>My Toolkit 💻</h2>
          <ul class="skills">
            <li><img src="assets/icons/html.svg" alt="" />HTML5</li>
            <li><img src="assets/icons/css.svg" alt="" />CSS3</li>
            <li><img src="assets/icons/sass.svg" alt="" />Sass</li>
            <li><img src="assets/icons/javascript.svg" alt="" />Javascript</li>
            <li><img src="assets/icons/jquery.svg" alt="" />jQuery</li>
            <li><img src="assets/icons/react.svg" alt="" />React</li>
            <li><img src="assets/icons/firebase.svg" alt="" />Firebase</li>
            <li><img src="assets/icons/accessibility.svg" alt="" />Accessibility</li>
            <li><img src="assets/icons/github.svg" alt="" />Github</li>
            <li><img src="assets/icons/adobe.svg" alt="" />Adobe Creative Cloud</li>
          </ul>
        </div>
      </div>
    </section>
  </main>

  <section class="contact" data-aos="fade-up" data-aos-once="true" id="contact">
    <div class="contactContainer wrapper">
      <div class="contactInformation">
        <h2>Let's Connect! 💌</h2>
        <p>
          If you ever want to grab a coffee/bubble tea <span class="smallerTextContact">(virtually)</span> or just want
          a
          quick
          chat - you can find me on social media or you can send me a message here!
        </p>
        <ul class="socialIcons">
          <li>
            <a href="https://www.linkedin.com/in/sharon-yi/"><i class="fab fa-linkedin-in"></i></a>
          </li>
          <li>
            <a href="https://twitter.com/sharon_yi"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://github.com/sharon-yi"><i class="fab fa-github"></i></a>
          </li>
          <li>
            <a href="mailto:sharon.yi@me.com"><i class="fas fa-envelope"></i></a>
          </li>
        </ul>
      </div>
      <div class="contactForm">
        <form action='thankyou/thanks' method='POST' name='contact'><input type='hidden' name='form-name' value='contact' />
          <label for="name" class="visuallyHidden">name</label>
          <input type="text" name="name" id="name" placeholder="name" autocomplete="off" required />
          <label class="visuallyHidden" for="email">email</label>
          <input type="email" name="email" id="email" placeholder="email" required />
          <label class="visuallyHidden" for="message" autocomplete="off">message</label>
          <textarea name="message" id="message" placeholder="message" required=""></textarea>
          <div class="submit-container">
            <button class="send" type="submit">send message</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <footer>
    <p>Developed and designed with love ❤️ Simranjeet Singh</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
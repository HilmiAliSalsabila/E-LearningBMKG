<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BMKG E-Learning</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="index/css/style.css" />
  <!-- Feather icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <link href="img/Logo_BMKG.png" rel="shotcut icon">
  <!-- Style -->
  <link rel="stylesheet" href="index/css/style.css" />
</head>

<body>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="">BMKG E-Learning</a></div>
      <div class="menu">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#kursus">Courses</a></li>
          <li><a href="#quiz">Quiz</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="/frontend_hilmi/profile.php"><i data-feather="user"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Home Start -->
  <div class="dashboard">
    <section id="home">
      <img src="img/home-img.png" />
      <div class="kolom">
        <h2>Choose your best<br /><?= $_SESSION['nama']; ?></h2>
        <p><a href="#kursus" class="tbl-pink">Get Started!</a></p>
      </div>

    </section>
  </div>
  <!-- Home End -->

  <div><br /></div>
  <div><br /></div>
  <div class="progress-wrapper">
    <div class="bar-title">
      <h2>Your Progression<br /><span>Courses.</span></h2>
    </div>
    <div class="progress-item">
      <div class="progress-bar">
        <p class="presentase-bar">70%</p>
        <div class="progress" style="height: 70%"></div>
      </div>
      <div class="class-name">Machine <br />Learning</div>
    </div>
    <div class="progress-item">
      <div class="progress-bar">
        <p class="presentase-bar">45%</p>
        <div class="progress" style="height: 45%"></div>
      </div>
      <div class="class-name">AWS <br />Cloud</div>
    </div>
    <div class="progress-item">
      <div class="progress-bar">
        <p class="presentase-bar">60%</p>
        <div class="progress" style="height: 60%"></div>
      </div>
      <div class="class-name">
        Fullstack <br />
        Web
      </div>
    </div>
    <div class="progress-item">
      <div class="progress-bar">
        <p class="presentase-bar">100%</p>
        <div class="progress" style="height: 100%"></div>
      </div>
      <div class="class-name">
        Design <br />
        Graphic
      </div>
    </div>
  </div>

  <!-- Kursus Start -->
  <section id="kursus">
    <div class="container">
      <h2>COURSE LIST</h2>
      <div class="course">
        <img src="img/ml.jpg" alt="ml" />
        <div class="course-details">
          <h3>Machine <br />Learning</h3>
          <a href="ml_course.html" class="btn-course">Start Course</a>
        </div>
      </div>
      <div class="course">
        <img src="img/pds.jpg" alt="phyton" />
        <div class="course-details">
          <h3>
            Phyton For <br />
            Data Science
          </h3>
          <a href="pds_course.html" class="btn-course">Start Course</a>
        </div>
      </div>
      <div class="course">
        <img src="img/fr.jpg" alt="Fullstack-Web" />
        <div class="course-details">
          <h3>Fullstack <br />Web</h3>
          <a href="fw_course.html" class="btn-course">Start Course</a>
        </div>
      </div>
      <div class="course">
        <img src="img/dg.jpg" alt="design-grafis" />
        <div class="course-details">
          <h3>Design Graphic <br />With Figma</h3>
          <a href="dg_course.html" class="btn-course">Start Course</a>
        </div>
      </div>
      <div class="course">
        <img src="img/cc.jpg" alt="cloud-computing" />
        <div class="course-details">
          <h3>
            AWS Cloud <br />
            Computing
          </h3>
          <a href="cc_course.html" class="btn-course">Start Course</a>
        </div>
      </div>
      <div class="course">
        <img src="img/uiux.jpg" alt="UI/UX" />
        <div class="course-details">
          <h3>
            Introduction To <br />
            UI/UX Design
          </h3>
          <a href="uiux_course.html" class="btn-course">Start Course</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Kursus End -->

  <!-- Quiz Start -->
  <section id="quiz">
    <div class="container">
      <h2>QUIZ LIST</h2>
      <div class="quiz">
        <img src="img/cc.jpg" alt="Quiz 1 AWS Cloud" />
        <div class="quiz-details">
          <h3>Quiz 1 AWS Cloud</h3>
          <p>Level: Beginner</p>
          <a href="cc_quiz.html" class="btn-quiz">Start Quiz</a>
        </div>
      </div>
      <div class="quiz">
        <img src="img/ml.jpg" alt="Quiz 1 Machine Learning" />
        <div class="quiz-details">
          <h3>Quiz 1 Machine Learning</h3>
          <p>Level: Beginner</p>
          <a href="ml_quiz.html" class="btn-quiz">Start Quiz</a>
        </div>
      </div>
      <div class="quiz">
        <img src="img/fr.jpg" alt="Quiz 1 Fullstack Web" />
        <div class="quiz-details">
          <h3>Quiz 1 Fullstack Web</h3>
          <p>Level: Beginner</p>
          <a href="fw_quiz.html" class="btn-quiz">Start Quiz</a>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Quiz End -->
</body>
<footer>
  <div id="copyright">
    <div class="wrapper">&copy; 2023. <b>Kelompok 3 RPL.</b> All Rights Reserved.</div>
  </div>
</footer>
<!-- Feather Icons -->
<script>
  feather.replace();
</script>

</html>
<?php
    include "../../server/CV.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Material Resume</title>
</head>
<body class="bg-light" id="top">
  <div class="page-content">
    <div class="container">
      <div class="res-container">
  <div class="intro">
  <div class="cover-img">
    <div class="overlay" style="background-color: rgba(0, 0, 0, 0.7); backdrop-filter: blur(2px);">
      <div class="center-content">
        <div class="bio-section">
          <div data-aos="zoom-in" data-aos-delay="0">
            <h2 class="title"><?= "$nom $prenom"; ?></h2>
            <p>Front-end Developer and Graphic Designer</p>
          </div>
          <div class="print-none"><a class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3" data-aos="fade-right" data-aos-delay="700">Download CV</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="about shadow my-5 p-5">
  <div class="row">
    <div class="col-md-6">
      <h2 class="heading fw-light mb-4">About Me</h2>
      <p>Hello! I’m Walter Patterson. I'm passionate about UI/UX design and Web Design. I'm a skilled <strong>front-end developer</strong> and master of graphic design tools such as Photoshop and Sketch. I'm a quick learner and a team worker that gets the job done.</p>
      <p>I can easily capitalize on low hanging fruits and quickly maximize timely deliverables for real-time schemas.</p>
    </div>
    <div class="col-md-5 offset-lg-1">
      <div class="info-row mt-2">
        <h2 class="heading fw-light mb-4">Bio</h2>
        <div class="col-5">
          <div class="info-label"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Age</div>
        </div>
        <div class="col-7">
          <div class="info-value">28</div>
        </div>
        <div class="skills-section">
  <h2 class="heading-light mb-4">Professional Skills</h2>
  <div class="row">
    <div class="col-md-6">
      <div class="skill-item">
        <div class="skill-name"><span class="fw-bolder">HTML</span></div>
        <div class="skill-progress">
          <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Master</div>
        </div>
      </div>
      <!-- ... (les autres compétences HTML, CSS, JavaScript, WordPress) ... -->
    </div>
    <div class="col-md-6">
      <div class="skill-item">
        <div class="skill-name"><span class="fw-bolder">Adobe Photoshop</span></div>
        <div class="skill-progress">
          <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Master</div>
        </div>
      </div>
      <!-- ... (les autres compétences Adobe Illustrator, Sketch, Adobe XD) ... -->
    </div>
  </div>
</div>

<div class="work-experience shadow my-5 p-5" id="experience">
  <div class="experience-section">
    <h2 class="heading-light mb-4">Work Experience</h2>
    <div class="timeline">
      <div class="timeline-card" data-aos="fade-in" data-aos-delay="0">
        <div class="timeline-head px-4 pt-3">
          <div class="h5">Frontend Developer <span class="text-muted h6">at Creative Agency</span></div>
        </div>
        <div class="timeline-body px-4 pb-4">
          <div class="text-muted text-small mb-3">May, 2015 - Present</div>
          <div>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</div>
        </div>
      </div>
      <!-- ... (les autres expériences professionnelles) ... -->
    </div>
  </div>
</div>

<div class="education shadow my-5 p-5" id="education">
  <div class="education-section">
    <h2 class="heading-light mb-4">Education</h2>
    <div class="timeline">
      <div class="timeline-card" data-aos="fade-in" data-aos-delay="0">
        <div class="timeline-head px-4 pt-3">
          <div class="h5">Masters in Information Technology <span class="text-muted h6">from International University</span></div>
        </div>
        <div class="timeline-body px-4 pb-4">
          <div class="text-muted text-small mb-3">2011 - 2013</div>
          <div>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</div>
        </div>
      </div>
      <!-- ... (les autres formations éducatives) ... -->
    </div>
  </div>
</div>
</body>
</html>

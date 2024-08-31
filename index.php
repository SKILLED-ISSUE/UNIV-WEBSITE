<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PUP San Juan</title>
  <link rel="stylesheet" href="assets/css/main-style.css" />
  <link rel="stylesheet" href="navigation/navigation.css" />
  <link rel="icon" href="assets/PUPSJ-LOGO.png" type="image/icon type" />
</head>
<!-- scroll fade-ib effect add lang, class="fade-in" -->

<body>
  <div id="warning-overlay">
    <div id="warning-header">UNDER DEVELOPMENT</div>
    <p>This site is best viewed on a desktop. Please switch to a desktop or larger screen for a better experience.</p>
  </div>
  <div class="spacer"></div>
  <header class="init-header">
    <?php include('assets/static-html/main-header.html'); ?>
  </header>
  <img id="slides" class="fade-in" src="assets/homepage-slides/1.jpg" />

  <section class="after-scroll">
    <section class="cform motto-overview" class="fade-in">
      <section class="ovtexts" class="fade-in">
        <img src="assets/PUPSJ-MOTTO.png" alt="pupsj-motto" class="fade-in">
        <h1 id="motto-desc" class="fade-in">Since 2008, PUP San Juan Campus is a catalyst for progress,
          empowering students to become transformative leaders. Through quality education,
          innovation, and social engagement, we equip individuals with the skills and values
          needed to create a sustainable future for the nation.
        </h1>
      </section>
      <section class="bnnr">
        <img id="banner" src="assets/WC-BANNER.png" alt="pupsj-banner" class="fade-in">
      </section>
    </section>

    <section class="cform dir-container">
      <div class="bg" class="fade-in">
        <img id="dir-img" src="assets/DIRECTOR_NOBG.png" alt="director's photo transparent" class="fade-in">
        <div id="quote">
          <h id="header1" class="fade-in">Director's</h>
          <h id="header2" class="fade-in">Message</h>
          <h id="message" class="fade-in">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam eveniet enim
            laboriosam,
            dolorem voluptates iusto, illum ratione quibusdam repellendus non, assumenda dolore possimus vel ea. Vel
            vero sit iure ipsam! <br><br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam eveniet enim
            laboriosam, dolorem voluptates iusto, illum ratione quibusdam repellendus non, assumenda dolore possimus vel
            ea. Vel
            vero sit iure ipsam!
          </h>
        </div>
      </div>

     
    </section>

   
  </section>

  <section class="pupsj-svp">

  <iframe width="1339" height="480" src="https://www.youtube.com/embed/9ypv1kOj7CU" title="PUPSJ AVP 2024"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </section>


  <?php include('assets/static-html/footer.html'); ?>

  <script src="init-script.js"></script>
  <script src="main-script.js"></script>
  <script></script>
</body>

</html>
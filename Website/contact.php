<!doctype html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact</title>
    <link href="Styles/main.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
  </head>

  <body>
    <section class="nav-section">
        <button class="nav-a-e-h-f"><a href="index.html">Home</a></button>
        <button class="nav-a-e-h-f"><a href="about.html">About</a></button>
        <button class="nav-a-e-h-f"><a href="education.html">Education</a></button>
        <button class="nav-a-e-h-f"><a href="hobbies.html">Extracurriculars</a></button>
        <button class="nav-a-e-h-f"><a href="contact.html">Contact</a></button>
    </section>

    <header>
      <h2 class="name">Contact</h2>
    </header>

    <div class="contact-form" align="center">
        <form id="contact-form" method="post" action="contact-form-handler.php">
            <input name="name" type="text" class="form-control" placeholder="Name" ><br>
            <input name="email" type="email" class="form-control" placeholder="Email" ><br>
            <textarea name="message" class="form-control" placeholder="Message" rows="4" ></textarea><br>
            <input name="submit" type="submit" class="form-control submit" value="Send">
        </form>
    </div>

    <footer>
      <div class="footer">Sitemap</div>
      <div>&copy; Copyright 2018 Jessie Ryce</div>
    </footer>
    <script src="javascript.js"></script>
  </body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/2eb8bd0a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Huddle Landing Page</title>
  </head>
  <body>
    <header>
    <a href="index.php">
        <img src="images/logo.svg" class="logo" alt="Huddle logo" href="index.php"/>
    </a>
    <nav>
        <ul>
            <li><a href="about.php">O nas</a></li>
            <li><a href="features.php">Funkcje i korzyści</a></li>
            <li><a href="testimonials.php">Opinie klientów</a></li>
            <li><a href="gallery.php">Galeria</a></li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
    </nav>
    </header>
    <main id="main-contact">
      <section id="contact" class="page__sections">
        <h2>Kontakt</h2>
        <form action="submit_form.php" method="post">
          <label for="name">Imię:</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Wiadomość:</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit">Wyślij</button>
        </form>
      </section>
    </main>
    <footer>
    <p class="footer__huddle">&copy; <?php echo date("Y"); ?> Huddle. All rights reserved.</p>
      <p>
      <ul class="list__links">
        <li><a class="footer__links facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li><a href="#" class="footer__links twitter"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="#" class="footer__links instagram"><i class="fa-brands fa-instagram"></i></a></li>
      </ul>
      </p>
      
    </footer>
  </body>
</html>
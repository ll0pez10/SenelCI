<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senel</title>
    <!-- Fonts awesome-->
    <script src="https://kit.fontawesome.com/756eb95a62.js" crossorigin="anonymous"></script>
    <!-- Google fonts: Raleway-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"/>
    <!-- CSS -->
    <?php echo link_tag('/assets/vendor/font-awesome/css/font-awesome.min.css'); ?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'); ?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'); ?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css'); ?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css'); ?>
</head>
<body>
  <nav id = "bg-img" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <?= $this->renderSection('content') ?>

  <footer id="footer">
      <div class="inner_footer">
        <div class="contact">
          <h1>SENEL</h1>
          <span>
            Av. Athos da Silveira Ramos, 149 <br />
            Rio de Janeiro - RJ, 21941-909 <br />
            Brasil <br />
            <a href="mailto:senel@poli.ufrj.br"
              ><strong>Email:</strong> senel@poli.ufrj.br</a
            >
          </span>
        </div>
        <div class="footer_third">
          <h1>Links</h1>
          <a href="#">Página inicial</a>
          <a href="#">Parcerias</a>
          <a href="#">Equipe</a>
          <a href="#">Contato</a>
        </div>
        <div class="footer_third">
          <h1>Nossos eventos</h1>
          <a href="#">SENEL Online</a>
          <a href="#">SENEL 2019</a>
          <a href="#">SENEL 2018</a>
        </div>
        <div class="footer_third">
          <h1>Redes sociais</h1>
          <li>
            <a
              href="https://www.youtube.com/channel/UCtDFHNbYakNZzzL0naaNxUA"
              target="blank"
              ><i class="fab fa-youtube"></i
            ></a>
          </li>
          <li>
            <a
              href="https://www.linkedin.com/company/senel-ufrj/"
              target="blank"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </li>
          <li>
            <a href="https://www.instagram.com/senel_ufrj/?hl=pt" target="blank"
              ><i class="fab fa-instagram" width="15px"></i
            ></a>
          </li>
        </div>
      </div>
      <?php echo script_tag('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js') ;?>
      <?php echo script_tag('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js') ;?>
      <?php echo script_tag('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js') ;?>
      <?php echo script_tag('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js') ;?>
  </footer>
</body>
</html>











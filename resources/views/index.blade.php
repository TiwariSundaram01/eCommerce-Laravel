<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Commerce Website | Buy With Happiness</title>
  <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- =====BOX ICONS===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="/css/index.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .feature-product, .project, .about {
        padding: 60px 0;
    }
    .banner {
        background: #f8f9fa;
        padding: 60px 0;
        text-align: center;
    }
    </style>
</head>
<body>
  <div class="landerDiv">
    <nav>
      <ul class="nav__links">
        <div>
          <li>
            <img src="assets/logo.png" alt="logo" />
          </li>
          <li><a href="#">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">REVIEWS</a></li>
        </div>
        <li><a href="#">LOGIN</a></li>
      </ul>
    </nav>
    <section class="section__container">
      <h3>Sundaram</h3>
      <h1>Fashion</h1>
      <h2>E-Commerce</h2>
      <div class="socials">
        <a href="#"><i class="ri-dribbble-fill"></i></a>
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-youtube-fill"></i></a>
      </div>
    </section>
  </div>  

  <!--===== ABOUT =====-->
  <section class="about section" id="about">
    <h2 class="section-title">About</h2>

    <div class="about__container bd-grid">
      <div class="about__img">
        <img src="/assets/about.png" alt="" />
      </div>

      <div>
        <h2 class="about__subtitle">I'am Sundaram</h2>
        <p class="about__text">
          I created this e-commerce website to provide a seamless online shopping experience. My goal is to offer a diverse range of high-quality products at competitive prices, ensuring convenience and satisfaction for every customer. Thank you for choosing to shop with me!
        </p>
      </div>
    </div>
  </section>


  <section class="section__container2">
    <h2>Testimonials</h2>
    <h1>What our customers say</h1>
    <div class="section__grid">
      <div class="section__card">
        <span><i class="ri-double-quotes-l"></i></span>
        <h4>Love the simplicity</h4>
        <p>
          They understood our brand and created a stunning website design.
          Professional, responsive, and on-time delivery. Highly recommended!
        </p>
        <img src="/assets/user-1.jpg" alt="user" />
        <h5>Allan Collins</h5>
        <h6>Managing Director</h6>
      </div>
      <div class="section__card">
        <span><i class="ri-double-quotes-l"></i></span>
        <h4>Excellent Designs</h4>
        <p>
          Efficient, reliable, and results-oriented. Visually appealing
          website, improved online visibility. Highly recommended!
        </p>
        <img src="/assets/user-2.jpg" alt="user" />
        <h5>Tanya Grant</h5>
        <h6>Ceo & Founder</h6>
      </div>
      <div class="section__card">
        <span><i class="ri-double-quotes-l"></i></span>
        <h4>Efficient and Reliable</h4>
        <p>
          Best decision we made. Stunning website, exceptional support. Always
          available and prompt issue resolution. Hassle-free experience!
        </p>
        <img src="/assets/user-3.jpg" alt="user" />
        <h5>Clay Washington</h5>
        <h6>Fashion Designer</h6>
      </div>
    </div>
  </section>

  <!--===== CONTACT =====-->
  <section class="contact section" id="contact">
    <h2 class="section-title">Contact</h2>

    <div class="contact__container bd-grid">
      <form action="" class="contact__form">
        <input type="text" placeholder="Name" class="contact__input" />
        <input type="mail" placeholder="Email" class="contact__input" />
        <textarea
          name=""
          id=""
          cols="0"
          rows="10"
          class="contact__input"
        ></textarea>
        <input type="button" value="Send" class="contact__button button" />
      </form>
    </div>
  </section>
</main>

  <footer class="bg-dark text-center p-3">
      <p style="color:white;">&copy; 2024 E-Commerce. All Rights Reserved.</p>
  </footer>
</body>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="/js/index.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" integrity="sha512-pmAAV1X4Nh5jA9m+jcvwJXFQvCBi3T17aZ1KWkqXr7g/O2YMvO8rfaa5ETWDuBvRq6fbDjlw4jHL44jNTScaKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--=============== BOXICONS ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/hystmodal.css">
    <link rel="stylesheet" href="assets/css/demos.css">
    

    <title>KCM | Luxe Interiors - Warehousing</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
      <nav class="nav container">
        <img src="assets/img/KCM.png" class="nav__logo" alt="" />

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="index.php#home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="index.php#about" class="nav__link">About us</a>
            </li>
            <li class="nav__item">
              <a href="index.php#services" class="nav__link">Services</a>
            </li>
            <li class="nav__item">
              <a href="index.php#contact" class="nav__link">Contact us</a>
            </li>

            <i class="bx bx-toggle-left change-theme" id="theme-button"></i>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>

        <a data-hystmodal="#modalContact" style="cursor: pointer;" class="button button__header">Inquire</a>
      </nav>
    </header>

    <main class="main">

      <!--================= MODAL =============-->

      <!-- <div class="hystmodal hystmodal--simple" id="modalForms" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window hystmodal__window--form" role="dialog" aria-modal="true">
                <button class="hystmodal__close" data-hystclose></button>
                <div class="hystmodal__styled">
                    <div class="loginblock__h1">Need a qualified dealer? <br />
                      Inquire here!
                    </div>
                    <form action="#" method="POST">
                        <div class="formitem">
                            <input type="text" name="username" placeholder="Your name" value="">
                        </div>
                        <div class="formitem">
                            <input type="email" name="username" placeholder="Your E-mail" value="">
                        </div>
                        <div class="formitem">
                            <textarea type="text" name="username" placeholder="State your message" ></textarea>
                        </div>
                        <div class="formsubmit">
                            <button type="submit" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    
    <div class="hystmodal hystmodal--simple" id="modalContact" aria-hidden="true">
      <div class="hystmodal__wrap">
          <div class="hystmodal__window hystmodal__window--form" role="dialog" aria-modal="true">
              <button class="hystmodal__close" data-hystclose></button>
              <div class="hystmodal__styled">
                <div class="loginblock__h1">Need a solution? <br />
                  Inquire Now!
                </div>
                  <form action="#" method="POST">
                      <div class="formitem">
                          <input type="text" name="username" placeholder="Your name" value="">
                      </div>
                      <div class="formitem">
                          <input type="email" name="username" placeholder="Your E-mail" value="">
                      </div>
                      <div class="formitem">
                          <textarea type="text" name="username" placeholder="State your message" ></textarea>
                      </div>
                      <div class="formsubmit">
                          <button type="submit" class="button">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

    <!-- <div class="hystmodal hystmodal--simple" id="modalForms" aria-hidden="true">
      <div class="hystmodal__wrap">
          <div class="hystmodal__window hystmodal__window--form" role="dialog" aria-modal="true">
              <button class="hystmodal__close" data-hystclose></button>
              <div class="hystmodal__styled">
                <div class="loginblock__h1">Need a qualified dealer? <br />
                  Inquire here!
                </div>
                  <form action="#" method="POST">
                      <div class="formitem">
                          <input type="text" name="username" placeholder="Your name" value="">
                      </div>
                      <div class="formitem">
                          <input type="email" name="username" placeholder="Your E-mail" value="">
                      </div>
                      <div class="formitem">
                          <input type="password" name="username" placeholder="Enter password" value="">
                      </div>
                      <div class="loginblock__bottom flexi">
                          <label class="formcheckbox">
                              <input type="checkbox" name="remember" tabindex="0">
                              <span class="flexi"><i class="checkplace"><img src="https://addmorescripts.github.io/hystModal/img/check.svg" alt=""></i>Remember me</span>
                          </label>
                          <a href="#" class="loginblock__link">Forget Password</a>
                      </div>
                      <div class="formsubmit">
                          <button type="submit" class="button">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div> -->
   
      <!--=============== ABOUT ===============-->
      <section class="about section container">
        <div class="about__container grid">
          <div class="about__data">
            <h2 class="section__title-center">
             WAREHOUSING
            </h2>
            <p class="about__description">
              <u><b>Warehousing</b></u> is the storage of goods in a facility until they are needed for sale or distribution. It involves organizing inventory, managing stock levels, and ensuring the proper storage conditions for different products. Efficient warehousing ensures quick order fulfillment and smooth supply chain operations by preparing goods for transportation when needed.
            </p>
          </div>

          <img src="assets/img/warehousing.jpg" alt="">
        </div>
      </section>

      <section class="services section container">
        <h2 class="section__title">
        WAREHOUSING
        </h2>
        <h4 class="section__subtitle">
        Warehousing is the process of storing goods in a designated facility until they are needed for distribution, sale, or further processing. It plays a key role in logistics by ensuring that inventory is readily available when required. The process includes receiving, storing, managing, and dispatching goods efficiently.
<br><br>
Key aspects: <br><br><b>
1. Receiving:</b> Goods are delivered to the warehouse and checked for accuracy and quality.
<br><b>2. Storage:</b> Items are stored in specific locations (racks, shelves, pallets) based on type and demand.
<br><b>3. Inventory Management:</b> Warehouses track stock levels, using systems like barcode scanning or RFID.
<br><b>4. Order Fulfillment:</b> Items are picked, packed, and shipped based on orders.
<br><b>5. Shipping:</b> Finished orders are dispatched for delivery to customers or retailers. 
<br><br>
Warehousing helps streamline supply chains by providing a central location to manage stock and prepare goods for transport.
        </h4>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div class="footer__content">
          <a href="#"><img src="assets/img/KCM.png" class="footer__logo_img" alt="" /></a>
          <p class="footer__description">
            Qualified Dealer? <br />
            Faster Easier
          </p>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Our Services</h3>
          <ul class="footer__links">
            <li><a href="office-relocation.php" class="footer__link">Office Relocation </a></li>
            <li><a href="customs-clearing.php" class="footer__link">Customs Clearing</a></li>
            <li><a href="transportation.php" class="footer__link">Transportation</a></li>
            <li><a href="warehousing.php" class="footer__link">Warehousing</a></li>
            <li><a href="cargo-shipment.php" class="footer__link">Cargo Shipment</a></li>
            
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Our Company</h3>
          <ul class="footer__links">
            <!-- <li><a href="#" class="footer__link">Blog</a></li> -->
            <li><a href="mission.php" class="footer__link">Our Mission</a></li>
            <li><a href="vision.php" class="footer__link">Our Vision</a></li>
            <li><a href="terms-of-service.php" class="footer__link">Terms of Services</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Connections</h3>
          <ul class="footer__links">
            <li><a class="footer__link">Telephone: 929-366-6396</a></li>
            <li><a class="footer__link">Email: sales@kcmli.com</a></li>
            <li><a class="footer__link">Location: 3175 29th St. Astoria, NY 11106</a></li>
          </ul>
        </div>

        <!-- <div class="footer__social">
          <a href="#" class="footer__social-link"
            ><i class="bx bxl-facebook-circle"></i
          ></a>
          <a href="#" class="footer__social-link"
            ><i class="bx bxl-twitter"></i
          ></a>
          <a href="#" class="footer__social-link"
            ><i class="bx bxl-instagram-alt"></i
          ></a>
        </div> -->
      </div>

      <p class="footer__copy">
        &#169; KCM Luxe Interiors. All rights reserved 2024
      </p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/hystmodal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js" integrity="sha512-hRhHH3+D9xVKPpodEiYzHWIG8CWbCjp7LCdZ00K3/6xsdC3iT0OlPJLIwxSMEl07gya1Ae8iAqXjMMLpzqqh0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            slidesPerView: 3,
            spaceBetween: 10,
            autoplay: {
            delay: 3000,
            },
            loop: true,
            navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
            breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    576: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    767: {
      slidesPerView: 3,
      spaceBetween: 20
    }
  },
          
            pagination: {
                el: '.swiper-pagination',
              },
          
          });
    </script>

<script>
  const myModal = new HystModal({
      // for dynamic init() of modals
      // linkAttributeName: false,
      catchFocus: true,
      closeOnEsc: true,
      backscroll: true,
      beforeOpen: function(modal){
          console.log('Message before opening the modal');
          console.log(modal); //modal window object
      },
      afterClose: function(modal){
          console.log('Message after modal has closed');
          console.log(modal); //modal window object

          //If Youtube video inside Modal, close it on modal closing
          let videoframe = modal.openedWindow.querySelector('iframe');
          if(videoframe){
              videoframe.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
          }
      },
  });

  // for dynamic init() of modals
  // myModal.config.linkAttributeName = 'data-hystmodal';
  // myModal.init();
</script>
  </body>
</html>

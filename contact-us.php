<?php
  require_once __DIR__ . '/vendor/autoload.php';
  $offices = require __DIR__ . '/config/offices.php';

  session_start();
  if (empty($_SESSION['csrf'])) {
      $_SESSION['csrf'] = bin2hex(random_bytes(32));
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Contact Us | Netmatters</title>
</head>

<body>
<div id="container">
  <?php require __DIR__ . '/partials/header.php'; ?>

  <div id="middle">

    <div class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item"><a href="index.php" class="breadcrumb__link">Home</a></li>
          <li class="breadcrumb__item breadcrumb__item--current">Our Offices</li>
        </ul>
      </div>
    </div>

    <section class="page-head">
      <div class="container">
        <h1 class="page-head__title">Our Offices</h1>
      </div>
    </section>

    <section class="offices">
      <div class="container">
        <div class="offices__row">

          <?php foreach ($offices as $office): ?>
            <div class="offices__col">

              <article class="office office--<?= $office['slug'] ?>">
                <div class="office__image">
                  <a href="#" class="office__image-link">
                    <img src="<?= $office['image'] ?>" alt="<?= $office['name'] ?>" class="office__img">
                  </a>
                </div>

                <div class="office__content">
                  <h2 class="office__title">
                    <a href="#" class="office__title-link"><?= $office['name'] ?></a>
                  </h2>

                  <p class="office__address">
                    <?= implode('<br>', $office['address']) ?>
                  </p>

                  <div class="office__tel">
                    <a href="tel:<?= preg_replace('/\s+/', '', $office['tel']) ?>" class="office__tel-link h3">
                      <?= $office['tel'] ?>
                    </a>
                  </div>

                  <div class="office__more">
                    <a href="#" class="office__more-btn btn btn--web">View More</a>
                  </div>
                </div>
              </article>

              <div class="offices__map map"
                   id="<?= $office['map']['id'] ?>"
                   data-lat="<?= $office['map']['lat'] ?>"
                   data-lng="<?= $office['map']['lng'] ?>"
                   data-name="<?= htmlspecialchars($office['map']['name']) ?>"
                   data-zoom="<?= $office['map']['zoom'] ?>"
                   data-address="<?= htmlspecialchars($office['map']['address']) ?>">
              </div>

            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="contact__row">

          <aside class="contact__side">

            <div class="info-block">
              <p class="info-block__label">Email us on:</p>
              <p class="info-block__value">
                <a href="mailto:sales@netmatters.com" class="info-block__link h3">sales@netmatters.com</a>
              </p>

              <p class="info-block__label">Speak to Sales on:</p>
              <p class="info-block__value">
                <a href="tel:01603515007" class="info-block__link h3">01603 515007</a>
              </p>

              <p class="info-block__label">Business hours:</p>
              <p class="info-block__label">Monday - Friday 07:00 - 18:00</p>
            </div>

            <div class="accordion">
              <div class="accordion__item">
                <h4 class="accordion__question">
                  <a href="#" class="accordion__toggle" data-accordion-toggle>
                    <p class="accordion__text">Out of Hours IT Support
                      <em class="accordion__icon fa fa-chevron-down" aria-hidden="true"></em>
                    </p>
                  </a>
                </h4>
                <div class="accordion__answer">
                  <div class="accordion__answer-inner">
                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                    <p>
                      <strong>Monday - Friday 18:00 - 22:00</strong><br>
                      <strong>Saturday 08:00 - 16:00</strong><br>
                      <strong>Sunday 10:00 - 18:00</strong>
                    </p>
                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                  </div>
                </div>
              </div>
            </div>

          </aside>

          <div class="contact__main">
            <form class="form form--contact" id="contact-form" method="POST" action="#" accept-charset="UTF-8" novalidate>
              <input name="_token" type="hidden" value="<?= htmlspecialchars($_SESSION['csrf']) ?>">

              <div class="form__row">
                <div class="form__col">
                  <div class="form__group">
                    <label for="name" class="form__label form__label--required">Your Name</label>
                    <input class="form__control" name="name" type="text" id="name">
                  </div>
                </div>

                <div class="form__col">
                  <div class="form__group">
                    <label for="company" class="form__label">Company Name</label>
                    <input class="form__control" name="company" type="text" id="company">
                  </div>
                </div>

                <div class="form__col">
                  <div class="form__group">
                    <label for="email" class="form__label form__label--required">Your Email</label>
                    <input class="form__control" name="email" type="email" id="email">
                  </div>
                </div>

                <div class="form__col">
                  <div class="form__group">
                    <label for="telephone" class="form__label form__label--required">Your Telephone Number</label>
                    <input class="form__control" name="telephone" type="text" id="telephone">
                  </div>
                </div>
              </div>

              <div class="form__group">
                <label for="message" class="form__label form__label--required">Message</label>
                <textarea class="form__control form__control--textarea" name="message" cols="50" rows="10" id="message"></textarea>
              </div>

              <div class="form__group">
                <label class="pretty-checkbox">
                  <span class="pretty-checkbox__box">
                    <span class="pretty-checkbox__icon mdi-action-done"></span>
                    <input class="pretty-checkbox__input" name="marketing_preference" type="checkbox" value="1">
                  </span>
                  <span class="pretty-checkbox__text">
                    Please tick this box if you wish to receive marketing information from us.
                    Please see our <a href="#" target="_blank" class="form__link">Privacy Policy</a>
                    for more information on how we keep your data safe.
                  </span>
                </label>
              </div>

              <div class="form__actions">
                <button type="submit" class="form__submit btn btn--primary">Send Enquiry</button>
                <small class="form__helper"><span class="form__required">*</span> Fields Required</small>
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>

  </div>

  <?php require __DIR__ . '/partials/footer.php'; ?>
</div>

<div id="side-menu-placeholder" class="sidebar"></div>
<div class="sidebar-overlay"></div>
<div id="cookie-placeholder"></div>

<script src="js/vendors/jquery-4.0.0.js"></script>
<script src="js/vendors/stickify.js"></script>
<script type="module" src="js/pages/contact-us.js"></script>
</body>
</html>
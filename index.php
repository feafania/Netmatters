<?php
  require_once __DIR__ . '/vendor/autoload.php';
  require_once __DIR__ . '/config/database.php';
  require_once __DIR__ . '/includes/functions.php';

  /** @var PDO $pdo */
  $stmt = $pdo->query('
      SELECT
          news.*,
          categories.name AS category,
          services.name AS service,
          types.name AS type,
          authors.name AS author,
          authors.image AS author_image
      FROM news
      JOIN categories ON news.category_id = categories.id
      JOIN services ON news.service_id = services.id
      JOIN types ON services.type_id = types.id
      JOIN authors ON news.author_id = authors.id
      ORDER BY news.published_at DESC
  ');
  $news = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
</head>

<body>
<div id="container">
  <?php require __DIR__ . '/partials/header.php'; ?>
  <section class="banner-slider" id="banner-slider" aria-label="Main banner">

      <div class="banner-slider__slide" data-key="company">
        <div class="banner-slider__pic" role="img" aria-label="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <div class="banner-slider__title h1">The East Of England's Leading Technology Company</div>
              <p class="banner-slider__lead">Performance-driven digital and technology services<br>
                with complete transparency.</p>
              <a href="#" class="btn btn--lg btn--web">
                Why Choose Us?
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-slider__slide" data-key="software">
        <div class="banner-slider__pic" role="img" aria-label="Bespoke Software Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <div class="banner-slider__title h1">Bespoke Software</div>
              <p class="banner-slider__lead">Delivering expert bespoke software<br>
                solutions across a range of industries.</p>
              <a href="#" class="btn btn--lg btn--software">
                Find Out More
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-slider__slide" data-key="it">
        <div class="banner-slider__pic" role="img" aria-label="IT Support Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <div class="banner-slider__title h1">IT Support</div>
              <p class="banner-slider__lead">Fast and cost-effective IT support<br>
                services for your business.</p>
              <a href="#" class="btn btn--lg btn--it">
                Find Out More
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-slider__slide" data-key="digital">
        <div class="banner-slider__pic" role="img" aria-label="Digital Marketing Norwich,, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <div class="banner-slider__title h1">Digital Marketing</div>
              <p class="banner-slider__lead">Generating your new business through<br>
                results-driven marketing activities.</p>
              <a href="#" class="btn btn--lg btn--digital">
                Find Out More
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-slider__slide" data-key="telecoms">
        <div class="banner-slider__pic" role="img" aria-label="Telecoms Services Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <div class="banner-slider__title h1">Telecoms Services</div>
              <p class="banner-slider__lead">A new approach to connectivity, see<br>
                how we can help your business.</p>
              <a href="#" class="btn btn--lg btn--telecoms">
                Find Out More
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-slider__slide" data-key="web">
        <div class="banner-slider__pic" role="img" aria-label="Web Design Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <h1 class="banner-slider__title h1">Web Design</h1>
              <p class="banner-slider__lead">For businesses looking to make a strong <br>
                and effective first impression.</p>
              <a href="#" class="btn btn--lg btn--web">
                Find Out More
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-slider__slide" data-key="security">
        <div class="banner-slider__pic" role="img" aria-label="Cyber Security Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield"></div>
        <div class="banner-slider__content">
          <div class="container">
            <div class="banner-slider__text">
              <div class="banner-slider__title h1">Cyber Security</div>
              <p class="banner-slider__lead">Keeping businesses and their customers<br>
                sensitive information protected.</p>
              <a href="#" class="btn btn--lg btn--security">
                Find Out More
                <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

  </section>

  <section class="services">
    <div class="services__container container">
      <div class="services__row">

        <div class="services__header">
          <h2 class="services__title h1">Our Services</h2>
          <a href="#" class="services__cta h1">
            View Our Work <em class="icon-arrow-right"></em>
          </a>
        </div>

        <div class="services__grid">

          <div class="services__item services__item--third">

            <a href="#" class="services__item-wrap" data-key="software">
              <span class="services__item-icon icon-apps"></span>
              <span class="services__item-title h2">Consultancy &amp; Development</span>
              <span class="services__item-text">Bespoke software solutions &amp; consultancy for all your business needs including integrations and reporting.</span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

          <div class="services__item services__item--third">
            <a href="#" class="services__item-wrap" data-key="it">
              <span class="services__item-icon icon-display"></span>
              <span class="services__item-title h2">IT Support</span>
              <span class="services__item-text">Fully managed IT support and consultancy packages tailored to meet your exact business needs.</span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

          <div class="services__item services__item--third">
            <a href="#" class="services__item-wrap" data-key="digital">
              <span class="services__item-icon icon-bar-graph"></span>
              <span class="services__item-title h2">Digital Marketing</span>
              <span class="services__item-text">Driven brand awareness &amp; ROI through creative digital marketing campaigns.</span>
              <span class="services__item-br"></span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

          <div class="services__item services__item--quarter">
            <a href="#" class="services__item-wrap" data-key="telecoms">
              <span class="services__item-icon icon-phone_in_talk"></span>
              <span class="services__item-title h2">Telecoms Services</span>
              <span class="services__item-text">Business telephony solutions including mobile &amp; connectivity solutions.</span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

          <div class="services__item services__item--quarter">
            <a href="#" class="services__item-wrap" data-key="web">
              <span class="services__item-icon icon-code"></span>
              <span class="services__item-title h2">Web Design</span>
              <span class="services__item-text">User-centric design for businesses looking to make a lasting impression.</span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

          <div class="services__item services__item--quarter">
            <a href="#" class="services__item-wrap" data-key="security">
              <span class="services__item-icon icon-security"></span>
              <span class="services__item-title h2">Cyber Security</span>
              <span class="services__item-text">Prevention, testing, consultancy &amp; breach management services.</span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

          <div class="services__item services__item--quarter">
            <a href="#" class="services__item-wrap" data-key="developer-course">
              <span class="services__item-icon mdi-social-school"></span>
              <span class="services__item-title h2">Developer Training</span>
              <span class="services__item-text">Web design &amp; software training courses designed to secure a job in tech.</span>
              <span class="services__item-btn-wrap">
                          <span class="btn services__item-btn">Read More</span>
                      </span>
            </a>
          </div>

        </div>

        <div class="services__cta-mobile">
          <h3 class="services__cta-mobile-link">
            <a href="#">View Our Work <em class="icon-arrow-right"></em></a>
          </h3>
        </div>

      </div>
    </div>
  </section>

  <section class="logo-strip">
    <h2 class="visually-hidden"> Our partners</h2>
    <div class="logo-strip__list logo-strip--partners">
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/google-partner-bw.webp" type="image/webp">
            <source srcset="assets/images/google-partner-bw.jpg" type="image/jpg">
            <img src="assets/images/google-partner-bw.jpg" alt="Google Partners" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/google-partner.webp" type="image/webp">
            <source srcset="assets/images/google-partner.jpg" type="image/jpg">
            <img src="assets/images/google-partner.jpg" alt="Google Partners" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/GBC-bw.webp" type="image/webp">
            <source srcset="assets/images/GBC-bw.png" type="image/png">
            <img src="assets/images/GBC-bw.png" alt="Good Business Charter" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/GBC-colour.webp" type="image/webp">
            <source srcset="assets/images/GBC-colour.png" type="image/png">
            <img src="assets/images/GBC-colour.png" alt="Good Business Charter" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/norfolk_prohelp_bw.webp" type="image/webp">
            <source srcset="assets/images/norfolk_prohelp_bw.png" type="image/png">
            <img src="assets/images/norfolk_prohelp_bw.png" alt="Norfolk Prohelp logo" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/norfolk_prohelp.webp" type="image/webp">
            <source srcset="assets/images/norfolk_prohelp.png" type="image/png">
            <img src="assets/images/norfolk_prohelp.png" alt="Norfolk Prohelp logo" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/investing-in-future-growth-bw.webp" type="image/webp">
            <source srcset="assets/images/investing-in-future-growth-bw.jpg" type="image/jpg">
            <img src="assets/images/investing-in-future-growth-bw.jpg" alt="Investing In Future Growth" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/investing-in-future-growth.webp" type="image/webp">
            <source srcset="assets/images/investing-in-future-growth.jpg" type="image/jpg">
            <img src="assets/images/investing-in-future-growth.jpg" alt="Investing In Future Growth" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/norfolk-carbon-charter-bw.webp" type="image/webp">
            <source srcset="assets/images/norfolk-carbon-charter-bw.jpg" type="image/jpg">
            <img src="assets/images/norfolk-carbon-charter-bw.jpg" alt="Norfolk Carbon Charter" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/norfolk-carbon-charter.webp" type="image/webp">
            <source srcset="assets/images/norfolk-carbon-charter.jpg" type="image/jpg">
            <img src="assets/images/norfolk-carbon-charter.jpg" alt="Norfolk Carbon Charter" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/PPC_logo-bw.webp" type="image/webp">
            <source srcset="assets/images/PPC_logo-bw.jpg" type="image/jpg">
            <img src="assets/images/PPC_logo-bw.jpg" alt="PPC Logo" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/PPC_logo.webp" type="image/webp">
            <source srcset="assets/images/PPC_logo.jpg" type="image/jpg">
            <img src="assets/images/PPC_logo.jpg" alt="PPC Logo" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/princess-royal-training-bw.webp" type="image/webp">
            <source srcset="assets/images/princess-royal-training-bw.png" type="image/jpg">
            <img src="assets/images/princess-royal-training-bw.png" alt="Princess Royal Training" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/princess-royal-training.webp" type="image/webp">
            <source srcset="assets/images/princess-royal-training.png" type="image/jpg">
            <img src="assets/images/princess-royal-training.png" alt="Princess Royal Training" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/future-50-bw.webp" type="image/webp">
            <source srcset="assets/images/future-50-bw.jpg" type="image/jpg">
            <img src="assets/images/future-50-bw.jpg" alt="Future 50" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/future-50.webp" type="image/webp">
            <source srcset="assets/images/future-50.jpg" type="image/jpg">
            <img src="assets/images/future-50.jpg" alt="Future 50" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/qms-bw.webp" type="image/webp">
            <source srcset="assets/images/qms-bw.png" type="image/jpg">
            <img src="assets/images/qms-bw.png" alt="QMS" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/qms.webp" type="image/webp">
            <source srcset="assets/images/qms.png" type="image/jpg">
            <img src="assets/images/qms.png" alt="QMS" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/iso-27001-bw.webp" type="image/webp">
            <source srcset="assets/images/iso-27001-bw.png" type="image/jpg">
            <img src="assets/images/iso-27001-bw.png" alt="ISO 27001" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/iso-27001.webp" type="image/webp">
            <source srcset="assets/images/iso-27001.png" type="image/jpg">
            <img src="assets/images/iso-27001.png" alt="ISO 27001" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/skills-of-tomorrow-bw.webp" type="image/webp">
            <source srcset="assets/images/skills-of-tomorrow-bw.jpg" type="image/jpg">
            <img src="assets/images/skills-of-tomorrow-bw.jpg" alt="Skills Of tomorrow" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/skills-of-tomorrow.webp" type="image/webp">
            <source srcset="assets/images/skills-of-tomorrow.jpg" type="image/jpg">
            <img src="assets/images/skills-of-tomorrow.jpg" alt="Skills Of tomorrow" class="logo-card__image">
          </picture>
        </div>
      </div>
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture logo-card__picture--grey">
            <source srcset="assets/images/cyber-essentials-grey.webp" type="image/webp">
            <source srcset="assets/images/cyber-essentials-grey.jpg" type="image/png">
            <img src="assets/images/cyber-essentials-grey.jpg" alt="Cyber Essentials" class="logo-card__image">
          </picture>
          <picture class="logo-card__picture logo-card__picture--colour">
            <source srcset="assets/images/cyber-essentials-colour.webp" type="image/webp">
            <source srcset="assets/images/cyber-essentials-colour.jpg" type="image/png">
            <img src="assets/images/cyber-essentials-colour.jpg" alt="Cyber Essentials" class="logo-card__image" style="opacity: 1;">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section class="branded-text">
    <div class="container">
      <div class="branded-text__row">

        <div class="branded-text__col">
          <h2 class="branded-text__title h1"><strong>Welcome To Netmatters</strong></h2>
          <p class="branded-text__intro">
            <strong>
              Netmatters is a leading <a href="#">Bespoke Software</a>,
              <a href="#">IT Support</a>, and <a href="#">Digital Marketing</a>
              company based in the East of England with offices in&nbsp;<a href="#">Cambridge</a>,
              <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.
            </strong>
          </p>
          <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
          <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>

          <div class="branded-text__actions">
            <a href="#" target="_blank" class="btn btn--inverse">
              Why Choose Us? <em class="icon-arrow-right"></em>
            </a>
            <a href="#" target="_blank" class="btn btn--inverse">
              Our Culture <em class="icon-arrow-right"></em>
            </a>
          </div>
        </div>

        <div class="branded-text__col">
          <h2 class="branded-text__title h1"><strong>What Our Clients Think</strong></h2>

          <div class="branded-text__stars" aria-hidden="true">
            <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
          </div>

          <blockquote class="branded-text__quote">
            <p>
              <span class="branded-text__quote-text">
                Netmatters stood out from the start. Great guys and very easy to work with.
                Both the build and digital marketing teams are clearly skilled — they know
                their stuff! They delivered a website to our (high!) expectations and went
                over and above to ensure we were satisfied clients — and we are!
              </span>
            </p>
            <footer class="branded-text__quote-author">
              Eleanor Bishop, Head of Marketing – <a href="#">Ashcroft Partnership LLP</a>
            </footer>
          </blockquote>

          <div class="branded-text__reviews">
            <a href="#" target="_blank" class="btn btn--google">
              Google Reviews <em class="icon-arrow-right"></em>
            </a>
            <a href="#" target="_blank" class="btn btn--trustpilot">
              TrustPilot Reviews <em class="icon-arrow-right"></em>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="latest-news">

    <div class="latest-news__bar">
      <div class="container">
        <div class="latest-news__heading-row">
          <h2 class="latest-news__title h1"><strong>Latest News</strong></h2>
          <h3 class="latest-news__view-all">
            <a href="#">View All <strong><em class="icon-arrow-right"></em></strong></a>
          </h3>
        </div>
      </div>
    </div>

    <div class="latest-news__body">
      <div class="container">
        <div class="latest-news__list">
          <?php foreach ($news as $post): ?>
            <div class="latest-news__col">
              <article class="news__card news__card--<?= htmlspecialchars($post['type']) ?>">
                <a class="news__card-link"
                    href="#"
                    aria-label="<?= htmlspecialchars($post['title']) ?>">
                </a>

                <div class="news__media">
                  <a class="news__category btn-tooltip"
                      href="#"
                      title="View all: <?= htmlspecialchars($post['service']) ?> / <?= htmlspecialchars($post['category']) ?>">
                    <?= htmlspecialchars($post['category']) ?>
                  </a>
                  <a class="news__image" href="#">
                    <picture>
                      <source srcset="<?= htmlspecialchars($post['image']) ?>" type="image/webp">
                      <img src="<?= htmlspecialchars($post['image']) ?>" class="img-responsive" alt="<?= htmlspecialchars($post['title']) ?>">
                    </picture>
                  </a>
                </div>

                <div class="news__content">
                  <h3 class="news__heading">
                    <a href="#"><?= htmlspecialchars(truncateText($post['title'], 45)) ?></a>
                  </h3>
                  <p class="news__excerpt"><?= htmlspecialchars(truncateText($post['content'], 100)) ?></p>
                  <a class="news__btn btn" href="#">Read More</a>

                  <div class="news__meta">
                    <div class="news__avatar">
                      <picture>
                        <source srcset="<?= htmlspecialchars($post['author_image']) ?>" type="image/webp">
                        <img src="<?= htmlspecialchars($post['author_image']) ?>"
                              class="img-responsive"
                              alt="<?= htmlspecialchars($post['author']) ?>">
                      </picture>
                    </div>

                    <div class="news__meta-details">
                      <strong class="news__author">Posted by <?= htmlspecialchars($post['author']) ?></strong>
                      <span class="news__date">
                        <?= date('jS F Y', strtotime($post['published_at'])) ?>
                      </span>
                    </div>
                  </div>

                </div>

              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="container latest-news__view-all-mobile">
      <h3><a href="#">View All <strong><em class="icon-arrow-right"></em></strong></a></h3>
    </div>

  </section>

  <section class="logo-strip logo-strip--clients">
    <div class="logo-strip__list">
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture ">
            <source srcset="assets/images/black_swan_logo.webp" type="image/webp">
            <img src="assets/images/black_swan_logo.webp" alt="Black Swan Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Black Swan Care Group</h3>
              <p class="logo-tooltip__text">
                Black Swan Care Group own and manage 21 high-quality care and
                residential homes with a focus on putting the needs of their
                residents first.
              </p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--software btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture ">
            <source srcset="assets/images/xupes_logo.webp" type="image/webp">
            <img src="assets/images/xupes_logo.webp" alt="Xupes Logo" class="logo-card__image">
          </picture>
          <div class="logo-tooltip">
            <div class="logo-tooltip__box logo-tooltip__box--no-description">
              <h3 class="logo-tooltip__title">Xupes</h3>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/beat_logo.webp" type="image/webp">
            <img src="assets/images/beat_logo.webp" alt="BEAT Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">BEAT</h3>
              <p class="logo-tooltip__text">The UK's eating disorder charity founded in 1989.</p>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/survey_solutions_logo.webp" type="image/webp">
            <img src="assets/images/survey_solutions_logo.webp" alt="Survey Solutions Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box logo-tooltip__box--no-description">
              <h3 class="logo-tooltip__title">Survey Solutions</h3>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/girl_guides_anglia.webp" type="image/webp">
            <img src="assets/images/girl_guides_anglia.webp" alt="Girl Guiding Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Girl Guiding Anglia</h3>
              <p class="logo-tooltip__text">
                Girl Guiding Anglia is part of Girlguiding, the UK's leading charity
                for girls and young women in the UK.
              </p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--it btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/sweetzy_logo.webp" type="image/webp">
            <img src="assets/images/sweetzy_logo.webp" alt="Sweetzy Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Sweetzy</h3>
              <p class="logo-tooltip__text">Sweetzy are an online sweets retailer, based in Wymondham.</p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--digital btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/howespercivallogo.webp" type="image/webp">
            <img src="assets/images/howespercivallogo.webp" alt="Howes Percival Logo" class="logo-card__image">
          </picture>
          <div class="logo-tooltip">
            <div class="logo-tooltip__box logo-tooltip__box--no-description">
              <h3 class="logo-tooltip__title">Howes Percival</h3>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/girls_day_school_trust_logob.webp" type="image/webp">
            <img src="assets/images/girls_day_school_trust_logob.webp" alt="GDST Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">GDST</h3>
              <p class="logo-tooltip__text">
                The Girls' Day School Trust (GDST) is the UK's leading family of 25
                independent girls' schools.
              </p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--digital btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/ashcroftlogo_landscape_goldblack_DP60P-small.webp" type="image/webp">
            <img src="assets/images/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="Ashcroft Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Ashcroft Partnership LLP</h3>
              <p class="logo-tooltip__text">
                Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft
                Partnership LLP in 2020 and are one of the top chartered accountancy
                firms in Cambridge, advising entrepreneurs and families.
              </p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--web btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/onetravellerlogo_white_figuire.webp" type="image/webp">
            <img src="assets/images/onetravellerlogo_white_figuire.webp" alt="One Traveller Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">One Traveller</h3>
              <p class="logo-tooltip__text">
                One Traveller, founded in 2007, is a leading provider of solo
                holidays for over 50s.
              </p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--web btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/searles_logo.webp" type="image/webp">
            <img src="assets/images/searles_logo.webp" alt="Searles Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Searles Leisure Resort</h3>
              <p class="logo-tooltip__text">
                Searles Leisure Resort, on the beautiful North Norfolk coast, is an
                award-winning UK holiday resort for families.
              </p>
              <a href="#" class="logo-tooltip__button logo-tooltip__button--digital btn">
                View Our Case Study
                <em class="icon-arrow-right"></em>
              </a>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/busseys_logo.webp" type="image/webp">
            <img src="assets/images/busseys_logo.webp" alt="Busseys Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Busseys</h3>
              <p class="logo-tooltip__text">One of the UK's leading Ford dealerships.</p>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="logo-strip__item">
        <div class="logo-card">
          <picture class="logo-card__picture">
            <source srcset="assets/images/crane_logo.webp" type="image/webp">
            <img src="assets/images/crane_logo.webp" alt="Crane Garden Buildings Logo" class="logo-card__image">
          </picture>

          <div class="logo-tooltip">
            <div class="logo-tooltip__box">
              <h3 class="logo-tooltip__title">Crane Garden Buildings</h3>
              <p class="logo-tooltip__text">
                Leading manufacturer and supplier of high-end garden rooms,
                summerhouses, workshops and sheds in the UK.
              </p>
              <div class="logo-tooltip__arrow"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <?php require __DIR__ . '/partials/footer.php'; ?>
</div>
<div id="side-menu-placeholder" class="sidebar"></div>
<div class="sidebar-overlay"></div>
<div id="cookie-placeholder"></div>

<script src="js/jquery-4.0.0.js"></script>
<script src="slick/slick.js"></script>
<script src="js/stickify.js"></script>
<script type="module" src="js/main.js"></script>
</body>
</html>
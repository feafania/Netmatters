<?php
  $routes = require __DIR__ . '/../config/routes.php';

  $pageName = basename($_SERVER['PHP_SELF']);
  $isContactPage = $pageName === $routes['contact'];
  $isHome = $pageName === $routes['home'];
?>

<div id="header">
  <header class="header" data-page-url="<?= $pageName ?>">
    <div class="header__inner">
      <div class="container">
        <div class="header__row">
          <div class="header__row-hero">
            <div class="header__row-hero-logo">
              <a href="<?= $isHome ? '#' : $routes['home'] ?>">
                <picture>
                  <source srcset="assets/images/f-logo.webp" type="image/webp">
                  <source srcset="assets/images/f-logo.png" type="image/png">
                  <img src="assets/images/f-logo.png" alt="Netmatters">
                </picture>
              </a>
            </div>
          </div>

          <div class="header__row-mobile">
            <a href="#" class="header__row-mobile-link">
              <span class="icon-phone_in_talk" aria-hidden="true"></span>
            </a>
          </div>


          <div class="header__row-group">

            <div class="header__row-group-actions">

              <a href="#" target="_blank" class="header__row-group-actions-el btn btn--it">
                <span class="icon-mouse"></span>
                Support
              </a>

              <a
                href="<?= $isContactPage ? '#' : $routes['contact'] ?>"
                class="header__row-group-actions-el btn btn--default"
              >
                <span class="icon-paperplane"></span>
                Contact
              </a>

              <form class="header__row-group-actions-search search-form search-form--tablet" method="GET" action="#" accept-charset="UTF-8">
                <label for="search-input--tablet" class="is-hidden">Search:</label>
                <input id="search-input--tablet" placeholder="Search..." class="search-input" name="keyword" type="text" value="" ><!--
                --><button id="search-submit--tablet" type="submit" class="search-submit">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
              </form>

              <button class="header__row-group-actions-hamburger hamburger hamburger--spin btn btn--primary" data-toggle="sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
              </button>

            </div>

          </div>
        </div>
        <form class="header__search search-form search-form--mobile" method="GET" action="#" accept-charset="UTF-8">
          <label for="search-input--mobile" class="is-hidden">Search:</label>
          <input id="search-input--mobile" placeholder="Search..." class="search-input" name="keyword" type="text" value="" ><!--
              --><button id="search-submit--mobile" type="submit" class="search-submit">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
        </form>
      </div>
    </div>
  </header>
  <?php require __DIR__ . '/navigation.php'; ?>
</div>

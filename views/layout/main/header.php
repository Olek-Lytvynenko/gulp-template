<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/images/favicon/favicon-32x32.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css?v=4">
  <link rel="stylesheet" href="/css/swiper/swiper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>FXELIT - An Experience Created for You</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__logotype">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/" rel="nofollow">
            <img class="logo" src="/images/fxelit_logo_dark.png" alt="Header logotype">
          </a>
        </noindex>
        <div style="display: flex; align-items:center; margin-left:20px">

        <div class="navbar-lang-wrap navbar-lang-wrap__mobile">
    <a href="#" class="navbar-lang">
      <img src="/images/globe.svg" alt="" width="20">
      <span class="sub-arrow"><i class="fas fa-caret-down"></i></span>
    </a>
    <ul class="navbar-lang__list navbar-lang__list__mobile">
      <li class="navbar-lang__item">
        <a href="/" class="navbar-lang__link <?= $lang === 'en' ? 'active' : '' ?>" data-lang="en">EN</a>
      </li>
      <li class="navbar-lang__item">
        <a href="/de" class="navbar-lang__link <?= $lang === 'de' ? 'active' : '' ?>" data-lang="de">DE</a>
      </li>
    </ul>
  </div>
        <div class="header__burger-menu">
          <div class="header__burger">
            <i class="fa-solid fa-bars" id="header_burger-icon"></i>
          </div>
        </div>
      </div>
      </div>
      <nav class="header__navigation">
        <div class="header__navigation-item">
          <noindex>
            <a href="<?= \translate\Lang::getUrlLang() ?>/" class="header__navigation-link" data-link-name="main" rel="nofollow"><?= \translate\Lang::t('HOME') ?></a>
          </noindex>
        </div>
        <div class="header__navigation-item">
          <noindex>
            <a href="<?= \translate\Lang::getUrlLang() ?>/about-us" class="header__navigation-link" data-link-name="about-us" rel="nofollow"><?= \translate\Lang::t('ABOUT US') ?></a>
          </noindex>
        </div>
        <div class="header__navigation-item">
          <noindex>
            <a href="<?= \translate\Lang::getUrlLang() ?>/account-types" class="header__navigation-link" data-link-name="account-types" rel="nofollow"><?= \translate\Lang::t('ACCOUNT TYPES') ?></a>
          </noindex>
        </div>
        <div class="header__navigation-item">
          <noindex>
            <a href="<?= \translate\Lang::getUrlLang() ?>/contact-us" class="header__navigation-link" data-link-name="contact-us" rel="nofollow"><?= \translate\Lang::t('CONTACT US') ?></a>
          </noindex>
        </div>
      </nav>
      <div class="navbar-lang-wrap navbar-lang-wrap1">
  <a href="#" class="navbar-lang">
    <img src="/images/globe.svg" alt="" width="20">
    <span class="sub-arrow"><i class="fas fa-caret-down"></i></span>
  </a>
  <ul class="navbar-lang__list navbar-lang__list1">
    <li class="navbar-lang__item">
      <a href="/" class="navbar-lang__link <?= $lang === 'en' ? 'active' : '' ?>" data-lang="en">EN</a>
    </li>
    <li class="navbar-lang__item">
      <a href="/de" class="navbar-lang__link <?= $lang === 'de' ? 'active' : '' ?>" data-lang="de">DE</a>
    </li>
  </ul>
</div>
      <div class="header__authorization">
        <div class="header__authorization-item header__authorization-item--login">
          <noindex>
            <a href="https://platform.fxelit-go.com/?log=1&lang=<?= $lang ?>" rel="nofollow" class="header__authorization-link header__authorization-link--login" rel="nofollow">
              <?= \translate\Lang::t('LOGIN') ?>
            </a>
          </noindex>
        </div>
        <div class="header__authorization-item header__authorization-item--register">
          <noindex>
            <a href="https://platform.fxelit-go.com/?sign=1&lang=<?= $lang ?>" class="header__authorization-link header__authorization-link--register" rel="nofollow">
              <?= \translate\Lang::t('REGISTER') ?>
            </a>
          </noindex>
        </div>
      </div>
    </div>
  </header>
</body>

</html>

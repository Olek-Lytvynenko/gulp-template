<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<div class="section-1">
  <div class="section-1__video">
    <video autoplay="" muted="" loop="" playsinline="" style="position: absolute;">
      <source src="/video/header.mp4" type="video/mp4">
    </video>
  </div>
  <div class="container">
    <div class="section-1__video-text reveal-top">
      <h1><?= \translate\Lang::t('Feel the privilege') ?></h1>
      <p><?= \translate\Lang::t('FXELIT is the go-to solution for professionals and newbies to trading alike. Register today and start trading today.') ?></p>
      <div class="section-1__button">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/contact-us" rel="nofollow">
            <?= \translate\Lang::t('CONTACT US') ?>
          </a>
        </noindex>
      </div>
    </div>
  </div>
</div>
<div class="bg-container">
  <section class="section-2">
    <div class="container">
      <div class="section-2__text reveal-top">
        <h2><?= \translate\Lang::t('Who are We?') ?></h2>
        <span class="section-2__text-separator"></span>
        <p><?= \translate\Lang::t('FXELIT is a new trading platform specializing in presenting users with intuitive and secure access to worldwide crypto markets, a diverse asset pool and professional digital instruments, helping users to swiftly maximize their benefits.') ?></p>
      </div>
    </div>
  </section>

  <section class="section-3">
    <div class="container">
      <div class="section-3__image">
        <img src="/images/section-3_phone.png" alt="Phone image">
      </div>
      <div class="section-3__text">
        <h2 class="reveal-top"><?= \translate\Lang::t('An Experience Created for You') ?></h2>
        <span class="section-3__text-separator reveal-top"></span>
        <p class="reveal-top"><?= \translate\Lang::t('FXELIT presents users with a state-of-the-art platform, equipped with the latest SLL Protocols and backed by 24/7 Dedicated Customer Support.') ?></p>
        <p class="reveal-top"><?= \translate\Lang::t('Our intuitive interface makes it extremely easy to navigate trading markets and easily close and open positions with lightning-fast speed.') ?></p>
      </div>
    </div>
  </section>
</div>
<section class="section-4">
  <div class="container">
    <h2 class="reveal-top"><?= \translate\Lang::t('Some of Our Many Benefits') ?></h2>
    <span class="section-4__text-separator reveal-top"></span>
    <div class="section-4__list reveal-top">
      <div class="section-4__list-item">
        <div class="section-4__list-item-title">
          <img src="/images/bitcoin.png" alt="">
          <div class="section-4__list-item-title-text">
            <span><?= \translate\Lang::t('GIVE') ?></span>
            <h5><?= \translate\Lang::t('Cutting Edge Security') ?></h5>
          </div>
        </div>
        <p><?= \translate\Lang::t('All members’ accounts and transactions are secured, using the latest encryption algorithms plus SSL.') ?></p>
      </div>
      <div class="section-4__list-button">
        <noindex>
          <a href="javascript:void(0);" rel="nofollow">
            <img src="/images/loop.png" alt="">
          </a>
        </noindex>
      </div>
      <div class="section-4__list-item">
        <div class="section-4__list-item-title">
          <img src="/images/dollar.png" alt="">
          <div class="section-4__list-item-title-text">
            <h5><?= \translate\Lang::t('User Friendly Interface') ?></h5>
          </div>
        </div>
        <p><?= \translate\Lang::t('A premium web solution, filled with innovative features and precise infographics available on all electronic devices.') ?></p>
      </div>
    </div>
  </div>
</section>

<section class="section-5">
  <div class="section-5__video">
    <video autoplay="" muted="" loop="" playsinline="" style="position: absolute;">
      <source src="/video/sectoion-5_bg.mp4" type="video/mp4">
    </video>
  </div>
  <div class="container">
    <div class="section-5__text">
      <h2 class="reveal-top"><?= \translate\Lang::t('We Have it All') ?></h2>
      <span class="section-5__text-separator reveal-top"></span>
      <p class="reveal-top"><?= \translate\Lang::t('FXELIT’ one-in-all digital solutions lets users easily explore trading markets from the comfort of their beds or anywhere else in the world. Our platform is accessible on-the-go on all electronic devices and the latest operating systems.') ?></p>
      <ul class="section-5__list reveal-top">
        <li class="section-5__list-item"><?= \translate\Lang::t('Mobile and Web App') ?></li>
        <li class="section-5__list-item"><?= \translate\Lang::t('Many Payment Methods') ?></li>
        <li class="section-5__list-item"><?= \translate\Lang::t('SLL Protection') ?></li>
        <li class="section-5__list-item"><?= \translate\Lang::t('24/7 Customer Support') ?></li>
        <li class="section-5__list-item"><?= \translate\Lang::t('Secure Storage') ?></li>
        <li class="section-5__list-item"><?= \translate\Lang::t('Intuitive Interface') ?></li>
      </ul>
      <div class="section-5__button reveal-top">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/contact-us" rel="nofollow"><?= \translate\Lang::t('CONTACT US') ?></a>
        </noindex>
      </div>
    </div>
  </div>
</section>

<section class="section-6">
  <div class="container">
    <h2 class="reveal-top"><?= \translate\Lang::t('Become a Pro in No Time') ?></h2>
    <span class="section-6__text-separator reveal-top"></span>
    <p class="reveal-top"><?= \translate\Lang::t('Learning the ropes has never been this easy, trade like and with the pros, learning more and more on how to navigate digital markets with ease.') ?></p>
    <div class="section-6__road">
      <span class="section-6__road-circle section-6__road-circle--1">
        <div class="section-6__road-info">
          <div class="section-6__road-info-text">
            <h5 class="reveal-top"><?= \translate\Lang::t('First Step') ?></h5>
            <p class="reveal-top"><?= \translate\Lang::t('Register') ?></p>
          </div>
          <span class="section-6__road-info-line"></span>
        </div>
      </span>
      <span class="section-6__road-line"></span>
      <span class="section-6__road-circle section-6__road-circle--2">
        <div class="section-6__road-info">
          <span class="section-6__road-info-line"></span>
          <div class="section-6__road-info-text">
            <h5 class="reveal-top"><?= \translate\Lang::t('Second Step') ?></h5>
            <p class="reveal-top"><?= \translate\Lang::t('Fund Your Account') ?></p>
          </div>
        </div>
      </span>
      <span class="section-6__road-line"></span>
      <span class="section-6__road-circle section-6__road-circle--3">
        <div class="section-6__road-info">
          <div class="section-6__road-info-text">
            <h5 class="reveal-top"><?= \translate\Lang::t('Third Step') ?></h5>
            <p class="reveal-top"><?= \translate\Lang::t('Check Positions') ?></p>
          </div>
          <span class="section-6__road-info-line"></span>
        </div>
      </span>
      <span class="section-6__road-line"></span>
      <span class="section-6__road-circle section-6__road-circle--4">
        <div class="section-6__road-info">
          <span class="section-6__road-info-line"></span>
          <div class="section-6__road-info-text">
            <h5 class="reveal-top"><?= \translate\Lang::t('Fourth Step') ?></h5>
            <p class="reveal-top"><?= \translate\Lang::t('Navigate Markets') ?></p>
          </div>
        </div>
      </span>
      <span class="section-6__road-line"></span>
      <span class="section-6__road-circle section-6__road-circle--5">
        <div class="section-6__road-info">
          <div class="section-6__road-info-text">
            <h5 class="reveal-top"><?= \translate\Lang::t('Fifth Step') ?></h5>
            <p class="reveal-top"><?= \translate\Lang::t('Explore Strategies') ?></p>
          </div>
          <span class="section-6__road-info-line"></span>
        </div>
      </span>
      <span class="section-6__road-line"></span>
      <span class="section-6__road-circle section-6__road-circle--6">
        <div class="section-6__road-info">
          <span class="section-6__road-info-line"></span>
          <div class="section-6__road-info-text">
            <h5 class="reveal-top"><?= \translate\Lang::t('Sixth Step') ?></h5>
            <p class="reveal-top"><?= \translate\Lang::t('Start Trading') ?></p>
          </div>
        </div>
      </span>
    </div>
  </div>
</section>

<div class="section-7">
  <div class="container">
    <div class="section-7__image">
      <img src="/images/point_hand-removebg-preview.png" alt="">
    </div>
    <div class="section-7__text">
      <h2 class="reveal-top"><?= \translate\Lang::t('What our Clients Say') ?></h2>
      <span class="section-7__text-separator reveal-top"></span>
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide slide--1">
            <div class="slide__wrapper">
              <div class="slide__content reveal-top">
                <p><?= \translate\Lang::t('“Entering digital markets has never been this easy, I couldn’t believe it when I actually started trading, everything is so seamless with FXELIT’s platform.”') ?></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide slide slide--2">
            <div class="slide__wrapper">
              <div class="slide__content">
                <p><?= \translate\Lang::t('“I got used to it being this accessible! Never in my life did I think I could delve into cryptocurrencies, but after a quick registration I was blown away by the intuitive interface. Now I own more crypto than I knew about before. And their support, they really are a big help when you need them. Highly recommend FXELIT!”') ?></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide slide slide--3">
            <div class="slide__wrapper">
              <div class="slide__content">
                <p><?= \translate\Lang::t('“FXELIT has been my go-to solution for trading! Their user-friendly interface is everything one needs when entering the world of crypto and their diverse asset pool allows for a greatly enhanced digital experience.”') ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="module">
  import Swiper from '/js/swiper.min.js';
  const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,
    initialSlide: 4,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    breakpoints: {
      300: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      900: {
        slidesPerView: 0.99,
        spaceBetween: 30
      }
    }
  });
</script>

<script src="/js/animate.min.js"></script>

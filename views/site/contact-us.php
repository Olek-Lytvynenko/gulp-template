<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<div class="section-1" style="min-height: 900px;">
  <div class="section-1__video">
    <video autoplay="" muted="" loop="" playsinline="" style="position: absolute;">
      <source src="/video/header.mp4" type="video/mp4">
    </video>
    <img src="/images/section-2_bg.png" alt="">
  </div>
  <div class="container">
    <div class="section-1__video-text">
      <h1 class="reveal-top"><?= \translate\Lang::t('Get in touch') ?><br> <?= \translate\Lang::t('today') ?></h1>
      <p class="reveal-top"><?= \translate\Lang::t('If you have any questions or require assistance regarding our platform, just fill in the form with your details and we will get back to you.') ?></p>
    </div>
  </div>
</div>

<div class="contact-support">
  <div class="container">
    <div class="trade-with">
      <div class="trade-with__text">
        <h2 class="reveal-top"><?= \translate\Lang::t('Trade with the Pros Today') ?></h2>
        <span class="trade-with__text-separator reveal-top"></span>
        <p class="reveal-top"><?= \translate\Lang::t('Enjoy dynamic markets, 24/7 customer support, cutting-edge analytical tools, and competitive market prices and much much more in a few easy clicks. Register and start trading now!') ?></p>
      </div>
    </div>
    <div class="contact-support__list reveal-top">
      <div class="contact-support__list-item">
        <img src="/images/phone.png" alt="">
        <div class="contact-support__list-item-text">
          <h5><?= \translate\Lang::t('Email') ?></h5>
          <span>SUPPORT@FXELIT.COM</span>
        </div>
      </div>
      <div class="contact-support__list-item">
        <img src="/images/phone.png" alt="">
        <div class="contact-support__list-item-text">
          <h5><?= \translate\Lang::t('Phone') ?></h5>
          <span>+43720231829</span>
        </div>
      </div>
      <!-- <div class="contact-support__list-item">
        <img src="/images/address.png" alt="">
        <div class="contact-support__list-item-text">
          <h5><?= \translate\Lang::t('Address') ?></h5>
          <span><?= \translate\Lang::t('Budapest, GErty dwqd') ?></span>
        </div>
      </div> -->
    </div>
  </div>
</div>

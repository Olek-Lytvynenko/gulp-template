<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<div class="about-us">
  <div class="container">
    <div class="about-us__banner">
      <div class="about-us__banner-text">
        <h1 class="reveal-top"><?= \translate\Lang::t('Trading Made Simple') ?></h1>
        <p class="reveal-top"><?= \translate\Lang::t('Change your future with a few simple clicks') ?></p>
      </div>
    </div>
  </div>

</div>

<div class="about-us__line-wrapper">
  <div class="about-us__line"></div>
  <!-- <img class="about-us__line" src="" alt=""> -->
</div>

<div class="about-us-stand">
  <div class="container">
    <img src="/images/mobile.png" alt="">
    <div class="about-us-stand__text">
      <h2 class="reveal-top"><?= \translate\Lang::t('What We Stand For') ?></h2>
      <div class="about-us-stand__text-separator reveal-top">
        <span></span>
      </div>

      <p class="reveal-top"><?= \translate\Lang::t('FXELIT is an innovative trading platform, operating globally and offering access to a diverse asset pool on an innovative web-platform. With the latest SLL protocols, dedicated 24/7 customer support and an easy registration process, FXELIT offers users a premium trading experience like no other') ?></p>
      <div class="about-us-stand__button reveal-top">
        <noindex>
          <a href="https://platform.fxelit-go.com/?sign=1&lang=<?= $lang ?>" rel="nofollow">
            <?= \translate\Lang::t('START NOW') ?>
          </a>
        </noindex>
      </div>
    </div>
  </div>
</div>

<div class="about-us-why">
  <div class="container">
    <h2 class="reveal-top"><?= \translate\Lang::t('Why Choosing Us') ?></h2>
    <span class="about-us-why__separator reveal-top"></span>
    <div class="about-us-why__list reveal-top">
      <div class="about-us-why__list-item">
        <div>
          <div class="about-us-why__list-item-title">
            <img src="/images/folder.svg" alt="">
            <h5><?= \translate\Lang::t('Excellence in Security') ?></h5>
          </div>
          <p><?= \translate\Lang::t('From its conception, security and safety have been a core priority for our trading platform. FXELIT provides industry-leading features and the latest SLL protocols in order to ensure funds and transactions are kept safe and secure.') ?></p>
        </div>

      </div>
      <div class="about-us-why__list-item">
        <div>
          <div class="about-us-why__list-item-title">
            <img src="/images/purse.svg" alt="">
            <h5><?= \translate\Lang::t('Ease of Use, Ease of Access') ?></h5>
          </div>
          <p><?= \translate\Lang::t('Advanced infographics, state-of-the-art digital instruments and lightning-fast execution rates allow for a seamless trading process, helping you never miss a hot opportunity.') ?></p>
        </div>

      </div>
      <div class="about-us-why__list-item">
        <div>
          <div class="about-us-why__list-item-title">
            <img src="/images/purse.svg" alt="">
            <h5><?= \translate\Lang::t('A Diverse Crypto Pool') ?></h5>
          </div>
          <p><?= \translate\Lang::t('With hundreds of assets available at your fingertips, it’s tempting dive into the world of CFD trading. Our platform is suitable for both beginners and pros alike. Just register, add funds, start trading.') ?></p>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="about-us-statistic">
  <div class="container">
    <h2 class="reveal-top"><?= \translate\Lang::t('One Place for Everything') ?></h2>
  </div>
  <div class="about-us-statistic__line">
    <div class="about-us-statistic__info about-us-statistic__info--1">
      <h4 class="reveal-top"><?= \translate\Lang::t('Crypto') ?></h4>
      <p class="reveal-top"><?= \translate\Lang::t('Trade leading cryptocurrency CFDs with FXELIT – including Bitcoin, Ethereum, Litecoin and Ripple. Enjoy 24/7 market liquidity, excellent trade execution and leverage.') ?></p>
      <span class="arrow-line reveal-top"></span>
    </div>
    <div class="about-us-statistic__info about-us-statistic__info--2">
      <span class="arrow-line reveal-top"></span>
      <h4 class="reveal-top"><?= \translate\Lang::t('Forex') ?></h4>
      <p class="reveal-top"><?= \translate\Lang::t("Trade in the largest and most liquid financial markets with ease. With dozens of CFDs and many popular Forex pairs, FXELIT' traders enjoy low-cost trading and commissions, paired with excellent support.") ?></p>
    </div>
    <div class="about-us-statistic__info about-us-statistic__info--3">
      <span class="arrow-line reveal-top" style="left: 30px;"></span>
      <h4 class="reveal-top"><?= \translate\Lang::t('Commodities') ?></h4>
      <p class="reveal-top"><?= \translate\Lang::t('Speculate on the price movements of the worlds’ most valuable commodities without taking actual ownership of the product itself.') ?></p>
    </div>
    <div class="about-us-statistic__info about-us-statistic__info--4">
      <h4 class="reveal-top"><?= \translate\Lang::t('Stocks and shares') ?></h4>
      <p class="reveal-top"><?= \translate\Lang::t('Gain exposure to the market and trade CFDs on various popular stocks and shares of major companies with tempting market conditions and minimum spreads.') ?></p>
      <span class="arrow-line reveal-top"></span>
    </div>
    <div class="about-us-statistic__info about-us-statistic__info--5">
      <span class="arrow-line reveal-top"></span>
      <h4 class="reveal-top"><?= \translate\Lang::t('Precious metals') ?></h4>
      <p class="reveal-top"><?= \translate\Lang::t('CFDs on precious metals are as equally popular as the energy commodities instruments. Benefit from the price movements of wide range of precious metals including Gold and Silver.') ?></p>
    </div>
    <div class="about-us-statistic__info about-us-statistic__info--6">
      <h4 class="reveal-top"><?= \translate\Lang::t('Indices') ?></h4>
      <p class="reveal-top"><?= \translate\Lang::t('A popular and convenient way of trading on the overall stock market movements as an alternative of buying individual shares. You can choose long or short positions on major global indices as CFDs.') ?></p>
      <span class="arrow-line reveal-top"></span>
    </div>
  </div>
</div>

<section class="section-5">
  <div class="container">
    <div class="section-5__image">
      <img src="/images/rocket.png" alt="">
    </div>
    <div class="section-5__text">
      <h2 class="reveal-top"><?= \translate\Lang::t('A Trusted Trading Partner in Your Pocket') ?></h2>
      <span class="section-5__text-separator reveal-top"></span>
      <p class="reveal-top"><?= \translate\Lang::t('FXELIT has been created with the users in mind. Start your journey on one of the most intuitive platforms on the market. Navigate markets and buy/sell crypto and tons of other assets with a few easy clicks. Our platform is globally available on all electronic devices and the latest operating systems. All financial transactions are treated with utter caution and expertise.') ?></p>
      <div class="section-5__button reveal-top" style="margin-top: 100px">
        <noindex>
          <a href="https://platform.fxelit-go.com/?sign=1&lang=<?= $lang ?>" rel="nofollow"><?= \translate\Lang::t('START NOW') ?></a>
        </noindex>
      </div>
    </div>
  </div>
</section>

<div class="contact-form">
  <div class="container">
    <div class="contact-form__text">
      <h2 class="reveal-top"><?= \translate\Lang::t('Join and Benefit Today') ?></h2>
      <span class="contact-form__text-separator reveal-top"></span>
      <p class="reveal-top"><?= \translate\Lang::t('A smooth and easy registration process allowing you to easily enter hot trading markets and take advantage of tempting opportunities.') ?></p>
    </div>
    <form action="" class="form">
      <input type="text" class="form__fullname" id="form__fullname" placeholder="Full Name">
      <input type="email" class="form__email" id="form__email" placeholder="Email">
      <textarea name="form__message" id="form__message" placeholder="Message"></textarea>
      <div class="form__button">
        <noindex>
          <a href="https://platform.fxelit-go.com/?sign=1&lang=<?= $lang ?>" rel="nofollow"><?= \translate\Lang::t('SUBMIT') ?></a>
        </noindex>
      </div>
    </form>
  </div>
</div>

<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<footer class="footer">
  <div class="container">
  <div class="footer__content">
    <div class="footer__logotype">
      <noindex>
        <a href="<?= \translate\Lang::getUrlLang() ?>/" rel="nofollow">
          <img src="/images/fxelit_logo_dark.png" alt="">
        </a>
      </noindex>
      <p><?= \translate\Lang::t('A new trading platform specializing in presenting users with intuitive and secure access to worldwide crypto markets.') ?></p>
    </div>
    <div class="footer__legal">
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/terms-and-conditions" data-link-name="terms-and-conditions" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('Terms and Conditions') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/privacy-policy" data-link-name="privacy-policy" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('Privacy Policy') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/withdrawal-policy" data-link-name="withdrawal-policy" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('Withdrawal Policy') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/risk-disclosure-policy" data-link-name="risk-disclosure-policy" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('Risk Disclosure Policy') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/know-your-customer-policy" data-link-name="know-your-customer-policy" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('KYC (Know Your Customer) Policy') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/anti-money-laundering" data-link-name="anti-money-laundering" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('Anti - Money Laundering (AML)') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__legal-item">
        <noindex>
          <a href="<?= \translate\Lang::getUrlLang() ?>/jurisdiction-policy" data-link-name="jurisdiction-policy" rel="nofollow" class="footer__legal-link">
            <?= \translate\Lang::t('Jurisdiction Policy') ?>
          </a>
        </noindex>
      </div>
    </div>
    <nav class="footer__navigation">
      <div class="footer__navigation-item">
        <noindex>
          <a class="footer__navigation-link" href="<?= \translate\Lang::getUrlLang() ?>/" data-link-name="main" rel="nofollow">
            <?= \translate\Lang::t('Home') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__navigation-item">
        <noindex>
          <a class="footer__navigation-link" href="<?= \translate\Lang::getUrlLang() ?>/about-us" data-link-name="about-us"rel="nofollow">
            <?= \translate\Lang::t('About Us') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__navigation-item">
        <noindex>
          <a class="footer__navigation-link" href="<?= \translate\Lang::getUrlLang() ?>/account-types" data-link-name="account-types" rel="nofollow">
            <?= \translate\Lang::t('Account Types') ?>
          </a>
        </noindex>
      </div>
      <div class="footer__navigation-item">
        <noindex>
          <a class="footer__navigation-link" href="<?= \translate\Lang::getUrlLang() ?>/contact-us" data-link-name="contact-us" rel="nofollow">
            <?= \translate\Lang::t('Contact Us') ?>
          </a>
        </noindex>
      </div>
    </nav>
    <div class="footer__contacts">
      <img src="/images/mail.svg" alt="">
      <noindex>
        <a href="mailto:support@fxelit.com" rel="nofollow">
          SUPPORT@FXELIT.COM
        </a>
      </noindex>
    </div>
  </div>
  </div>
  <div class="footer__disclaimer">
    <div class="container">
      <p><?= \translate\Lang::t('Risk Disclaimer') ?></p>
      <p><?= \translate\Lang::t('CFDs are complex instruments and come with a high risk of losing money rapidly due to leverage. 75% of retail investor accounts lose money when trading CFDs. You should consider whether you understand how CFDs work and whether you can afford to take the high risk of losing your money. You should be aware of all the risks associated with trading CFDs and our other products and seek advice from an independent adviser if you have any doubts. Past performance is not indicative of future results.') ?></p>
      <p>© <?= \translate\Lang::t('Copyright 2023 FXELIT | All Rights Reserved') ?></p>
    </div>
  </div>
</footer>

<script src="/js/header.min.js"></script>
<script src="/js/animate.min.js"></script>

<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<div class="legal">
  <div class="container">
    <h1 class="reveal-top"><?= \translate\Lang::t('Withdrawal Policy') ?></h1>
    <span class="legal__text-separator reveal-top"></span>
    <p><?= \translate\Lang::t('FXELIT customers can withdraw their funds and benefits whenever they need to. To request a partial or complete withdrawal of funds from your account, click on “Withdrawal request” in your account.') ?></p>
    <p><?= \translate\Lang::t('Please consider that we take up to 7 business days to process your withdrawal request.') ?></p>
    <p><?= \translate\Lang::t('Feel free to contact our Customer support specialist if you have any questions.') ?></p>
    <p><?= \translate\Lang::t('According to generally acceptable AML rules and regulations, withdrawals must be performed only through the same bank account or credit/debit card that you used to deposit the funds. Furthermore, when it comes to withdrawals, Client may be required to present additional information and documents.') ?></p>
  </div>
</div>

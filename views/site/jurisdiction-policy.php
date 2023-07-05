<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<div class="legal">
  <div class="container">
    <h1 class="reveal-top"><?= \translate\Lang::t('Jurisdiction Policy') ?></h1>
    <span class="legal__text-separator reveal-top"></span>
    <p><?= \translate\Lang::t('Legal Restrictions: without limiting the undermentioned provisions, you understand that laws regarding financial contracts vary throughout the world, and it is your responsibility to make sure you properly comply with any law, regulation or guideline in your country of residence regarding the use of the Site.') ?></p>
    <p><?= \translate\Lang::t('To avoid any doubt, the ability to access our Site does not necessarily mean that our Services and/or your activities through the Site are legal under the laws, regulations or directives relevant to your country of residence.') ?></p>
  </div>
</div>
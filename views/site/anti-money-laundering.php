<?php $lang = $_SESSION['lang'] ?? $_SESSION['defaultLang']; ?>

<div class="legal">
  <div class="container">
    <h1 class="reveal-top"><?= \translate\Lang::t('Anti – Money Laundering (AML)') ?></h1>
    <span class="legal__text-separator reveal-top"></span>
    <p><?= \translate\Lang::t('FXELIT does not tolerate money laundering and supports the fight against money launderers. FXELIT follows the guidelines set by the UK’s Joint Money Laundering Steering Group. The UK is a full member of the Financial Action Task Force (FATF), the intergovernmental body whose purpose is to combat money laundering and terrorist financing. FXELIT has policies in place to deter people from laundering money.') ?></p>
    <ul>
      <li><?= \translate\Lang::t('These policies include:') ?></li>
      <li><?= \translate\Lang::t('Ensuring clients have valid proof of identification') ?></li>
      <li><?= \translate\Lang::t('Maintaining records of identification information') ?></li>
      <li><?= \translate\Lang::t('Determining that clients are not known or suspected terrorists by checking their names against lists of known or suspected terrorists') ?></li>
      <li><?= \translate\Lang::t('Informing clients that the information they provide may be used to verify their identity') ?></li>
      <li><?= \translate\Lang::t('Closely following clients’ money transaction') ?>s</li>
      <li><?= \translate\Lang::t('Not accepting cash, money orders, third party transactions, exchange houses transfers or Western Union transfers.') ?></li>
      <li><?= \translate\Lang::t('Money laundering occurs when funds from an illegal/criminal activity are moved through the financial system in such a way as to make it appear that the funds have come from legitimate sources.') ?></li>
    </ul>
    <p><?= \translate\Lang::t('Money Laundering usually follows three stages:') ?></p>
    <ul>
      <li><?= \translate\Lang::t('Firstly, cash or cash equivalents are placed into the financial system') ?></li>
      <li><?= \translate\Lang::t('Secondly, money is transferred or moved to other accounts (e.g. futures accounts) through a series of financial transactions designed to obscure the origin of the money (e.g. executing trades with little or no financial risk or transferring account balances to other accounts)') ?></li>
      <li><?= \translate\Lang::t('And finally, the funds are re-introduced into the economy so that the funds appear to have come from legitimate sources (e.g. closing a futures account and transferring the funds to a bank account). Trading accounts are one vehicle that can be used to launder illicit funds or to hide the true owner of the funds. In particular, a trading account can be used to execute financial transactions that help obscure the origins of the funds.') ?></li>
    </ul>
    <p><?= \translate\Lang::t('FXELIT directs funds withdrawals back to the original source of remittance, as a preventative measure. International Anti-Money Laundering requires financial services institutions to be aware of potential money laundering abuses that could occur in a customer account and implement a compliance program to deter, detect and report potential suspicious activity.') ?></p>
  </div>
</div>

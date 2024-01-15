<div class="login">
  <?php
  if (!$userObject) {
  ?>
    <form id="login-form" action='index.php' method='POST'>
      <div class="login-controls">
        <div class="button">
          <input type='hidden' name='actionType' value='login'>
          <input style='display:none' type='submit'>
          <a href='#' class="login-button" onclick="if(!$('.login-input').is(':visible')){ $('.login-input').show(); } else{ $('#login-form').submit(); }"><?php print translate('enter'); ?></a>
        </div>
        <div class='login-input'>
          <div>
            <input class="login-field" type='text' name='email' placeholder="Email" onclick="event.stopPropagation();clearit(this, 0);">
          </div>
          <div>
            <input class="login-field" type='password' name='username' placeholder="<?php print translate('subs_Jelszo'); ?>" id='username'>
          </div>
        </div>
      </div>
    </form>
  <?php } ?>
</div>
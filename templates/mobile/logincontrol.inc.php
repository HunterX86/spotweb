<?php if ($currentSession['user']['userid'] != $settings->get('nonauthenticated_userid')): ?>
<?php echo $currentSession['user']['username']; ?>
<?php endif; ?>
 
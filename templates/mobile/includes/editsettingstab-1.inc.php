<div id="editsettingstab-1" style="padding:0px 10px 0px 10px">
	<dl>
		<input type="checkbox" data-mini="true" id="editsettingsform[deny_robots]" <?php if ($this->_settings->get('deny_robots')) { echo 'checked="checked"'; } ?>>
		<label for="editsettingsform[deny_robots]"><?php echo _('Try to prevent robots from indexing this installation'); ?></label>
		<br>					
		<label for="editsettingsform[systemfrommail]"><?php echo _('Sender email address'); ?></label>
		<input type="text" name="editsettingsform[systemfrommail]" value="<?php echo htmlspecialchars($this->_settings->get('systemfrommail'), ENT_QUOTES); ?>">

		<input type="checkbox" data-mini="true" id="editsettingsform[sendwelcomemail]" <?php if ($this->_settings->get('sendwelcomemail')) { echo 'checked="checked"'; } ?>>
		<label for="editsettingsform[sendwelcomemail]"><?php echo _('Always send welcome e-mail to new users'); ?></label>
		<br>
		<label for="editsettingsform[cookie_expires]"><?php echo _('Cookie expires after (in days)'); ?></label>
		<input type="text" name="editsettingsform[cookie_expires]" value="<?php echo htmlspecialchars($this->_settings->get('cookie_expires'), ENT_QUOTES); ?>">
	</dl>
</div>
<div id="editsettingstab-4" class="ui-tabs-hide" style="padding:0px 10px 0px 10px">
			<fieldset>
				<br>
					<li><?php echo _('Use this only to identify speed problems within Spotweb.'); ?> <?php echo _('Not suitable for public installations'); ?></li>
					<label for="editsettingsform[enable_timing]"><?php echo _('Enable timing'); ?></label>
					<input type="checkbox" data-mini="true" id="editsettingsform[enable_timing]" <?php if ($this->_settings->get('enable_timing')) { echo 'checked="checked"'; } ?>>
				<br>
					<li><?php echo _('Stacktraces make identifying problems easy, but may contain sensitive information.'); ?> <?php echo _('Not suitable for public installations'); ?></li>
					<label for="editsettingsform[enable_stacktrace]"><?php echo _('Enable stacktrace'); ?></label>
					<input type="checkbox" data-mini="true" id="editsettingsform[enable_stacktrace]" <?php if ($this->_settings->get('enable_stacktrace')) { echo 'checked="checked"'; } ?>>
				<br>
					<label for="editsettingsform[retrieve_increment]"><?php echo _('Lower this if you get timeouts during retrieve'); ?><br/><b><?php echo _('Retrieve increment'); ?></b></label>
					<input type="text" name="editsettingsform[retrieve_increment]" value="<?php echo htmlspecialchars($this->_settings->get('retrieve_increment'), ENT_QUOTES); ?>">
				<br>
					<label for="editsettingsform[spot_moderation]"><?php echo _('Handling of moderation messages'); ?></label>
					<select name="editsettingsform[spot_moderation]">
						<option <?php if ($this->_settings->get('spot_moderation') == 'disable') { echo 'selected="selected"'; } ?> value="disable"><?php echo _('Do nothing'); ?></option>
						<option <?php if ($this->_settings->get('spot_moderation') == 'act') { echo 'selected="selected"'; } ?> value="act"><?php echo _('Delete moderated spots'); ?></option>
						<option <?php if ($this->_settings->get('spot_moderation') == 'markspot') { echo 'selected="selected"'; } ?> value="markspot"><?php echo _('Mark moderated spots as moderated'); ?></option>
					</select>
				<br>
					<label for="editsettingsform[prepare_statistics]"><?php echo _('Prepare statistics during retrieve'); ?></label>
					<input type="checkbox" data-mini="true" id="editsettingsform[prepare_statistics]" <?php if ($this->_settings->get('prepare_statistics')) { echo 'checked="checked"'; } ?>>

					<label for="editsettingsform[external_blacklist]"><?php echo _('Fetch the external blacklist during retrieve'); ?></label>
					<input type="checkbox" data-mini="true" id="editsettingsform[external_blacklist]" <?php if ($this->_settings->get('external_blacklist')) { echo 'checked="checked"'; } ?>>

					<label for="editsettingsform[external_whitelist]"><?php echo _('Fetch the external whitelist during retrieve'); ?></label>
					<input type="checkbox" data-mini="true" id="editsettingsform[external_whitelist]" <?php if ($this->_settings->get('external_whitelist')) { echo 'checked="checked"'; } ?>>
			</fieldset>
</div>
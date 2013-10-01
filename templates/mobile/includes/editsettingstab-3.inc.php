<div id="editsettingstab-3" class="ui-tabs-hide" style="padding:0px 10px 0px 10px">
			<fieldset>
					<br>
					<label for="editsettingsform[retention]"><?php echo _('Retention on spots (in days). Older spots will be erased. Select 0 to keep all spots.'); ?></label>
					<input type="text" name="editsettingsform[retention]" value="<?php echo htmlspecialchars($this->_settings->get('retention'), ENT_QUOTES); ?>">
					<br>
					<dt><label for="editsettingsform[retentiontype]"><?php echo _('Retention is for either everything or only the cached data'); ?></label></dt>
						<select name="editsettingsform[retentiontype]">
							<option <?php if ($this->_settings->get('retentiontype') == 'everything') { echo 'selected="selected"'; } ?> value="everything"><?php echo _('Remove everything'); ?></option>
							<option <?php if ($this->_settings->get('retentiontype') == 'fullonly') { echo 'selected="selected"'; } ?> value="fullonly"><?php echo _('Only extra data but keep spots'); ?></option>
						</select>					
					<br>			
					<form>
						<label for="editsettingsform[retrieve_newer_than]"><li><?php echo _('Retrieve spots after... Select November 1, 2009 to fetch all spots'); ?></li><li><?php echo _('To skip all FTD spots select November 24, 2010'); ?></li><b>selecteer datum</b></label>
						<input type="date" data-clear-btn="true" data-mini="true" id="retrieve_newer_than" name="editsettingsform[retrieve_newer_than]">
					</form>
					<br>
					<label for="editsettingsform[retrieve_full]"><?php echo _('Retrieve full spots'); ?></label>
					<input type="checkbox" data-mini="true" id="editsettingsform[retrieve_full]" <?php if ($this->_settings->get('retrieve_full')) { echo 'checked="checked"'; } ?>>
					<fieldset id="content_use_retrieve_full">
						<dt><label for="editsettingsform[prefetch_image]"><?php echo _('Prefetch images'); ?></label></dt>
						<dd><input type="checkbox" data-mini="true" id="editsettingsform[prefetch_image]" <?php if ($this->_settings->get('prefetch_image')) { echo 'checked="checked"'; } ?>></dd>

						<dt><label for="editsettingsform[prefetch_nzb]"><?php echo _('Prefetch NZB files'); ?></label></dt>
						<dd><input type="checkbox" data-mini="true" id="editsettingsform[prefetch_nzb]" <?php if ($this->_settings->get('prefetch_nzb')) { echo 'checked="checked"'; } ?>></dd>
					</fieldset>

					<dt><label for="editsettingsform[retrieve_comments]"><?php echo _('Retrieve comments'); ?></label></dt>
					<dd><input type="checkbox" data-mini="true" class="enabler" id="editsettingsform[retrieve_comments]" <?php if ($this->_settings->get('retrieve_comments')) { echo 'checked="checked"'; } ?>></dd>
					<fieldset id="content_use_retrieve_comments">
						<dt><label for="editsettingsform[retrieve_full_comments]"><?php echo _('Retrieve full comments'); ?></label></dt>
						<dd><input type="checkbox" data-mini="true" id="editsettingsform[retrieve_full_comments]" <?php if ($this->_settings->get('retrieve_full_comments')) { echo 'checked="checked"'; } ?>></dd>
					</fieldset>

					<dt><label for="editsettingsform[retrieve_reports]"><?php echo _('Retrieve reports'); ?></label></dt>
					<dd><input type="checkbox" data-mini="true" id="editsettingsform[retrieve_reports]" <?php if ($this->_settings->get('retrieve_reports')) { echo 'checked="checked"'; } ?>></dd>
				
			</fieldset>
</div>
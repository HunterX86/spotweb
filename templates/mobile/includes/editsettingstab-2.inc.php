<div id="editsettingstab-2" class="ui-tabs-hide newsservers">
		<dl>
			<ul data-role="listview"><li data-role="list-divider" data-theme="c"><?php echo _('Default newsserver'); ?></li></ul>
		</dl>
	<div  style="padding:0px 10px 0px 10px">
			<fieldset class="serverSettings">
				
					<label for="editsettingsform[nntp_nzb][host]"><?php echo _('Hostname'); ?></label>
					<input type="text" name="editsettingsform[nntp_nzb][host]" value="<?php echo htmlspecialchars($nntp_nzb['host'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="editsettingsform[nntp_nzb][user]"><?php echo _('Username'); ?></label>
					<input type="text" name="editsettingsform[nntp_nzb][user]" value="<?php echo htmlspecialchars($nntp_nzb['user'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="editsettingsform[nntp_nzb][pass]"><?php echo _('Password'); ?></label>
					<input type="password" name="editsettingsform[nntp_nzb][pass]" value="<?php echo htmlspecialchars($nntp_nzb['pass'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="use_encryption_nzb"><?php echo _('Encryption'); ?></label>
					<input type="checkbox" class="enabler" name="editsettingsform[nntp_nzb][enc][switch]" id="use_encryption_nzb" <?php if ($nntp_nzb['enc']) { echo 'checked="checked"'; } ?> data-mini="true">
					<fieldset id="content_use_encryption_nzb">
						<select name="editsettingsform[nntp_nzb][enc][select]" data-mini="true">
							<option <?php if ($nntp_nzb['enc'] == 'ssl') { echo 'selected="selected"'; } ?> value="ssl">SSL</option>
							<option <?php if ($nntp_nzb['enc'] == 'tls') { echo 'selected="selected"'; } ?> value="tls">TLS</option>
						</select>					
					</fieldset>

					<label for="editsettingsform[nntp_nzb][port]"><?php echo _('Port'); ?></label>
					<input type="text" name="editsettingsform[nntp_nzb][port]" value="<?php echo htmlspecialchars($nntp_nzb['port'], ENT_QUOTES); ?>">
					<br>
					<label><input type="checkbox" data-mini="true" name="editsettingsform[nntp_nzb][buggy]" <?php if ($nntp_nzb['buggy']) { echo 'checked="checked"'; } ?> ><?php echo _('Buggy (Some newsservers lose messages once in a while)'); ?></label>
				
			</fieldset>
	 
        <div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-theme="c" data-content-theme="d">
			<h4><?php echo _('Use different server for headers?'); ?></h4> 
				
			<fieldset id="content_use_nntp_hdr" class="serverSettings">
				
					<label for="editsettingsform[nntp_hdr][host]"><?php echo _('Hostname'); ?></label>
					<input type="text" name="editsettingsform[nntp_hdr][host]" value="<?php echo htmlspecialchars($nntp_hdr['host'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="editsettingsform[nntp_hdr][user]"><?php echo _('Username'); ?></label>
					<input type="text" name="editsettingsform[nntp_hdr][user]" value="<?php echo htmlspecialchars($nntp_hdr['user'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="editsettingsform[nntp_hdr][pass]"><?php echo _('Password'); ?></label>
					<input type="password" name="editsettingsform[nntp_hdr][pass]" value="<?php echo htmlspecialchars($nntp_hdr['pass'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="use_encryption_hdr"><?php echo _('Encryption'); ?></label>
					<input type="checkbox" class="enabler" name="editsettingsform[nntp_hdr][enc][switch]" id="use_encryption_hdr" <?php if ($nntp_hdr['enc']) { echo 'checked="checked"'; } ?>>
					<fieldset id="content_use_encryption_hdr">
						<select name="editsettingsform[nntp_hdr][enc][select]" data-mini="true">
							<option <?php if ($nntp_hdr['enc'] == 'ssl') { echo 'selected="selected"'; } ?> value="ssl">SSL</option>
							<option <?php if ($nntp_hdr['enc'] == 'tls') { echo 'selected="selected"'; } ?> value="tls">TLS</option>
						</select>					
					</fieldset>

					<label for="editsettingsform[nntp_hdr][port]"><?php echo _('Port'); ?></label>
					<input type="text" name="editsettingsform[nntp_hdr][port]" value="<?php echo htmlspecialchars($nntp_hdr['port'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label><input type="checkbox" data-mini="true" name="editsettingsform[nntp_hdr][buggy]" <?php if ($nntp_hdr['buggy']) { echo 'checked="checked"'; } ?> ><?php echo _('Buggy (Some newsservers lose messages once in a while)'); ?></label>
				
			</fieldset>
		</div>

		<div data-role="collapsible" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" data-theme="c" data-content-theme="d">
			<h4><?php echo _('Use different server for posting?'); ?></h4>
			
			<fieldset id="content_use_nntp_post" class="serverSettings">
				
					<label for="editsettingsform[nntp_post][host]"><?php echo _('Hostname'); ?></label>
					<input type="text" name="editsettingsform[nntp_post][host]" value="<?php echo htmlspecialchars($nntp_post['host'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="editsettingsform[nntp_post][user]"><?php echo _('Username'); ?></label>
					<input type="text" name="editsettingsform[nntp_post][user]" value="<?php echo htmlspecialchars($nntp_post['user'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="editsettingsform[nntp_post][pass]"><?php echo _('Password'); ?></label>
					<input type="password" name="editsettingsform[nntp_post][pass]" value="<?php echo htmlspecialchars($nntp_post['pass'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<label for="use_encryption_post"><?php echo _('Encryption'); ?></label>
					<input type="checkbox" class="enabler" name="editsettingsform[nntp_post][enc][switch]" id="use_encryption_post" <?php if ($nntp_post['enc']) { echo 'checked="checked"'; } ?>>
					<fieldset id="content_use_encryption_post">
						<select name="editsettingsform[nntp_post][enc][select]" data-mini="true">
							<option <?php if ($nntp_post['enc'] == 'ssl') { echo 'selected="selected"'; } ?> value="ssl">SSL</option>
							<option <?php if ($nntp_post['enc'] == 'tls') { echo 'selected="selected"'; } ?> value="tls">TLS</option>
						</select>					
					</fieldset>

					<label for="editsettingsform[nntp_post][port]"><?php echo _('Port'); ?></label>
					<input type="text" name="editsettingsform[nntp_post][port]" value="<?php echo htmlspecialchars($nntp_post['port'], ENT_QUOTES); ?>" data-mini="true">
					<br>
					<input type="hidden" name="editsettingsform[nntp_post][buggy]" data-mini="true">
				
			</fieldset>
		</div>
	</div>
</div>
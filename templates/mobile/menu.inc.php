<!-- panel content goes here -->
<div data-role="panel" data-position="left" data-display="overlay" id="mypanel">
    <ul data-role="listview" data-inset="false" data-divider-theme="a" data-theme="c">
    	<li data-role="list-divider"><h1>Menu</h1></li>
		<li data-icon="false"><a href="templates/mobile/includes/under-construction.php"><?php echo _('Change preferences'); ?></a>
    <!--
	<?php if ($tplHelper->allowed(SpotSecurity::spotsec_edit_own_userprefs, '')) { ?>
				<li data-icon="false"><a href="<?php echo $tplHelper->makeEditUserPrefsUrl($currentSession['user']['userid']); ?>" target="_self"><?php echo _('Change preferences'); ?></a></li>
	<?php } ?>
	-->
	<?php if (
			($tplHelper->allowed(SpotSecurity::spotsec_view_spotweb_updates, ''))
				|| 
			($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, ''))
	) { ?>
				<li data-icon="false"><a href="?page=editsettings" target="_self"><?php echo _('Settings'); ?></a></li>
	<?php } ?>
	<!--
	<?php if (
			($tplHelper->allowed(SpotSecurity::spotsec_edit_other_users, ''))
				|| 
			($tplHelper->allowed(SpotSecurity::spotsec_edit_securitygroups, ''))
				|| 
			($tplHelper->allowed(SpotSecurity::spotsec_list_all_users, ''))
		 ) { ?>
				<li data-icon="false"><a href="?page=render&amp;tplname=usermanagement"><?php echo _('User &amp; group management'); ?></a></li>
	<?php } ?>
	-->
	
		<li data-icon="false"><a href="templates/mobile/includes/under-construction.php"><?php echo _('User &amp; group management'); ?></a>
		<li data-icon="false"><a href="#" id="anchorLoginControl">Afmelden</a></li>			
    </ul>
</div>
<!-- ----------------------- -->
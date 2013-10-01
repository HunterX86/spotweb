<?php
if (!empty($editsettingsresult)) {
	if ($editsettingsresult['result'] == 'success') {
		$tplHelper->redirect($http_referer);
		return ;
	} # if
} # if

require "header.inc.php";
include "includes/form-messages.inc.php";
$nntp_nzb = $this->_settings->get('nntp_nzb');
$nntp_hdr = $this->_settings->get('nntp_hdr');
$nntp_post = $this->_settings->get('nntp_post');

$tmpArDiff = array_diff_assoc($nntp_hdr, $nntp_nzb);
if ((empty($tmpArDiff)) || (empty($nntp_hdr['host']))) {
	$nntp_hdr['isadummy'] = true;
} # if

$tmpArDiff = array_diff_assoc($nntp_post, $nntp_nzb);
if ((empty($tmpArDiff)) || (empty($nntp_post['host']))) {
	$nntp_post['isadummy'] = true;
} # if

if (($retrieve_newer_than = $this->_settings->get('retrieve_newer_than')) < 1254373200) {
	$retrieve_newer_than = 1254373200; // 2009-11-01
} # if
?>
</div>
<!-- PAGE 1 -->
<div data-role="page" id="editsettingstab-1">
	<div data-role="header">
		<div class="closeeditsettings"><a href='<?php echo $tplHelper->makeBaseUrl('path');?>' target="_self" class='toggle' data-role="button" data-inline="true"><?php echo _('Back to mainview'); ?></a></div>
	</div>
<form class="editsettingsform" name="editsettingsform" action="<?php echo $tplHelper->makeEditSettingsAction(); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="editsettingsform[xsrfid]" value="<?php echo $tplHelper->generateXsrfCookie('editsettingsform'); ?>">
	<input type="hidden" name="editsettingsform[http_referer]" value="<?php echo $http_referer; ?>">
	<input type="hidden" name="editsettingsform[buttonpressed]" value="">
	
<div data-role="navbar" id="editsettingstab" class="ui-tabs">
		<ul>
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_view_spotweb_updates, '')) { ?>
			<li><a href="?page=versioncheck" title="<?php echo _('Spotweb updates'); ?>"><span><?php echo _('Spotweb updates');?></span></a></li>
<?php }
if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>
			<li><a href="#editsettingstab-1" class="ui-btn-active ui-state-persist"><span><?php echo _('General'); ?></span></a></li>
<?php } ?>
		</ul>
</div>

<div data-role="navbar">
    <ul>
        <li><a href="#editsettingstab-2"><span><?php echo _('Newsservers'); ?></span></a></li>
		<li><a href="#editsettingstab-3"><span><?php echo _('Retrieve'); ?></span></a></li>
        <li><a href="#editsettingstab-4"><span><?php echo _('Performance'); ?></span></a></li>
    </ul>
</div>

<div>			
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>		
		<?php require "includes/editsettingstab-1.inc.php";?>

		
<?php } ?>
<!-- BUTTONS -->
<script>
$(function() {
	$( "#datepicker" ).datepicker({ altField: "#retrieve_newer_than",
									dateFormat: "yy-mm-dd",
									defaultDate: "<?php echo date("Y-m-d", $retrieve_newer_than); ?>",
									dayNamesMin: ['<?php echo _('Su'); ?>', '<?php echo _('Mo'); ?>', '<?php echo _('Tu'); ?>', '<?php echo _('We'); ?>', '<?php echo _('Th'); ?>', '<?php echo _('Fr'); ?>', '<?php echo _('Sa'); ?>'],
									monthNamesShort: ['<?php echo _('Jan'); ?>', '<?php echo _('Feb'); ?>', '<?php echo _('Mar'); ?>', '<?php echo _('Apr'); ?>', '<?php echo _('May'); ?>', '<?php echo _('Jun'); ?>', '<?php echo _('Jul'); ?>', '<?php echo _('Aug'); ?>', '<?php echo _('Sep'); ?>', '<?php echo _('Oct'); ?>', '<?php echo _('Nov'); ?>', '<?php echo _('Dec'); ?>'],
									prevText: '<?php echo _('Previous'); ?>',
									nextText: '<?php echo _('Next'); ?>',
									numberOfMonths: 3,
									stepMonths: 3,
									minDate: new Date(2009, 10, 1),
									maxDate: "today" });
});
</script>

		<fieldset class="ui-grid-a">
			<div class="ui-block-a"><input class="greyButton" data-theme="b" type="submit" name="editsettingsform[submitedit]" value="<?php echo _('Change'); ?>"></div>
			<div class="ui-block-b"><input class="greyButton" type="submit" name="editsettingsform[submitcancel]" value="<?php echo _('Cancel'); ?>"></div>
			<div class="clear"></div>
		</fieldset>		   

</div>
</form>
</div>


	
<!-- PAGE 2 -->
<div data-role="page" id="editsettingstab-2">
	<div data-role="header">
		<div class="closeeditsettings"><a href='<?php echo $tplHelper->makeBaseUrl('path');?>' target="_self" class='toggle' data-role="button" data-inline="true"><?php echo _('Back to mainview'); ?></a></div>
	</div>
<form class="editsettingsform" name="editsettingsform" action="<?php echo $tplHelper->makeEditSettingsAction(); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="editsettingsform[xsrfid]" value="<?php echo $tplHelper->generateXsrfCookie('editsettingsform'); ?>">
	<input type="hidden" name="editsettingsform[http_referer]" value="<?php echo $http_referer; ?>">
	<input type="hidden" name="editsettingsform[buttonpressed]" value="">
	
<div data-role="navbar" id="editsettingstab" class="ui-tabs">
		<ul>
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_view_spotweb_updates, '')) { ?>
			<li><a href="?page=versioncheck" title="<?php echo _('Spotweb updates'); ?>"><span><?php echo _('Spotweb updates');?></span></a></li>
<?php }
if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>
			<li><a href="#editsettingstab-1"><span><?php echo _('General'); ?></span></a></li>
<?php } ?>
		</ul>
</div>
<div data-role="navbar">
    <ul>
        <li><a href="#editsettingstab-2" class="ui-btn-active ui-state-persist"><span><?php echo _('Newsservers'); ?></span></a></li>
		<li><a href="#editsettingstab-3"><span><?php echo _('Retrieve'); ?></span></a></li>
        <li><a href="#editsettingstab-4"><span><?php echo _('Performance'); ?></span></a></li>
    </ul>
</div>

<div>			
    
      <?php if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>
      
      <?php require "includes/editsettingstab-2.inc.php";?>
      
  <?php } ?>
<!-- BUTTONS -->
  <script>
$(function() {
	$( "#datepicker" ).datepicker({ altField: "#retrieve_newer_than",
									dateFormat: "yy-mm-dd",
									defaultDate: "<?php echo date("Y-m-d", $retrieve_newer_than); ?>",
									dayNamesMin: ['<?php echo _('Su'); ?>', '<?php echo _('Mo'); ?>', '<?php echo _('Tu'); ?>', '<?php echo _('We'); ?>', '<?php echo _('Th'); ?>', '<?php echo _('Fr'); ?>', '<?php echo _('Sa'); ?>'],
									monthNamesShort: ['<?php echo _('Jan'); ?>', '<?php echo _('Feb'); ?>', '<?php echo _('Mar'); ?>', '<?php echo _('Apr'); ?>', '<?php echo _('May'); ?>', '<?php echo _('Jun'); ?>', '<?php echo _('Jul'); ?>', '<?php echo _('Aug'); ?>', '<?php echo _('Sep'); ?>', '<?php echo _('Oct'); ?>', '<?php echo _('Nov'); ?>', '<?php echo _('Dec'); ?>'],
									prevText: '<?php echo _('Previous'); ?>',
									nextText: '<?php echo _('Next'); ?>',
									numberOfMonths: 3,
									stepMonths: 3,
									minDate: new Date(2009, 10, 1),
									maxDate: "today" });
});
</script>
    
    
		<fieldset class="ui-grid-a">
			<div class="ui-block-a"><input class="greyButton" data-theme="b" type="submit" name="editsettingsform[submitedit]" value="<?php echo _('Change'); ?>"></div>
			<div class="ui-block-b"><input class="greyButton" type="submit" name="editsettingsform[submitcancel]" value="<?php echo _('Cancel'); ?>"></div>
			<div class="clear"></div>
		</fieldset>
	
</div>
</form>
</div>

<!-- PAGE 3 -->
<div data-role="page" id="editsettingstab-3">
	<div data-role="header">
		<div class="closeeditsettings"><a href='<?php echo $tplHelper->makeBaseUrl('path');?>' target="_self" class='toggle' data-role="button" data-inline="true"><?php echo _('Back to mainview'); ?></a></div>
	</div>
<form class="editsettingsform" name="editsettingsform" action="<?php echo $tplHelper->makeEditSettingsAction(); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="editsettingsform[xsrfid]" value="<?php echo $tplHelper->generateXsrfCookie('editsettingsform'); ?>">
	<input type="hidden" name="editsettingsform[http_referer]" value="<?php echo $http_referer; ?>">
	<input type="hidden" name="editsettingsform[buttonpressed]" value="">
	
<div data-role="navbar" id="editsettingstab" class="ui-tabs">
		<ul>
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_view_spotweb_updates, '')) { ?>
			<li><a href="?page=versioncheck" title="<?php echo _('Spotweb updates'); ?>"><span><?php echo _('Spotweb updates');?></span></a></li>
<?php }
if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>
			<li><a href="#editsettingstab-1"><span><?php echo _('General'); ?></span></a></li>
<?php } ?>
		</ul>
</div>
<div data-role="navbar">
    <ul>
        <li><a href="#editsettingstab-2"><span><?php echo _('Newsservers'); ?></span></a></li>
		<li><a href="#editsettingstab-3" class="ui-btn-active ui-state-persist"><span><?php echo _('Retrieve'); ?></span></a></li>
        <li><a href="#editsettingstab-4"><span><?php echo _('Performance'); ?></span></a></li>
    </ul>
</div>

<div>			
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>

	<?php require "includes/editsettingstab-3.inc.php";?>

<?php } ?>
<!-- BUTTONS -->
<script>
$(function() {
	$( "#datepicker" ).datepicker({ altField: "#retrieve_newer_than",
									dateFormat: "yy-mm-dd",
									defaultDate: "<?php echo date("Y-m-d", $retrieve_newer_than); ?>",
									dayNamesMin: ['<?php echo _('Su'); ?>', '<?php echo _('Mo'); ?>', '<?php echo _('Tu'); ?>', '<?php echo _('We'); ?>', '<?php echo _('Th'); ?>', '<?php echo _('Fr'); ?>', '<?php echo _('Sa'); ?>'],
									monthNamesShort: ['<?php echo _('Jan'); ?>', '<?php echo _('Feb'); ?>', '<?php echo _('Mar'); ?>', '<?php echo _('Apr'); ?>', '<?php echo _('May'); ?>', '<?php echo _('Jun'); ?>', '<?php echo _('Jul'); ?>', '<?php echo _('Aug'); ?>', '<?php echo _('Sep'); ?>', '<?php echo _('Oct'); ?>', '<?php echo _('Nov'); ?>', '<?php echo _('Dec'); ?>'],
									prevText: '<?php echo _('Previous'); ?>',
									nextText: '<?php echo _('Next'); ?>',
									numberOfMonths: 3,
									stepMonths: 3,
									minDate: new Date(2009, 10, 1),
									maxDate: "today" });
});
</script>

		<fieldset class="ui-grid-a">
			<div class="ui-block-a"><input class="greyButton" data-theme="b" type="submit" name="editsettingsform[submitedit]" value="<?php echo _('Change'); ?>"></div>
			<div class="ui-block-b"><input class="greyButton" type="submit" name="editsettingsform[submitcancel]" value="<?php echo _('Cancel'); ?>"></div>
			<div class="clear"></div>
		</fieldset>
	
</div>
</form>
</div>

<!-- PAGE 4 -->
<div data-role="page" id="editsettingstab-4">
	<div data-role="header">
		<div class="closeeditsettings"><a href='<?php echo $tplHelper->makeBaseUrl('path');?>' target="_self" class='toggle' data-role="button" data-inline="true"><?php echo _('Back to mainview'); ?></a></div>
	</div>
<form class="editsettingsform" name="editsettingsform" action="<?php echo $tplHelper->makeEditSettingsAction(); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="editsettingsform[xsrfid]" value="<?php echo $tplHelper->generateXsrfCookie('editsettingsform'); ?>">
	<input type="hidden" name="editsettingsform[http_referer]" value="<?php echo $http_referer; ?>">
	<input type="hidden" name="editsettingsform[buttonpressed]" value="">
	
<div data-role="navbar" id="editsettingstab" class="ui-tabs">
		<ul>
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_view_spotweb_updates, '')) { ?>
			<li><a href="?page=versioncheck" title="<?php echo _('Spotweb updates'); ?>"><span><?php echo _('Spotweb updates');?></span></a></li>
<?php }
if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>
			<li><a href="#editsettingstab-1"><span><?php echo _('General'); ?></span></a></li>
<?php } ?>
		</ul>
</div>
<div data-role="navbar">
    <ul>
        <li><a href="#editsettingstab-2"><span><?php echo _('Newsservers'); ?></span></a></li>
		<li><a href="#editsettingstab-3"><span><?php echo _('Retrieve'); ?></span></a></li>
        <li><a href="#editsettingstab-4" class="ui-btn-active ui-state-persist"><span><?php echo _('Performance'); ?></span></a></li>
    </ul>
</div>

<div>			
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>

<?php require "includes/editsettingstab-4.inc.php";?>

<?php } ?>
<!-- BUTTONS -->
<script>
$(function() {
	$( "#datepicker" ).datepicker({ altField: "#retrieve_newer_than",
									dateFormat: "yy-mm-dd",
									defaultDate: "<?php echo date("Y-m-d", $retrieve_newer_than); ?>",
									dayNamesMin: ['<?php echo _('Su'); ?>', '<?php echo _('Mo'); ?>', '<?php echo _('Tu'); ?>', '<?php echo _('We'); ?>', '<?php echo _('Th'); ?>', '<?php echo _('Fr'); ?>', '<?php echo _('Sa'); ?>'],
									monthNamesShort: ['<?php echo _('Jan'); ?>', '<?php echo _('Feb'); ?>', '<?php echo _('Mar'); ?>', '<?php echo _('Apr'); ?>', '<?php echo _('May'); ?>', '<?php echo _('Jun'); ?>', '<?php echo _('Jul'); ?>', '<?php echo _('Aug'); ?>', '<?php echo _('Sep'); ?>', '<?php echo _('Oct'); ?>', '<?php echo _('Nov'); ?>', '<?php echo _('Dec'); ?>'],
									prevText: '<?php echo _('Previous'); ?>',
									nextText: '<?php echo _('Next'); ?>',
									numberOfMonths: 3,
									stepMonths: 3,
									minDate: new Date(2009, 10, 1),
									maxDate: "today" });
});
</script>

		<fieldset class="ui-grid-a">
			<div class="ui-block-a"><input class="greyButton" data-theme="b" type="submit" name="editsettingsform[submitedit]" value="<?php echo _('Change'); ?>"></div>
			<div class="ui-block-b"><input class="greyButton" type="submit" name="editsettingsform[submitcancel]" value="<?php echo _('Cancel'); ?>"></div>
			<div class="clear"></div>
		</fieldset>	
</div>
</form>
</div>
<?php
	require_once "footer.inc.php";
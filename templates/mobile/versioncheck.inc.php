<?php
if (!empty($editsettingsresult)) {
	if ($editsettingsresult['result'] == 'success') {
		$tplHelper->redirect($http_referer);
		return ;
	} # if
} # if

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
<?php require "header.inc.php"; 
include "includes/form-messages.inc.php";?>
<div data-role="header">
	<div class="closeeditsettings"><a class='toggle' href='<?php echo $tplHelper->makeBaseUrl('path');?>' data-role="button" data-inline="true"><?php echo _('Back to mainview'); ?></a></div>
</div>
<form class="editsettingsform" name="editsettingsform" action="<?php echo $tplHelper->makeEditSettingsAction(); ?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="editsettingsform[xsrfid]" value="<?php echo $tplHelper->generateXsrfCookie('editsettingsform'); ?>">
	<input type="hidden" name="editsettingsform[http_referer]" value="<?php echo $http_referer; ?>">
	<input type="hidden" name="editsettingsform[buttonpressed]" value="">
	
<div data-role="navbar" id="editsettingstab" class="ui-tabs">
		<ul>
<?php if ($tplHelper->allowed(SpotSecurity::spotsec_view_spotweb_updates, '')) { ?>
			<li><a href="?page=versioncheck" class="ui-btn-active ui-state-persist" title="<?php echo _('Spotweb updates'); ?>"><span><?php echo _('Spotweb updates');?></span></a></li>
<?php }
if ($tplHelper->allowed(SpotSecurity::spotsec_edit_settings, '')) { ?>
			<li><a href="?page=editsettings#editsettingstab-1"><span><?php echo _('General'); ?></span></a></li>
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

<div class='versioncheck' style="padding-right:10px">
<?php 
	if (!$uptodate) {
?>
		<div class='warning'><?php echo _('An updated version of Spotweb is available'); ?></div>	
<?php 
	}
?>

	<ul>
<?php
	$itemCount = 0;
	foreach($items as $item) {
		$itemCount++;
?>
					<li class="<?php if ($itemCount % 2 == 1) echo " even"; ?>"><strong><?php echo sprintf(_('Posted by %s'), '<span class="user">' . $item['author'] . '</span>'); ?>
					<?php if ($item['is_newer_than_installed']) { echo '(!)'; } ?>
					@ <?php echo $tplHelper->formatDate((int) strtotime($item['pubDate']), 'comment'); ?> </strong> <br />
					<?php echo $item['description']; ?>
					</li>
					<br>
<?php
	}
?>
	</ul>
</div>

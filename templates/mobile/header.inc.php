<!DOCTYPE html> 
<html>
	<head>

		<link rel="apple-touch-icon" href="images/touch-icon-iphone.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="images/touch-icon-ipad.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="images/touch-icon-iphone4.png" />
		<link rel="apple-touch-startup-image" href="images/startup.png">  
		<meta name="apple-mobile-web-app-capable" content="yes" />  
		<meta name="apple-mobile-web-app-status-bar-style" content="black" /> 
		<title><?php echo $pagetitle?></title>
		<link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script type='text/javascript' src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
		<link rel='shortcut icon' href='images/favicon.ico'>
		<style>
		    th{text-align:left;}
		</style>
		<meta name="viewport" content="user-scalable=0, initial-scale=1.0">
		<script type='text/javascript'>
			if (window.screen.height==568) { // iPhone 4"
				document.querySelector("meta[name=viewport]").content="width=320.1";
			}
		</script>

		<script type='text/javascript'>
//		    $(function(){ });
		    $( document ).ready ( function ( ) {
			$( 'a#anchorLoginControl' ).click ( function ( ) {
			    $.ajax ( {
				type: "GET",
				url: 'index.php?page=logout',
				async: false,
				dataType: "xml",
				success: function( msg ) { window.location.reload ( ); }
			    } );
			} );
		    } );
		</script>
	</head>
<body>

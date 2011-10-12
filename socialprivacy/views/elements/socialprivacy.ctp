<?php echo $html->script('/socialprivacy/js/jquery.socialshareprivacy.min.js', false); ?>
<?php
	echo $html->scriptBlock("
		jQuery(document).ready(function($){
		  if($('#socialshareprivacy').length > 0){
			$('#socialshareprivacy').socialSharePrivacy({
			services : {
				facebook : {
					'dummy_img': '/socialprivacy/img/dummy_facebook_en.png',
					'language' : 'en_US',
					'action' : 'like',
					'txt_info' : '2 clicks for better privacy: When you click here the button becomes active and you can send this like to Facebook. On activating this button, data will already be sent to third parties.'
				}, 
				twitter : {
					 'dummy_img': '/socialprivacy/img/dummy_twitter.png',
					 'txt_info' : '2 clicks for better privacy: When you click here the button becomes active and you can send your recommendation to Twitter. On activating this button, data will already be sent to third parties.'
				},
				gplus : {
					'dummy_img': '/socialprivacy/img/dummy_gplus.png',
					'language' : 'en',
					'txt_info' : '2 clicks for better privacy: When you click here the button becomes active and you can send your + to Google+. On activating this button, data will already be sent to third parties.'
				}
			  },
			  'css_path' : '/socialprivacy/css/socialshareprivacy.css',
			  'txt_help' : 'Only by displaying social media buttons, data will be sent to Facebook, Twitter and Google. This script hides these buttons behind a second click, to prevent this auto transmission of data. Show more info (in german)',
			  'settings_perma' : 'Enable permanently',
			
			}); 
		  }
		});", array('inline' => false));
?>
<div id="socialshareprivacy"></div>

/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.1
 * 
 * Editor Styles Wrapper Options Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	$(document).ready(function () { 
		/* Layout Sidebar Field Load */
		if ($('input[name="cmsmasters_layout"]:checked').val() !== 'fullwidth') {
			$('body').addClass('enable_sidebar');
		}
		
		/* Page Layout Change */
		$('input[name="cmsmasters_layout"]').on('change', function () { 
			if ($(this).val() !== 'fullwidth') {
				$('body').addClass('enable_sidebar');
			} else {
				$('body').removeClass('enable_sidebar');
			}
		} );
	} );
} )(jQuery);


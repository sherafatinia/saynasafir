/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version		1.0.0
 * 
 * Woocommerce Scripts
 * Created by CMSMasters
 * 
 */


"use strict";

jQuery(document).ready(function () { 
	"use strict";
	
	/* Run stars colors */
	jQuery('.cmsmasters_star_color_wrap').each(function () {
		var star_color_width = jQuery(this).data('width');

		jQuery(this).attr('style', star_color_width);
	} );
	
	
	setTimeout(function () { 
		if ( 
			jQuery('.cmsmasters_dynamic_cart .widget_shopping_cart_content > ul li').length != 0 && 
			jQuery('.cmsmasters_dynamic_cart .widget_shopping_cart_content > ul li').hasClass('empty') != true 
		) {
			jQuery('.cmsmasters_dynamic_cart_wrap').addClass('active');
			jQuery('.cmsmasters_header_cart_link').addClass('active');
		}
	}, 2000);
	
	
	cmsmasters_ajax_add_to_cart();
	
	
	jQuery('.cmsmasters_add_to_cart_button').on('click', function () { 
		jQuery('.cmsmasters_dynamic_cart_wrap').addClass('active');
		jQuery('.cmsmasters_header_cart_link').addClass('active');
	} );
	
	
	jQuery('body').on('added_to_cart', update_dynamic_cart);
} );


jQuery(document).ready(function () { 
	cmsmasters_ajax_add_to_cart();
	
	
	jQuery('body').on('added_to_cart', update_dynamic_cart);
	
	
	// Mobile Hover Products in Shop Page
	jQuery('.touch .cmsmasters_product .cmsmasters_product_img').on('click', function() { 
		jQuery('*:not(this)').removeClass('cmsmasters_mobile_hover');
		
		
		jQuery(this).addClass('cmsmasters_mobile_hover');
	} );
	
	
	// Add Class to Current Tab
	jQuery('.cmsmasters_woo_tabs > .cmsmasters_tabs_list > .cmsmasters_tabs_list_item:first-child').addClass('current_tab');
	jQuery('.cmsmasters_woo_tabs > .cmsmasters_tabs_wrap > .cmsmasters_tab:first-child').addClass('active_tab');
	
	
	jQuery(window).scroll(function () { 
		if( jQuery('.footer_copyright').length && ( jQuery(this).scrollTop() + jQuery(this).height() ) > jQuery('.footer_copyright').offset().top) {
			jQuery('.woocommerce-store-notice').css({'position' : 'relative'});
		} else {
			jQuery('.woocommerce-store-notice').css({'position' : 'fixed'});
		}
	} );
} );


var cmsmasters_added_product = {};


function cmsmasters_ajax_add_to_cart() {
	"use strict";
	
	jQuery('.cmsmasters_add_to_cart_button').on('click', function() {	
		var productInfo = jQuery(this).closest('.cmsmasters_product'), 
			productAmount = productInfo.find('.price > .amount, .price > ins > .amount').text(), 
			addedToCart = productInfo.find('.added_to_cart'), 
			product = {};
		
		
		product.name = productInfo.find('.cmsmasters_product_title a').text();
		
		product.price = productAmount.replace(cmsmasters_woo_script.currency_symbol, '');
		
		product.image = productInfo.find('.cmsmasters_product_img img');
		
		
		addedToCart.addClass('cmsmasters_to_show');
		
		
		if (product.image.length) {
			/* Dynamic Cart Update Img Src */
			var str = product.image.get(0).src, 
				ext = /(\..{3,4})$/i.exec(str), 
				extLength = ext[1].length, 
				url = str.slice(0, -extLength), 
				newURL = /(-\d{2,}x\d{2,})$/i.exec(url), 
				newSize = '-' + cmsmasters_woo_script.thumbnail_image_width + 'x' + cmsmasters_woo_script.thumbnail_image_height, 
				buildURL = '';
			
			
			if (newURL !== null) {
				buildURL += url.slice(0, -newURL[1].length) + newSize + ext[1];
			} else {
				buildURL += url + ext[1];
			}
			
			
			product.image = '<img class="cmsmasters_added_product_info_img" src="' + buildURL + '" />';
		}
		
		
		cmsmasters_added_product = product;
	} );
}


function update_dynamic_cart(event) { 
	"use strict";
	
	var product = jQuery.extend( { 
		name : 		'', 
		image : 	'' 
	}, cmsmasters_added_product);
	
	
	if (typeof event != 'undefined') {
		var cart_button = jQuery('.cmsmasters_dynamic_cart'), 
			template = jQuery( 
				'<div class="cmsmasters_added_product_info">' + 
					product.image + 
					'<span class="cmsmasters_added_product_info_text">' + product.name + '</span>' + 
				'</div>' 
			);
		
		
		jQuery(event.currentTarget).find('a.cmsmasters_to_show').removeClass('cmsmasters_to_show').addClass('cmsmasters_visible');
		
		
		template.appendTo('.cmsmasters_dynamic_cart').css('visibility', 'visible').animate( { 
			marginTop : '20px', 
			opacity : 	1 
		}, 500);
		
		
		template.on('mouseenter cmsmasters_hide', function () { 
			template.animate( { 
				marginTop :	0, 
				opacity : 	0 
			}, 500, function () { 
				template.remove();
			} );
		} );
		
		
		setTimeout(function () { 
			template.trigger('cmsmasters_hide');
		}, 2000);
	}
}


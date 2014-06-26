jQuery( document ).ready( function ( e ) {

	jQuery.fn.customSetFeaturedImage = function( attachment_id ) {

		var image_src = '';

		jQuery( 'li.attachment.selected' ).each( function() {
			jQuery( this ).find( 'div.type-image' ).each( function() {
				image_src = jQuery( this ).find( 'img' ).attr( 'src' );
			});
		});

		if( image_src ) {

			var post_id = jQuery( '#post_ID' ).val();

			jQuery.post(
				ajaxurl,
				{
					action : 'instant_featured_image',
					instant_featured_image_nonce : instant_featured_image_i18n.instant_featured_image_nonce,
					data : 'src=' + image_src + '&post_id=' + post_id
				},
				function( response ) {
					if( response ) {
						jQuery('.inside', '#postimagediv').html( response );
					}
				}
			);

		}

		return false;
	}

	var wpMediaFramePost = wp.media.view.MediaFrame.Post;

	wp.media.view.MediaFrame.Post = wpMediaFramePost.extend({
	    mainInsertToolbar: function( view ) {
	        "use strict";

	        wpMediaFramePost.prototype.mainInsertToolbar.call(this, view);

	        var controller = this;

	        this.selectionStatusToolbar( view );

	        view.set( "insert-and-feature", {
	            style: "primary",
	            priority: 70,
	            text: instant_featured_image_i18n.button_text,
	            requires: { selection: true },

	            click: function() {
					var state = controller.state(),
						selection = state.get('selection');

					jQuery.fn.customSetFeaturedImage();

					controller.close();
					state.trigger( 'insert', selection ).reset();
				}
	        });
	    }

	});

});
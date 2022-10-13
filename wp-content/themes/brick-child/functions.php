<?php

/*** Child Theme Function  ***/

if ( !function_exists( 'brick_qode_child_theme_enqueue_scripts' ) ) {
	function brick_qode_child_theme_enqueue_scripts() {
		$parent_style = 'brick-default-style';
		
		wp_enqueue_style( 'brick-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}
	
	add_action( 'wp_enqueue_scripts', 'brick_qode_child_theme_enqueue_scripts' );
}


// Add Google Tag Manager code in <head>
add_action( 'wp_head', 'google_tag_manager_head' );
function google_tag_manager_head() { ?>
	
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NXMTVJZ');</script>
<!-- End Google Tag Manager -->

<?php }


// Add Google Tag Manager code immediately below opening <body> tag
add_action( 'genesis_before', 'google_tag_manager_body' );
function google_tag_manager_body() { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXMTVJZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php }



// Function to change email address
add_filter( 'wp_mail_from', 'sender_email' );
function sender_email( $original_email_address ) {
return 'info@uvact.com';
}

// Function to change sender name
add_filter( 'wp_mail_from_name', 'sender_name' );
function sender_name( $original_email_from ) {
return 'Uvact';
}
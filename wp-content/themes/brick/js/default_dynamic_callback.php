<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} else {
	$root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
	if ( file_exists( $root.'/wp-load.php' ) ) {
    	require_once( $root.'/wp-load.php' );
	}
}
header('Content-type: application/x-javascript');
?>

var header_height = 140;
var min_header_height_scroll = 87;
var min_header_height_sticky = 90;
var scroll_amount_for_sticky = 85;
var min_header_height_fixed_hidden = 45;
var header_bottom_border_weight = 1;
var scroll_amount_for_fixed_hiding = 200;
var menu_item_margin = 0;
var large_menu_item_border = 0;
var element_appear_amount = -150;
var paspartu_width_init = 0.02;
var directionNavArrows = 'arrow_carrot-';
var directionNavArrowsTestimonials = 'fa fa-angle-';

<?php if(brick_qode_options()->getOptionValue( 'header_height' )){
	if (brick_qode_options()->getOptionValue( 'header_height' ) !== '') { ?>
	header_height = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'header_height' )); ?>;
<?php } } ?>
<?php if(brick_qode_options()->getOptionValue( 'header_height_scroll' )){
	if (brick_qode_options()->getOptionValue( 'header_height_scroll' ) !== "") { ?>
	min_header_height_scroll = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'header_height_scroll' )); ?>;
<?php } } ?>
<?php if(brick_qode_options()->getOptionValue( 'header_height_sticky' )){
	if (brick_qode_options()->getOptionValue( 'header_height_sticky' ) !== "") { ?>
	min_header_height_sticky = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'header_height_sticky' )); ?>;
<?php } } ?>
<?php if(brick_qode_options()->getOptionValue( 'scroll_amount_for_sticky' )){
	if (!empty(brick_qode_options()->getOptionValue( 'scroll_amount_for_sticky' ))) { ?>
	scroll_amount_for_sticky = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'scroll_amount_for_sticky' )); ?>;
<?php } } ?>
<?php if(brick_qode_options()->getOptionValue( 'header_height_scroll_hidden' )){
    if (!empty(brick_qode_options()->getOptionValue( 'header_height_scroll_hidden' ))) { ?>
    min_header_height_fixed_hidden = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'header_height_scroll_hidden' )); ?>;
<?php } } ?>

<?php if(brick_qode_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' )){
    if (!empty(brick_qode_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' ))) { ?>
        scroll_amount_for_fixed_hiding = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' )); ?>;
<?php } } ?>

<?php
if( brick_qode_options()->getOptionValue( 'enable_manu_item_border' )=='yes' &&  brick_qode_options()->getOptionValue( 'menu_item_style' )=='large_item'){
    if( brick_qode_options()->getOptionValue( 'menu_item_border_style' )=='all_borders'){ ?>
		large_menu_item_border = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'menu_item_border_width' ))*2;
	} ?>
	<?php if( brick_qode_options()->getOptionValue( 'menu_item_border_style' )=='top_bottom_borders'){ ?>
		large_menu_item_border = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'menu_item_border_width' ))*2;
	} ?>
	<?php if( brick_qode_options()->getOptionValue( 'menu_item_border_style' )=='bottom_border'){ ?>
		large_menu_item_border = <?php  echo esc_attr(brick_qode_options()->getOptionValue( 'menu_item_border_width' ));
	} ?>
<?php } ?>

<?php if( brick_qode_options()->getOptionValue( 'element_appear_amount' ) !== ""){ ?>
    element_appear_amount = -<?php echo esc_attr(brick_qode_options()->getOptionValue( 'element_appear_amount' )); ?>;
<?php } ?>

<?php if( brick_qode_options()->getOptionValue( 'paspartu_width' ) !== ""){ ?>
    paspartu_width_init = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'paspartu_width' ))/100; ?>;
<?php } ?>

var logo_height = 130; // brick logo height
var logo_width = 280; // brick logo width
	<?php 
		$logo_width = brick_qode_options()->getOptionValue( 'logo_width' );
		$logo_height = brick_qode_options()->getOptionValue( 'logo_height' );
	?>
    logo_width = <?php echo esc_attr($logo_width); ?>;
    logo_height = <?php echo esc_attr($logo_height); ?>;

<?php if(brick_qode_options()->getOptionValue( 'menu_margin_left_right' )){
	if (brick_qode_options()->getOptionValue( 'menu_margin_left_right' ) !== '') { ?>
		menu_item_margin = <?php echo esc_attr(brick_qode_options()->getOptionValue( 'menu_margin_left_right' )); ?>;
<?php } } ?>
	
<?php if(brick_qode_options()->getOptionValue( 'header_top_area' )){
if (brick_qode_options()->getOptionValue( 'header_top_area' ) == "yes") { ?>
<?php if( brick_qode_options()->getOptionValue( 'header_top_height' ) !== ""){?>
header_top_height= <?php echo esc_attr(brick_qode_options()->getOptionValue( 'header_top_height' ));?>;
<?php } else { ?>
header_top_height = 36;
<?php } ?>
<?php } else { ?>
	header_top_height = 0;
<?php } }?>
var loading_text;
loading_text = '<?php esc_attr_e('Loading new posts...', 'brick'); ?>';
var finished_text;
finished_text = '<?php esc_attr_e('No more posts', 'brick'); ?>';

var piechartcolor;
piechartcolor	= "#e27d23";

<?php if( !empty(brick_qode_options()->getOptionValue( 'first_color' ))){ ?>
	piechartcolor = "<?php echo esc_attr(brick_qode_options()->getOptionValue( 'first_color' )); ?>";
<?php } ?>

<?php if( brick_qode_options()->getOptionValue( 'single_slider_navigation_arrows_type' ) != '') { ?>
	directionNavArrows = '<?php echo esc_attr(brick_qode_options()->getOptionValue( 'single_slider_navigation_arrows_type' )); ?>';
<?php } ?>

<?php if( brick_qode_options()->getOptionValue( 'testimonials_arrows_type' ) != '') { ?>
	directionNavArrowsTestimonials = '<?php echo esc_attr(brick_qode_options()->getOptionValue( 'testimonials_arrows_type' )); ?>';
<?php } ?>

var no_ajax_pages = [];
var qode_root = '<?php echo esc_url( home_url( '/' ) ); ?>';
var theme_root = '<?php echo BRICK_ROOT; ?>/';
<?php if(brick_qode_options()->getOptionValue( 'header_style' ) != ''){ ?>
var header_style_admin = "<?php echo esc_attr(brick_qode_options()->getOptionValue( 'header_style' )); ?>";
<?php }else{ ?>
var header_style_admin = "";
<?php } ?>
if(typeof no_ajax_obj !== 'undefined') {
no_ajax_pages = no_ajax_obj.no_ajax_pages;
}
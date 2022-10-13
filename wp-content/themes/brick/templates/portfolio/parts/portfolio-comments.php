<?php

//get portfolio comment value
$portfolio_hide_comments = "";
if(get_post_meta(get_the_ID(), "qode_portfolio-hide-comments", true) == "yes"){
	$portfolio_hide_comments = "yes";
} elseif (brick_qode_options()->getOptionValue( 'portfolio_hide_comments' )){
	$portfolio_hide_comments = brick_qode_options()->getOptionValue( 'portfolio_hide_comments' );
}

if($portfolio_hide_comments != "yes"){
	comments_template('', true); 
}
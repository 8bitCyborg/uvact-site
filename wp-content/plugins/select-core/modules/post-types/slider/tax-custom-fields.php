<?php

function qode_slides_category_taxonomy_custom_fields($tag) {
    $t_id = $tag->term_id; // Get the ID of the term you're editing  
    $term_meta = get_option( "taxonomy_term_$t_id" );
    ?>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Effect on header (dark/light style)', 'select-core'); ?></label>
        </th>
        <td>
            <select name="term_meta[header_effect]" id="term_meta[header_effect]">
                <option <?php if( $term_meta['header_effect'] == 'no' ){ echo "selected='selected'"; } ?> value="no"><?php esc_html_e( 'No', 'select-core' ); ?></option>
                <option <?php if( $term_meta['header_effect'] == 'yes' ){ echo "selected='selected'"; } ?> value="yes"><?php esc_html_e( 'Yes', 'select-core' ); ?></option>
            </select>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Show prev/next thumbs (except for side menu or passepartout)', 'select-core'); ?></label>
        </th>
        <td>
            <select name="term_meta[slider_thumbs]" id="term_meta[slider_thumbs]">
                <option <?php if( $term_meta['slider_thumbs'] == 'no' ){ echo "selected='selected'"; } ?> value="no"><?php esc_html_e( 'No', 'select-core' ); ?></option>
                <option <?php if( $term_meta['slider_thumbs'] == 'yes' ){ echo "selected='selected'"; } ?> value="yes"><?php esc_html_e( 'Yes', 'select-core' ); ?></option>
            </select>
        </td>
    </tr>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Show slide number', 'select-core'); ?></label>
        </th>
        <td>
            <select name="term_meta[slider_numbers]" id="term_meta[slider_numbers]">
                <option <?php if(isset($term_meta['slider_numbers']) && $term_meta['slider_numbers'] == 'no' ){ echo "selected='selected'"; } ?> value="no"><?php esc_html_e( 'No', 'select-core' ); ?></option>
                <option <?php if(isset($term_meta['slider_numbers']) && $term_meta['slider_numbers'] == 'yes' ){ echo "selected='selected'"; } ?> value="yes"><?php esc_html_e( 'Yes', 'select-core' ); ?></option>
            </select>
        </td>
    </tr>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Parallax effect', 'select-core'); ?></label>
        </th>
        <td>
            <select name="term_meta[slider_parallax_effect]" id="term_meta[slider_parallax_effect]">
                <option <?php if( isset($term_meta['slider_parallax_effect']) && $term_meta['slider_parallax_effect'] == 'yes' ){ echo "selected='selected'"; } ?> value="yes"><?php esc_html_e( 'Yes', 'select-core' ); ?></option>
                <option <?php if( isset($term_meta['slider_parallax_effect']) && $term_meta['slider_parallax_effect'] == 'no' ){ echo "selected='selected'"; } ?> value="no"><?php esc_html_e( 'No', 'select-core' ); ?></option>
            </select>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 1 (values: 0-1, default value: 1)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint1_graphic]" id="term_meta[breakpoint1_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint1_graphic']) && $term_meta['breakpoint1_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint1_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint1_title]" id="term_meta[breakpoint1_title]" size="3" value="<?php if( isset($term_meta['breakpoint1_title']) && $term_meta['breakpoint1_title'] != '' ){ echo esc_attr($term_meta['breakpoint1_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint1_subtitle]" id="term_meta[breakpoint1_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint1_subtitle']) && $term_meta['breakpoint1_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint1_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint1_text]" id="term_meta[breakpoint1_text]" size="3" value="<?php if( isset($term_meta['breakpoint1_text']) && $term_meta['breakpoint1_text'] != '' ){ echo esc_attr($term_meta['breakpoint1_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint1_button]" id="term_meta[breakpoint1_button]" size="3" value="<?php if( isset($term_meta['breakpoint1_button']) && $term_meta['breakpoint1_button'] != '' ){ echo esc_attr($term_meta['breakpoint1_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width > 1600px for 'set1' and 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 2 (values: 0-1, default value: 1)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint2_graphic]" id="term_meta[breakpoint2_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint2_graphic']) && $term_meta['breakpoint2_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint2_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint2_title]" id="term_meta[breakpoint2_title]" size="3" value="<?php if( isset($term_meta['breakpoint2_title']) && $term_meta['breakpoint2_title'] != '' ){ echo esc_attr($term_meta['breakpoint2_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint2_subtitle]" id="term_meta[breakpoint2_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint2_subtitle']) && $term_meta['breakpoint2_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint2_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint2_text]" id="term_meta[breakpoint2_text]" size="3" value="<?php if( isset($term_meta['breakpoint2_text']) && $term_meta['breakpoint2_text'] != '' ){ echo esc_attr($term_meta['breakpoint2_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint2_button]" id="term_meta[breakpoint2_button]" size="3" value="<?php if( isset($term_meta['breakpoint2_button']) && $term_meta['breakpoint2_button'] != '' ){ echo esc_attr($term_meta['breakpoint2_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width = [1200px,1600px] for 'set1', screen width = [1300px,1600px] for 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 3 (values: 0-1, default value: 0.8)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint3_graphic]" id="term_meta[breakpoint3_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint3_graphic']) && $term_meta['breakpoint3_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint3_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint3_title]" id="term_meta[breakpoint3_title]" size="3" value="<?php if( isset($term_meta['breakpoint3_title']) && $term_meta['breakpoint3_title'] != '' ){ echo esc_attr($term_meta['breakpoint3_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint3_subtitle]" id="term_meta[breakpoint3_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint3_subtitle']) && $term_meta['breakpoint3_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint3_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint3_text]" id="term_meta[breakpoint3_text]" size="3" value="<?php if( isset($term_meta['breakpoint3_text']) && $term_meta['breakpoint3_text'] != '' ){ echo esc_attr($term_meta['breakpoint3_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint3_button]" id="term_meta[breakpoint3_button]" size="3" value="<?php if( isset($term_meta['breakpoint3_button']) && $term_meta['breakpoint3_button'] != '' ){ echo esc_attr($term_meta['breakpoint3_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width = [900px,1200px] for 'set1', screen width = [1000px,1300px] for 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 4 (values: 0-1, default value: 0.7)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint4_graphic]" id="term_meta[breakpoint4_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint4_graphic']) && $term_meta['breakpoint4_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint4_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint4_title]" id="term_meta[breakpoint4_title]" size="3" value="<?php if( isset($term_meta['breakpoint4_title']) && $term_meta['breakpoint4_title'] != '' ){ echo esc_attr($term_meta['breakpoint4_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint4_subtitle]" id="term_meta[breakpoint4_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint4_subtitle']) && $term_meta['breakpoint4_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint4_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint4_text]" id="term_meta[breakpoint4_text]" size="3" value="<?php if( isset($term_meta['breakpoint4_text']) && $term_meta['breakpoint4_text'] != '' ){ echo esc_attr($term_meta['breakpoint4_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint4_button]" id="term_meta[breakpoint4_button]" size="3" value="<?php if( isset($term_meta['breakpoint4_button']) && $term_meta['breakpoint4_button'] != '' ){ echo esc_attr($term_meta['breakpoint4_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width = [650px,900px] for 'set1', screen width = [768px,1000px] for 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 5 (values: 0-1, default value: 0.6)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint5_graphic]" id="term_meta[breakpoint5_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint5_graphic']) && $term_meta['breakpoint5_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint5_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint5_title]" id="term_meta[breakpoint5_title]" size="3" value="<?php if( isset($term_meta['breakpoint5_title']) && $term_meta['breakpoint5_title'] != '' ){ echo esc_attr($term_meta['breakpoint5_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint5_subtitle]" id="term_meta[breakpoint5_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint5_subtitle']) && $term_meta['breakpoint5_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint5_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint5_text]" id="term_meta[breakpoint5_text]" size="3" value="<?php if( isset($term_meta['breakpoint5_text']) && $term_meta['breakpoint5_text'] != '' ){ echo esc_attr($term_meta['breakpoint5_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint5_button]" id="term_meta[breakpoint5_button]" size="3" value="<?php if( isset($term_meta['breakpoint5_button']) && $term_meta['breakpoint5_button'] != '' ){ echo esc_attr($term_meta['breakpoint5_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width = [500px,650px] for 'set1', screen width = [567px,768px] for 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 6 (values: 0-1, default value: 0.5)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint6_graphic]" id="term_meta[breakpoint6_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint6_graphic']) && $term_meta['breakpoint6_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint6_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint6_title]" id="term_meta[breakpoint6_title]" size="3" value="<?php if( isset($term_meta['breakpoint6_title']) && $term_meta['breakpoint6_title'] != '' ){ echo esc_attr($term_meta['breakpoint6_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint6_subtitle]" id="term_meta[breakpoint6_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint6_subtitle']) && $term_meta['breakpoint6_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint6_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint6_text]" id="term_meta[breakpoint6_text]" size="3" value="<?php if( isset($term_meta['breakpoint6_text']) && $term_meta['breakpoint6_text'] != '' ){ echo esc_attr($term_meta['breakpoint6_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint6_button]" id="term_meta[breakpoint6_button]" size="3" value="<?php if( isset($term_meta['breakpoint6_button']) && $term_meta['breakpoint6_button'] != '' ){ echo esc_attr($term_meta['breakpoint6_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width = [320px,500px] for 'set1', screen width = [320px,567px] for 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field slider-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Breakpoint Coefficients 7 (values: 0-1, default value: 0.4)', 'select-core'); ?></label>
        </th>
        <td>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Graphic', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint7_graphic]" id="term_meta[breakpoint7_graphic]" size="3" value="<?php if( isset($term_meta['breakpoint7_graphic']) && $term_meta['breakpoint7_graphic'] != '' ){ echo esc_attr($term_meta['breakpoint7_graphic']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Title', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint7_title]" id="term_meta[breakpoint7_title]" size="3" value="<?php if( isset($term_meta['breakpoint7_title']) && $term_meta['breakpoint7_title'] != '' ){ echo esc_attr($term_meta['breakpoint7_title']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Subtitle', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint7_subtitle]" id="term_meta[breakpoint7_subtitle]" size="3" value="<?php if( isset($term_meta['breakpoint7_subtitle']) && $term_meta['breakpoint7_subtitle'] != '' ){ echo esc_attr($term_meta['breakpoint7_subtitle']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Text', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint7_text]" id="term_meta[breakpoint7_text]" size="3" value="<?php if( isset($term_meta['breakpoint7_text']) && $term_meta['breakpoint7_text'] != '' ){ echo esc_attr($term_meta['breakpoint7_text']); } ?>">
            </div>
            <div class="inline">
                <label for="shortcode"><?php esc_html_e('Button', 'select-core'); ?></label>
                <input type="text" name="term_meta[breakpoint7_button]" id="term_meta[breakpoint7_button]" size="3" value="<?php if( isset($term_meta['breakpoint7_button']) && $term_meta['breakpoint7_button'] != '' ){ echo esc_attr($term_meta['breakpoint7_button']); } ?>">
            </div>
            <br/>
            <br/>
            <span class="description"><?php esc_html_e("screen width < 320px for 'set1' and 'set2'", 'select-core'); ?></span>
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="shortcode"><?php esc_html_e('Slider shortcode', 'select-core'); ?></label>
        </th>
        <td>
            <input type="text" name="term_meta[shortcode]" id="term_meta[shortcode]" size="25" style="width:60%;" value="<?php echo esc_attr($tag->slug) ? "[no_slider slider='".$tag->slug."' auto_start='true' animation_type='slide' slide_animation='6000' height='' responsive_height='yes' responsive_breakpoints='set1' background_color='' anchor='' show_navigation_arrows='yes' show_navigation_circles='yes' navigation_position='default' content_next_to_arrows='']" : ""; ?>" readonly><br />
            <span class="description"><?php esc_html_e('Use this shortcode to insert it on page', 'select-core'); ?></span>
        </td>
    </tr>

<?php
}

function qode_save_taxonomy_custom_fields( $term_id ) {
    if ( isset( $_POST['term_meta'] ) ) {
        $t_id = $term_id;
        $term_meta = get_option( "taxonomy_term_$t_id" );
        $cat_keys = array_keys( $_POST['term_meta'] );
        foreach ( $cat_keys as $key ){
            if ( isset( $_POST['term_meta'][$key] ) ){
                $term_meta[$key] = $_POST['term_meta'][$key];
            }
        }
        update_option( "taxonomy_term_$t_id", $term_meta );
    }
}

add_action( 'slides_category_edit_form_fields', 'qode_slides_category_taxonomy_custom_fields', 10, 2 );
add_action( 'edited_slides_category', 'qode_save_taxonomy_custom_fields', 10, 2 );



add_filter("manage_edit-slides_category_columns", 'qode_theme_columns');
function qode_theme_columns($theme_columns) {
    $new_columns = array(
        'cb' => '<input type="checkbox" />',
        'name' => esc_html__('Name', 'select-core'),
        'shortcode' => esc_html__('Shortcode', 'select-core'),
        //'description' => esc_html__('Description', 'select-core'),
        'slug' => esc_html__('Slug', 'select-core'),
        'posts' => esc_html__('Posts', 'select-core')
    );
    return $new_columns;
}

add_filter("manage_slides_category_custom_column", 'qode_manage_theme_columns', 10, 3);
function qode_manage_theme_columns($out, $column_name, $theme_id) {
    $theme = get_term($theme_id, 'slides_category');
    switch ($column_name) {
        case 'shortcode':
            $data = maybe_unserialize($theme->description);
            $out .= "[no_slider slider='".$theme->slug."' auto_start='true' animation_type='slide' slide_animation='6000' height='' responsive_height='yes' responsive_breakpoints='set1' background_color='' anchor='' show_navigation_arrows='yes' show_navigation_circles='yes' navigation_position='default' content_next_to_arrows='']";
            break;

        default:
            break;
    }
    return $out;
}

?>
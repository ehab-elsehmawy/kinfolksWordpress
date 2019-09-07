<?php


function ms_flex_content($name){
	global $flex;
	$flex = get_field($name);
	if(!empty($flex)){
		foreach($flex as $value){
			$path = get_template_directory();
			$filename = $value['acf_fc_layout'];
			$file = $path.'/partials/flex/'.$filename.'/'.$filename.'.php';
			$flex = $value;
			if(file_exists($file)){
				include($file);
			}
		}
	}
}


function ms_get_lang_name(){
	if(function_exists('icl_get_languages')){
		$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');
		if(!empty($langs)){
			foreach($langs as $lang){
				if($lang['active'] !== '1'){
					return strtoupper($lang['code']);
				}
			}
		}
	}
}

function ms_get_lang_url(){
	if(function_exists('icl_get_languages')){
		$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');
		if(!empty($langs)){
			foreach($langs as $lang){
				if($lang['active'] !== '1'){
					return $lang['url'];
				}
			}
		}
	}
}


function ms_get_first_tax_item($post_id,$tax){
	$terms = get_the_terms($post_id,$tax);
	if(!empty($terms)){
		return $terms[0]->name;
	}
}


function ms_change_enter_title_here( $title ){
    $screen = get_current_screen();
    if($screen->post_type === 'portfolio') {
        $title = 'Enter Portfolio Name';
    }elseif($screen->post_type === 'testimonial') {
        $title = 'Enter Client Name';
    }elseif($screen->post_type === 'service') {
        $title = 'Enter Service Name';
    }elseif($screen->post_type === 'teammember') {
        $title = 'Enter Member Name';
    }
    return $title;
}

add_filter( 'enter_title_here', 'ms_change_enter_title_here' );


function ms_get_page_link($TEMPLATE_NAME){
    $url = null;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $TEMPLATE_NAME
    ));
    if(isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}


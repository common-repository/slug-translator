<?php
/*
Plugin Name: Slug Translator
Plugin URI: https://prajwol-kc.com.np/
Description: Slug Translate from Multi Language Post Title to English(en).
Version: 1.2.0
Author: prajwolpkc
Author URI: https://prajwolkc.com.np/
License: MIT
 */

// To prevent calling the plugin directly
if (!function_exists('add_action')) {
    echo 'Please don&rsquo;t call the plugin directly. Thanks :)';
    exit;
}


add_filter('wp_insert_post_data', 'slugtranslator_save_post_callback' , 99, 2 );

if (!function_exists('slugtranslator_save_post_callback')) {

    function slugtranslator_save_post_callback(  $data, $postarr  )
    {
            $post_title =  $data['post_title'];
            if (strlen($post_title) != mb_strlen($post_title, 'utf-8')) {

                $post_title = urlencode($post_title);
                $response = wp_remote_post("https://translation.googleapis.com/language/translate/v2?target=en&key=AIzaSyBv_D_R95XuzLpSFWg-vs4q34E-6lRXNYY&q=".$post_title);
                $body = wp_remote_retrieve_body($response);

                $jsonData = json_decode($body);

                $new_slug = sanitize_title($jsonData->data->translations[0]->translatedText);

                $data['post_name'] =  $new_slug;
            }
            return $data;
    }
}

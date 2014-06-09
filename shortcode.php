<?php

/**
 * SHORTCODE OUTPUT
 */
function oypo_output($atts) {
   extract(shortcode_atts(array(
      'type' => '',
      'id' => '',
      'wl' => '',
      'trans' => '1',
      'nonav' => '1',
      'css' => ''
   ), $atts));
   
   $identical = $id;
   
   //Mapid or userid
   if($type == 'map'){
    $out_id = "var mapid='".$identical."';";
   }elseif($type == 'user'){
    $out_id = "var userid='".$identical."'";    
   }elseif($type == 'school'){
    $out_id = "";
   }

   //Transparcency
   if($trans == 1) {
    $out_trans = "var transparency=1;";
   }else{
    $out_trans = "";
   }
   //Whitelable sending
   if($wl != ""){
    $out_wl = "var wl='".$wl."';.";
   }
   //No mapnavigation
   if($nonav == 0 && $type == 'map' ){
    $out_nav = "var nonav=0;";
   }elseif($nonav == 1 &&  $type == 'map'){
    $out_nav = "var nonav=1;";
   }else{
    $out_nav = "";
   }
   //Custom css link
   if($css != NULL){;
    $array = get_headers($css);
    $string = $array[0];
    if(strpos($string,"200")) {
        $out_css = "var css='".$css."';";
    } else {
        $out_css = "";
    }
    }else{
        $out_css = "";
    }

   
$output = "
        <script type=\"text/javascript\">
        var mode='" .$type."';
        ". $out_id ."
        ". $out_trans ."
        ". $out_wl."
        ". $out_nav ."
        ". $out_css ."
        </script>
        <script type=\"text/javascript\" src=\"".plugins_url()."/oypie/js/oypie.js\"></script>
        <div id=\"pixxer_iframe\"></div>";
        
        return $output;
}




add_shortcode('oypo', 'oypo_output');?>
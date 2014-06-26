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
      'css' => '',
      'colors' => ''
   ), $atts));
   
   $identical = $id;
   
   //Mapid or userid
   if($type == 'map'){
    $out_id = "var mapid='".$identical."';
    ";
   }elseif($type == 'user'){
    $out_id = "var userid='".$identical."';
    ";    
   }elseif($type == 'school'){
    $out_id = "";
   }

   //Transparcency
   if($trans == 1) {
    $out_trans = "var transparency=1;
    ";
   }else{
    $out_trans = "";
   }
   //Whitelable sending
   if($wl != ""){
    $out_wl = "var wl='".$wl."';
    ";
   }
   //No mapnavigation
   if($nonav == 0 && $type == 'map' ){
    $out_nav = "var nonav=0;
    ";
   }elseif($nonav == 1 &&  $type == 'map'){
    $out_nav = "var nonav=1;
    ";
   }else{
    $out_nav = "";
   }
   //Custom css link
   if($css != NULL){
    $array = get_headers($css);
    $string = $array[0];
    if(strpos($string,"200")) {
        $out_css = "var css='".$css."';
        ";
    } else {
        $out_css = "";
    }
    }else{
        $out_css = "";
    }
    //Custom colors BETA
    if($colors != NULL){
        $colors = explode(' ', $colors);
   
        $out_colors['1'] = "var kleur1='#".$colors[0]."';
        ";
        $out_colors['2'] = "var kleur2='#".$colors[1]."';
        ";
        $out_colors['3'] = "var kleur3='#".$colors[2]."';
        ";
        $out_colors['4'] = "var kleur4='#".$colors[3]."';
        ";
        $out_colors['5'] = "var kleur5='#".$colors[4]."';
        ";
        $out_colors['6'] = "var kleur6='#".$colors[5]."';
        ";
        
    }else{
        $out_colors = "";
    }

   
$output = "
        <script type=\"text/javascript\">
        var mode='" .$type."';
        ". $out_id.$out_trans.$out_wl.$out_nav.$out_css.$out_colors['1'].$out_colors['2'].$out_colors['3'].$out_colors['3'].$out_colors['5'].$out_colors['6']."
        </script>
        <script type=\"text/javascript\" src=\"//www.oypo.nl/pixxer/api/templates/1207a.js\"></script>
        <div id=\"pixxer_iframe\"></div>";
        
        return $output;
}


function oypo_price($atts) {
   extract(shortcode_atts(array(
      'id' => '',
      'type' => '',
      'price' => '',
      'css' => ''
   ), $atts));
   
   if($css == 1) {
    function css_price() {
   wp_enqueue_style('price', plugins_url('/css/price.css', __FILE__));
   }
   add_action( 'wp_enqueue_scripts', 'css_price' );   
   $output = "<script type=\"text/javascript\">
var profileid='".$id."';
var showtype=".$type.";
var prices=".$price.";
</script>
<script type=\"text/javascript\" src=\"//www.oypo.nl/pixxer/api/templates/productinfo.js\"></script>
<div id=\"pixxer_products\"></div>
<link rel='stylesheet' href='".plugins_url()."/css/price.css' type='text/css' media='all' /> 
";

}else{

    
   $output = "
   <script type=\"text/javascript\">
var profileid='".$id."';
var showtype=".$type.";
var prices=".$price.";
</script>
<script type=\"text/javascript\" src=\"//www.oypo.nl/pixxer/api/templates/productinfo.js\"></script>
<div id=\"pixxer_products\"></div> 
";    
}
   return $output;

}

add_shortcode('oypo', 'oypo_output');
add_shortcode('oypo_price', 'oypo_price');

?>
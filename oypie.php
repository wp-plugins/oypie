<?php
/*
Plugin Name: OYPie
Plugin URI: http://sanderonlinemedia.nl/oypie;
Description: This plugin is for photographers who use the service 'OYPO'. In this plugin you can generate shortcodes for your pages and posts. The shortcode generator can you find under 'Tools' > 'SanderOnline'.
Version: 0.4
Author: SanderOnline Media / Sander Dijkstra
Author URI: http://sander-dijkstra.nl/
License: Commercial use
*/

include("shortcode.php");

// Add options page
add_action('admin_menu', 'oypie_menu');

wp_enqueue_script('jquery');

function oypie_menu() {
	add_submenu_page('tools.php', 'OYPie', 'OYPie', 'manage_options', 'oypie', 'oypie_settings_page');
}


function oypie_settings_page() {
?>

	<div class="wrap">
        <div class="right right-logo"><a target="_blank" href="http://sanderonlinemedia.nl/oypie"><img src="<?php plugins_url();?>/oypie/img/sanderonline.png"/></a><a target="_blank" href="http://oypo.nl/fotos-verkopen"><img src="<?php plugins_url();?>/oypie/img/oypo.png"/></a></div>
		<h2>OYPie Generator</h2>
		<p>Maak hier uw shortcode voor uw OYPO Gallerij.</p>
	
<form id='theForm'>
<table>
    <tr><td class="tabrow"><label>Layout</label></td><td>
    <input type="radio" name="type" id="bt1" value="user" /> Mappenoverzicht<br />
    <input type="radio" name="type" id="bt2" value="map"/> Specifieke fotomap<br />
    <input type="radio" name="type" id="bt3" value="school"/> Inlogkaartje
    </td></tr>
    <tr id="one" style="display: none;">
        <td><label>Gebruikersnaam</label></td>
        <td><input type="text" name="type_id" value=''/></td>
    </tr>
    <tr id="two" style="display: none;">
        <td><label>Map id</label></td>
        <td><input type="text" name="type_id" value=''/></td>
    </tr>
    <tr id="three" style="display: none;">
        <td><label>Mapnavigatie</label></td>
        <td><input type="checkbox" name="nonav" value="1"/>Inschakelen</td> 
    </tr>
    <tr>
        <td><label>Whitelabel verzending</label></td>
        <td><input type="radio" name="wl_check" id="bt6"/> Ja<br />
    <input type="radio" name="wl_check" id="bt7" checked=""/> Nee</td>
    </tr>
    <tr id="wl_true" style="display: none;">
        <td><label>Whitelabel-id</label></td>
        <td><input id="wl" type="text" name="wl" value=''/></td>
    </tr>
    <tr><td><label>Opmaak</label></td><td>
    <input type="radio" id="bt4" name="style" value="user" checked=""/> Standaard<br />
    <input type="radio" id="bt5" name="style" value="map"/> Eigen css<br />
    </td></tr>
    
    <tr id="css_true" style="display: none;">
        <td><label>Eigen css-link</label></td>
        <td><input id="css" type="text" name="css" value=''/></td>
    </tr>
    <tr>
        <td><label>Transparant</label></td>
        <td><input type="checkbox" name="trans" value="1"/></td>
    </tr>
    
    <tr>
        <td><label>Uw shortcode</label></td>
        <td>  <div class="well">
  [oypo <span id='typeDisplay'></span> 
  <span id='type_idDisplay'></span>
  <span id='wlDisplay'></span>
  <span id='nonavDisplay'></span>
  <span id='cssDisplay'></span>
  <span id='transDisplay'></span>
  ]
  </div></td>

    </tr>

</table>
    <div id="css_no"></div>
    <div id="wl_no"></div>

  </form>
<style>
.tabrow {
    width: 120px;
}

.right-logo {
    position: fixed;
    margin-top: -30px;
    right: 0px
} 

label {
    font-weight: bold;
}

.well {
        border: #ddd 1px solid;
        background: #fff;
        padding: 5px;
        font-family: Courier New;
        font-size: 14px;
}

</style>


		<br style="clear: left;" /><br style="clear: left;" />
        <hr />
		<h2>Voorbeelden</h2>
        <strong>Profiel</strong><br />
		<input type="text" name="mapid" id="mapid" style="width: 500px;" value='[oypo type="user" type_id="sanderonline"]'/><br />
        <strong>Album</strong><br />
        <input type="text" name="mapid" id="mapid" style="width: 500px;" value='[oypo type="map" type_id="DA3CB45464FF0C4A"]'/><br />
        <strong>Inlogkaartjes</strong><br />
        <input type="text" name="mapid" id="mapid" style="width: 500px;" value='[oypo type="school"]'/><br />
        <strong>Album met transparante achtergrond</strong><br />
        <input type="text" name="mapid" id="mapid" style="width: 500px;" value='[oypo type="map" type_id="DA3CB45464FF0C4A" trans="1"]'/><br />
        <strong>Album met whitelabel-verzending</strong><br />
        <input type="text" name="mapid" id="mapid" style="width: 500px;" value='[oypo type="map" type_id="DA3CB45464FF0C4A" wl="sanderonline"]'/><br />
        <strong>Album met eigen css-bestand</strong><br />
        <input type="text" name="mapid" id="mapid" style="width: 500px;" value='[oypo type="map" type_id="DA3CB45464FF0C4A" css="http://example.com/style.css"]'/><br />

	</div>
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
function user(one, two, three) {
    document.getElementById(one).style.display  = 'table-row';
    document.getElementById(two).style.display = 'none';
    document.getElementById(three).style.display = 'none';
}
function map(one, two, three) {
    document.getElementById(one).style.display  = 'none';
    document.getElementById(two).style.display = 'table-row';
    document.getElementById(three).style.display = 'table-row';
}

function hidden(one, two, three) {
    document.getElementById(one).style.display  = 'none';
    document.getElementById(two).style.display  = 'none';
    document.getElementById(three).style.display  = 'none';
} 

function css(one, two) {
    document.getElementById(one).style.display = 'table-row';
    document.getElementById(two).style.display = 'none';
} 

document.getElementById('bt1').addEventListener('click',function(e){
    user('one','two', 'three');
});
document.getElementById('bt2').addEventListener('click',function(e){
    map('one','two', 'three');
});
document.getElementById('bt3').addEventListener('click',function(e){
    hidden('two','one', 'three');
});

document.getElementById('bt4').addEventListener('click',function(e){
    css('css_no','css_true');
    $('#css').removeAttr('value');
});
document.getElementById('bt5').addEventListener('click',function(e){
    css('css_true','css_no');
});

document.getElementById('bt6').addEventListener('click',function(e){
    css('wl_true','wl_no');
});

document.getElementById('bt7').addEventListener('click',function(e){
    css('wl_no','wl_true');
    $('#wl').removeAttr('value');
});

}//]]>  
</script>

  <hr/>

    
  <div id='watchingIndicator'></div>
<script>

jQuery(function($) {
  var formTimer = 0,
      currentField,
      lastValue;

  updateWatchingIndicator();
  $('#theForm :input')
    .focus(startWatching)
    .blur(stopWatching)
    .keypress(updateCurrentField);

  function startWatching() {
    stopWatching();
    currentField = this;
    lastValue = undefined;
    formTimer = setInterval(updateCurrentField, 100);
    updateWatchingIndicator();
  }
  
  function stopWatching() {
    if (formTimer != 0) {
      clearInterval(formTimer);
      formTimer = 0;
    }
    currentField = undefined;
    lastValue = undefined;
    updateWatchingIndicator();
  }
  
  function isEmpty(str) {
    return (!str || 0 === str.length);
  }
    
  function updateCurrentField() {
    var thisValue;

    if (currentField && currentField.name) {
      thisValue = currentField.value || "";
      if (thisValue != lastValue && !isEmpty(thisValue)) {
        lastValue = thisValue;
        $('#' + currentField.name + 'Display').html(currentField.name+'="'+ thisValue +'"');
      }
    }
  }
  
  function updateWatchingIndicator() {
    var msg;
    
    if (currentField) {
      msg = "(Watching, field = " + currentField.name + ")";
    }
    else {
      msg = "(Not watching)";
    }
    $('#watchingIndicator').html(msg);
  }

});
</script>
<?php
}?>
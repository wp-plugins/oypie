
	<div class="wrap">
		<h1>OYPie <small>Albumgenerator</small></h1>
		<p>Maak hier uw shortcode voor uw OYPO gallerij.</p>
  
        <form id='theForm'>
<table>
    <tr><td class="tabrow"><label>Layout*</label></td><td>
    <input type="radio" name="type" id="bt1" value="user" /> Mappenoverzicht<br />
    <input type="radio" name="type" id="bt2" value="map"/> Specifieke fotomap<br />
    <input type="radio" name="type" id="bt3" value="school"/> Inlogkaartje
    </td></tr>
    <tr id="one" style="display: none;">
        <td><label>Gebruikersnaam</label></td>
        <td><input type="text" name="id" value=''/></td>
    </tr>
    <tr id="two" style="display: none;">
        <td><label>Map id</label></td>
        <td><input type="text" name="id" value=''/></td>
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
    <input type="radio" disabled=""/> Eigen kleuren <small><a target="_blank" href="<?php echo admin_url()?>admin.php?page=oypie_help#colors">Klik hier</a> voor deze optie.</small><br />
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
  <span id='idDisplay'></span>
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
     <div class="alert-message alert-message-warning"><p><b>Instructie:</b> Selecteer de code hierboven, en plak deze in de 'Tekst'-modus van de tekst-editor. Als deze code wordt geplakt in de 'Wysiwyg'-modus wordt het album niet weergeven! </p></div>
    <div class="alert-message alert-message-danger"><p><b>Let op:</b> Vanwege het OYPO Framework kan u maximaal <b>1</b> album per pagina weergeven. Deze plugin ondersteunt dus geen meerdere albums per pagina. Als u wel meerdere albums op een pagina heeft, dan wordt de laatste weergeven. Als u de reguliere OYPO-plugin gebruikt dan dit eventuele fouten opleveren.</p></div>
    <?php echo file_get_contents('http://apps.sanderonlinemedia.nl/oypie-notices.php') ?>

<style>
.tabrow {
    width: 120px;
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

.alert-message
{
    background: #fff;
    margin: 20px 0;
    padding: 1px 1px 1px 5px;
    border-left: 3px solid #eee;
}
.alert-message-info
{
    border-color: #5bc0de;
}
.alert-message-info b {
    color: #5bc0de;
}
.alert-message-danger
{
    border-color: #d9534f;
}
.alert-message-danger b {
    color: #d9534f;
}
.alert-message-warning
{
    border-color: #f0ad4e;
}
.alert-message-warning b {
    color: #f0ad4e;
}

#row {margin-left:-15px;margin-right:-15px}
#row:before,#row:after { content:" ";display:table;}
#box {width:50%; float:left; position:relative;min-height:1px;padding-left:15px;padding-right:15px}
</style>

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
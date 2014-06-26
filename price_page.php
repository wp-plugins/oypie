
	<div class="wrap">
		<h1>OYPie <small>Prijslijstgenerator</small></h1>
		<p>Maak hier uw shortcode voor uw prijslijst/productenlijst.</p>
  
        <form id='theForm'>
<table>
    <tr><td><label>Opmaak*</label></td><td>
    <input type="radio" id="bt4" name="type" value="0" /> Uitgebreid<br />
    <input type="radio" id="bt5" name="type" value="1"/> Compact<br />
    </td></tr>
    <tr>
        <td><label>Fotoprofiel*</label></td>
        <td><input type="text" name="id" value=''/></td>
    </tr>
    <tr>
        <td><label>Prijs*</label></td>
        <td><input type="radio" name="price" id="bt6" value="1"/> Ja<br />
    <input type="radio" name="price" id="bt7" value="0" /> Nee</td>
    </tr>
    <tr>
        <td><label>Heldere opmaak</label></td>
        <td><input type="checkbox" name="css" id="bt6" value="1"/> Activeren <small>**</small><br />
    </tr>

      <td><label>Uw shortcode</label></td>
        <td>  <div class="well">
  [oypo_price <span id='typeDisplay'></span> 
  <span id='idDisplay'></span>
  <span id='priceDisplay'></span>
  <span id='cssDisplay'></span>
  ]
  </div></td>
    </tr>

</table>

  </form>  
    <small>** = Hierbij wordt de tekstgrootte aangepast aan jouw thema en verdwijnt de omlijning lijnen.</small>

     <div class="alert-message alert-message-warning"><p><b>Instructie:</b> Selecteer de code hierboven, en plak deze in de 'Tekst'-modus van de tekst-editor. Als deze code wordt geplakt in de 'Wysiwyg'-modus wordt het album niet weergeven! </p></div>
    <div class="alert-message alert-message-danger"><p><b>Let op:</b> Vanwege het OYPO Framework kan u maximaal <b>1</b> prijslijst per pagina weergeven. Deze plugin ondersteunt dus geen meerdere albums per pagina. Als u wel meerdere albums op een pagina heeft, dan wordt de laatste weergeven. Als u de reguliere OYPO-plugin gebruikt dan dit eventuele fouten opleveren.</p></div>
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
</style>
	</div>
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
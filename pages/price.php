    <?php 
    
    function oypie_checked($var, $stand, $normal){
        if($var == $stand){
            return 'checked=""';
        }elseif($normal == 'true'){
            return 'checked=""';
        }
    }
    
    ?>
<?php if($_POST){
    
    $type = $_POST['type'];
    $id = $_POST['id'];
    $style = $_POST['style'];
    $price = $_POST['price'];
    
    /**
     * SET TYPE AND ID
     */
    if($id){
        $output = '[oypo_price type="'.$type.'" id="'.$id.'" price="'.$price.'"';
    }
    /**
     * OPTIONAL CSS
     */
    if($style == 1){
        $output = $output.' css="1"';
    }
    
    /**
     * AND WE'RE DONE
     */
     
     $output = $output.']';
}
?>    
    <h1>OYPie Generator</h1>    
    <div style="width: 90%;" class="postbox">
    <div class="inside">
    <h2>Prijslijstgenerator</h2>
    <hr />
    <p>Uw prijslijst shortcode precies goed hebben? Maak hem hier. Er zit ook een versimpelde generator in de WYSISWYG-editor. Te herkennen aan <span class=""><span class="dashicons dashicons-camera"></span><small><span class="dashicons dashicons-arrow-down"></span></small></span>.</p>
    <form id="theForm" action="#price" method="POST">
        <table>
            <tr>
                <td><label>Fotoverkoopprofiel ID</label></td>
                <td colspan="3">
                    <input name="id" type="text" placeholder="Uw verkoopprofiel-ID" value="<?php echo $id?>" />
                </td>          
            </tr>
            <tr>
                <td style="min-width: 150px;"><label>Type</label></td>
                <td style="width: 25%;"><input type="radio" name="type" value="1" <?php echo oypie_checked($type, 1, true)?> /> Compact</td>
                <td colspan="2" style="width: 25%;"><input type="radio" name="type" value="0" <?php echo oypie_checked($type, 0, false)?>/> Uitgebreid</td>         
            </tr>
            <tr>
                <td><label>Prijzen weergeven</label></td>
                <td style="width: 25%;"><input type="radio" name="price" value="0" <?php echo oypie_checked($price, 0, true)?> /> Ja</td>
                <td colspan="2" style="width: 25%;"><input type="radio" name="price" value="1" <?php echo oypie_checked($price, 1, false)?>/> Nee</td>
      
            </tr>
            <tr>
                <td><label>Aanvullende opmaak</label></td>
                <td style="width: 25%;"><input type="radio" name="style" value="1" <?php echo oypie_checked($style, 1, false)?> /> Ja</td>
                <td style="width: 25%;"><input type="radio" name="style" value="0" <?php echo oypie_checked($style, 0, true)?>/> Nee</td>
                <td><small>De aanvullende opmaak haalt de OYPO-reclame weg, en de overige opmaak waardoor de prijslijst zich aanpast aan uw layout.</small></td>
            </tr>
            <tr><td colspan="4"><input type="submit" name="submit" id="submit" class="button button-primary" value="Maak code"  /></td></tr>
        </table>
    </form>
    </div>
    </div>

    <?php if($output) {?>
    <div style="width: 90%;" class="postbox">
    <div class="inside">
    <h2>Uw shortcode</h2>
    <hr />
    <code><?php echo $output;?></code>
    <hr />
    Deze shortcode kan u op elke pagina, nieuwsbericht en dergelijke plakken. Of gebruik de versimpelde shortcode generator in de WYSIWYG-editor.
    </div>
    </div>
    <?php } ?>
        <!--- THINGS FOR THE OYPIE PAGE -->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3&appId=511881472190380";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- PAGE STARTS HERE -->
    <h1>OYPie Helppagina</h1>
    <div style="width: 90%;" class="postbox">
    <div class="inside">
    <h2>Algemene informatie</h2>
    <hr/>
    <p>Welkom bij OYPie 1.1.2! De shortcode generators zijn terug in het menu.
    En hebben ook een plaats gevonden in de WYSIWYG-editor. Je vindt ze bij dit icoontje <span class="dashicons dashicons-camera"></span><small><span class="dashicons dashicons-arrow-down"></span></small>.
    Ook kan je nu de shortcodes in ook in de normale WYSIWYG-editor plakken vanwege de vorige update.
    Op deze pagina vindt u veel informatie betreft de plugin die u verder kan helpen. </p>
    <div class="alert-message alert-message-success"><p><b>Nieuw in deze versie</b> Shortcode generators in de WYSIWYG-editor. Stel uw voorkeursinstellingen in en voorkom veel overbodig werk! </p></div>
    <div class="alert-message alert-message-warning"><p><b>Veranderd in deze versie:</b> Shortcodegenerators in het menu zijn uitgebreid en geupdate waardoor u de shortcodes niet meer in TEXT-editor hoeft te plakken. </p></div>
    </div>
    </div>
    
    <div style="width: 90%;" class="postbox">
    <div class="inside">
    <h2>Ontwikkelaar</h2>
    <hr/>
    <p>Deze plugin wordt u aangeboden door <a target="_blank" href="http://sanderonlinemedia.nl">SanderOnline Media</a>. Deze plugin heeft verder geen banden met OYPO, en gebruikt alleen de door hun aangeboden publieke middelen. </p>
    <div class="fb"><div class="fb-page" data-href="https://www.facebook.com/sanderonlinemedia" data-width="500" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/sanderonlinemedia"><a href="https://www.facebook.com/sanderonlinemedia">SanderOnline Media</a></blockquote></div></div>
    </div></div>
    </div>
        
    <div style="width: 90%;" class="postbox">
    <div class="inside">
    <h2>Shortcode informatie</h2>
    <hr/>
    <p>Op deze pagina staan alle mogelijke shortcode opties voor optimaal gebruik van de OYPie plugin.</p>
        <table>
            <thead>
                <tr><th>Wat</th><th>Code</th><th class="code">[oypo]</th><th class="code">[oypo_price]</th></tr>
            </thead>
            <tbody>
                <tr><td class="left">ID</td><td class="code">id=""</td><td>Gebruikersnaam of albumid</td><td>Fotoprofiel id</td></tr>
                <tr><td class="left">Type</td><td class="code">type=""</td><td>'album','user' of 'school'</td><td>'0' of '1'</td></tr>
                <tr><td class="left">Prijs</td><td class="code">price=""</td><td class="nvt">Niet van toepassing</td><td>'0' of '1'</td></tr>
                <tr><td class="left">Mapnavigatie</td><td class="code">nonav=""</td><td>'0' of '1'</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left">Css</td><td class="code">css=""</td><td>Link naar een css bestand</td><td>'0' of '1'</td></tr>
                <tr><td class="left">Transparant</td><td class="code">trans=""</td><td>'0' of '1'</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left">Whitelabel verzending</td><td class="code">wl=""</td><td>Whitelabel id</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left"><a href="#colors">Kleuren</a></td><td class="code">colors=""</td><td>'fffff 54545f ffffff 666666 00bbff f0f0f0' of andere kleuren</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left">Voorkeursinstellingen</td><td class="code">pref=""</td><td>'0' of '1'</td><td class="nvt">Niet van toepassing</td></tr>

            </tbody>
        
        </table>
        <div class="alert-message alert-message-danger"><p><b>Let op!</b> Per pagina kan u maximaal <b>1 prijslijst</b>  en <b>1 album</b> weergeven. Deze plugin ondersteunt dus geen meerdere albums per pagina. Het is niet aangeraden om deze plugin samen met de plugin van OYPO te draaien.</p></div>
        </div>
        </div>

        <div style="width: 90%;" class="postbox">
        <div class="inside">
        <h2>Shortcode voorbeelden</h2>
        <table>
            <thead>
                <tr><th>Resultaat</th><th>Code</th></tr>
            </thead>
            <tbody>
                <tr><td class="left">Profiel</td><td class="code">[oypo type="user" id="sanderonline"]</td></tr>
                <tr><td class="left">Album</td><td class="code">[oypo type="map" id="DA3CB45464FF0C4A"]</td></tr>
                <tr><td class="left">Inlogkaartjes</td><td class="code">[oypo type="school"]</td></tr>
                <tr><td class="left">Album met whitelabel verzending</td><td class="code">[oypo type="map" id="DA3CB45464FF0C4A" wl="sanderonline"]</td></tr>
                <tr><td class="left">Album met eigen css-bestand</td><td class="code">[oypo type="map" id="DA3CB45464FF0C4A" css="http://example.com/style.css"]</td></tr>
                <tr><td class="left">Album met eigen kleuren</td><td class="code">[oypo type="map" id="DA3CB45464FF0C4A" colors="fffff 54545f ffffff 666666 00bbff f0f0f0""]</td></tr>
                <tr><td class="left">Uitgebreide productentabel zonder prijs</td><td class="code">[oypo_price type="0" id="OYPO" price="0"]</td></tr>
                <tr><td class="left">Compacte productenlijst met prijs</td><td class="code">[oypo_price type="1" id="OYPO" price="1"]</td></tr>
            </tbody>
        
        </table>
        </div>
        </div>
        
        <div style="width: 90%;" class="postbox">
        <div class="inside">
        <h2>Veel gestelde vraggen</h2>
        <hr/>
        <p><strong>Waar vindt ik de generators?</strong><br />
        In de WYSIWYG-editor vindt u de generator in de bovenste balk. Gekenmerkt met <span class="btn"><span class="dashicons dashicons-camera"></span><small><span class="dashicons dashicons-arrow-down"></span></small></span>. Hieronder zit een menu waarbij u kan kiezen voor Albums of Prijslijsten met daaronder de generator die de rest voor u afhandeld.
        </p>
        <p><strong>Waar vindt ik mijn album-id?</strong><br />
        Het album-id van uw album vindt bij <a target="_blank" href="https://www.oypo.nl/content.asp?path=eanbaokb&f=2&f2=0">Beheer Fotomappen</a> in uw OYPO account. 
        Daar klikt u een album aan, dan verschijnt er een venster rechts daarvan met in een grijs vak het Map-ID.
        Een voorbeeld van een Map-ID is 'A428958601F536D8'. 
        Het map-ID bestaat altijd uit 16 karakters met alleen hoofdletters en cijfers.
        </p>
        <p><strong>Waar vindt ik het verkoopprofiel-id?</strong><br />
        Het verkoopprofiel-id van uw verkoopprofiel vindt bij <a target="_blank" href="https://www.oypo.nl/content.asp?path=eanbaokb&f=1&f2=0">Verkoopprofielen</a> in uw OYPO account. 
        Daar klikt u een het verkoopprofiel naar keuze aan, en dan opent een nieuwe pagina.
        Ga naar het tabblad Extra functies en u ziet het verkoopprofiel onderaan staan in grijs vak.
        Het verkoopprofiel-ID bestaat altijd uit 16 karakters met alleen hoofdletters en cijfers.
        </p>
        <div class="alert-message alert-message-warning"><p><b>Ondersteuning</b> Komt u er niet helemaal uit? Of gaat het fout? Neem dan contact op met info (at) sanderonlinemedia.nl, dan helpen wij u graag. </p></div>
        </div>
        </div>
        
    <?php 
    wp_enqueue_script('wp-color-picker');
    wp_enqueue_style( 'wp-color-picker' );
    
    function color_standard($post, $stand){
        if($post == null){
            return $stand;
        }else{
            return $post;
        }
    }
    ?>
    <div style="width: 90%;" class="postbox">
    <div class="inside">
    <h2 id="colors">Kleurengenerator</h2>
    <hr />
    <p>Hieronder kan u de kleuren kiezen voor uw OYPie albums. Door het onderstaande toe te voegen aan uw shortcodes krijgt de gallerij de kleuren naar uw keuze.</p>
    <form action="#colorpicker" method="POST">
        <table>
            <tr>
                <td>Kleur 1</td>
                <td><input name="kleur1" type="text" id="colorpicker1" value="<?php echo color_standard($_POST['kleur1'], '#ffffff');?>" data-default-color="#ffffff"></td>
                <td>Achtergrond <small>Kleur maakt niet uit als u transparant heeft ingeschakeld</small></td>
            </tr>
            <tr>
                <td>Kleur 2</td>
                <td><input name="kleur2" type="text" id="colorpicker2" value="<?php echo color_standard($_POST['kleur2'], '#f0f0f0');?>" data-default-color="#f0f0f0"></td>
                <td>Achtergrondkleur van de blokken</td>
            </tr>
                        <tr>
                <td>Kleur 3</td>
                <td><input name="kleur3" type="text" id="colorpicker3" value="<?php echo color_standard($_POST['kleur3'], '#666666');?>" data-default-color="#666666"></td>
                <td>Kleur van de tekts</td>
            </tr>
            <tr>
                <td>Kleur 4</td>
                <td><input name="kleur4" type="text" id="colorpicker4" value="<?php echo color_standard($_POST['kleur4'], '#00bbff');?>" data-default-color="#00bbff"></td>
                <td>Kleur van de links en buttons</td>
            </tr>
            <tr>
                <td>Kleur 5</td>
                <td><input name="kleur5" type="text" id="colorpicker5" value="<?php echo color_standard($_POST['kleur5'], '#54544f');?>" data-default-color="#54544f"></td>
                <td>Achtergrondkleur van de titelbalken</td>
            </tr>
            <tr>
                <td>Kleur 6</td>
                <td><input name="kleur6" type="text" id="colorpicker6" value="<?php echo color_standard($_POST['kleur6'], '#ffffff');?>" data-default-color="#ffffff"></td>
                <td>Voorgrondkleur van de titelbalken</td>
            </tr>
            <tr><td colspan="3"><?php submit_button( 'Maak code' ); ?></td></tr>
        </table>
    </form>
    <?php if($_POST['kleur1'] != '') {
        $output = $_POST['kleur1'].' '.$_POST['kleur2'].' '.$_POST['kleur3'].' '.$_POST['kleur4'].' '.$_POST['kleur5'].' '.$_POST['kleur6'];
        $output = str_replace("#", "", $output);
        echo "<strong>Uw code:</strong></br>";
        echo "<code>colors=\"".$output."\"</code><br />";
        echo "Deze code kan u toevoegen aan uw shortcode voor een album, albumoverzicht of inlogpagina.";
    }?>
    </div>
    </div>
    
    <script type="text/javascript">
    jQuery(document).ready(function($) {   
        $('#colorpicker1').wpColorPicker();
        $('#colorpicker2').wpColorPicker();
        $('#colorpicker3').wpColorPicker();
        $('#colorpicker4').wpColorPicker();
        $('#colorpicker5').wpColorPicker();
        $('#colorpicker6').wpColorPicker();
    });             
    </script>
    <?php
    
    ?>
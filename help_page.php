<h1>OYPie <small>Shortcode informatie</small></h1>
<p>Op deze pagina staan alle mogelijke shortcode opties voor optimaal gebruik van de OYPie plugin.</p>

        <style>
        table {
            background: #ffffff;
            border-collapse: collapse;
            width: 70%;
            text-align: center;
        }
        
        td, th {
            width: 25%;
        }
        
        table, th, td{
            border: 1px solid lightgrey;
            padding: 5px;
        }

        tbody .code {
            color: #BF0000;
            font-family: Courier New;
            text-align: left;
        }
        
        thead > .code {
            color: #BF0000;
            font-family: Courier New;
            text-align: center;
        }
        
        .nvt {
            color: #8A3333;
            background: #FACACA;
            text-align: center;
        }
        
        .left {
            text-align: left;
        }
        
        code {
            background: inherit;
            color: #BF0000;
            font-family: Courier New;
            text-align: center;
        }
        
        .alert-message
        {
            background: #fff;
            margin: 20px 0;
            padding: 1px 1px 1px 5px;
            border-left: 3px solid #eee;
        }
        .alert-message-warning
        {
            border-color: #f0ad4e;
        }
        .alert-message-warning b {
            color: #f0ad4e;
        }
        .alert-message-danger
        {
            border-color: #d9534f;
        }
        .alert-message-danger b {
            color: #d9534f;
        }
        
        </style>

        <table>
            <thead>
                <tr><th></th><th>Code</th><th class="code">[oypo]</th><th class="code">[oypo_price]</th></tr>
            </thead>
            <tbody>
                <tr><td class="left">ID</td><td class="code">id=""</td><td>Gebruikersnaam of albumid</td><td>Fotoprofiel id</td></tr>
                <tr><td class="left">Type</td><td class="code">type=""</td><td>'album','user' of 'school'</td><td>'0' of '1'</td></tr>
                <tr><td class="left">Prijs</td><td class="code">price=""</td><td class="nvt">Niet van toepassing</td><td>'0' of '1'</td></tr>
                <tr><td class="left">Mapnavigatie</td><td class="code">nonav=""</td><td>'0' of '1'</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left">Css</td><td class="code">css=""</td><td>Link naar een css bestand</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left">Transparant</td><td class="code">trans=""</td><td>'0' of '1'</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left">Whitelabel verzending</td><td class="code">wl=""</td><td>Whitelabel id</td><td class="nvt">Niet van toepassing</td></tr>
                <tr><td class="left"><a href="#colors">Kleuren</a></td><td class="code">colors=""</td><td>'fffff 54545f ffffff 666666 00bbff f0f0f0' of andere kleuren</td><td class="nvt">Niet van toepassing</td></tr>


            </tbody>
        
        </table>
        <div class="alert-message alert-message-danger"><p><b>Let op!</b> Per pagina kan u maximaal <b>1 prijslijst</b>  en <b>1 album</b> weergeven. Deze plugin ondersteunt dus geen meerdere albums per pagina. Het is niet aangeraden om deze plugin samen met de plugin van OYPO te draaien.</p></div>
        <div class="alert-message alert-message-warning"><p><b>Ondersteuning</b> Komt u er niet helemaal uit? Of gaat het fout? Neem dan contact op met info (at) sanderonlinemedia.nl, dan helpen wij u graag. </p></div>
        <hr/>

		<h1><small>Voorbeeld shortcodes</small></h1>
        
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
        <hr />
        <h1 id="colors"><small>Kleurenschema</small></h1>
        <p>Als u de kleuren van de fotogallerij wilt veranderen kan dit. Bij de <a target="_blank" href="http://www.oypo.nl/content.asp?path=oamzcdn1">gallerij generator van OYPO</a> kan u deze kleuren immers ook kiezen. Als u bij de generator de kleuren heeft gekozen krijgt waarschijnlijk iets te zien wat hierop lijkt:</p>
        <code>&#60;script type="text/javascript"&#62;
var mode='user';
var userid='sanderonline';
var kleur1='#ffffff';
var kleur2='#54544f';
var kleur3='#ffffff';
var kleur4='#666666';
var kleur5='#00bbff';
var kleur6='#f0f0f0';
&#60;/script&#62;
&#60;script type="text/javascript" src="//www.oypo.nl/pixxer/api/templates/1207a.js"&#62;&#60;/script&#62;
&#60;div id="pixxer_iframe"&#62;&#60;/div&#62;
</code>
        <p>Hier is te zien dat kleur1 tot kleur6 worden vastgesteld. Om deze kleuren ook in de shortcode te verwerken gebruiken, is de colors="" zo opgedeeld.</p>
        <code>colors="kleur1 kleur2 kleur3 kleur4 kleur5 kleur6"</code><br />
        <p>Om de kleuren uit het voorbeeld hier aan toe te voegen moet de variabelen achter de kleur(1 t/m 6) hierin op de plek worden gezet. Hierdoor krijgt je dit:</p>
        <code>colors="fffff 54545f ffffff 666666 00bbff f0f0f0"</code>
        <p>Deze opsomming kan je zo in je shortcode gebruiken.</p>
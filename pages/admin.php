<!-- Define variables & function -->
<?php

    $endpointLink = get_home_url() . '/wp-json/afterbuy-woocommerce-plugin/version';

?>

<!-- Add custom css -->
<link rel="stylesheet" href="<?php echo plugins_url( 'afterbuy-woocommerce-plugin/css/style.css' ) ?>">

<!-- Add admin page html -->
<div class="admin-page-wrapper">
    <div class="page-wrapper">
        <div class="content-wrapper">
            <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
            <p>Herzlich Willkommen bei der Schnittstellenlösung der J&J Ideenschmiede zwischen Afterbuy und WooCommerce!</p>
            <h2>Sie nutzen bereits unsere Schnittstellenlösung?</h2>
            <p>Zur Verifizierung des Shop Systems auf Verfügbarkeit und richtige Versionierung wird dieses PlugIn für die Installation der Schnittstelle J&J Afterwoo zwischen Afterbuy und WooCommerce zu Kommunikationszwecken benötigt.</p>
            <p>Hier finden Sie den Link zu dem API Endpunkt, den wir mit diesem Plugin generieren, um die Versionierung Ihres Systems abzufragen.</p>
            <div class="endpoint-preview">
                <p><a href="<?php echo $endpointLink ?>" title="<?php echo $endpointLink ?>"><?php echo $endpointLink ?></a></p>
            </div>
            <h2>Sie haben noch keine Schnittstellenanbindung von uns?</h2>
            <p>Kein Problem! Gern bieten wir Ihnen unsere Schnittstellenlösung zwischen Afterbuy und WooCommerce an, sodass Sie automatisiert die relevanten Datensätze zwischen den Systemen austauschen können.</p>
            <p>Nähere Informationen zu unserer Schnittstellenlösung sowie Kaufmöglichkeiten finden Sie <a href="https://schnittstellen24.de/produkt/jj-afterwoo/" title="J&J Afterwoo">hier</a>.</p>
            <p>Folgende Schritte sind zu befolgen, um die Schnittstellenanbindung zu realisieren:</p>
            <h3>1. Schnittstelle im Onlineshop bestellen</h3>
            <p>Bestellen Sie bequem in unserem <a href="https://schnittstellen24.de/produkt/jj-afterwoo/" title="Onlineshop">Onlineshop</a> die Schnittstellenlösung. Sie haben die Auswahl zwischen einer vollumfänglichen Schnittstellenlösung und einer Bestellrückführung.</p>
            <h3>2. Dokumentation erhalten und Afterbuy auf die Schnittstellenanbindung vorbereiten</h3>
            <p>Nachdem Sie die Schnittstellenlösung erhalten haben, gehen wir alles weitere persönlich mit Ihnen durch, um das Wertemapping durchzugehen und die Systeme auf die Anbindung vorzubereiten. Hierbei legen wir besonderen Wert auf persönliche Kommunikation, um Sie vollumfänglich abzuholen und die Anbindung Erfolgreich zu realisieren.</p>
            <p>Sie haben Fragen oder benötigen Hilfe? Kontaktieren Sie gern unseren <a href="mail:support@jj-ideenschmiede.de" title="support@jj-ideenschmiede.de">Support</a>!</p>
        </div>
        <div class="sidebar-wrapper">
             <figure class="logo-wrapper">
                <img src="<?php echo plugins_url( 'afterbuy-woocommerce-plugin/img/logo.svg' ) ?>" alt="J&J Ideenschmiede GmbH">
            </figure>
            <div class="support-wrapper">
                <h2>Unser Support</h2>
                <p>Wir sind Montags - Freitags von<br>08:00 bis 18:00 Uhr für Sie erreichbar.
                <p class="contact-paragraph">Tel.: <a href="tel:004941528903739" title="+49 4152 8903730">+49 4152 8903730</a></p>
                <p class="contact-paragraph">Mail: <a href="mailto:support@jj-ideenschmiede.de" title="support@jj-ideenschmiede.de">support@jj-ideenschmiede.de</a></p>
            </div>
        </div>
    </div>
</div>

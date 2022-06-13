<?php

?>
 <section class="kontakt">
    <div class="row text">
        <h4>Lorem, ipsum.</h4>
        <h2>Kontaktformular Headline</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, excepturi<br>consectetur adipisicing elit. Illum, exceptur</p>
    </div>

    <div id="validation-messages-container"></div>

    <form id="contact-form" action="<?php echo esc_url( get_permalink() ); ?>"
        method="post">

        <input type="hidden" name="contact_form">

        <div class="row">
            <div class="col">
                <div class="form-section">
                    <label for="firma"></label>
                    <input type="text" id="firma" name="firma"  placeholder="Firma">
                </div>

                <div class="form-section">
                    <label for="nachname"></label>
                    <input type="text" id="nachname" name="nachname"  placeholder="Nachname">
                </div>

                <div class="form-section">
                    <label for="email"></label>
                    <input type="text" id="email" name="email"  placeholder="Email">
                </div>
            </div>
            <div class="col">
                <div class="form-section">
                    <label for="vorname"></label>
                    <input type="text" id="vorname" name="vorname" placeholder="Vorname">
                </div>
            
                <div class="form-section">
                    <label for="telefon"></label>
                    <input type="number" id="telefon" name="telefon" placeholder="Telefon">
                </div>
            
                <div class="form-section">
                    <label for="produktbeschreibung"></label>
                    <input type="text" id="produktbeschreibung" name="produktbeschreibung" placeholder="Produktbeschreibung erstellen">
                </div>
            </div>
        </div>

        <div class="row submitBtn">
            <input type="submit" id="contact-form-submit" value="<?php echo esc_attr( 'Jetzt anfrage stellen', 'forma' ); ?>">
        </div>

    </form>
    <p>Ihre Daten werden nicht an Dritte weitergegebeen.</p>

</section>

<?php echo do_shortcode('[contact-form]'); ?>




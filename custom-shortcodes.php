
<?php 
    function display_contact_form(){
      

        if ( isset( $_POST['contact_form'] ) ) {

            $firma = isset( $_POST['firma'] ) ? sanitize_text_field( $_POST['firma'] ) : '';
            $nachname = isset( $_POST['nachname'] ) ? sanitize_text_field( $_POST['nachname'] ) : '';
            $email = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
            $vorname = isset( $_POST['vorname'] ) ? sanitize_text_field( $_POST['vorname'] ) : '';
            $telefon = isset( $_POST['telefon'] ) ? sanitize_text_field( $_POST['telefon'] ) : '';
            $produktbeschreibung   = isset( $_POST['produktbeschreibung'] ) ? sanitize_textarea_field( $_POST['produktbeschreibung'] ) : '';
    
        
            //Slanje mejla
            $mail    = get_option( 'admin_email' );
            $subject = 'New message from ' . $vorname . ' ' . $nachname;
            $produktbeschreibung = $produktbeschreibung . "\r\n\r\n" . 'Additional information about the customer: ' . "\r\n" .  $vorname . ' ' . $nachname . "\r\n" . $mail . "\r\n" . $telefon; 

            echo "<script>console.log('Console: " . $mail . "' );</script>";
            wp_mail( $mail, $subject, $produktbeschreibung);
        
        }

    }
    add_shortcode('contact-form', 'display_contact_form');
   
?>


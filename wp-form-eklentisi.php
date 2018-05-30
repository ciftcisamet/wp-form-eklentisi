<?php

/*
* Plugin Name: WP Form Eklentisi
* Description: Örnek bir form içerek ve shortcode yardımıyla çalışan Wordpress eklentisi.
* Version: 1.0.0
* Author: Samet Çiftci
* Author URI: https://sametciftci.me
*/

function form_gonder(){
?>

<form>
İsim: <input type="text" name="isim"><br>
Soyisim: <input type="text" name="soyisim"><br>
Mesaj: <textarea name="mesaj"> Mesajınızı buraya girin...</textarea>
</form>

<?php

}
add_shortcode('wp-form', 'form_gonder');
?>

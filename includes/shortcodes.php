<?php

if (!defined('ABSPATH')) exit;

add_shortcode('gmbsim', function () {

ob_start();

?>

<div class="gmbsim-box">

<h2>جستجوی شماره ایرانسل</h2>

<input
id="gmbsim-pattern"
type="text"
placeholder="مثال : 723*2373">

<button id="gmbsim-search-btn">

جستجو

</button>

<hr>

<div id="gmbsim-results"></div>

</div>

<?php

return ob_get_clean();

});
<?php
# user is sent to register page through output lib
 require_once('bookmark_fns.php');
 do_html_header('User Registration');

 display_registration_form();

 do_html_footer();
?>
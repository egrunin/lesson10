<?php ob_start();
$page_title = 'COMP1006 Beer Store | Home';
require('header.php');

?>

<div class="jumbotron">
<h1> Welcome to the Beer Store</h1>
<p> Hello this application uses HTML5, PHP, MySql</P>
</div>

<?php require('footer.php'); 
ob_flush ?>
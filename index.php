<?php
include('include/class.translator.php');
$language = new Translator();


?>
<html>
    <head>
        <title>AfrasiabMarion</title>
    </head>
    <body>
        <center><h3>Translator!</h3></center>
	<?php
	$language->getIntro();
	?>
    </body>
</html>
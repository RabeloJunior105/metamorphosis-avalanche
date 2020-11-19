<?php

include 'app/core/connection.class.php';
include 'app/core/session.class.php';
include 'app/core/title.class.php';
include 'app/core/url.class.php';
include 'app/core/notify.class.php';
include 'app/core/components.class.php';

$db         = new Connection();
$url        = new URL();
$session    = new Session();
$components = new Components();

$db = $db->connect();
$session->start();

$components->header();

?>


<div class="content">
	<div class="container-fluid">
		<?php $url->page(); ?>
	</div>
</div>


<?php $components->footer(); ?>
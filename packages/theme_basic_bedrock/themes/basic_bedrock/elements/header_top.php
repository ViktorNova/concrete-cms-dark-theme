<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>" data-bs-theme="dark">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    View::element('header_required', [
        'pageTitle' => isset($pageTitle) ? $pageTitle : '',
        'pageDescription' => isset($pageDescription) ? $pageDescription : '',
        'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
    ]);
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php $cp = new Permissions($c); if($cp->canViewToolbar()){?>
	    <style media="screen">
	        nav.navbar {margin-top:48px;}
	    </style>
	<?php } ?>

</head>
<body>

<div class="theme-basic-bedrock <?php echo $c->getPageWrapperClass()?>">

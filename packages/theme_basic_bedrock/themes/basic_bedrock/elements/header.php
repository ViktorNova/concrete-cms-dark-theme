<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Area\GlobalArea;
$view->inc('elements/header_top.php');
?>

<header class="sidewide-header">
    <div class="container sidewide-header-container">
        <div class="row site-top-bar">
            <div class="col-md-2">
                <?php
                $a = new GlobalArea('Logo');
                $a->setBlockLimit(1);
                $a->display();
                ?>
            </div>
			<div class="col-md-10 nav-container">
				<nav class="navbar">
			        <?php
			            $a = new GlobalArea('Navigation');
			            $a->setBlockLimit(1);
			            $a->display($c);
			            ?>
				</nav>
            </div>
        </div>
    </div>
</header>



<?php
defined('C5_EXECUTE') or die('Access Denied.');
use Concrete\Core\Area\GlobalArea;
$view->inc('elements/header_top.php');
?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php
                $a = new GlobalArea('Logo');
                $a->setBlockLimit(1);
                $a->display();
                ?>
            </div>
			<div class="col-md-7 nav-container container">
				<nav class="navbar fixed-top">
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



<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php
use Concrete\Core\Area\GlobalArea;
?>

<footer>
    <section class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    $area = new GlobalArea('Footer Column 1');
                    $area->display();
                    ?>
                </div>
                <div class="col-md-2 col-6">
                    <?php
                    $area = new GlobalArea('Footer Column 2');
                    $area->display();
                    ?>
                </div>
                <div class="col-md-2 col-6">
                    <?php
                    $area = new GlobalArea('Footer Column 3');
                    $area->display();
                    ?>
                </div>
                <div class="col-md-5 col-12">
                    <hr class="d-md-none">
                    <?php
                    $area = new GlobalArea('Footer Column 4');
                    $area->display();
                    ?>

                </div>
            </div>
        </div>
    </section>
</footer>

<?php $view->inc('elements/footer_bottom.php');?>

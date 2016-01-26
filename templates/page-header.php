<?php
use Roots\Sage\Titles;

$title = Titles\title();

if( $title != '' ) {
    ?>
    <div class="page-header">
        <h1><?php echo Titles\title(); ?></h1>
    </div>
    <?php
}

<?php

use Components\AdvantagesQuery\AdvantagesQueryFactory;

$Advantages = AdvantagesQueryFactory::create();

?>


<div class="container boxes-reasons">
    <div class="row" data-aos="fade-up" data-aos-offset="0">
        <?php $Advantages->thePosts(); ?>
    </div>
</div>


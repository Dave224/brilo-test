<?php
use Components\Program\ProgramFactory;
$Program = ProgramFactory::create();
?>

<ol class="program-list">
    <li data-aos="fade-up"><?= $Program->getContent(); ?><?php dump($Program->getProgramCategory()); ?></li>
</ol>
<?php
use Components\Advantages\AdvantagesFactory;
$Advantege = AdvantagesFactory::create();

?>
<?php if (!empty($Advantege->getTitle())) :?>
<div class="col-6 col-sm-4 col-lg-2 box-reason">
	<div class="box-reason__inner">
		<h2 class="box-reason__heading"><?= $Advantege->getTitle(); ?></h2>
		<span class="box-reason__fancy-bar"></span>
	</div>
</div>
<?php endif; ?>
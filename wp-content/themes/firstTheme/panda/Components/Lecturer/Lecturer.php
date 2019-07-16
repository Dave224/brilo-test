<?php
use Components\Lecturer\LecturerFactory;
$Lecturer = LecturerFactory::create();

?>
<div class="col-6 col-md-4 col-lg-3 lecturer-block">
	<div class="lecturer-block__inner">
		<?php if ($Lecturer->isParamsThumbnailsrc()) :?>
			<div class="lecturer-block__img"><img src="<?= $Lecturer->getThumbnailSrc();?>" alt="person" /></div>
		<?php endif; ?>

		<?php if (!empty($Lecturer->getTitle())) :?>
			<div class="lecturer-block__name"><?= $Lecturer->getTitle();?></div>
		<?php endif; ?>

		<?php if ($Lecturer->isParamsWww()) :?>
			<a href="<?= $Lecturer->getLecturerWWW();?>" target="_blank" class="lecturer-block__web"><?= $Lecturer->getLecturerWWW();?></a>
		<?php endif; ?>

		<?php if ($Lecturer->isParamsDescription()) :?>
			<div class="lecturer-block__about"><?= $Lecturer->getLecturerDescription();?></div>
		<?php endif; ?>
	</div>
</div>
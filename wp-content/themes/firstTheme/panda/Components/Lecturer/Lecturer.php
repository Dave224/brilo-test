<?php
use Components\Lecturer\LecturerFactory;
$Lecturer = LecturerFactory::create();

?>
<div class="col-6 col-md-4 col-lg-3 lecturer-block">
	<div class="lecturer-block__inner">
		<div class="lecturer-block__img"><img src="<?= $Lecturer->getThumbnailSrc();?>" alt="person" /></div>
		<div class="lecturer-block__name"><?= $Lecturer->getTitle();?></div>
		<a href="<?= $Lecturer->getLecturerWWW();?>" target="_blank" class="lecturer-block__web"><?= $Lecturer->getLecturerWWW();?></a>
		<div class="lecturer-block__about"><?= $Lecturer->getLecturerDescription();?></div>
	</div>
</div>
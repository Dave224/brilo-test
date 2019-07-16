<?php
use Components\Faq\FaqFactory;
$Faq = FaqFactory::create();

?>
<?php if (!empty($Faq->getTitle())) :?>
	<article class="col-md-6 col-xl-5 faq-item">

		<div class="faq-item-inner">

			<h3 class="faq-item-label"><?= $Faq->getTitle(); ?></h3>

			<div class="faq-item-copy">
				<div class="faq-item-label"><?= $Faq->getTitle(); ?></div>

				<?php if (!empty($Faq->getContent())) :?>
					<div class="faq-item-text"><?= $Faq->getContent(); ?></div>
				<?php endif; ?>
			</div>
		</div>

	</article>
<?php endif; ?>
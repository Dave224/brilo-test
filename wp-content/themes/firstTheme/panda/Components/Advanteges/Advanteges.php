<?php
use Components\AdvantegesQuery\AdvantegesQueryFactory;
use Components\ProductsQuery\ProductsQueryFactory;

use Components\Advanteges\AdvantegesFactory;
$Advantege = AdvantegesFactory::create();
$Products = ProductsQueryFactory::create();


$Advanteges = AdvantegesQueryFactory::create();

//foreach ($Advanteges->getPosts() as $post){
//	var_dump($post);die;
//
//}

?>


<div class="container boxes-reasons">
	<div class="row" data-aos="fade-up" data-aos-offset="0">
		<div class="col-6 col-sm-4 col-lg-2 box-reason">
<!--			--><?php //$Advanteges->thePosts(); ?>
			<div class="box-reason__inner">
				<h2 class="box-reason__heading">  </h2>
				<span class="box-reason__fancy-bar"></span>
			</div>
		</div>
		<div class="col-6 col-sm-4 col-lg-2 box-reason">
			<div class="box-reason__inner">
				<h2 class="box-reason__heading">21 hodin</h2>
				<span class="box-reason__fancy-bar"></span>
			</div>
		</div>
		<div class="col-6 col-sm-4 col-lg-2 box-reason">
			<div class="box-reason__inner">
				<h2 class="box-reason__heading">Nejlepší odbornícíci</h2>
				<span class="box-reason__fancy-bar"></span>
			</div>
		</div>
		<div class="col-6 col-sm-4 col-lg-2 box-reason">
			<div class="box-reason__inner">
				<h2 class="box-reason__heading">Pro začátečníky ​​​​​​​a pokročilé</h2>
				<span class="box-reason__fancy-bar"></span>
			</div>
		</div>
		<div class="col-6 col-sm-4 col-lg-2 box-reason">
			<div class="box-reason__inner">
				<h2 class="box-reason__heading">Jedinečné v ČR</h2>
				<span class="box-reason__fancy-bar"></span>
			</div>
		</div>
		<div class="col-6 col-sm-4 col-lg-2 box-reason">
			<div class="box-reason__inner">
				<h2 class="box-reason__heading">Získání certifikátu</h2>
				<span class="box-reason__fancy-bar"></span>
			</div>
		</div>
	</div>
</div>
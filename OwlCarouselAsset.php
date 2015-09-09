<?php
namespace maybeworks\owlcarousel;

use \yii\web\AssetBundle;

class OwlCarouselAsset extends AssetBundle {

	public $sourcePath = '@bower/owl.carousel/dist';

	public $css = [
		'assets/owl.carousel.min.css',
	];

	public $js = [
		'owl.carousel.min.js',
	];
}

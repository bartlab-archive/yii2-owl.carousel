<?php

namespace maybeworks\owlcarousel;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class OwlCarouselWidget extends Widget {

	public $options = [];

    /**
     * fullPage.js config
     * @var array
     * @see http://www.owlcarousel.owlgraphic.com/docs/api-options.html
     */
    public $clientOptions = [];

    public function init() {
		if (!isset($this->options['id'])) {
			$this->options['id'] = $this->getId();
		}
		echo Html::beginTag('div', $this->options);
    }

    /**
     * @inheritdoc
     */
    public function run() {
		echo Html::endTag('div');
        $this->registerClientScript();
    }

    protected function registerClientScript() {
		$id = $this->options['id'];

		$view = $this->getView();
		OwlCarouselAsset::register($view);

		$options = Json::encode($this->clientOptions);
		$view->registerJs("jQuery('#" . $id . "').owlCarousel($options)");
    }
}
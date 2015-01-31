<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace krai500\relcopy;

use yii\web\AssetBundle;
/**
 * Description of RelCopyAsset
 *
 * @author Kraisorn.t
 */
class RelCopyAsset extends AssetBundle
{
	public $js = [
		'relCopy.jquery.js',      
    ];
	
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
	
	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		parent::init();
	}
}

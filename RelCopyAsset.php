<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace caplet\assets;

use yii\web\AssetBundle;
/**
 * Description of RelCopyAsset
 *
 * @author Kraisorn.t
 */
class RelCopyAsset extends AssetBundle
{
	public $basePath = '@webroot';
    public $baseUrl = '@web/../themes/caplet/assets';
   
    public $js = [
		'js/relCopy.jquery.js',
      
    ];
}

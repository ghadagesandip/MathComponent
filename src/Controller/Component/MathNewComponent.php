<?php
namespace Sandip\Controller\Component;

use Cake\Controller\Component;

class MathNewComponent extends Component{

    protected $_defaultConfig = [
        'p1' => 1,
        'p2' => 20,
    ];


    public function initialize(array $config){
        $this->_defaultConfig = array_merge($this->_defaultConfig,$config);
    }

    public function doAddition($p1,$p2){
        return $p1+$p2;
    }
}
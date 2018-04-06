<?php
/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Intelipost\Autocomplete\Block;

class Url extends \Magento\Framework\View\Element\Template
{

public function __construct(
    \Magento\Framework\View\Element\Template\Context $context
)
{
    $this->setTemplate('url.phtml');

    parent::__construct($context);
}

public function getAjaxUrl()
{
    return $this->getUrl('intelipost_autocomplete/search/index');
}

}



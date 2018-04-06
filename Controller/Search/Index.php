<?php
/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Intelipost\Autocomplete\Controller\Search;

class Index extends \Intelipost\Autocomplete\Controller\Adminhtml\Search\Index
{

protected $_autocompleteHelper;

public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Intelipost\Autocomplete\Helper\Api $autocompleteHelper
)
{
    $this->_autocompleteHelper = $autocompleteHelper;

    parent::__construct ($context, $autocompleteHelper);
}

}


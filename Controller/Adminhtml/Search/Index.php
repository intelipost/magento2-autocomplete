<?php
/*
 * @package     Intelipost_Autocomplete
 * @copyright   Copyright (c) 2016 Gamuza Technologies (http://www.gamuza.com.br/)
 * @author      Eneias Ramos de Melo <eneias@gamuza.com.br>
 */

namespace Intelipost\Autocomplete\Controller\Adminhtml\Search;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_autocompleteHelper;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Intelipost\Autocomplete\Helper\Api $autocompleteHelper
    ) {
        $this->_autocompleteHelper = $autocompleteHelper;

        parent::__construct($context);
    }

    public function execute()
    {
        $postcode = $this->getRequest()->getParam('postcode');
        $postcode = preg_replace('#[^0-9]#', "", $postcode);
        if (empty($postcode) || strlen($postcode) != 8) {
            return;
        }

        $result = $this->_autocompleteHelper->getCEPLocationAddressComplete($postcode);
        if (!$result || !is_array($result)) {
            return;
        }

        if (array_key_exists('content', $result)) {
            $this->getResponse()->setBody(json_encode($result ['content']));
        }
    }
}

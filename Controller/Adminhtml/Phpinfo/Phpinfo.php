<?php
/**
 * Copyright © Wagento.
 * Author: Joe Shelton
 */

namespace Wagento\Phpinfo\Controller\Adminhtml\Phpinfo;


class Phpinfo extends \Magento\Backend\App\Action
{
    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Output phpinfo() in an iframe defined in another controller
     */
    public function execute()
    {
        phpinfo();
    }
}
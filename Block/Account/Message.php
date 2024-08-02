<?php

namespace Indexiz\DisableCheckout\Block\Account;

use Magento\Customer\Block\Account\SortLinkInterface;
use Magento\Framework\View\Element\Html\Link;

class Message extends Link implements SortLinkInterface
{
    /**
     * @return string
     */
    public function getMessageLink()
    {
        return $this->getUrl('important-message');
    }

    /**
     * {@inheritdoc}
     * @since 101.0.0
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }
}

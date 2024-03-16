<?php

namespace Inventionstar\ZipChecker\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Inventionstar\ZipChecker\Model\Grid',
            'Inventionstar\ZipChecker\Model\ResourceModel\Grid'
        );
    }
}

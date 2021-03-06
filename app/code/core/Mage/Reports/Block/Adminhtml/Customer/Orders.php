<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Reports
 * @copyright   Copyright (c) 2012 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Backend customers by orders report content block
 *
 * @category   Mage
 * @package    Mage_Reports
 * @author     Magento Core Team <core@magentocommerce.com>
 */

class Mage_Reports_Block_Adminhtml_Customer_Orders extends Mage_Backend_Block_Widget_Grid_Container
{
    /**
     * Define children block group
     *
     * @var string
     */
    protected $_blockGroup = 'Mage_Reports';

    protected function _construct()
    {
        $this->_controller = 'report_customer_orders';
        $this->_headerText = $this->helper('Mage_Reports_Helper_Data')->__('Customers by number of orders');
        parent::_construct();
        $this->_removeButton('add');
    }
}

<?php
/**
 * This file is part of the FIREGENTO project.
 *
 * FireGento_MageSetup is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     1.1.4
 */
/**
 * Newsletter Subscriber Status Grid Container
 *
 * @category  FireGento
 * @package   FireGento_MageSetup
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2013 FireGento Team (http://www.firegento.de). All rights served.
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   $Id:$
 * @since     1.1.4
 */
class FireGento_MageSetup_Block_Adminhtml_Newsletter_Subscriber_Status
    extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Class constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->_controller = 'adminhtml_newsletter_subscriber_status';
        $this->_blockGroup = 'magesetup';
        $this->_headerText = Mage::helper('magesetup')->__('Newsletter Subscribers Status History');
        parent::__construct();
        $this->_removeButton('add');
    }
}

<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Properties;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Properties
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Properties implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Option\ArrayPool $sourceModelPool, \Magento\Widget\Model\Widget $widget, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $sourceModelPool, $widget, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        if (!$pluginInfo) {
            return parent::toHtml();
        } else {
            return $this->___callPlugins('toHtml', func_get_args(), $pluginInfo);
        }
    }
}

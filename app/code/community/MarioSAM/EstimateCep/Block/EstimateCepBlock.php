<?php
/**
 * Class EstimateCepBlock
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * This class collect the data to show them in frontend.
 */

class MarioSAM_EstimateCep_Block_EstimateCepBlock extends Mage_Core_Block_Template
{
    /**
     * EstimateCepBlock constructor.
     *
     */
    protected function _construct()
    {
        parent::_construct();
    }

    /***************************************************************************
     *  GENERAL CONFIG
     */
    
    /**
     * Check if this module is active or not.
     * 
     * @return boolean
     */
    public function getEnabled()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/enabled');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepOrigin()
    {
        return Mage::getStoreConfig('shipping/origin/postcode');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepModes()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/list_codes');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepFree()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/cep_free');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepFreeOverPrice()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/cep_free_value');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepFreeDays()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/cep_free_days');
    }
    
    /**
     * 
     * @return type
     */
    public function getProductWeight()
    {
        $currentProduct = Mage::registry('current_product');
        
        return $currentProduct->getWeight();
    }

    /**
     * CSS place to insert the message in product detail page
     * 
     * @return text
     */
    public function getCepPosition()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/cep_position');
    }
    
    /**
     * Get cookie session and send to frontend.
     * 
     * @return cookie session
     */
    public function getCookieManager()
    {
        return Mage::getModel('core/cookie')->get('cep-correios');
    }
    
    /**
     * Get the price value of Product page detail
     *
     * @return double
     */
    public function getProductPrice()
    {
        $currentProduct = Mage::registry('current_product');

        //seria melhor usar uma constante nativa, mas nao encontrei.
        if ('configurable' == $currentProduct->getTypeId()) {
            return $currentProduct->getFinalPrice();
        }

        if ('bundle' == $currentProduct->getTypeId()) {
            $_priceModel = $currentProduct->getPriceModel();
            list($_minimalPriceTax, $_maximalPriceTax) = $_priceModel->getTotalPrices($currentProduct, null, null, false);
            //list($_minimalPriceInclTax, $_maximalPriceInclTax) = $_priceModel->getTotalPrices($_product, null, true, false);

            return $_minimalPriceTax;
        }

        if ('grouped' == $currentProduct->getTypeId()) {
            $regularPrice = 0;
            $usedProds = $currentProduct->getTypeInstance(true)->getAssociatedProducts($currentProduct);            
            foreach ($usedProds as $child) {
                if ($child->getId() != $currentProduct->getId()) {
                    $regularPrice += $child->getPrice();
                }
            }
            return $regularPrice;
        }

        return $currentProduct->getFinalPrice();
    }
    
    /**
     * 
     * @return type
     */
    public function getProductType()
    {
        $currentProduct = Mage::registry('current_product');

        return $currentProduct->getTypeId();
    }
    
    /**
     * Get custom css code to improve frontend product page.
     * 
     * @return textarea
     */
    public function getCssCustomCalculateCep()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/css_cep');
    }
    
    /**
     * Get custom javascript code to improve frontend product page.
     * 
     * @return textarea
     */
    public function getJsCustomCalculateCep()
    {
        return Mage::getStoreConfig('estimatecep/cep_load_values/js_cep');
    }
    
    /***************************************************************************
     *  CUSTOM SEND CONFIGURATION
     */
    
    /**
     * 
     * @return type
     */
    public function getCepEmpresa()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_nCdEmpresa');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepSenha()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_sDsSenha');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepComprimento()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_nVlComprimento');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepDiametro()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_nVlDiametro');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepAltura()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_nVlAltura');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepLargura()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_nVlLargura');
    }
    
    /**
     * 
     * @return type
     */
    public function getCepFormato()
    {
        return Mage::getStoreConfig('estimatecep/cep_send_config/cep_nCdFormato');
    }
}
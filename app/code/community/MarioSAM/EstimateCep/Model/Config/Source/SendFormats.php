<?php
/**
 * Class SendFormats
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
class MarioSAM_EstimateCep_Model_Config_Source_SendFormats
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'1', 'label'=>__('Box / Package')),
            array('value'=>'2', 'label'=>__('Roll / Prism')),
            array('value'=>'3', 'label'=>__('Envelope'))
        );
    }
}

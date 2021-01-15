<?php
/**
 * Class Countries
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
class MarioSAM_EstimateCep_Model_Config_Source_Countries
{ 
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'brazil', 'label'=>__('Brazil'))
        );
    }
}

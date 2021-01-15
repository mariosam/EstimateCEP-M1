<?php
/**
 * Class ListCodes
 * 
 * @author      MarioSAM <eu@mariosam.com.br>
 * @version     1.0.0
 * @date        2021/01
 * @copyright   Blog do Mario SAM
 * 
 * Give the new options value to config the system module.
 */
class MarioSAM_EstimateCep_Model_Config_Source_ListCodes
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'04510', 'label'=>__('04510 - PAC')),
            array('value'=>'41068', 'label'=>__('41068 - PAC')),
            array('value'=>'41106', 'label'=>__('41106 - PAC')),
            array('value'=>'04014', 'label'=>__('04014 - SEDEX')),
            array('value'=>'40010', 'label'=>__('40010 - SEDEX')),
            array('value'=>'40096', 'label'=>__('40096 - SEDEX')),
            array('value'=>'40436', 'label'=>__('40436 - SEDEX')),
            array('value'=>'40444', 'label'=>__('40444 - SEDEX')),
            array('value'=>'04790', 'label'=>__('04790 - SEDEX 10')),
            array('value'=>'40215', 'label'=>__('40215 - SEDEX 10')),
            array('value'=>'04804', 'label'=>__('04804 - SEDEX Hoje')),
            array('value'=>'40290', 'label'=>__('40290 - SEDEX Hoje')),
            array('value'=>'40045', 'label'=>__('40045 - SEDEX a Cobrar')),
            array('value'=>'04782', 'label'=>__('04782 - SEDEX 12')),
            array('value'=>'81019', 'label'=>__('81019 - e-SEDEX'))
        );
    }
}

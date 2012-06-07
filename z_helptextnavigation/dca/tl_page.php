<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');
// Expand pallettes for 'regular pages' 'intern forward pages' and 'extern forward pages'
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(',type', ',type,helptext', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['forward'] = str_replace(',type', ',type,helptext', $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
$GLOBALS['TL_DCA']['tl_page']['palettes']['redirect'] = str_replace(',type', ',type,helptext', $GLOBALS['TL_DCA']['tl_page']['palettes']['redirect']);

// define new 'helptext' field as an array
$GLOBALS['TL_DCA']['tl_page']['fields']['helptext'] = array
(
    'label'                   => array('Hilfstext', 'Text der unter dem Seitentitel in der Navigation angezeigt werden soll.'),
    'exclude'               => true,
    'inputType'            => 'textarea',
    'eval'                    => array('rows'=>20, 'cols'=>15, 'decodeEntities'=>true, 'rte'=>'tinyMCE', 'tl_class'=>'w100 clr')
);
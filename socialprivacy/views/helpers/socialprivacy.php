<?php
class SocialprivacyHelper extends AppHelper {
/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
    public $helpers = array(
        'Html',
        'Layout',
    );
/*
 * Types
 *
 * Shows bookmark links for these content types.
 *
 * @var array
 * @access public
 */
    var $types = array(
        'blog',
    );    

/**
 * Called after LayoutHelper::nodeMoreInfo()
 *
 * @return string
 */
	function afterNodeMoreInfo() {
		$output = '';
        if ($this->params['controller'] == 'nodes' &&
            $this->params['action'] == 'view' &&
            in_array($this->Layout->node('type'), $this->types)) {
            $output .= $this->Layout->View->element('socialprivacy', array(
                'plugin' => 'socialprivacy'
            ));
        }
        return $output;
    }
}
?>

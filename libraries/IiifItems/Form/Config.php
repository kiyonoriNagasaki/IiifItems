<?php

/**
 * The main plugin configuration form.
 * @package IiifItems
 * @subpackage Form
 */
class IiifItems_Form_Config extends Omeka_Form {
    /**
     * Sets up elements for this form.
     */
    public function init() {
        // Top-level parent
        parent::init();
        $this->applyOmekaStyles();
        $this->setAutoApplyOmekaStyles(false);
        // Enable automated HTTP-IIIF Bridge
        $this->addElement('text', 'iiifitems_bridge_prefix', array(
            'label' => __('IIIF Prefix'),
            'description' => __('The URL root of the HTTP-resolved IIIF server referencing this Omeka installation. Use {FILENAME} for a file name without the extension, {EXTENSION} for the file extension alone and {FULLNAME} for a file name with the extension.'),
            'value' => get_option('iiifitems_bridge_prefix'),
        ));
        // Mirador
        $this->addElement('text', 'iiifitems_mirador_path', array(
            'label' => __('Mirador Path'),
            'description' => __('URL to the directory holding the main mirador.js and supporting files.'),
            'value' => get_option('iiifitems_mirador_path'),
        ));
        $this->addElement('text', 'iiifitems_mirador_js', array(
            'label' => __('Mirador JS file'),
            'description' => __('Path to the main Mirador JS file, relative to the specified Mirador Path.'),
            'value' => get_option('iiifitems_mirador_js'),
        ));
        $this->addElement('text', 'iiifitems_mirador_css', array(
            'label' => __('Mirador CSS file'),
            'description' => __('Path to the main Mirador CSS file. Can be absolute (starting with http:// or https://) or relative to the specified Mirador Path.'),
            'value' => get_option('iiifitems_mirador_css'),
        ));
    }
}
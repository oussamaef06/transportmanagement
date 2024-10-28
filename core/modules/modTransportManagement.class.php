<?php
include_once DOL_DOCUMENT_ROOT . '/core/modules/DolibarrModules.class.php';

class modTransportManagement extends DolibarrModules {
    function __construct($db) {
        global $langs;
        $this->db = $db;
        $this->numero = 104001; // Unique ID
        $this->rights_class = 'transportmanagement';
        $this->family = "crm"; // Set the family to CRM
        $this->name = preg_replace('/^mod/i', '', get_class($this));
        $this->description = "Module for Transport Management";
        $this->version = '1.0';
        $this->const_name = 'MAIN_MODULE_'.strtoupper($this->name);
        $this->picto='transportmanagement@transportmanagement';
        $this->module_parts = array();
        $this->dirs = array('/transportmanagement');
        $this->config_page_url = array("transportmanagement_setup.php@transportmanagement");
        $this->langfiles = array("transportmanagement@transportmanagement");
        $this->depends = array();
        $this->requiredby = array();
        $this->conflictwith = array();
        $this->phpmin = array(5, 3);
        $this->need_dolibarr_version = array(3, 0);

        // Constants
        $this->const = array();

        // Define rights
        $this->rights = array();
        $r = 0;
        $this->rights[$r][0] = 104002;
        $this->rights[$r][1] = 'Read transport management';
        $this->rights[$r][2] = 'r';
        $this->rights[$r][3] = 0;
        $this->rights[$r][4] = 'read';
        $r++;

        // Define menus
        $this->menu = array();
        $r = 0;
        // Main menu entry
        $this->menu[$r] = array(
            'fk_menu' => 'fk_mainmenu=crm',
            'type' => 'top',
            'titre' => 'Transport Management',
            'mainmenu' => 'transportmanagement',
            'leftmenu' => 'transportmanagement_top',
            'url' => '/custom/transportmanagement/index.php',
            'langs' => 'transportmanagement@transportmanagement',
            'position' => 50010,
            'enabled' => '$conf->transportmanagement->enabled',
            'perms' => '1',
            'target' => '',
            'user' => 2
        );
        $r++;
        // Submenu entry for Drivers
        $this->menu[$r] = array(
            'fk_menu' => 'fk_mainmenu=transportmanagement',
            'type' => 'left',
            'titre' => 'Drivers',
            'mainmenu' => 'transportmanagement',
            'leftmenu' => 'transportmanagement_drivers',
            'url' => '/custom/transportmanagement/drivers/index.php',
            'langs' => 'transportmanagement@transportmanagement',
            'position' => 50011,
            'enabled' => '$conf->transportmanagement->enabled',
            'perms' => '1',
            'target' => '',
            'user' => 2
        );
        $r++;
        // Submenu entry for Vehicles
        $this->menu[$r] = array(
            'fk_menu' => 'fk_mainmenu=transportmanagement',
            'type' => 'left',
            'titre' => 'Vehicles',
            'mainmenu' => 'transportmanagement',
            'leftmenu' => 'transportmanagement_vehicles',
            'url' => '/custom/transportmanagement/vehicles/index.php',
            'langs' => 'transportmanagement@transportmanagement',
            'position' => 50012,
            'enabled' => '$conf->transportmanagement->enabled',
            'perms' => '1',
            'target' => '',
            'user' => 2
        );
        $r++;
        // Submenu entry for Missions
        $this->menu[$r] = array(
            'fk_menu' => 'fk_mainmenu=transportmanagement',
            'type' => 'left',
            'titre' => 'Missions',
            'mainmenu' => 'transportmanagement',
            'leftmenu' => 'transportmanagement_missions',
            'url' => '/custom/transportmanagement/missions/index.php',
            'langs' => 'transportmanagement@transportmanagement',
            'position' => 50013,
            'enabled' => '$conf->transportmanagement->enabled',
            'perms' => '1',
            'target' => '',
            'user' => 2
        );
    }

    function init($options = '') {
        $sql = array();

        // Add custom initialization SQL queries if needed

        return $this->_init($sql, $options);
    }

    function remove($options = '') {
        $sql = array();

        // Add custom removal SQL queries if needed

        return $this->_remove($sql, $options);
    }
}
?>

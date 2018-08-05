<?php

// custom/modules/Contacts/ContactsJjwg_MapsLogicHook.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class ContactsJjwg_MapsLogicHook {

    var $jjwg_Maps;
    function ContactsJjwg_MapsLogicHook() {
        $this->jjwg_Maps = get_module_info('jjwg_Maps');
    }

    function updateGeocodeInfo(&$bean, $event, $arguments) {
        // before_save
        if ($this->jjwg_Maps->settings['logic_hooks_enabled']) {
            $this->jjwg_Maps->updateGeocodeInfo($bean);
        }
    }

    function updateRelatedMeetingsGeocodeInfo(&$bean, $event, $arguments) {
        // after_save
        if ($this->jjwg_Maps->settings['logic_hooks_enabled']) {
            $this->jjwg_Maps->updateRelatedMeetingsGeocodeInfo($bean);
        }
    }

}

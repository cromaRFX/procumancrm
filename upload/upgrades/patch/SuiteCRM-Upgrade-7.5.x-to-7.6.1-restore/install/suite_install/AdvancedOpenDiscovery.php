<?php
function install_aod() {

    require_once('modules/Administration/Administration.php');

    global $sugar_config;

    $sugar_config['aod']['enable_aod'] = true;

    ksort($sugar_config);
    write_array_to_file('sugar_config', $sugar_config, 'config.php');

}
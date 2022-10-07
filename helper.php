<?php 
define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
function ccm_get_template_part($slug, $name = null)
{

do_action("ccm_get_template_part_{$slug}", $slug, $name);

$templates = array();
if (isset($name))
$templates[] = "{$slug}-{$name}.php";

$templates[] = "{$slug}.php";

ccm_get_template_path($templates, true, false);
}

function ccm_get_template_path($template_names, $load = false, $require_once = true)
{
$located = '';
foreach ((array) $template_names as $template_name) {
if (!$template_name)
continue;

/* search file within the PLUGIN_DIR_PATH only */
if (file_exists(PLUGIN_DIR_PATH . $template_name)) {
$located = PLUGIN_DIR_PATH . $template_name;
break;
}
}

if ($load && '' != $located)
load_template($located, $require_once);

return $located;
}
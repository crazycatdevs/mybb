<?php
/**
 * MyBB 1.8
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/about/license
 *
 */

/**
 * Upgrade Script: 1.8.22
 */

$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade50_dbchanges()
{
	global $output, $cache;

	$output->print_header("Updating Cache");

	echo "<p>Updating cache...</p>";

	$cache->delete("banned");

	$output->print_contents("<p>Click next to continue with the upgrade process.</p>");
	$output->print_footer("50_done");
}

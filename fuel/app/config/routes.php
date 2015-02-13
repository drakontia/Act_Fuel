<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'combatant/:encid' => 'combatant/view',
	'combatant/:encid/delete' => 'combatant/delete',
);

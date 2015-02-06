<?php	// Comment out lines of columns you do not want visible in tables.
$ctablecols = array(	// combatant_table
	//	"encid",
	"name",		// Remove this column at your own risk
	"ally",
	"starttime",
	//	"endtime",
	"duration",
	"damage",
    //	"damageperc",
	//	"kills",
	"healed",
	//	"healedperc",
	//	"critheals",
	//	"heals",
	//	"powerdrain",
	//	"dps",
	"encdps",
	//	"enchps",
	"hits",
	//	"crithits",
    //	"blocked",
    //	"misses",
	"swings",
	//	"healstaken",
	"damagetaken",
    "deaths",
	//"tohit"
);
$dtablecols = array(	// damagetype_table
				//	"encid",
				//	"combatant",
					"grouping",	// Remove this column at your own risk (do NOT place after 'type')
					"type",		// Remove this column at your own risk
				//	"starttime",
				//	"endtime",
					"duration",
					"damage",
					"encdps",
				//	"chardps",
				//	"dps",
					"average",
					"median",
					"minhit",
					"maxhit",
					"hits",
					"crithits",
					"blocked",
					"misses",
					"swings",
					"tohit",
					"averagedelay"
					);
$atablecols = array(	// attacktype_table
				//	"encid",
				//	"attacker",
				//	"victim",
				//	"swingtype",
					"type",		// Remove this column at your own risk
				//	"starttime",
				//	"endtime",
					"duration",
					"damage",
					"encdps",
				//	"chardps",
				//	"dps",
					"average",
					"median",
					"minhit",
					"maxhit",
					"resist",
					"hits",
					"crithits",
					"blocked",
					"misses",
					"swings",
					"tohit",
					"averagedelay"
					);
$stablecols = array(	// swing_table
				//	"encid",
					"stime",
					"attacker",
				//	"swingtype",
					"attacktype",
					"victim",
					"damagetype",
					"damage",
					"damagestring",
					"critical"
					);
?>

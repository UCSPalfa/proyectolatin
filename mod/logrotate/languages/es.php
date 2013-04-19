<?php
/**
 * Elgg log rotator language pack.
 *
 * @package ElggLogRotate
 */

$spanish = array(
	'logrotate:period' => 'Que tan seguido debe ser archivado el log del sistema?',

	'logrotate:weekly' => 'Una vez a la semana',
	'logrotate:monthly' => 'Una vez al mes',
	'logrotate:yearly' => 'Una vez al año',

	'logrotate:logrotated' => "Rotación del log\n",
	'logrotate:lognotrotated' => "Error rotando el log\n",
	
	'logrotate:delete' => 'Borrar logs archivados más antiguos de',

	'logrotate:week' => 'semana',
	'logrotate:month' => 'mes',
	'logrotate:year' => 'año',
		
	'logrotate:logdeleted' => "Log eliminado\n",
	'logrotate:lognotdeleted' => "Error eliminando el log\n",
);

add_translation("es", $spanish);

<?php

/**

 * Elgg log rotator language pack.

 *

 * @package ElggLogRotate

 */



$port = array(

	'logrotate:period' => 'Com que frequência o log do sistema deve ser arquivado?',



	'logrotate:weekly' => 'Uma vez por semana',

	'logrotate:monthly' => 'Uma vez por mês',

	'logrotate:yearly' => 'Uma vez por ano',



	'logrotate:logrotated' => "Log rotated\n",

	'logrotate:lognotrotated' => "Error rotating log\n",

	

	'logrotate:delete' => 'Excluir logs arquivados há mais tempo que um(a)',



	'logrotate:week' => 'mês',

	'logrotate:month' => 'semana',

	'logrotate:year' => 'ano',

		

	'logrotate:logdeleted' => "Log excluído\n",

	'logrotate:lognotdeleted' => "Erro durante exclusão do log\n",

);



add_translation("pt", $port);

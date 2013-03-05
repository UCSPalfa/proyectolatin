<?php
/**
 * Group Operators languages
 *
 * @package ElggGroupOperators
 */

$spanish = array(

	/**
	 * Titles
	 */
	"group_operators:title" => 'Moderadores de %s',
	"group_operators:manage" => 'Maneja moderadores de grupo',
	"group_operators:operators" => 'Moderadores',
	"group_operators:members" => 'Miembros',
	
	/**
	 * Menus
	 */
	"group_operators:operators:drop" => 'Eliminar privilegios',
	"group_operators:owner" => 'Es el propietario',
	"group_operators:owner:make" => 'Haz propietario',
	
	/**
	 * Form fields
	 */
	"group_operators:new" => 'Añade otro moderador',
	"group_operators:new:button" => 'Añade moderador',
	"group_operators:selectone" => 'selecciona uno...',
	
	/**
	 * System messages
	 */
	"group_operators:added" => '%s ha sido añadido satisfactoriamente como moderador del grupo',
	"group_operatros:add:error" => 'Ha sido imposible añadir %s como moderador del grupo',
	"group_operators:owner_changed" => '%s es el nuevo propietario',
	"group_operators:change_owner:error" => 'Sólo el propietario del grupo puede asignar un nuevo propietario',
	"group_operators:removed" => 'El moderador ha sido borrado satisfactoriamente',

);

add_translation("es", $spanish);

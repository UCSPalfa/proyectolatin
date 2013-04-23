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
	"group_roles:title" => 'Miembros de %s',
	"group_roles:manage" => 'Manejar roles de miembro',
	"group_roles:operators" => 'Roles',
	"group_roles:members" => 'Miembros',
	
	/**
	 * Menus
	 */
	"group_roles:member:drop" => 'Remover miembro',
	"group_roles:owner" => 'Es el propietario',
	"group_roles:owner:make" => 'Haz propietario',
	
	/**
	 * Form fields
	 */
	"group_roles:new" => 'Añadir otro miembro',
	"group_roles:new:button" => 'Añadir miembro',
	"group_roles:selectone" => 'seleccione uno...',
	
	/**
	 * System messages
	 */
	"group_roles:added" => '%s ha sido añadido satisfactoriamente como miembro del grupo',
	"group_operatros:add:error" => 'Ha sido imposible añadir a %s como miembro del grupo',
	"group_roles:owner_changed" => '%s es el nuevo propietario',
	"group_roles:change_owner:error" => 'Sólo el propietario del grupo puede asignar un nuevo propietario',
	"group_roles:removed" => 'El miembro del grupo ha sido borrado exitosamente',

);

add_translation("es", $spanish);

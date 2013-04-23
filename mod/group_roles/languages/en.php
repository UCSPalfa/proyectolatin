<?php
/**
 * Group Operators languages
 *
 * @package ElggGroupOperators
 */

$english = array(

	/**
	 * Titles
	 */
	"group_roles:title" => 'Members of %s',
	"group_roles:manage" => 'Manage member roles',
	"group_roles:operators" => 'Roles',
	"group_roles:members" => 'Members',
	
	/**
	 * Menus
	 */
	"group_roles:member:drop" => 'Remove member',
	"group_roles:owner" => 'Is the owner',
	"group_roles:owner:make" => 'Make owner',
	
	/**
	 * Form fields
	 */
	"group_roles:new" => 'Add another member',
	"group_roles:new:button" => 'Add member',
	"group_roles:selectone" => 'select one...',
	
	/**
	 * System messages
	 */
	"group_roles:added" => '%s successfully added as group member',
	"group_operatros:add:error" => 'It was impossible to add %s as group member',
	"group_roles:owner_changed" => '%s is the new owner',
	"group_roles:change_owner:error" => 'Only the community owner can assign a new owner',
	"group_roles:removed" => 'Member successfully removed',

);

add_translation("en", $english);

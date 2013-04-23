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
	"group_operators:title" => 'Moderators of %s',
	"group_operators:manage" => 'Manage moderators',
	"group_operators:operators" => 'Moderators',
	"group_operators:members" => 'Members',
	
	/**
	 * Menus
	 */
	"group_operators:operators:drop" => 'Drop privileges',
	"group_operators:owner" => 'Is the owner',
	"group_operators:owner:make" => 'Make owner',
	
	/**
	 * Form fields
	 */
	"group_operators:new" => 'Add another moderator',
	"group_operators:new:button" => 'Make moderator',
	"group_operators:selectone" => 'select one...',
	
	/**
	 * System messages
	 */
	"group_operators:added" => '%s successfully added as community moderator',
	"group_operatros:add:error" => 'It was impossible to add %s as community moderator',
	"group_operators:owner_changed" => '%s is the new owner',
	"group_operators:change_owner:error" => 'Only the community owner can assign a new owner',
	"group_operators:removed" => 'Moderator successfully removed',

);

add_translation("en", $english);

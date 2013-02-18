<?php


// Class source
class WritingGroup extends ElggGroup {

	protected function initializeAttributes() {
		parent::initializeAttributes();
		$this->attributes['subtype'] = 'writingGroup';
	}

	// more customizations here
}

register_elgg_event_handler('init', 'system', 'writingGroup_init');

function writingGroup_init() {

	register_entity_type('group', 'writingGroup');

	// Tell Elgg that group subtype "writingGroup" should be loaded using the WritingGroup class
	// If you ever change the name of the class, use update_subtype() to change it
	add_subtype('group', 'writingGroup', 'WritingGroup');
	
	$item = new ElggMenuItem('writingGroup', elgg_echo('writingGroup'), 'writingGroup/all');
	elgg_register_menu_item('page', $item);
	
	
}


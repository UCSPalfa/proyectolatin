<?php

$english = array(
   
    
    'latin:close' => 'Close',
    'Books' => 'Books',
    'Members' => 'Members',
    'Institutions:participating' => 'Institutions participating',
    'Institutions:collaborating' => 'Institutions collaborating',
    
    'writingGroups:members' => 'Group collaborators',
    'discussion:writinggroup' => 'Group discussion',
    'file:writinggroup' => 'Group files',
    'pages:writinggroup' => 'Group pages',
    'bookmarks:writinggroup' => 'Group bookmarks',
    'blog:writinggroup' => 'Group blogs',
    'writingGroups:member' => 'collaborators',
    'writingGroups:Members' => 'Collaborators',
    
    
    'au_subgroups:name' => "Writing group name",
    'au_subgroups:icon' => "Writing group icon (leave blank to leave unchanged)",
    
    'au_subgroups' => "Writing Groups",
    'au_subgroups' => "Writing Groups",
    'au_subgroups:subgroup' => "Writing Group",
    'au_subgroups:subgroups' => "Writing Groups",
    'au_subgroups:parent' => "Parent Community",
    'au_subgroups:add:subgroup' => 'Create a Writing Group',
    'au_subgroups:edit:subgroup' => 'Edit Writing Group', //po5i
    'au_subgroups:delete:subgroup' => 'Delete Writing Group', //po5i
    'au_subgroups:invite:subgroup' => 'Add users to Writing Group', //po5i
    'au_subgroups:policies:title' => 'Policies', //po5i
    'au_subgroups:policies:link' => 'http://www.google.com', //po5i
    'au_subgroups:nogroups' => 'No writing groups have been created',
    'au_subgroups:error:notparentmember' => "Users cannot join a writing group if they are not a member of the parent group",
    'au_subtypes:error:create:disabled' => "Writing groups creation has been disabled for this group",
    'au_subgroups:noedit' => "Cannot edit this writing group",
    'au_subgroups:subgroups:delete' => "Delete writing Group",
    'au_subgroups:delete:label' => "What should happen to the content of this writing group?  Any option selected will also apply to any subgroups that will be deleted.",
    'au_subgroups:deleteoption:delete' => 'Delete all content within this writing group',
    'au_subgroups:deleteoption:owner' => 'Transfer all content to the original creators',
    'au_subgroups:deleteoption:parent' => 'Transfer all content to the parent community',
    'au_subgroups:subgroup:of' => "Writing Group of %s",
    'au_subgroups:setting:display_alphabetically' => "Display personal group listings alphabetically?",
    'au_subgroups:setting:display_subgroups' => 'Show writing groups in standard group listings?',
    'au_subgroups:setting:display_featured' => 'Show featured groups sidebar on personal group listings?',
    'au_subgroups:error:invite' => "Action has been cancelled - the following users are not members of the parent group and cannot be invited/added.",
    'au_subgroups:option:parent:members' => "Members of the parent community",
    'au_subgroups:subgroups:more' => "View all Writing Groups",
    // group options
    'au_subgroups:group:enable' => "Subgroups: Enable Writing Groups for this group?",
    'au_subgroups:group:memberspermissions' => "Subgroups: Enable any member to create subgroups? (if no, only group admins will be able to create subgroups)",
    /*
     * Widget
     */
    'au_subgroups:widget:order' => 'Order results by',
    'au_subgroups:option:default' => 'Time Created',
    'au_subgroups:option:alpha' => 'Alphabetical',
    'au_subgroups:widget:numdisplay' => 'Number of subgroups to display',
    'au_subgroups:widget:description' => 'List subgroups for this group',
    /*
     * Move group
     */
    'au_subgroups:move:edit:title' => "Make this group a subgroup of another group",
    'au_subgroups:transfer:help' => "You can set this group as a subgroup of any other group you have permissions to edit.  If users are not a member of the new parent group, they will be removed from this group and sent a new invitation that will enroll them in the new parent group and all subgroups leading to this one. <b>This will also transfer any subgroups of this group</b>",
    'au_subgroups:search:text' => "Search Groups",
    'au_subgroups:search:noresults' => "No groups found",
    'au_subgroups:error:timeout' => "Search timed out",
    'au_subgroups:error:generic' => "An error has occurred with the search",
    'au_subgroups:move:confirm' => "Are you sure you want to make this a subgroup of another group?",
    'au_subgroups:error:permissions' => "You must have edit permissions for the subgroup and each parent up to the top.  Additionally, a group cannot move to a subgroup of itself.",
    'au_subgroups:move:success' => "Writing group has been moved successfully",
    'au_subgroups:error:invalid:group' => "Invalid group identifier",
    'au_subgroups:invite:body' => "Hi %s,

The group %s has been moved to a subgroup of the group %s.
As you are not currently a member of the new parent group you have been removed from
the subgroup.  You have been re-invited into the group, accepting the invitation will
automatically join you as a member of all parent groups.

Click below to view your invitations:

%s",
		'au_subgroups:invitations' => 'Writing Group invitations',
		'au_subgroups:invitations:pending' => 'Writing Group invitations (%s)',
		'au_subgroups:invitations:selecttoinvite' => "To find a person type one or more words.  If he/she is not a member of the network write his/her email and press TAB.",
		'wgroups:invite:body' => "Hi %s,
		
%s invited you to join the '%s' writing group. Click below to view your invitations:
		
%s",
		'wgroups:invitec:body' => "Hi %s,
		
%s invited you to join the '%s' writing group. First you must accept the invitation to join  %s community.

		Click below to view your invitations:
		
%s
\n
%s",
		
		'wgroups:invite:nouser:body' => "Hi,
		
You have been invited by %s to join the %s writing group.  

First you must register in %s site

%s

go to %s community and click on the Join button:

%s

and finally request membership in %s writing group

%s",
		
		'groups:invite:nouser:body' => "Hi,
		
You have been invited by %s to join the %s community.  

First you must register in %s site

%s

and then go to the community's page and click on the Join button:

%s
		",
		
		'groups:delete:subject:operator' => "Delete community notification",
		'groups:delete:body:operator' => "I deleted %s community.
		
		Message sent automatically to all moderators",
		
		'au_subgroups:invitations:note' => "Use left/right arrows, backspace, delete to navigate/remove boxes, and up/down/enter to navigate/add suggestions.",
		
		/**
		 * Form fields
		 */
		"groups:members:new" => 'Add another member',
		"groups:members:new:button" => 'Add member',
		"groups:members:selectone" => 'select one...',
		
		/**
		 * System messages
		 */
		"groups:members:added" => '%s successfully added as group member',
		"groups:members:add:error" => 'It was impossible to add %s as group member',
		"groups:members:owner_changed" => '%s is the new owner',
		"groups:members:change_owner:error" => 'Only the community owner can assign a new owner',
		"groups:members:removed" => 'Member successfully removed',
		"wgroups:removeuser" => 'Remove from writing group',
		"wgroups:members" => 'Group collaborators',
		"wgroups:invite:title" => "Invite people to this writing group",
		
);

add_translation("en", $english);

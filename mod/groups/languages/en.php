<?php
/**
 * Elgg groups plugin language pack
 *
 * @package ElggGroups
 * 
 */


$english = array(

    
        'community:interests' => 'Interests',
        'community:no:interests' => 'No interests yet',

	/**
	 * Menu items and titles
	 */
	'groups' => "Communities",
	'groups:owned' => "Communities I own",
	'groups:owned:user' => 'Communities %s owns',
	'groups:yours' => "My communities",
	'groups:user' => "%s's communities",
	'groups:all' => "All communities",
	'groups:add' => "Create a new community",
	'groups:edit' => "Edit community",
	'groups:delete' => 'Delete community',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitations' => 'Community invitations',
	'groups:invitations:pending' => 'Community invitations (%s)',

	'groups:icon' => 'Community icon (leave blank to leave unchanged)',
    
	'groups:name' => 'Community name',
    
        
    
    
	'groups:username' => 'Community short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description',
	'groups:briefdescription' => 'Brief description',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Community members',
	'groups:linkedTo' => 'Linked to',
	'groups:my_status' => 'My status',
	'groups:my_status:group_owner' => 'You own this community',
	'groups:my_status:group_member' => 'You are in this community',
	'groups:subscribed' => 'Community notifications on',
	'groups:unsubscribed' => 'Community notifications off',
    
        'community:no:books' => 'This community does not have Writing Groups yet',
        'community:no:members' => 'This community does not have members yet',
        'community:no:related' => 'This community is not related with other ones yet',
        'community:no:description' => 'This community does not have a description yet',
    
        'writingGroup:no:books' => 'This Writing Group does not have books yet',
        'writingGroup:no:members' => 'This Writing Group does not have members yet',
        'writingGroup:no:related' => 'This Writing Group is not related with other ones yet',
        'writingGroup:no:description' => 'This Writing Group does not have a description yet',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:related:more' => "View all related communities",
	'groups:book:more' => "View all books",
	'groups:membership' => "Community membership permissions",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this community.",
	'groups:widget:num_display' => 'Number of communities to display',
	'groups:widget:membership' => 'Community membership',
	'groups:widgets:description' => 'Display the communities you are a member of on your profile',
	'groups:noaccess' => 'No access to community',
	'groups:permissions:error' => 'You do not have the permissions for this',
	'groups:ingroup' => 'in the community',
	'groups:cantcreate' => 'You can not create a community. Only admins can.',
	'groups:cantedit' => 'You can not edit this community',
	'groups:saved' => 'Community saved',
	'groups:featured' => 'Featured communities',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured community.',
	'groups:unfeatured' => '%s has been removed from the featured communities.',
	'groups:featured_error' => 'Invalid community.',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join community',
	'groups:leave' => 'Leave community',
	'groups:invite' => 'Invite people',
	'groups:invite:title' => 'Invite people to this community',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:link' => 'Link to communities',
	'groups:links' => 'Linked to',
	'groups:links:more' => 'View all links',
	'groups:link:title' => 'Communities linked to this community',
	'groups:linkto' => "Link communities to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this community.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viagroups' => "via communities",
	'groups:group' => "Community",
	'groups:search' => "Search communities by tag",
	'groups:search:all' => "Search communities",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for communities tagged with '%s'",
	'groups:search:all:title' => "Results for communities containing '%s'",
	'groups:search:none' => "No matching communities were found",
	'groups:search_in_group' => "Search in this community",
	'groups:acl' => "Community: %s",

	'discussion:notification:topic:subject' => 'New community discussion post',
	'groups:notification' =>
'%s added a new discussion topic to %s:

%s
%s

View and reply to the discussion:
%s
',
	
	'discussion:notification:reply:body' =>
'%s replied to the discussion topic %s in the group %s:

%s

View and reply to the discussion:
%s
',

	'groups:activity' => "Community activity",
	'groups:enableactivity' => 'Enable community activity',
	'groups:activity:none' => "There is no community activity yet",

	'groups:notfound' => "Community not found",
	'groups:notfound:details' => "The requested community either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'item:object:groupforumtopic' => "Discussion topics",

	'groupforumtopic:new' => "Add discussion post",

	'groups:count' => "communities created",
	'groups:open' => "open community",
	'groups:closed' => "closed community",
	'groups:member' => "members",
	'groups:searchtag' => "Search for communities by tag",

	'groups:more' => 'More communities',
	'groups:none' => 'No communities',


	/*
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => 'Community members only',
	'groups:closedgroup' => 'This community has a closed membership.',
	'groups:closedgroup:request' => 'To ask to be added, click the "request membership" menu link.',
	'groups:visibility' => 'Who can see this community?',

	/*
	Group tools
	*/
	'groups:enableforum' => 'Enable community discussion',
	'groups:yes' => 'yes',
	'groups:no' => 'no',
	'groups:lastupdated' => 'Last updated %s by %s',
	'groups:lastcomment' => 'Last comment %s by %s',

	/*
	Group discussion
	*/
	'discussion' => 'Discussion',
	'discussion:add' => 'Add discussion topic',
	'discussion:latest' => 'Latest discussion',
	'discussion:group' => 'Community discussion',
	'discussion:none' => 'No discussion',
	'discussion:reply:title' => 'Reply by %s',

	'discussion:topic:created' => 'The discussion topic was created.',
	'discussion:topic:updated' => 'The discussion topic was updated.',
	'discussion:topic:deleted' => 'Discussion topic has been deleted.',

	'discussion:topic:notfound' => 'Discussion topic not found',
	'discussion:error:notsaved' => 'Unable to save this topic',
	'discussion:error:missing' => 'Both title and message are required fields',
	'discussion:error:permissions' => 'You do not have permissions to perform this action',
	'discussion:error:notdeleted' => 'Could not delete the discussion topic',

	'discussion:reply:deleted' => 'Discussion reply has been deleted.',
	'discussion:reply:error:notdeleted' => 'Could not delete the discussion reply',

	'reply:this' => 'Reply to this',

	'group:replies' => 'Replies',
	'groups:forum:created' => 'Created %s with %d comments',
	'groups:forum:created:single' => 'Created %s with %d reply',
	'groups:forum' => 'Discussion',
	'groups:addtopic' => 'Add a topic',
	'groups:forumlatest' => 'Latest discussion',
	'groups:latestdiscussion' => 'Latest discussion',
	'groups:newest' => 'Newest',
	'groups:popular' => 'Popular',
	'groupspost:success' => 'Your reply was succesfully posted',
	'groups:alldiscussion' => 'Latest discussion',
	'groups:edittopic' => 'Edit topic',
	'groups:topicmessage' => 'Topic message',
	'groups:topicstatus' => 'Topic status',
	'groups:reply' => 'Post a comment',
	'groups:topic' => 'Topic',
	'groups:posts' => 'Posts',
	'groups:lastperson' => 'Last person',
	'groups:when' => 'When',
	'grouptopic:notcreated' => 'No topics have been created.',
	'groups:topicopen' => 'Open',
	'groups:topicclosed' => 'Closed',
	'groups:topicresolved' => 'Resolved',
	'grouptopic:created' => 'Your topic was created.',
	'groupstopic:deleted' => 'The topic has been deleted.',
	'groups:topicsticky' => 'Sticky',
	'groups:topicisclosed' => 'This discussion is closed.',
	'groups:topiccloseddesc' => 'This discussion is closed and is not accepting new comments.',
	'grouptopic:error' => 'Your group topic could not be created. Please try again or contact a system administrator.',
	'groups:forumpost:edited' => "You have successfully edited the forum post.",
	'groups:forumpost:error' => "There was a problem editing the forum post.",


	'groups:privategroup' => 'This community is closed. Requesting membership.',
	'groups:notitle' => 'Communities must have a title',
	'groups:cantjoin' => 'Can not join community',
	'groups:cantleave' => 'Could not leave community',
	'groups:removeuser' => 'Remove from community',
	'groups:cantremove' => 'Cannot remove user from community',
	'groups:removed' => 'Successfully removed %s from community',
	'groups:addedtogroup' => 'Successfully added the user to the community',
	'groups:joinrequestnotmade' => 'Could not request to join community',
	'groups:joinrequestmade' => 'Requested to join community',
	'groups:joined' => 'Successfully joined community!',
	'groups:left' => 'Successfully left community',
	'groups:notowner' => 'Sorry, you are not the owner of this community.',
	'groups:notmember' => 'Sorry, you are not a member of this community.',
	'groups:alreadymember' => 'You are already a member of this community!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:updated' => "Last reply by %s %s",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' community. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s group!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' community! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' community. Click below to view their profile:

%s

or click below to view the community's join requests:

%s",

	/*
		Forum river items
	*/

	'river:create:group:default' => '%s created the community %s',
	'river:join:group:default' => '%s joined the community %s',
	'river:create:object:groupforumtopic' => '%s added a new discussion topic %s',
	'river:reply:object:groupforumtopic' => '%s replied on the discussion topic %s',
	
	'groups:nowidgets' => 'No widgets have been defined for this community.',


	'groups:widgets:members:title' => 'Community members',
	'groups:widgets:members:description' => 'List the members of a community.',
	'groups:widgets:members:label:displaynum' => 'List the members of a community.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in community",
	'groups:widgets:entities:description' => "List the objects saved in this community",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a community.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Forum topic successfully edited.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) communities?',
	'groups:whocancreate' => 'Who can create new communities?',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Community and community contents deleted',
	'group:notdeleted' => 'Community could not be deleted',

	'group:notfound' => 'Could not find the community',
	'grouppost:deleted' => 'Community posting successfully deleted',
	'grouppost:notdeleted' => 'Community posting could not be deleted',
	'groupstopic:deleted' => 'Topic deleted',
	'groupstopic:notdeleted' => 'Topic not deleted',
	'grouptopic:blank' => 'No topic',
	'grouptopic:notfound' => 'Could not find the topic',
	'grouppost:nopost' => 'Empty post',
	'groups:deletewarning' => "Are you sure you want to delete this community? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',

	// ecml
	'groups:ecml:discussion' => 'Community Discussions',
	'groups:ecml:groupprofile' => 'Community profiles',
	'group:all:replies' => 'See all replies',
);

add_translation("en", $english);

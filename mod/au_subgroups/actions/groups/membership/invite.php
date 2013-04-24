<?php
/**
 * Invite users to join a group
 *
 * @package ElggGroups
 */

$logged_in_user = elgg_get_logged_in_user_entity();

//$user_guid = get_input('user_guid');
//$user_list = get_input('invite_list');
$user_list = get_input('as_values_rcpt');
if (!empty($user_list)) {
	$user_guid = explode(",",$user_list);
}
$group_guid = get_input('group_guid');
$group = get_entity($group_guid);

$parent = au_subgroups_get_parent_group($group);

if (sizeof($user_guid)) {
	foreach ($user_guid as $uid) {
		if (empty($uid)) continue;
		$u_id = trim($uid);
	
	
		//foreach user check if is a registered user or an email
		if (is_numeric($u_id)){
			$user = get_entity($u_id);
			send_invitation($user,$group,$parent,$logged_in_user);
			/*
			//check if the group is a writing group
			if ($parent) {
				//check if the user is member of the parent group
				if ($user && $parent->isMember($user)) {
					//invite to join writing group
					if (!check_entity_relationship($group->guid, 'invited', $user->guid)) {
					
						// Create relationship
						add_entity_relationship($group->guid, 'invited', $user->guid);
					
						// Send email
						$url = elgg_normalize_url("groups/ginvitations/$user->username");
						$result = notify_user($user->getGUID(), $group->owner_guid,
								elgg_echo('groups:invite:subject', array($user->name, $group->name)),
								elgg_echo('wgroups:invite:body', array(
										$user->name,
										$logged_in_user->name,
										$group->name,
										$url,
								)),
								NULL);
						if ($result) {
							system_message($user->username.":".elgg_echo("groups:userinvited"));
						} else {
							register_error($user->username.":".elgg_echo("groups:usernotinvited"));
						}
					} else {
						register_error(elgg_echo($user->username.":"."groups:useralreadyinvited"));
					}
					
				}elseif($user && !$parent->isMember($user)){
					//invite to join community first
					//wgroups:invitec:body
					if (!check_entity_relationship($parent->guid, 'invited', $user->guid)) {
						// Create relationship
						add_entity_relationship($parent->guid, 'invited', $user->guid);
					}
					if (!check_entity_relationship($group->guid, 'invited', $user->guid)) {
							
						// Create relationship
						add_entity_relationship($group->guid, 'invited', $user->guid);
							
						// Send email
						$url = elgg_normalize_url("groups/ginvitations/$user->username");
						$urlc = elgg_normalize_url("groups/invitations/$user->username");
						$result = notify_user($user->getGUID(), $group->owner_guid,
								elgg_echo('groups:invite:subject', array($user->name, $group->name)),
								elgg_echo('wgroups:invitec:body', array(
										$user->name,
										$logged_in_user->name,
										$group->name,
										$parent->name,
										$urlc,
										$url,
								)),
								NULL);
						if ($result) {
							system_message($user->username.":".elgg_echo("groups:userinvited"));
						} else {
							register_error($user->username.":".elgg_echo("groups:usernotinvited"));
						}
					}
				}
			}else{
				
				//is a communitty, send normal message
				if ($user && $group && ($group instanceof ElggGroup) && $group->canEdit()) {
				
					if (!check_entity_relationship($group->guid, 'invited', $user->guid)) {
				
						// Create relationship
						add_entity_relationship($group->guid, 'invited', $user->guid);
				
						// Send email
						$url = elgg_normalize_url("groups/invitations/$user->username");
						$result = notify_user($user->getGUID(), $group->owner_guid,
								elgg_echo('groups:invite:subject', array($user->name, $group->name)),
								elgg_echo('groups:invite:body', array(
										$user->name,
										$logged_in_user->name,
										$group->name,
										$url,
								)),
								NULL);
						if ($result) {
							system_message($user->username.":".elgg_echo("groups:userinvited"));
						} else {
							register_error($user->username.":".elgg_echo("groups:usernotinvited"));
						}
					} else {
						register_error($user->username.":".elgg_echo("groups:useralreadyinvited"));
					}
				}
				
			}
			*/
		}else{
			//sent invitation by email
			
			$email = $uid;
			
			if (!is_email_address($email)) {
				$error = TRUE;
				register_error(elgg_echo('invitefriends:email_error',array($email) ));
			
				continue;
			}
			
			$userinfo = get_user_by_email($email);
			if (count($userinfo)>0) {
				//$already_members[] = $email;
				$user = $userinfo[0];
				//ya es un miembro del sitio enviar notificacion correspondiente
				send_invitation($user,$group,$parent,$logged_in_user);
				
				continue;
			}
			
			$site = elgg_get_site_entity();
			//send invitation by email
			$link_register = elgg_get_site_url() . 'register?friend_guid=' . $logged_in_user->guid . '&invitecode=' . generate_invite_code($logged_in_user->username);
			$link_group =elgg_normalize_url("groups/info/$group->guid");;
			$subject = elgg_echo('invitefriends:subject', array($site->name));
			if ($parent) {
				//join writing group
			//	http://localhost/proyectolatin/groups/info/112/literatura
				$link_comm = elgg_normalize_url("groups/info/$parent->guid");
				
				$message = elgg_echo('wgroups:invite:nouser:body', array(
						$logged_in_user->name,
						$group->name,
						$site->name,
						$link_register,
						$parent->name,
						$link_comm,
						$group->name,
						$link_group,
				)
				);
					
				
			}else{
				//join community
				
				$message = elgg_echo('groups:invite:nouser:body', array(
						$logged_in_user->name,
						$group->name,
						$site->name,
						$link_register,
						$link_group,
				)
				);
			}
			
			
			

			
			// create the from address
			$site = get_entity($site->guid);
			if ($site && $site->email) {
				$from = $site->email;
			} else {
				$from = 'noreply@' . get_site_domain($site->guid);
			}
			
			elgg_send_email($from, $email, $subject, $message);
			
			
			

				system_message($email." : ".elgg_echo("groups:userinvited"));
				
		
		}
		
		
		


	}
}

function send_invitation($user,$group,$parent,$logged_in_user){
	if ($parent) {
		//check if the user is member of the parent group
		if ($user && $parent->isMember($user)) {
			//invite to join writing group
			if (!check_entity_relationship($group->guid, 'invited', $user->guid)) {
					
				// Create relationship
				add_entity_relationship($group->guid, 'invited', $user->guid);
					
				// Send email
				$url = elgg_normalize_url("groups/ginvitations/$user->username");
				$result = notify_user($user->getGUID(), $group->owner_guid,
						elgg_echo('groups:invite:subject', array($user->name, $group->name)),
						elgg_echo('wgroups:invite:body', array(
								$user->name,
								$logged_in_user->name,
								$group->name,
								$url,
						)),
						NULL);
				if ($result) {
					system_message($user->username.":".elgg_echo("groups:userinvited"));
				} else {
					register_error($user->username.":".elgg_echo("groups:usernotinvited"));
				}
			} else {
				register_error(elgg_echo($user->username.":".elgg_echo("groups:useralreadyinvited")));
			}
				
		}elseif($user && !$parent->isMember($user)){
			//invite to join community first
			//wgroups:invitec:body
			if (!check_entity_relationship($parent->guid, 'invited', $user->guid)) {
				// Create relationship
				add_entity_relationship($parent->guid, 'invited', $user->guid);
			}
			if (!check_entity_relationship($group->guid, 'invited', $user->guid)) {
					
				// Create relationship
				add_entity_relationship($group->guid, 'invited', $user->guid);
					
				// Send email
				$url = elgg_normalize_url("groups/ginvitations/$user->username");
				$urlc = elgg_normalize_url("groups/invitations/$user->username");
				$result = notify_user($user->getGUID(), $group->owner_guid,
						elgg_echo('groups:invite:subject', array($user->name, $group->name)),
						elgg_echo('wgroups:invitec:body', array(
								$user->name,
								$logged_in_user->name,
								$group->name,
								$parent->name,
								$urlc,
								$url,
						)),
						NULL);
				if ($result) {
					system_message($user->username.":".elgg_echo("groups:userinvited"));
				} else {
					register_error($user->username.":".elgg_echo("groups:usernotinvited"));
				}
			}else {
				register_error(elgg_echo($user->username.":".elgg_echo("groups:useralreadyinvited")));
			}
		}
	}else{
	
		//is a communitty, send normal message
		if ($user && $group && ($group instanceof ElggGroup)) {
	
			if (!check_entity_relationship($group->guid, 'invited', $user->guid)) {
	
				// Create relationship
				add_entity_relationship($group->guid, 'invited', $user->guid);
	
				// Send email
				$url = elgg_normalize_url("groups/invitations/$user->username");
				$result = notify_user($user->getGUID(), $group->owner_guid,
						elgg_echo('groups:invite:subject', array($user->name, $group->name)),
						elgg_echo('groups:invite:body', array(
								$user->name,
								$logged_in_user->name,
								$group->name,
								$url,
						)),
						NULL);
				if ($result) {
					system_message($user->username.":".elgg_echo("groups:userinvited"));
				} else {
					register_error($user->username.":".elgg_echo("groups:usernotinvited"));
				}
			} else {
				register_error($user->username.":".elgg_echo("groups:useralreadyinvited"));
			}
		}
	
	}
}

forward(REFERER);

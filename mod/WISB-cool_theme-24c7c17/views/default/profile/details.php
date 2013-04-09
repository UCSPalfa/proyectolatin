<?php
/**
 * Elgg user display (details)
 * @uses $vars['entity'] The user entity
 */

    $theUser = elgg_get_page_owner_entity();

        $name = $theUser->name;

        
        $institution = $theUser->Institution;
        $email = $theUser->email;
        $city = $theUser->City;
        $country = $theUser->Country; 
        $interests = $theUser->Interests;
        $languages = $theUser->Languages;

        $userCommunities = getCommunities($theUser);
        $totalUserCommunities = count($userCommunities);
        $displayableCommunitiesLimit = 6;
        if ($totalUserCommunities >= 12) {
            $displayableCommunitiesLimit = 12;
        }
        if ($totalUserCommunities > $displayableCommunitiesLimit) {
            $rand_keys = array_rand($userCommunities, $displayableCommunitiesLimit);
            $tmpArray = array();
            foreach ($rand_keys as $key) {
                array_push($tmpArray, $userCommunities[$key]);
            }
            $userCommunities = $tmpArray;
        }
        
        $writingGroups = getUserWritingGroups ($theUser);
        $totalWritingGroups = count($writingGroups);
        $writingGroupsLimit = 3;        
        if ($totalWritingGroups > $writingGroupsLimit) {
            $rand_keys = array_rand($writingGroups, $writingGroupsLimit);
            $tmpArray = array();
            foreach ($rand_keys as $key) {
                array_push($tmpArray, $writingGroups[$key]);
            }
            $writingGroups = $tmpArray;
        }
        
        
        
        // ************************* //
        // User Information //
        // ************************* //

        $content .= "<div class='group-found-div' style='padding-left: 20px;' >";

        $content .= "<div class='groupFoundIcon'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $icon,
            'title' => $name,
            'is_trusted' => true,));

        $content .= "</div>";


        $content .= "<div class='groupInformation'>";
        
        
        // ************************** //
        // *** User's Institution *** //
        // ************************** //
        
        
        if ($institution) {            
            
            $content .=  "<div class='user-institution-div'>";

            $file = elgg_get_site_url() . '_graphics/institution.png';
            $icon = "<img src='$file'>";

            $content .=  $icon;

            $content .=  "<label class='institution' style='height: 25px;' >" . $institution . "</label>";

            $content .= "</div>";
            
        }
        
        
        // ************************** //
        // *** User's Country *** //
        // ************************** //
        
        
        if ($city || $country) {
            
            $content .=  "<div class='user-institution-div'>";

            $file = elgg_get_site_url() . '_graphics/home.png';
            $icon = "<img src='$file'>";

            $content .=  $icon;

            $content .=  "<label class='institution' style='height: 25px;' >" . $city . ' , ' . $country . "</label>";

            $content .= "</div>";
            
        }
        
        
        // ************************** //
        // *** User's Email *** //
        // ************************** //
        
        
        if ($email) {
            
            $content .=  "<div class='user-institution-div'>";

            $file = elgg_get_site_url() . '_graphics/email.png';
            $icon = "<img src='$file'>";

            $content .=  $icon;

            $content .=  "<label class='institution'  style='margin-top: 3px;' ><a class='allMembers' style='font-weight: normal;' href='mailto: " . $email . "'>" . $email . "</a></label>";

            $content .= "</div>";
            
        }
        
        
                        
        
        
        
        
        $content .= "</div>"; // End of groupInformation
        
        
        
        
        
        
        
        
        
        
        // ********** //
        // User Stats //
        // ********** //

        $content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #d2d2d2; float:right; margin-right: 10px;'>";

        $file = elgg_get_site_url() . '_graphics/communities.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalUserCommunities . " " . elgg_echo('groups') . " </label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/note.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> $totalWritingGroups " . elgg_echo('au_subgroups') . "</label>";
       
       

        $content .= "</div>";
        
        
        
        
        
        
        // ************************* //
        // *** User's Interests *** //
        // ************************* //
        
        $content .=  "<div class='user-interests-div' style='margin-top: 7px; margin-bottom: 0px; width: auto; '>";

        $file = elgg_get_site_url() . '_graphics/tag.png';
        $icon = "<img src='$file'>";

        $content .=  $icon;

        $content .=  "<label class='interests'  style='height: 25px;' >" . elgg_echo('community:interests') . ":</label>";

        if (count($interests) == 0) {
            $content .=  "<label class='noInterests' >" . elgg_echo('community:no:interests') . "</label>";
        } else {
            foreach ($interests as $currentInterest) {
                
                $currentInterest = str_replace($query, "<strong>" . $query . "</strong>", $currentInterest);
                
                $content .=  elgg_view('output/url', array('href' => 'search?tag=' . $currentInterest, 'text' => $currentInterest, 'class' => 'tag'));
            }
        }

        $content .= "</div>"; //user's interests
        
        
        
        
        
        
        
        // ************************* //
        // *** User's Languages *** //
        // ************************* //
        
        $content .=  "<div class='user-interests-div' style='margin-top: 7px; width: auto; '>";

        $file = elgg_get_site_url() . '_graphics/world.png';
        $icon = "<img src='$file'>";

        $content .=  $icon;

        $content .=  "<label class='interests'  style='height: 25px;' >" . elgg_echo('languages') . ":</label>";

        if (count($languages) == 0) {
            $content .=  "<label class='noInterests' >" . elgg_echo('no:languages') . "</label>";
        } else {
            foreach ($languages as $currentLanguage) {
                
                $currentLanguage = str_replace($query, "<strong>" . $query . "</strong>", $currentLanguage);
                
                $content .=  elgg_view('output/url', array('href' => 'search?tag=' . $currentLanguage, 'text' => $currentLanguage, 'class' => 'tag'));
            }
        }

        $content .= "</div>"; //user's languages
        
        
        
        
        
        $content .= "</div>";
        
        
        
        
        


    // *************************** //
    // *** User's Communities *** //
    // *************************** //
        
    

    $content .= "<div class='user-members-div' style='padding-left: 20px;'>";

    $content .= "<div style='text-align: left;'><label>" . elgg_echo("member:of") . ":</label></div> <br />";
    
    $content .= "<div style='margin-left: 10px; width:100%;'>";

    foreach ($userCommunities as $community) {

        $file = $community->getIconURL();
        $icon = "<img src='$file'>";

//        $content .= elgg_view('output/url', array(
//            'href' => $community->getURL(),
//            'text' => $icon,
//            'title' => $community->name,
//            'is_trusted' => true,
//        ));
        
        $content .= elgg_view('groups/profile/groupIcon', array('entity' => $community));
        
    }
    
    
    $content .= "</div>";
    
    
    

    if ($totalUserCommunities == 0) {
        $content .= "<div class='noContent'>" . elgg_echo("community:no:related") . "</div>";
    } else if ($totalUserCommunities > $displayableCommunitiesLimit) {

        $allRelatedCommunitiesLink = elgg_view('output/url', array(
            'href' => 'groups/member/' . $theUser->username,
            'text' => elgg_echo('view:all'),
            'is_trusted' => true,
            'class' => 'allMembers',
        ));

        $content .= "<div class='all-members-div'>$allRelatedCommunitiesLink</div>";
    } else {
        $content .= "<div class='all-members-div'></div>";
    }

    $content .= "</div>";




        
        
        
$content .= "<div class='lowerContainer' style='padding-right: 10px; height: 153px;'>";    
    
// ********************** //
// *** Writing Groups *** //
// ********************** //

$content .= "<div class='user-writing-groups-div'>";

$content .= "<div style='text-align: left;'><label>" . elgg_echo("au_subgroups") . ":</label></div> <br />";


$content .= "<div style='margin-left: 10px; width:100%;'>";

foreach ($writingGroups as $book) {

    $file = $book->getIconURL();
    $icon = "<img src='$file'>";

//    $content .= elgg_view('output/url', array(
//        'href' => $book->getURL(),
//        'text' => $icon,
//        'title' => $book->name,
//        'is_trusted' => true,
//    ));
    
    $content .= elgg_view('groups/profile/groupIcon', array('entity' => $book));
}

$content .= "</div>";


if (!$totalWritingGroups) {

    $content .= "<div class='noContent'>" . elgg_echo("community:no:books") . "</div>";
} else if ($totalWritingGroups > $writingGroupsLimit) {

    $allWritingGroups = elgg_view('output/url', array(
        'href' => 'groups/subgroups/list/' . $group->guid,
        'text' => elgg_echo('au_subgroups:subgroups:more'),
        'is_trusted' => true,
        'class' => 'allBooks',
    ));

    $content .= "<div class='all-members-div' style='clear:both;' >$allWritingGroups</div>";
} else {
    $content .= "<div class='all-members-div'></div>";
}

$content .= "</div>"; // writing groups div




$content .= "</div>";

    
    
        
    
    
    
        
        
        
        echo $content;






//$user = elgg_get_page_owner_entity();
//
//$profile_fields = elgg_get_config('profile_fields');
//
//echo "<dl class=\"elgg-profile\">";
//if (is_array($profile_fields) && sizeof($profile_fields) > 0) {
//	foreach ($profile_fields as $shortname => $valtype) {
//		if ($shortname == "description") {
//			// skip about me and put at bottom
//			continue;
//		}
//		$value = $user->$shortname;
//		if (!empty($value)) {
?>
			<!--<dt><?php echo elgg_echo("profile:{$shortname}"); ?></dt>-->
			<!--<dd><?php echo elgg_view("output/{$valtype}", array('value' => $user->$shortname)); ?></dd>-->
<?php
//		}
//	}
//}
//
//if (!elgg_get_config('profile_custom_fields')) {
//	if ($user->isBanned()) {
//		echo "</dl><p class='profile-banned-user'>";
//		echo elgg_echo('banned');
//		echo "</p>";
//	} else {
//		if ($user->description) {
//			echo "<dt>" . elgg_echo("profile:aboutme") . "</dt>";
//			echo "<dd>";
//			echo elgg_view('output/longtext', array('value' => $user->description));
//			echo "</dd></dl>";
//		}
//	}
//}


//echo "Aqui se dibuja el profile de cada usuario del sitio";
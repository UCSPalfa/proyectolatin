<?php

//echo "Esta es la vista por defecto de los objetos encontrados en la búsqueda del hypeAlive";

/**
 * Default view for an entity returned in a search
 *
 * Display largely controlled by a set of overrideable volatile data:
 *   - search_icon (defaults to entity icon)
 *   - search_matched_title 
 *   - search_matched_description
 *   - search_matched_extra
 *   - search_url (defaults to entity->getURL())
 *   - search_time (defaults to entity->time_updated or entity->time_created)
 *
 * @uses $vars['entity'] Entity returned in a search
 */
$entity = $vars['entity'];


//echo print_r($vars);

$query = trim($vars['params']['query']);


$entityType = $entity->type;

if ($entityType == 'user') {
    
        $theUser = $entity;
        
//        echo print_r($theUser);

        $file = $theUser->getIconURL();
        $icon = "<img src='$file' style='margin-bottom: 10px;'>";
        $theUrl = $theUser->getURL();

        $name = $theUser->getVolatileData('search_matched_title');        

        
        $institution = $theUser->Institution;
        $city = $theUser->City;
        $country = $theUser->Country;
        
        $matchedDescription = $theUser->getVolatileData('search_matched_description');
        
        if ($matchedDescription) {
            
            $tokens = explode(":", $matchedDescription);
            
            $field = trim($tokens[0]);
            $value = trim($tokens[1]);
            
            if ($field == "Country") {
                $country = $value;
            } else if ($field == 'City') {
                $city = $value;
            } else if ($field == 'Institution') {
                $institution = $value;
            }
            
        }
        
        $interests = $theUser->Interests;

        $communities = getCommunities($theUser);
        $totalCommunities = count($communities);
        
        $writingGroups = getUserWritingGroups ($theUser);
        $totalWritingGroups = count($writingGroups);
        
        
        $iconStyle = "width: 20px;";
        $labelStyle = "margin-top: 1px; white-space: nowrap; max-width: 86%; overflow-x: hidden;";


        // ************************* //
        // User Information //
        // ************************* //

        $content .= "<div class='group-found-div' style='margin-bottom: 5px;'>";

        $content .= "<div class='groupFoundIcon'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $icon,
            'title' => $name,
            'is_trusted' => true,));

        $content .= "</div>";


        $content .= "<div class='groupInformation'>";
        
        
        
        
        
        

        $content .= "<div class='groupFoundName' style='font-size: 14px;' >";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $name,
            'is_trusted' => true,));

        $content .= "</div>";
        
        
              
        
        
        
        // ************************** //
        // *** User's Institution *** //
        // ************************** //
        
        
        if ($institution) {            
            
            $content .=  "<div class='user-institution-div'>";

            $file = elgg_get_site_url() . '_graphics/institution.png';
            $icon = "<img src='$file' style='$iconStyle'>";

            $content .=  $icon;

            $content .=  "<label class='institution' style='$labelStyle' >" . $institution . "</label>";

            $content .= "</div>";
            
        }
        
        
        // ************************** //
        // *** User's Country *** //
        // ************************** //
        
        if ($city) {
            if ($country) {
                $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city,  'class' => 'tag')) . ", " . elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'title' => $country, 'text' => $country, 'class' => 'tag'));
            } else {
                $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city, 'class' => 'tag'));
            }
        } else {
            if ($country) {
                $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'text' => $country, 'title' => $country, 'class' => 'tag'));
            } else {
                $cityAndCountry = '';
            }
        }
        
        
        if ($cityAndCountry) {            
            
            $content .=  "<div class='user-institution-div'>";

            $file = elgg_get_site_url() . '_graphics/world.png';
            $icon = "<img src='$file' style='$iconStyle'>";

            $content .=  $icon;

            $content .=  "<label class='institution' style='$labelStyle' >" . $cityAndCountry . "</label>";

            $content .= "</div>";
            
        }
        
        
                        
        
        
        
        
        $content .= "</div>"; // End of groupInformation
        
        
        
        
        
        
        
        
        
        
        // ********** //
        // User Stats //
        // ********** //

        $content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #d2d2d2;s'>";

        $file = elgg_get_site_url() . '_graphics/communities.png';
        $icon = "<img src='$file' style='$iconStyle'>";
        $content .= $icon . "<label> " . $totalCommunities . " " . elgg_echo('groups') . " </label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/note.png';
        $icon = "<img src='$file' style='$iconStyle'>";
        $content .= $icon . "<label> $totalWritingGroups " . elgg_echo('au_subgroups') . "</label>";
       
       

        $content .= "</div>";
        
        
        
        
        
        
        // ************************* //
        // *** User's Insterests *** //
        // ************************* //
        
        $content .=  "<div class='user-interests-div' style='margin-left: 120px; margin-top: -39px; width: auto; '>";

        $file = elgg_get_site_url() . '_graphics/tag.png';
        $icon = "<img src='$file' style='$iconStyle'>";

        $content .=  $icon;

        $content .=  "<label class='interests' style='margin-top: 4px;' >" . elgg_echo('community:interests') . ":</label>";
        
        $interestsString = '';
        foreach ($interests as $currentInterest) {
            $currentInterest = str_replace($query, "<strong>" . $query . "</strong>", $currentInterest);
            $interestsString .=  elgg_view('output/url', array('href' => 'search?tag=' . $currentInterest, 'text' => $currentInterest, 'class' => 'tag', 'style' => 'margin-top: 4px;'));
        }
        

        if (count($interests) == 0) {
            $content .=  "<label class='noInterests' >" . elgg_echo('community:no:interests') . "</label>";
        } else {    
            $content .=  "<label style='$labelStyle font-weight: normal; margin-top: 4px;' >$interestsString</label>";
        }

        $content .= "</div>";
        
        
        
        
        
        

        $content .= "</div>";
        
    
    
    
    
    
    
} else if ($entityType == 'group') {

    $group = $entity;

    // *********************** //
    // View for Writing groups //
    // *********************** //
    if (isSubgroup($group)) {
        
        $currentWritingGroup = $group;

        $file = $currentWritingGroup->getIconURL();
        $icon = "<img src='$file'>";
        $theUrl = $currentWritingGroup->getURL();

        $name = $currentWritingGroup->getVolatileData('search_matched_title');

        $description = $currentWritingGroup->getVolatileData('search_matched_description');

        $members = getMembers($currentWritingGroup);
        $totalMembers = count($members);

        $books = getCommunityBooks($community);
        $totalBooks = count($books);

        $institutions = getInstitutions($currentWritingGroup);
        $totalInstitutions = count($institutions);


        // ************************* //
        // Writing Group Information //
        // ************************* //

        $content .= "<div class='group-found-div'>";

        $content .= "<div class='groupFoundIcon'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $icon,
            'title' => $name,
            'is_trusted' => true,));

        $content .= "</div>";


        $content .= "<div class='groupInformation'>";

        $content .= "<div class='groupFoundName'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $name,
            'is_trusted' => true,));

        $content .= "</div>";

        $content .= "<div class='groupFoundDescription'> <p>" . $description . "</p></div>";


        $content .= "</div>";
        
        
        // ******************* //
        // Writing Group Stats //
        // ******************* //

        $content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px;'>";

        $file = elgg_get_site_url() . '_graphics/communities.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalMembers . " " . elgg_echo('writingGroups:Members') . " </label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/book.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> $totalBooks " . elgg_echo('Books') . "</label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/institution.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalInstitutions . " " . elgg_echo("Institutions:collaborating") . " </label>";

        $content .= "</div>";

        $content .= "</div>";
        
        
    } else {

        // ******************** //
        // View for Communities //
        // ******************** //
        
        $currentCommunity = $group;


        $file = $currentCommunity->getIconURL();
        $icon = "<img src='$file'>";
        $theUrl = $currentCommunity->getURL();

        $name = $currentCommunity->getVolatileData('search_matched_title');

        $description = $currentCommunity->getVolatileData('search_matched_description');

        $members = getMembers($currentCommunity);
        $totalMembers = count($members);

        $relatedCommunities = getRelatedCommunities($currentCommunity);
        $totalRelatedCommunities = count($relatedCommunities);

        $writingGroups = getWritingGroups($currentCommunity);
        $totalWritingGroups = count($writingGroups);

        $content .= "<div class='group-found-div'>";

        $content .= "<div class='groupFoundIcon'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $icon,
            'title' => $name,
            'is_trusted' => true,));

        $content .= "</div>";


        $content .= "<div class='groupInformation'>";

        $content .= "<div class='groupFoundName'>";

        $content .= elgg_view('output/url', array(
            'href' => $theUrl,
            'text' => $name,
            'is_trusted' => true,));

        $content .= "</div>";

        $content .= "<div class='groupFoundDescription'> <p>" . $description . "</p></div>";


        $content .= "</div>";











        $content .= "<div class='group-stats-div' style='text-align: left; margin-bottom: 10px;'>";

        $file = elgg_get_site_url() . '_graphics/communities.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalMembers . " " . elgg_echo('Members') . " </label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/link.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> $totalRelatedCommunities " . elgg_echo('relatedgroups') . "</label>";
        $content .= "<hr />";

        $file = elgg_get_site_url() . '_graphics/note.png';
        $icon = "<img src='$file'>";
        $content .= $icon . "<label> " . $totalWritingGroups . " " . elgg_echo("au_subgroups") . " </label>";

        $content .= "</div>";











        $content .= "</div>";
    }
} else {




    $icon = $entity->getVolatileData('search_icon');
    if (!$icon) {
        // display the entity's owner by default if available.
        // @todo allow an option to switch to displaying the entity's icon instead.
        $type = $entity->getType();
        if ($type == 'user' || $type == 'group') {
            $icon = elgg_view_entity_icon($entity, 'medium');
        } elseif ($owner = $entity->getOwnerEntity()) {
            $icon = elgg_view_entity_icon($owner, 'small');
        } else {
            // display a generic icon if no owner, though there will probably be
            // other problems if the owner can't be found.
            $icon = elgg_view_entity($entity, 'small');
        }
    }

    $title = $entity->getVolatileData('search_matched_title');
    $description = $entity->getVolatileData('search_matched_description');
    $extra_info = $entity->getVolatileData('search_matched_extra');
    $url = $entity->getVolatileData('search_url');

    if (!$url) {
        $url = $entity->getURL();
    }

    $title = "<a href=\"$url\">$title</a>";
    $time = $entity->getVolatileData('search_time');
    if (!$time) {
        $tc = $entity->time_created;
        $tu = $entity->time_updated;
        $time = elgg_view_friendly_time(($tu > $tc) ? $tu : $tc);
    }

    $body = "<p class=\"mbn\">$title</p>$description";
    if ($extra_info) {
        $body .= "<p class=\"elgg-subtext\">$extra_info</p>";
    }
    $body .= "<p class=\"elgg-subtext\">$time</p>";

    echo elgg_view_image_block($icon, $body);
}




echo elgg_view_image_block('', $content);

<?php
/**
 * Elgg user display (details)
 * @uses $vars['entity'] The user entity
 */
$theUser = elgg_get_page_owner_entity();
$theViewer = elgg_get_logged_in_user_entity();

$name = $theUser->name;
$bio = $theUser->Bio;

$institution = $theUser->Institution;

$email = $theUser->email;
$showUserEmail = $theUser->EmailVisibility == 'Public';


$city = $theUser->City;
$country = $theUser->Country;
$twitter = $theUser->Twitter;

if ($city) {
    if ($country) {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city, 'class' => 'tag', 'style' => 'margin-top: 6px; font-size: 13px;')) . " <label style='float: left; margin-top: 6px; margin-right: 8px; font-weight: normal; font-size: 13px;'>-</label> " . elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'title' => $country, 'text' => $country, 'class' => 'tag', 'style' => 'margin-top: 6px; font-size: 13px;'));
    } else {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city, 'class' => 'tag', 'style' => 'margin-top: 6px; font-size: 13px;'));
    }
} else {
    if ($country) {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'text' => $country, 'title' => $country, 'class' => 'tag', 'style' => 'margin-top: 6px; font-size: 13px;'));
    } else {
        $cityAndCountry = '';
    }
}

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

$writingGroups = getUserWritingGroups($theUser);
$bookTitles = getUserBooksTitles($writingGroups);

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
















// ******************************************** //
// *** User's Institution, City and Country *** //
// ******************************************** //


if ($institution) {

    if ($cityAndCountry) {

        $file = elgg_get_site_url() . '_graphics/institution.png';
        $institutionIcon = "<img src='$file' style='width: 25px;'>";
        $institutionCityCountry .= $institutionIcon . elgg_view('output/url', array('href' => 'search?tag=' . $institution, 'text' => $institution, 'class' => 'tag', 'style' => 'color: #0054A7; margin-top: 6px; font-size: 13px; margin-right: 40px; '));

        $file = elgg_get_site_url() . '_graphics/home.png';
        $cityCountryIcon = "<img src='$file' style='width: 25px;'>";
        $institutionCityCountry .= $cityCountryIcon . "<label style='font-weight: normal;'> " . $cityAndCountry . " </label>";
    } else {

        $file = elgg_get_site_url() . '_graphics/institution.png';
        $institutionIcon = "<img src='$file' style='width: 25px;'>";
        $institutionCityCountry .= $institutionIcon . elgg_view('output/url', array('href' => 'search?tag=' . $institution, 'text' => $institution, 'class' => 'tag', 'style' => 'color: #0054A7; margin-top: 6px; font-size: 13px; margin-right: 40px; '));
    }
} else {
    if ($cityAndCountry) {

        $file = elgg_get_site_url() . '_graphics/home.png';
        $cityCountryIcon = "<img src='$file' style='width: 25px;'>";
        $institutionCityCountry .= $cityCountryIcon . "<label style='font-weight: normal;'> " . $cityAndCountry . " </label>";
    } else {

        $institutionCityCountry = '';
    }
}

if ($institutionCityCountry) {
    $content .= "<div class='group-tags-div' style='margin-left: 10px; '>";
    $content .= $institutionCityCountry;
    $content .= "</div>";
}






// ************************ //
// *** User's Interests *** //
// ************************ //

if (count($interests)) {

    $content .= "<div class='group-tags-div' style='margin-left: 10px;'>";

    $file = elgg_get_site_url() . '_graphics/tag.png';
    $icon = "<img src='$file' style='width: 25px;'>";

    $content .= $icon;

    $content .= "<label class='interests' style='margin-top: 4px; font-size: 13px;' >" . elgg_echo('community:interests') . ":</label>";

    foreach ($interests as $currentTag) {
        $content .= elgg_view('output/url', array('href' => 'search?tag=' . $currentTag, 'text' => $currentTag, 'class' => 'tag', 'style' => 'margin-top: 4px; font-size: 13px;'));
    }

    $content .= "</div>";
}

// ************************ //
// *** User's Languages *** //
// ************************ //
if (count($languages)) {

    $content .= "<div class='group-tags-div' style='margin-left: 10px; margin-bottom: 20px;'>";

    $file = elgg_get_site_url() . '_graphics/world.png';
    $icon = "<img src='$file' style='width: 25px;'>";

    $content .= $icon;

    $content .= "<label class='interests' style='margin-top: 4px; font-size: 13px;' >" . elgg_echo('languages') . ":</label>";

    foreach ($languages as $key => $language) {
        $content .= elgg_view('output/url', array('href' => 'search?tag=' . $language, 'text' => $language, 'class' => 'tag', 'style' => 'margin-top: 4px; font-size: 13px;'));
    }

    $content .= "</div>";
}


$content .= "<div class='lowerContainer' style='margin-top: 0px; padding-right: 10px; height: 200px;'>";


// *************************** //
// *** Book Titltes *** //
// *************************** //

$content .= "<div class='group-related-communities-div' style='text-align: left; width: 61%; margin-top: 0px;' >";

$file = elgg_get_site_url() . '_graphics/info.png';
$icon = "<img src='$file' style='float: left; width: 25px; height: 25px; border: none; margin-top: -5px; margin-left: -10px;'>";
//$content .= $icon . "<div style='padding-left: 0px;'><label>" . elgg_echo("Bio") . ":</label></div> <br />";
$content .= "<div style='padding-left: 0px;'><label>" . elgg_echo("Bio") . ":</label></div> <br />";

$content .= "<div style='overflow-y: auto; height: 78%; text-align: justify; margin-top: -5px; margin-left: -5px; '>";


if (trim($bio) != '') {
    $content .= "<div style='margin-right: 10px;'>$bio</div>";
} else {
    if ($theUser->guid == $theViewer->guid) {
        $content .= "<div class='noContent' style='margin-top: 55px;'>" . elgg_echo("you:no:bio") . "</div>";
    } else {
        $content .= "<div class='noContent' style='margin-top: 55px;'>" . elgg_echo("user:no:bio") . "</div>";
    }
}


$content .= "</div>";


$content .= "</div>";


// ******************************** //
// *** User Info and Statistics *** //
// ******************************** //

$iconStyle = "width: 25px;";

$content .= "<div class='group-stats-div' style='border-left: none; margin-left: 0px; width: 30%;'>";

if ($email && $showUserEmail) {
    $file = elgg_get_site_url() . '_graphics/email.png';
    $icon = "<img src='$file' style='$iconStyle' title='Email'>";
    $content .= $icon . "<label'><a class='allMembers' style='margin-left: 6px; font-weight: normal;' href='mailto: " . $email . "'>" . $email . "</a></label>";
    $content .= "<hr />";
}

if ($theUser->CV) {
    $firstName = strtok($name, " ");
    $file = elgg_get_site_url() . '_graphics/download.png';
    $icon = "<img src='$file' style='$iconStyle' title='Download CV'>";
    $cvLink = "/file/download/$theUser->CV";
    $content .= $icon . "<label style='font-weight: normal;'> " . elgg_view('output/url', array('href' => $cvLink, 'text' => elgg_echo('user:cv', array($firstName)), 'class' => 'tag', 'style' => 'margin-top: 4px; font-size: 13px; color: #0054A7;')) . " </label>";
    $content .= "<hr />";
}

$file = elgg_get_site_url() . '_graphics/communities.png';
$icon = "<img src='$file' style='$iconStyle' title='Member of'>";
$content .= $icon . "<label style='font-weight: normal;'> " . $totalUserCommunities . " " . elgg_echo('groups') . " </label>";
$content .= "<hr />";

$file = elgg_get_site_url() . '_graphics/note.png';
$icon = "<img src='$file' style='$iconStyle' title='Collaborating in'>";
$content .= $icon . "<label style='font-weight: normal;'> " . $totalWritingGroups . " " . elgg_echo('au_subgroups') . " </label>";


if ($twitter) {
    $content .= "<hr />";
    $file = elgg_get_site_url() . '_graphics/twitter.png';
    $icon = "<img src='$file' style='$iconStyle' title='Twitter account'>";
    $content .= $icon . "<label style='font-weight: normal;'> " . elgg_view('output/url', array('href' => "www.twitter.com/$twitter", 'text' => "@$twitter", 'class' => 'tag', 'style' => 'color: #0054A7;')) . " </label>";
}

$content .= "</div>"; // user stats






$content .= "</div>"; // end lower container










$content .= "<div style='clear:both; min-height: 25px;'></div>";







// *************************** //
// *** User's Communities *** //
// *************************** //



$content .= "<div class='user-members-div' style='padding-left: 20px; margin-top: -20px;'>";

$content .= "<div style='text-align: left;'><label>" . elgg_echo("member:of") . ":</label></div> <br />";

$content .= "<div style='padding-right: 10px; '>";

foreach ($userCommunities as $community) {

    $file = $community->getIconURL();
    $icon = "<img src='$file'>";

    $content .= elgg_view('groups/profile/groupIcon', array('entity' => $community));
}


$content .= "</div>";

if ($totalUserCommunities == 0) {
    if ($theUser->guid == $theViewer->guid) {
        $content .= "<div class='noContent' style='margin-bottom: 40px;'><label style='font-size: 13px; font-weight: normal; color: #ccc';>" . elgg_echo("you:no:communities") . "</label></div>";
    } else {
        $content .= "<div class='noContent' style='margin-bottom: 40px;'><label style='font-size: 13px; font-weight: normal; color: #ccc';>" . elgg_echo("user:no:communities") . "</label></div>";
    }
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


// *************************** //
// *** Book Titltes *** //
// *************************** //

$content .= "<div class='group-related-communities-div' style='text-align: left; width: 55%;' >";

$content .= "<div style='padding-left: 0px;'><label>" . elgg_echo("books:user") . ":</label></div> <br />";

$content .= "<div style='overflow-y: auto; height: 70%; '>";


$content .= "<ol style='margin-left: -8px; ' >";

foreach ($bookTitles as $bookTitle) {

    $content .= '<li class="institution" style="margin-bottom: 10px;" >' . $bookTitle . '<li>';
}

$content .= '</ol>';

$content .= "</div>";


$content .= "</div>";


// ********************** //
// *** Writing Groups *** //
// ********************** //

$content .= "<div class='group-books-div' style='width: 33%;'>";

$content .= "<div style='text-align: left;'><label>" . elgg_echo("au_subgroups") . ":</label></div> <br />";

foreach ($writingGroups as $book) {
    $content .= elgg_view('groups/profile/groupIcon', array('entity' => $book));
}

if (!$totalWritingGroups) {
    if ($theUser->guid == $theViewer->guid) {
        $content .= "<div class='noContent'>" . elgg_echo("you:no:writing:books") . "</div>";
    } else {
        $content .= "<div class='noContent'>" . elgg_echo("user:no:writing:books") . "</div>";
    }
} else if ($totalWritingGroups > $writingGroupsLimit) {

    $allWritingGroups = elgg_view('output/url', array(
        'href' => 'groups/writing_groups/' . $theUser->username,
        'text' => elgg_echo('au_subgroups:subgroups:more'),
        'is_trusted' => true,
        'class' => 'allBooks',
            ));

    $content .= "<div class='all-members-div'>$allWritingGroups</div>";
} else {
    $content .= "<div class='all-members-div'></div>";
}

$content .= "</div>"; // end Writing Groups


$content .= "</div>"; // end lower container





echo $content;




//
//
//$user = elgg_get_page_owner_entity();
//
//$profile_fields = elgg_get_config('profile_fields');
//
//print_r($profile_fields);
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
//
?>
<!--<dt><?php // echo elgg_echo("profile:{$shortname}");   ?></dt>-->
<!--<dd><?php // echo elgg_view("output/{$valtype}", array('value' => $user->$shortname));   ?></dd>-->
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





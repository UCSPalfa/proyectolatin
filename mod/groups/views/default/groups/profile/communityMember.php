<?php

$theUser = $vars['entity'];

$file = $theUser->getIconURL();
$icon = "<img src='$file'>";
$theUrl = $theUser->getURL();

$name = $theUser->name;

$institution = $theUser->Institution;
$city = $theUser->City;
$country = $theUser->Country;

// ************************* //
// User Information //
// ************************* //

$content .= "<div class='group-found-div' style='width: 47%; clear: none; float: left; margin-left: 0px; padding-right: 0px; overflow-x: hidden; margin-top: 0px; '>";

$content .= "<div class='groupFoundIcon' style='width: 26%; margin-bottom: 10px; margin-right: 10px;'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $icon,
    'title' => $name,
    'is_trusted' => true,));

$content .= "</div>";


$content .= "<div class='groupInformation' style='width: auto; max-width: 70%;' >";


$content .= "<div class='groupFoundName'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $name,
    'style' => 'font-size: 15px',
    'is_trusted' => true,));

$content .= "</div>";


// ************************** //
// *** User's Institution *** //
// ************************** //


if ($institution) {            

    $content .=  "<div class='user-institution-div' style='white-space: nowrap;'>";

    $file = elgg_get_site_url() . '_graphics/institution.png';
    $icon = "<img src='$file' style='margin-right: 5px;'>";

    $content .=  $icon;

    $content .=  "<label title='$institution' class='institution' style='white-space: nowrap; max-width: 83%; overflow-x: hidden;'>" . $institution . "</label>";

    $content .= "</div>";

}


// ************************** //
// *** User's Country *** //
// ************************** //


if ($city || $country) {            

    $content .=  "<div class='user-institution-div' style='white-space: nowrap;'>";

    $file = elgg_get_site_url() . '_graphics/home.png';
    $icon = "<img src='$file'>";

    $content .=  $icon;
    
    
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

    $content .=  "<label class='institution' style='white-space: nowrap; max-width: 80%; overflow-x: hidden;'>" . $cityAndCountry . "</label>";

    $content .= "</div>";

}



$content .= "</div>"; // End of groupInformation









$content .= "</div>";




echo $content;
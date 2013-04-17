<?php

$theUser = $vars['entity'];

$file = $theUser->getIconURL();
$icon = "<img src='$file'>";
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


// ************************* //
// User Information //
// ************************* //

$content .= "<div class='group-found-div' style='margin-top: 0px; margin-bottom: -5px; '>";

$foundIconStyle = "margin-right: 10px; margin-bottom: 2px; margin-top: -5px; width: 60px; margin-left: -5px;";
$content .= "<div class='groupFoundIcon' style='$foundIconStyle'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $icon,
    'title' => $name,
    'is_trusted' => true,));

$content .= "</div>";


$content .= "<div class='groupInformation' style='width: 70%;'>";







$content .= "<div class='groupFoundName' style='margin-top: -7px;'>";

$content .= elgg_view('output/url', array(
    'href' => $theUrl,
    'text' => $name,
    'style' => 'font-size: 14px;',
    'is_trusted' => true,));

$content .= "</div>";



$iconStyle = "width: 20px;";
$labelStyle = "margin-top: 1px; white-space: nowrap; max-width: 86%; overflow-x: hidden;";


// ************************** //
// *** User's Institution *** //
// ************************** //


if ($institution) {

    $content .= "<div class='user-institution-div' style='margin-top: 2px;'>";

    $file = elgg_get_site_url() . '_graphics/institution.png';
    $icon = "<img src='$file' style='$iconStyle'>";

    $content .= $icon;

    $content .= "<label class='institution' style='$labelStyle' >" . $institution . "</label>";

    $content .= "</div>";
}


// ************************** //
// *** User's Country *** //
// ************************** //

if ($city) {
    if ($country) {
        $cityAndCountry = elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $city, 'text' => $city, 'title' => $city, 'class' => 'tag')) . ", " . elgg_view('output/url', array('style' => 'color: #0054A7;', 'href' => 'search?tag=' . $country, 'title' => $country, 'text' => $country, 'class' => 'tag'));
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

    $content .= "<div class='user-institution-div' style='margin-top: 2px;'>";

    $file = elgg_get_site_url() . '_graphics/home.png';
    $icon = "<img src='$file' style='$iconStyle'>";

    $content .= $icon;

    $content .= "<label class='institution' style='$labelStyle' >" . $cityAndCountry . "</label>";

    $content .= "</div>";
}


$content .= "</div>"; // End of groupInformation











$content .= "</div>";

echo $content;
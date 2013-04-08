<?php
/**
 * Elgg Groups css
 * 
 * @package groups
 */
?>
.groups-profile > .elgg-image {
margin-right: 10px;
}

.groups-stats {
background: #eeeeee;
padding: 5px;
margin-top: 10px;

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.groups-profile-fields .odd,
.groups-profile-fields .even {
background: #f4f4f4;

-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;

padding: 2px 4px;
margin-bottom: 7px;
}

.groups-profile-fields .elgg-output {
margin: 0;
}

#groups-tools > li {
width: 48%;
min-height: 200px;
margin-bottom: 40px;
}

#groups-tools > li:nth-child(odd) {
margin-right: 4%;
}

.groups-widget-viewall {
float: right;
font-size: 85%;
}

.groups-latest-reply {
float: right;
}

.elgg-menu-groups-my-status li a {
display: block;

-webkit-border-radius: 8px;
-moz-border-radius: 8px;
border-radius: 8px;

background-color: white;
margin: 3px 0 5px 0;
padding: 2px 4px 2px 8px;
}
.elgg-menu-groups-my-status li a:hover {
background-color: #0054A7;
color: white;
text-decoration: none;
}
.elgg-menu-groups-my-status li.elgg-state-selected > a {
background-color: #4690D6;
color: white;
}



.numberMembers {
color: #333333;
border-color:#DDDDDD;
border-width:1px;
border-style:solid solid solid solid;
top:-3px;
padding:6px;
position:relative;
text-align: center;
}

.groupNameContainer {

<!--background-color: rgba(0,0,0,.4);-->

background-image: linear-gradient(bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 0.75) 100%);
background-image: -o-linear-gradient(bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 0.75) 100%);
background-image: -moz-linear-gradient(bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 0.75) 100%);
background-image: -webkit-linear-gradient(bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 0.75) 100%);
background-image: -ms-linear-gradient(bottom, rgba(255,255,255, 0) 0%, rgba(0,0,0, 0.75) 100%);





position: absolute;
height: 28%;
z-index: 100;
width: 82%;
margin-left: 1px;
}

.groupName {
color:#FFFFFF;
display:block;
margin-left:6px;
margin-right:17px;
overflow:hidden;
position:absolute;
text-shadow: 0px 2px 2px rgb(0, 0, 0);
top: 6px;
word-wrap:break-word;  
font-family:arial, sans-serif;
font-size:12px;
font-style:normal;
font-variant:normal;
font-weight:normal;
line-height:normal;
z-index:444;


}

.iconBorder {
border-color:#DDDDDD;
border-width:1px;
border-style:solid solid none solid;
}

.groupIcon {
float: left;
margin-left: 10px;
margin-right: 10px;
margin-bottom: 10px;
}

.miniGridGroup {
margin: 3px 0px 3px 7px;
}

.simpleBorder {
border-style: solid;
border-width: 1px;
border-color: #999;
vertical-align: middle;
}

.searchInput {
color: #ccc;
float: left;
max-width: 85%;
margin-top: 17px;
margin-right: 5px;
}

.searchInput:active {
color: #fff;
}

.searchInput:focus {
color: #000;
}

.inLineButton {
float: left;
margin-top: 18px;
}

.bottonRight {
float: right;
margin-top: 30px;
margin-right: 5px;
color: rgb(0, 61, 121);
}

img.grayscale {
filter: url("data:image/svg+xml;utf8,&lt;svg xmlns=\'http://www.w3.org/2000/svg\'&gt;&lt;filter id=\'grayscale\'&gt;&lt;feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/&gt;&lt;/filter&gt;&lt;/svg&gt;#grayscale"); /* Firefox 10+, Firefox on Android */
filter: gray; /* IE6-9 */
-webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */    
}

.group-profile-tag {
color: #0054A7;
font-size: 13px;
margin-right: 8px;
}

.group-profile-tag:after {
content: " - ";
}


.group-tags-div {    
margin-bottom: 10px;    
margin-left: 20px;
float: left;
font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
vertical-align: bottom;
width: 100%;    
}



.user-interests-div {
    margin-bottom: 10px;
    float: left;
    clear: both;
    font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
    vertical-align: bottom;
    width: 100%;    
    margin-top: 5px;
}

.user-institution-div {
    margin-bottom: 3px;
    float: left;
    clear: both;
    font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
    vertical-align: bottom;
    width: 100%;
    margin-top: 5px;
}

.user-institution-div img,
.user-interests-div img {
    width: 25px;
    float: left;
    vertical-align: middle;
    margin-right: 10px;
}

.group-tags-div img {
    width: 30px;
    float: left;
    vertical-align: middle;
    margin-right: 10px;
}


.user-interests-div .interests {    
    margin-right: 6px;
    margin-top: 5px;
}

.user-interests-div .tag {    
    float: left;
    color: #0054A7;
    font-size: 13px;
    margin-right: 8px;
    margin-top: 5px;
}

.user-interests-div .tag strong {    
    background-color: #bbdaf7;
} 

.user-interests-div .noInterests {
    margin-top: 5px;
}


.user-institution-div .institution {
    float: left;
    color: #3D3D3D;
    margin-right: 8px;
    margin-top: 5px;        
    font-weight: normal;
    vertical-align: middle;    
    font-size: 13px;    
}

.interests {
    float: left;
    color: #3D3D3D;
    margin-right: 8px;
    margin-top: 10px;        
    font-weight: bold;
    vertical-align: middle;    
    font-size: 14px;
}

.group-tags-div .tag {
float: left;
color: #0054A7;
font-size: 14px;
margin-right: 8px;
margin-top: 10px;
}

.noInterests {
float: left;
color: #ccc;
font-size: 14px;
margin-right: 8px;
margin-top: 10px;
font-weight: normal;
}

.group-description-div {    
margin-bottom: 20px;
width: 63%;
clear:both;
float: left;
font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
vertical-align: top;
text-align: justify;
padding-left: 5px;
}

.group-stats-div {
margin-bottom: 20px;
width: 31%;
margin-left: 15px;
float: left;
font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
vertical-align: middle;

padding-left: 10px;
border-left: 1px solid #d2d2d2;
}

.group-stats-div label {
vertical-align: middle;
margin-left: 5px;
}

.group-stats-div img {
margin-left: 5px; 
display: inline-block; 
vertical-align: middle;
width: 13%;
}

.group-stats-div hr {
border: 0;
height: 0;
border-top: 1px solid rgba(0, 0, 0, 0.1);
border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

.group-members-div {

clear: both;

margin-left: 10px;
margin-right: 10px;

padding-top: 10px;
padding-left: 10px;

border: 1px solid #d2d2d2;
border-bottom-color: #afafaf;
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
-webkit-border-radius: 3px;

text-align: center;


}

.communityMemberIcon {
clear: both;    
border: 1px solid #000;
floar: left;
width: 15%;
margin-right: 1%;   
margin-bottom: 1%;
}

.group-books-div label,
.group-related-communities-div label,
.group-members-div label {
color: #444;
font: bold 15px "Helvetica Neue", "Helvetica", "Arial", sans-serif;    
clear: both;
text-align: left;
}

.group-members-div img {        
clear: both;    
border: 1px solid #000;
floar: left;    
width: 15%;    
margin-right: 1%;
}

.all-members-div {
text-align: center;
margin-top: 10px;
margin-bottom: 10px;
}

.allMembers {
text-align: center;
color: #0054A7;
font-size: 13px;
font-weight: bold;
}

.allBooks {
text-align: center;
color: #0054A7;
font-size: 13px;
font-weight: bold;
padding-top: 20px;
}

.group-related-communities-div {

padding-left: 20px;
padding-right: 10px;
padding-top: 10px;
margin-top: 3%;
margin-bottom: 20px;

margin-left: 10px;

font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
vertical-align: middle;

border: 1px solid #d2d2d2;
border-bottom-color: #afafaf;
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
-webkit-border-radius: 3px;

text-align: center;

height: 100%;

float: left;
width: 50%;
}

.lowerContainer {
height: 150px;    
}

.group-books-div {

padding-left: 20px;
padding-right: 10px;
padding-top: 10px;
margin-top: 3%;
margin-bottom: 20px;

margin-left: 10px;

font: 13px/18px 'Lucida Grande', 'Helvetica', 'Arial', sans-serif !important;
vertical-align: middle;

border: 1px solid #d2d2d2;
border-bottom-color: #afafaf;
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
-webkit-border-radius: 3px;

text-align: center;

height: 100%;

float: right;
width: 38%;
}

.group-related-communities-div img {
clear: both;    
border: 1px solid #000;
floar: left;    
width: 18%;
height: 43%;
margin-left: 0.5%;
margin-right: 0.5%;
}

.group-books-div img {
clear: both;    
border: 1px solid #000;
floar: left;    
width: 22%;
height: 43%;
margin-right: 2%;    
}

.noContent {
color: #ccc;
vertical-align:middle;
margin-top: 20px;
text-align: center;
}



.group-institutions-div {

clear: both;

margin-left: 10px;
margin-right: 10px;

padding-top: 10px;
padding-left: 10px;

border: 1px solid #d2d2d2;
border-bottom-color: #afafaf;
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
-webkit-border-radius: 3px;

text-align: center;


}




#blanket {
    background:none;
    z-index: 9001;
    top:0px;
    left:0px;
    width:100%;
}

#popUpDiv {
    position: absolute;    
    width: 50%;    
    height: 37%;
    max-height: 40%;
    background-color: #ffffff;    
    z-index: 9002;
    color: black;
    border: 10px solid rgba(82, 82, 82, .75);
    -webkit-background-clip: padding-box; /* for Safari */
    background-clip: padding-box; /* for IE9+, Firefox 4+, Opera, Chrome */
    -webkit-border-radius: 8px;
}

.header-institutions-div {
    height: 16%;
    background-color: #fff;
    border-top: 1px solid rgb(82, 82, 82);
    border-bottom: 1px solid rgb(82, 82, 82);
    text-align: center;    
}

.header-institutions-div img {
    padding-top: 5px;    
    display: inline-block;
    vertical-align: middle;
    width: 8%;
}

.header-institutions-div label {
    margin-left: 5px;
    padding-top: 5px;    
    display: inline-block;
    vertical-align: middle;
    color: #3D3D3D;
    font-family: 'Lucida Grande', Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-style: normal;
    font-variant: normal;
    font-weight: bold;
}

.div-institutions {
    height: 65%;
    overflow-y: auto;
    margin-left: 1%;
    width: 98%;
    padding-top: 3%;
}

.close-div {
    height: 11%;
    background-color: #CCC;
    border-top: 1px solid #525252;
    border-bottom: 1px solid #525252;
    text-align: center;
    vertical-align: middle;
    padding: 2% 0px 0px 0px;
    margin: 0px 0px 0px 0px;
}

.close-div a {
    font-family: 'Lucida Grande', Helvetica, Arial, sans-serif;
    font-style: normal;
    font-variant: normal;
    font-weight: bold;
    color: #0054A7;
    font-size: 15px;
}

.div-institutions .institution {
    margin-top: 5px;
    margin-bottom: 8px;
    font-family: 'Lucida Grande', Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    color: #3D3D3D;
    float: none;
}

.group-found-div {

    clear: both;
    
    overflow-y: auto;

    margin-left: 10px;
    margin-right: 10px;

    margin-top: 10px;
    margin-bottom: 15px;
    
    
    padding-top: 10px;
    
    padding-left: 10px;

    border: 1px solid #d2d2d2;
    border-bottom-color: #afafaf;
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
    -webkit-border-radius: 3px;

    text-align: center;

}

.groupFoundIcon {
    float: left;
    margin-right: 15px;
    vertical-align: middle;
}

.groupFoundIcon img {
    border: 1px solid black;
}

.groupInformation {
    float: left;
    width: 46%;
}


.groupInformation .groupFoundName {    
    font-weigth: bold;
    font-family: 'Lucida Grande', Helvetica, Arial, sans-serif;
    font-size: 18px;
    color: #0054A7;
    text-align: left;
}

.groupInformation .groupFoundName a {
    color: #0054A7;
    font-weight: bold;
}

.groupInformation .groupFoundDescription {
    font-weigth: bold;
    font-family: 'Lucida Grande', Helvetica, Arial, sans-serif;
    font-size: 13px;
    text-align: justify;    
}

.groupSearchBar .searchInput {
    max-width: 92%;
}

.groupSearchBar .inLineButton {
    float: right;
}

.groupSearchBar {
    width: 97%;
    margin-left: 10px;
    margin-top: -10px;
    margin-bottom: 10px;
}






 /* Cambios de Carlos */
.float-alt {
    float: none;
    display: inline-block;
}

.elgg-main label {
  float:left;
  width:15%;
  margin-right:0.5em;
  padding-top:1.2em;
  text-align:right;
  font-weight:normal;
}
/* Fin de cambios de Carlos */
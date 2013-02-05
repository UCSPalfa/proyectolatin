<?php 
        /**
         * @package OpenTok VideoChat
         * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
         * @author Roger Curry, Grid Research Centre [curry@cpsc.ucalgary.ca]
         * @link http://grc.ucalgary.ca/
	 * @author Jeroen Dalsem, ColdTrick IT Solutions [jdalsem@coldtrick.com]
         * @link http://coldtrick.com/
	 * @remark Please see CREDITS
         */

	// title
	$title_text = elgg_echo("videochat:forms:create");
	$content = elgg_view_title($title_text);
	
	$content .= elgg_view("videochat/forms/create");
	
    //select the correct canvas area
	$body = elgg_view_layout("two_column_left_sidebar", "", $content);
		
	// Display page
	page_draw($title_text,$body);
	
?>
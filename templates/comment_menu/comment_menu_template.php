<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Comment menu default template
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/comment_menu/comment_menu_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
*/



// Shortcode Wrappers
$COMMENT_MENU_WRAPPER['CM_DATESTAMP'] = ' {---}';
$COMMENT_MENU_WRAPPER['CM_AUTHOR'] = CM_L13.' {---}';
$COMMENT_MENU_WRAPPER['CM_TYPE'] = '<span class="label label-default badge text-bg-danger">{---}</span>';


// Template
$COMMENT_MENU_TEMPLATE['start'] = "
<ul class='media-list list-unstyled comment-menu'>
";
	
$COMMENT_MENU_TEMPLATE['item'] = "
  <li class='d-flex'>
    <div class='flex-shrink-0'>{CM_AUTHOR_AVATAR: shape=circle&size=26&crop=1}</div>
    <div class='flex-grow-1 ms-3'>
	  {CM_TYPE} <span class='text-uppercase small fw-bold'>{CM_URL_PRE}{CM_HEADING}{CM_URL_POST}</span>
	  <div class='text-muted small'>{CM_COMMENT}</div>
	  <div class='small text-muted'> {CM_AUTHOR} {CM_DATESTAMP}</div>
	</div>									
  </li>
";
	
$COMMENT_MENU_TEMPLATE['end'] = "
</ul>
";


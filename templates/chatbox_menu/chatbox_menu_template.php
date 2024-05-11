<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 chatbox_menu Plugin
 *
*/
if ( ! defined('e107_INIT')) {
	exit;
}

//---------------------------------MENU-----------------------------------------

$CHATBOX_MENU_TEMPLATE['menu']['start'] = '
<div class="chatbox-messages">' . PHP_EOL;

$CHATBOX_MENU_TEMPLATE['menu']['item'] 	= '
  <div class="d-flex">
    <div class="flex-shrink-0">
	  {CB_AVATAR: size=36&class=rounded-circle align-self-center}
    </div> 
    <div class="flex-grow-1 ms-3">
      <h6>{CB_USERNAME} <span class="small text-muted fst-italic">{CB_TIMEDATE}</span></h6>
	  <p class="mb-0">{CB_MESSAGE}</p>
    </div>
  </div>
  <hr />' . PHP_EOL;

$CHATBOX_MENU_TEMPLATE['menu']['end'] = '
</div>'. PHP_EOL;


//---------------------------------LIST-----------------------------------------

$CHATBOX_MENU_TEMPLATE['list']['start'] = '
<div class="chatbox-bg">' . PHP_EOL;

$CHATBOX_MENU_TEMPLATE['list']['item']  = '
  <div class="d-flex">
    <div class="flex-shrink-0">
      {CB_AVATAR:size=60&class=rounded-circle align-self-center}
    </div>
    <div class="flex-grow-1 ms-3">
	  <h5>{CB_USERNAME} <span class="small text-muted fst-italic">{CB_TIMEDATE}</span></h5>	
	  <p>{CB_MESSAGE}</p>
	  <div>
	    <div class="pull-left float-left">{CB_BLOCKED}</div>
	    <div class="pull-right float-right">{CB_MOD}</div>
	  </div>
    </div>
  </div>
  <hr />'. PHP_EOL;

$CHATBOX_MENU_TEMPLATE['list']['end'] = '
</div>'. PHP_EOL;




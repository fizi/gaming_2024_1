<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



$POPULAR_MENU_TEMPLATE['default']['start'] ="
<div class='popular-menu'>
"; // set the {NEWSIMAGE} dimensions.
$POPULAR_MENU_TEMPLATE['default']['item'] ="
  <div class='popular-menu-item'>
    <div class='popular-menu-item-img'>
      {SETIMAGE: w=100&h=100&crop=1}
      <a href='{NEWS_URL}'>{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
    </div>
    <div class='popular-menu-item-title'><a href='{NEWSURL}'>{NEWSTITLE}</a></div>
    <div class='pupular-menu-item-hits'>{GLYPH=fa-line-chart} {HITS_COUNTER}</div>
  </div>
";										
$POPULAR_MENU_TEMPLATE['default']['end'] ="
</div>
";

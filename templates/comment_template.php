<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }


// Shortcode wrappers.
$COMMENT_WRAPPER['item']['COMENT_TIMEDATE']     = '<small>{---}</small>';
$COMMENT_WRAPPER['item']['COMMENT_EDIT']        = '<span class="comment-edit">{---}</span>';
$COMMENT_WRAPPER['item']['COMENT_REPLY']		= '<span class="comment-reply">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_AVATAR']  	= '';
$COMMENT_WRAPPER['item']['COMMENT_MODERATE']	= '<span class="comment-moderate">{---}</span>';

$COMMENT_WRAPPER['form'] = $COMMENT_WRAPPER['item']; // use the above wrappers for the 'form' as well.

// Templates

$COMMENT_TEMPLATE['form'] = "
{SETIMAGE: w=90&h=90&crop=1}
<div class='comment-box-form d-flex'>
  <div class='comment-box-left me-3'>
    {SETIMAGE: w=26&h=26&crop=1}
    {COMMENT_AVATAR: shape=circle}
  </div>
  <div class='comment-box-right text-start'>
	<div class='P10'>
	  {AUTHOR_INPUT}
	  {COMMENT_INPUT}
	  <div id='commentformbutton'>
		{COMMENT_BUTTON}
		{COMMENT_SHARE}
	  </div>
	</div>
  </div>
</div>
<div class='clear_b'><!-- --></div>
<hr />"; 




$COMMENT_TEMPLATE['item'] = '
<div class="comment-frame">
  <div class="commentbox-top d-flex">
    <div class="flex-grow-1">
      <span class="commentbox-top-image pe-2">
        {SETIMAGE: w=26&h=26&crop=1}
        {COMMENT_AVATAR: shape=circle}
      </span>
      <span class="commentbox-username pe-2">{USERNAME}</span>
      <span class="commentbox-date pe-2">{COMMENT_TIMEDATE=relative}</span>
    </div>
    <div class="commentbox-reply">{COMMENT_REPLY}</div>
  </div>
  <div class="commentbox-bottom">
    <div class="commentbox-comment">{COMMENT}</div>
  </div>
  <div class="row">
	<div class="comment-status col-md-6 text-start">{COMMENT_STATUS}</div>
	<div class="comment-moderate col-md-6 text-end">{COMMENT_RATE} {COMMENT_EDIT} {COMMENT_MODERATE}</div>
  </div>
</div>
';
	



$COMMENT_TEMPLATE['layout'] = '
{COMMENTS}{COMMENTFORM} 
<div style="padding:10px 0px">{MODERATE}</div>
';



										


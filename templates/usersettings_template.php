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
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/usersettings_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

	
	
	
// e107 v2. bootstrap3 compatible template. 

$USERSETTINGS_WRAPPER['edit']['USERNAME'] =	"
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='username' class='col-md-3 control-label'>{LAN=USER_01}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['LOGINNAME'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='loginname' class='col-md-3 control-label'>{LAN=USER_81}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['PASSWORD1'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='password1' class='col-md-3 control-label'>{LAN=USET_24}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['PASSWORD2'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='password2' class='col-md-3 control-label'>{LAN=USET_25}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['REALNAME'] =	"
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='realname' class='col-md-3 control-label'>{LAN=USER_63}{REQUIRED=realname}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['CUSTOMTITLE'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='customtitle' class='col-md-3 control-label'>{LAN=USER_04}:{REQUIRED=customtitle}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['USERCLASSES'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label  class='col-md-3 control-label'>{LAN=USER_76}:{REQUIRED=class}</label>
	<div class='col-md-9 checkbox'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['AVATAR_UPLOAD'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='avatar' class='col-md-3 control-label'>{LAN=USET_26}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";
$USERSETTINGS_WRAPPER['edit']['PHOTO_UPLOAD'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='photo' class='col-md-3 control-label'>{LAN=USER_06}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";																										
$USERSETTINGS_WRAPPER['edit']['SIGNATURE'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
    <label for='signature' class='col-md-3 control-label'>{LAN=USER_71}{REQUIRED=signature}</label>
	<div class='col-md-9'>{---}</div>
  </div>
</div>
";

	// $USERSETTINGS_WRAPPER['edit']['USEREXTENDED_ALL']	= "<div class='form-group'>{---}</div>";



// Bootstrap only.

$USERSETTINGS_TEMPLATE = array();

$USERSETTINGS_TEMPLATE['edit'] = "
<div>
  {USERNAME}
  {LOGINNAME}
  <div class='form-group'>
    <div class='row border-bottom border-secondary border-opacity-50 py-2'>  
	  <label for='email' class='col-md-3 control-label'>{LAN=USER_60}{REQUIRED=email}</label>
	  <div class='col-md-9'>{EMAIL}</div>
	</div>
  </div>
  {REALNAME}
  {CUSTOMTITLE}
  {PASSWORD1}
  {PASSWORD2}
  <div class='form-group'>
    <div class='row border-bottom border-secondary border-opacity-50 py-2'>
	  <label for='hideemail' class='col-md-3 control-label'>{LAN=USER_83}</label>
	  <div class='col-md-9'>{HIDEEMAIL=radio}</div>
	</div>
  </div>
  <div class='form-group'>
    <div class='row border-bottom border-secondary border-opacity-50 py-2'>
	  <label class='col-md-3 control-label'>{LAN=USER_07}{REQUIRED=image}</label>
	  <div class='col-md-9'>{AVATAR_REMOTE}</div>
	</div>
  </div>
  {AVATAR_UPLOAD}
  {PHOTO_UPLOAD}
  {USERCLASSES}
  {USEREXTENDED_ALL=tabs}
  {SIGNATURE}
  {SIGNATURE_HELP}
  <div class='form-group'>
    <div class='row pt-3 pb-1'>
      <div class='col-md-offset-3 col-md-9'>
		{UPDATESETTINGSBUTTON}
		{DELETEACCOUNTBUTTON}
	  </div>
	</div>
  </div>
</div>
";

$USERSETTINGS_TEMPLATE['extended-category'] = "<h3>{CATNAME}</h3>";
$USERSETTINGS_TEMPLATE['extended-field'] = "
<div class='form-group'>
  <div class='row border-bottom border-secondary border-opacity-50 py-2'>
	<label class='col-md-3 control-label'>{FIELDNAME} {REQUIRED}</label>
	<div class='col-md-9'>{FIELDVAL} {HIDEFIELD}</div>
  </div>
";



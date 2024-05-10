<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
 // $Id$

if (!defined('e107_INIT')) { exit; }

$CONTACT_WRAPPER['info']['CONTACT_INFO'] = "<div>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=organization'] = "<h4 class='my-company'>{---}</h4>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=message'] = "<div class='custom-message px-3 pb-4 pt-3'>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=address'] = "
<div class='sitecontact-address d-flex flex-column justify-content-center align-items-center'>
  <div class='d-block'>{GLYPH=fas fa-map-signs}</div> 
  <div class='d-block lan'>{LAN=LAN_THEME_305}</div>
  <div class='d-block data'>{---}</div>
</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email1'] = "
<div class='sitecontact-email d-flex flex-column justify-content-center align-items-center'>
  <div class='d-block'>{GLYPH=fas fa-envelope}</div>
  <div class='d-block lan'>{LAN=LAN_THEME_303}</div>
  <div class='d-block data'><a href='mailto:{CONTACT_INFO: type=email1}'>{---}</a></div>
</div>";
// $CONTACT_WRAPPER['info']['CONTACT_INFO: type=email2'] = "<div class='email2'>{GLYPH=fas fa-at} <p class='d-inline-block align-baseline'>{LAN=LAN_THEME_304}<br /><a href='mailto:{CONTACT_INFO: type=email2}'><span class='fw-bold'>{---}</span></a></p></div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone1'] = "
<div class='sitecontact-phone d-flex flex-column justify-content-center align-items-center'>
  <div class='d-block'>{GLYPH=fas fa-phone-alt}</div>
  <div class='d-block lan'>{LAN=LAN_THEME_300}</div>
  <div class='d-block data'>{---}</div>
</div>";
// $CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone2'] = "<div class='phone2'>{GLYPH=fas fa-mobile-alt} <p class='d-inline-block align-baseline'>{LAN=LAN_THEME_301}<br /><span class='fw-bold'>{---}</span></p></div>";
// $CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone3'] = "<div class='phone3'>{GLYPH=fas fa-mobile-alt} <p class='d-inline-block align-baseline'>{LAN=LAN_THEME_302}<br /><span class='fw-bold'>{---}</span></p></div>";
// $CONTACT_WRAPPER['info']['CONTACT_INFO: type=fax'] = "<div class='fax'>{GLYPH=fa-fax} <p><span class='fw-bold'>{---}</span></p></div>";
// $CONTACT_WRAPPER['info']['CONTACT_INFO: type=hours'] = "<div class='clock'>{GLYPH=fas fa-clock} <p><span class='fw-bold'>{---}</span></p></div>";

$CONTACT_TEMPLATE['info'] = "
<!-- Backward Compat. Contact Info -->
{SITECONTACTINFO}
<!-- New Contact Info -->
<div class='row'>
  <div class='col-lg-4'>
    {CONTACT_INFO: type=address}
  </div>
  <div class='col-lg-4'>
    {CONTACT_INFO: type=phone1}
  </div>
  <div class='col-lg-4'>
    {CONTACT_INFO: type=email1}
  </div>
</div>
";


$CONTACT_TEMPLATE['menu'] =  '
<div class="contactMenuForm">
  <div class="control-group form-group">
	<label for="contactName">'.LANCONTACT_03.'</label>
	{CONTACT_NAME}
  </div>		 
  <div class="control-group form-group">
	<label class="control-label" for="contactEmail">'.LANCONTACT_04.'</label>
	{CONTACT_EMAIL}
  </div>
  <div class="control-group form-group">
	<label for="contactBody" >'.LANCONTACT_06.'</label>
    {CONTACT_BODY=rows=5&cols=30}
  </div>
  <div class="form-group"><label for="gdpr">'.LANCONTACT_24.'</label>
	<div class="checkbox form-check">
	  <label>{CONTACT_GDPR_CHECK} '.LANCONTACT_21.'</label>
	  <div class="help-block">{CONTACT_GDPR_LINK}</div> 
	</div>
  </div>
  {CONTACT_SUBMIT_BUTTON: class=btn btn-sm btn-small btn-primary button}
</div>       
 ';
 


// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}".LANCONTACT_07."</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>".LANCONTACT_14."</label>{---}</div>";




$CONTACT_TEMPLATE['form'] = "
<form action='".e_SELF."' method='post' id='contactForm'>
  {CONTACT_PERSON}
  <div class='control-group form-group'>
    <label for='contactName'>".LANCONTACT_03."</label>
    {CONTACT_NAME}
  </div>
  <div class='control-group form-group'>
    <label for='contactEmail'>".LANCONTACT_04."</label>
	{CONTACT_EMAIL}
  </div>
  <div class='control-group form-group'>
    <label for='contactSubject'>".LANCONTACT_05."</label>
	{CONTACT_SUBJECT}
  </div>
  {CONTACT_EMAIL_COPY}
  <div class='control-group form-group'>
    <label for='contactBody'>".LANCONTACT_06."</label>
	{CONTACT_BODY}
  </div>
  {CONTACT_IMAGECODE}
  {CONTACT_IMAGECODE_INPUT}
  <div class='form-group'><label for='gdpr'>".LANCONTACT_24."</label>
    <div class='checkbox'>
	  <label>{CONTACT_GDPR_CHECK} ".LANCONTACT_21."</label>
	  <div class='help-block'>{CONTACT_GDPR_LINK}</div> 
	</div>
  </div>
  <div class='form-group'>
	<div class='text-center'>{CONTACT_SUBMIT_BUTTON}</div>
  </div>
</form>"; 


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '
<div id="contactInfo">
  {CONTACT_INFO: type=organization}
  {CONTACT_INFO: type=message}
  <div class="sitecontact-info">
    {---CONTACT-INFO---}
  </div>
  <div class="sitecontact-form">
    {---CONTACT-FORM---}
  </div>
  <div class="contact-map-wrap">
    {CONTACT_MAP: zoom=city}
  </div> 
</div>
';
                               

	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}"; 

	



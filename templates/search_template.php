<?php

if (!defined('e107_INIT')) { exit; }

// Bootstrap

$SEARCH_TEMPLATE['form']['start'] = '
<form id="searchform" class="form-horizontal" method="get" action="{SEARCH_FORM_URL}">
  <div class="form-group mb-3">
    <div class="row">
      <label for="q" class="col-md-3 control-label">{LAN=199}</label>
	  <div class="col-md-8">{SEARCH_MAIN}</div>
    </div>
  </div>
  <div id="search-enhanced" {ENHANCED_DISPLAY}>
    <div class="row">
      {SEARCH_ENHANCED}
    </div>
  </div>
';
$SEARCH_TEMPLATE['form']['advanced'] = '
  <div class="form-group">
    <div class="row">
      <label for="t" class="col-md-3 control-label">{SEARCH_ADV_A}</label>
	  <div class="col-md-9">{SEARCH_ADV_B}</div>
    </div>
  </div>
';
$SEARCH_TEMPLATE['form']['enhanced'] = '
  <div id="{ENHANCED_DISPLAY_ID}" class="form-group mb-3">
    <div class="row">
      <label for="{ENHANCED_DISPLAY_FIELDNAME}" class="col-md-3 control-label">{ENHANCED_TEXT}</label>
	  <div class="col-md-9">{ENHANCED_FIELD}</div>
    </div>
  </div>
';


/*
$SEARCH_TEMPLATE['form']['type'] = '
	<div class="form-group">
	    <label for="inputPassword3" class="col-md-3 control-label">{LAN=SEARCH_75}</label>
	    <div class="col-md-9">
	    {SEARCH_TYPE_SEL}
	    </div>
	</div>';
*/

$SEARCH_TEMPLATE['form']['category'] = '
  <div class="form-group">
    <div class="row">
      <label for="t" class="col-md-3 control-label">{LAN=SEARCH_19}</label>
	  <div class="col-md-9 checkbox">{SEARCH_MAIN_CHECKBOXES}{SEARCH_DROPDOWN}&nbsp;</div>
    </div>									
  </div>
  {SEARCH_ADVANCED}
';

$SEARCH_TEMPLATE['form']['end'] = "
</form>
";

$SEARCH_TEMPLATE['form']['advanced-combo'] = '<div>{SEARCH_ADV_TEXT}</div>';

$SEARCH_TEMPLATE['form']['message'] = '<div>{SEARCH_MESSAGE}</div>';


$SEARCH_TEMPLATE['shortcode'] = "
<!-- start-search-shortcode-template -->
	{SEARCH_INPUT}
	{SEARCH_BUTTON}
<!-- end-search-shortcode-template -->
";












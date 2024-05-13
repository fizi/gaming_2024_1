<?php
// $Id$

if (!defined('e107_INIT')) { exit; }


// Starter for v2. - Bootstrap 
$LOGIN_TEMPLATE['page']['header'] = "
<div class='d-flex align-items-center justify-content-center'>
  <div id='login-template' class='mx-0 mw-100 mb-5 p-5'>
    <div class='d-flex justify-content-center'>
	  {LOGO: login}
    </div>";

$LOGIN_TEMPLATE['page']['body'] = '
    {LOGIN_TABLE_LOGINMESSAGE}
    <h5 class="form-signin-heading text-center p-3">{LAN=LOGIN_4}</h5>';
    if (e107::pref('core', 'password_CHAP') == 2) {
      $LOGIN_TEMPLATE['page']['body'] .= "
        <div style='text-align: center' id='nologinmenuchap'>"."Javascript must be enabled in your browser if you wish to log into this site"."</div>
        <span style='display:none' id='loginmenuchap'>";
	  } else {
	    $LOGIN_TEMPLATE['page']['body'] .= "<span>";
	  }

$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='form-group text-center my-4'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";


// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
  {LOGIN_TABLE_USERNAME}
  {LOGIN_TABLE_PASSWORD}
  {SOCIAL_LOGIN: size=3x}
  {LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
  {LOGIN_TABLE_REMEMBERME}
  {LOGIN_TABLE_SUBMIT=large}
 ';

$LOGIN_TEMPLATE['page']['footer'] =  "
    <div class='login-page-footer m-0'>
      <div class='login-page-signup-link text-center'>{LOGIN_TABLE_SIGNUP_LINK}</div>
      <div class='login-page-fpw-link text-center'>{LOGIN_TABLE_FPW_LINK}</div>
    </div>
  </div>
</div>";
	




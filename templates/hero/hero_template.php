<?php

// Template File
// hero Template file

if (!defined('e107_INIT')) { exit; }



$HERO_TEMPLATE['default']['header'] = '
<!-- Hero Menu: header -->
{SETIMAGE: w=1000&h=1000&crop=1}
<div id="carousel-hero" class="carousel slide" data-bs-ride="carousel" data-ride="carousel" data-interval="{HERO_SLIDE_INTERVAL}" data-bs-interval="{HERO_SLIDE_INTERVAL}">
  <div class="carousel-indicators">
    <!-- Indicators -->
	{HERO_CAROUSEL_INDICATORS: target=carousel-hero&class=animated fadeInUpBig}	
  </div>
  <div class="carousel-inner">';

$HERO_TEMPLATE['default']['start'] = '
    <div class="carousel-item item {HERO_SLIDE_ACTIVE} bg-dark" style="background-image:{HERO_BGIMAGE}">
	  <div class="container col-xxl-8 py-3">						                  
	    <div class="carousel-caption">
		  <div class="hero-text-container">
			<div class="row flex-lg-row-reverse align-items-center g-5 pb-5">
              <div class="col-md-6">
		        <div class="animated fadeInRight animation-delay-10">{HERO_MEDIA: class=d-block mx-auto img-fluid}</div>
	          </div>
			  <div class="col-md-6">
                <header class="lh-1 mb-3">
			      <h1 class="text-light animated fadeInLeft animation-delay-10 font-smoothing">{HERO_TITLE: enwrap=strong}</h1>
			      <h5 class="text-light animated fadeInLeft animation-delay-12">{HERO_DESCRIPTION: enwrap=span&class=text-bold}</h5>
			    </header>
			    <ul class="hero-list list-unstyled">
';

$HERO_TEMPLATE['default']['item'] = '
                  <li>										
			        <div class="d-inline animated zoomInUp {HERO_ANIMATION_DELAY}">
			          <span class="hero-icon hero-icon-circle label-{HERO_ICON_STYLE} bg-{HERO_ICON_STYLE} badge-{HERO_ICON_STYLE} shadow-3dp">{HERO_ICON}</span>
			        </div>
			        <div class="fs-4 d-inline animated {HERO_ANIMATION} {HERO_ANIMATION_DELAY}">{HERO_TEXT}</div>
			      </li>
';
                  
$HERO_TEMPLATE['default']['end'] = '
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">					     
			      <a href="{HERO_BUTTON1_URL}" class="btn-{HERO_BUTTON1_CLASS} btn btn-outline-secondary btn-lg px-4 animated fadeInRight animation-delay-28">{HERO_BUTTON1_ICON} {HERO_BUTTON1_LABEL}</a>					                        
			    </div>
	          </div>
	          
 			</div>											
		  </div>
		</div>
	  </div>
	</div>
';                  
                                    
$HERO_TEMPLATE['default']['footer'] = '
  </div>
  <div class="carousel-controls">
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-hero" data-bs-slide="prev">
	  <i class="fa-solid fa-arrow-left"></i>
      <span class="carousel-control-prev-icon visually-hidden" aria-hidden="true"></span>
      <span class="visually-hidden">{LAN=PREVIOUS}</span>
	</button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel-hero" data-bs-slide="next">
	  <i class="fa-solid fa-arrow-right"></i>
      <span class="carousel-control-next-icon visually-hidden" aria-hidden="true"></span>
      <span class="visually-hidden">{LAN=NEXT}</span>
	</button>											                 
  </div>
</div>
';


$HERO_TEMPLATE['menu'] = $HERO_TEMPLATE['default'];
$HERO_TEMPLATE['menu']['header'] = '
<!-- Hero Menu: header -->
{SETIMAGE: w=400&h=400}
<div id="carousel-hero" class="carousel carousel-hero-menu carousel-fade slide" data-bs-ride="carousel" data-ride="carousel" data-interval="{HERO_SLIDE_INTERVAL}" data-bs-interval="{HERO_SLIDE_INTERVAL}">
  <div class="carousel-inner d-flex" role="listbox">
';
$HERO_TEMPLATE['menu']['start'] = '
    <div class="carousel-item item {HERO_SLIDE_ACTIVE}" style="background-image:{HERO_BGIMAGE}">
      <div>						                  
	    <div class="carousel-caption">
		  <div class="hero-text-container">
			<header class="hero-title animated slideInLeft animation-delay-5">
			  <h1 class="animated fadeInLeft animation-delay-10 font-smoothing">{HERO_TITLE: enwrap=strong}</h1>
			  <h2 class="animated fadeInLeft animation-delay-12">{HERO_DESCRIPTION: enwrap=span&class=text-bold}</h2>
			</header>
			<div class="row">
			  <div class="col-md-6">
				<ul class="hero-list list-unstyled">
';








<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);


// Default
// $NEWS_VIEW_WRAPPER['default']['item']['NEWS_IMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';
// $NEWS_VIEW_WRAPPER['default']['item']['NEWS_RELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = '{NEWS_TITLE}'; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
{SETIMAGE: w=900&h=600}
<div class="view-item">
  <div class="view-item-image">{NEWS_IMAGE: item=1}</div>
  <div class="view-item-title">{NEWS_TITLE}{ADMINOPTIONS: class=ps-2}</div>
  <div class="row">
    <div class="col-md-6">
      <div class="view-item-author text-start">
        {SETIMAGE: w=25&h=25}
        {NEWS_AUTHOR_AVATAR: shape=circle} by {NEWS_AUTHOR}&nbsp;&nbsp;-&nbsp;
        <span class="view-item-date">{NEWS_DATE=yyyy. M dd.}</span>
        <span class="view-item-comments">&nbsp;&nbsp;{GLYPH=fas fa-comments} {NEWS_COMMENT_COUNT}</span>
        <span class="view-item-hits">&nbsp;&nbsp;{GLYPH=fas fa-line-chart} {HITS_UNIQUE}</span>
      </div>
    </div>
    <div class="col-md-6">
      <div class="view-item-category news-category-{NEWS_CATEGORY_ID} text-end">{NEWSCATEGORY}</div>
    </div>
  </div>
  <hr />
  <div class="lead view-item-summary pb-3">{NEWS_SUMMARY}</div>
  <div class="view-item-body pb-3">{NEWS_BODY=body}</div>
  <div class="view-item-images text-center">
    {SETIMAGE: w=800&h=800}		
	<div class="row mb-4">
      <div class="col-md-6">{NEWS_IMAGE: item=2}</div>
      <div class="col-md-6">{NEWS_IMAGE: item=3}</div>
    </div>
    <div class="row mb-4">
      <div class="col-md-6">{NEWS_IMAGE: item=4}</div>
      <div class="col-md-6">{NEWS_IMAGE: item=5}</div>
    </div>
  </div>
  <div class="view-item-extended">
    {NEWS_BODY=extended}
  </div>  
  <div class="view-item-videos">
    <div class="row">
      <div class="col-md-6">{NEWS_VIDEO: item=1}</div>
      <div class="col-md-6">{NEWS_VIDEO: item=2}</div>
    </div>
    <div class="row">
      <div class="col-md-6">{NEWS_VIDEO: item=3}</div>
      <div class="col-md-6">{NEWS_VIDEO: item=4}</div>
	</div>	    			
  </div>
  <div class="view-item-rate d-flex justify-content-end">{NEWS_RATE}</div>
  <div class="view-item-tags">{NEWS_TAGS}</div>	
  <div class="view-item-options hidden-print my-3">
	<div class="view-item-share d-flex justify-content-between">
      <div class="social-text">{LAN=LAN_THEME_10}</div>
      <div class="social-share-icons">{SOCIALSHARE}</div>
    </div>
  </div>
  <div class="view-item-pagination">
    <ul class="news-view-pagination d-flex justify-content-between my-5">
      <li class="page-item col-md-4 text-start">{NEWS_NAV_PREVIOUS}</li>
      <li class="page-item col-md-4 text-center">{NEWS_NAV_CURRENT}</li>
      <li class="page-item col-md-4 text-end">{NEWS_NAV_NEXT}</li>
    </ul>
  </div>  
</div>
{THEME_RELATED_NEWS: limit=3}
 

';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
 $NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a rel="prev" href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a rel="next" class="text-right" href="{NEWS_URL}"><span class="mx-1">{NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';

 

<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;



$NEWS_TEMPLATE = array();


$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
	'2-column'  => array('title' => "2 Column (experimental)",     'description' => 'unused'), //@todo more default listing options.
);


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption'] = '<div class="right-section-title"><h3>{NEWSCATEGORY}</h3></div>';
$NEWS_TEMPLATE['list']['start']	= $NEWS_TEMPLATE['default']['start'];

/*
 // (optional)
$NEWS_TEMPLATE['list']['first'] = '
		{SETIMAGE: w=800&h=400}
		<div class="default-item">

          {NEWSIMAGE: item=1}
			<h2 class="news-title">{NEWS_TITLE: link=1}</h2>
          <p class="lead">{NEWS_SUMMARY}</p>
          {NEWSVIDEO: item=1}
          <div class="text-justify">
       
          </div>
           <div class="text-right">
			<a href="{NEWS_URL}" class="btn btn-primary">{LAN=LAN_READ_MORE}</a>
			</div>
        <hr>
		
			</div>
		{SETIMAGE: w=400&h=350&crop=1}
';
*/

$NEWS_TEMPLATE['list']['item'] = $NEWS_TEMPLATE['default']['item'];
$NEWS_TEMPLATE['list']['end'] = $NEWS_TEMPLATE['default']['end'];


//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme. 
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/



/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/

// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['default']['caption'] = '<div class="right-section-title"><h3>{LAN=PAGE_NAME}</h3></div>'; // add a value to user tablerender()

$NEWS_TEMPLATE['default']['start'] = '
<!-- Default News Template -->
<div class="default-news">
  <div class="row d-flex flex-flex-wrap">
';

$NEWS_TEMPLATE['default']['item'] = '
    <div class="col-md-6 mb-5">
      <div class="default-news-item h-100 d-flex flex-column">  
        <div class="default-news-image-main">
          {SETIMAGE: w=800&h=600&crop=1}
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
          <div class="default-news-category news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</div>
        </div>
        <div class="default-news-content">
          <div class="default-news-title"><h2>{NEWS_TITLE: link=1}</h2></div>
          <div class="default-news-rate">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
          <div class="default-news-author text-start">
            {SETIMAGE: w=25&h=25}
            {NEWS_AUTHOR_AVATAR: shape=circle} by {NEWS_AUTHOR}&nbsp;&nbsp;-&nbsp;
            <span class="default-news-date">{NEWS_DATE=yyyy. M. dd.}</span>
            <span class="view-item-comments">&nbsp;&nbsp;{GLYPH=fas fa-comments} {NEWS_COMMENT_COUNT}</span>
            <span class="default-news-hits">&nbsp;&nbsp;{GLYPH=fa-line-chart} {HITS_UNIQUE}</span>
          </div>
          <div class="default-news-summary">{NEWS_SUMMARY: limit=200}</div> 
        </div>
        <div class="default-item-read-more text-center mt-auto p-3 pb-4"><a class="px-4 py-2" href="{NEWSURL}">{LAN=READ_MORE}</a></div>
      </div>
    </div>
';

$NEWS_TEMPLATE['default']['end'] = '
  </div>
</div>
';


/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/

$NEWS_TEMPLATE['category']['caption'] = '<div class="right-section-title"><h3>{NEWS_CATEGORY_NAME}</h3></div>';
$NEWS_TEMPLATE['category']['start']	= $NEWS_TEMPLATE['default']['start'];
$NEWS_TEMPLATE['category']['item'] = $NEWS_TEMPLATE['default']['item'];
$NEWS_TEMPLATE['category']['end'] = $NEWS_TEMPLATE['default']['end'];

/*
$NEWS_TEMPLATE['category']['start']	= '
<!-- Category News Template -->
<div class="default-news">
';
$NEWS_TEMPLATE['category']['item'] = '
  <div class="default-news-item mb-4">
    <div class="default-news-image-main p-2">
      {SETIMAGE: w=800&h=600&crop=1}
      <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
    </div>
    <div class="default-news-info">
      <div class="default-news-category news-category-{NEWS_CATEGORY_ID}">{NEWS_CATEGORY_NAME: link=1}</div>
      <div class="default-news-title-date">
        <div class="default-news-title"><h2>{NEWS_TITLE: link=1}</h2></div>
        <div class="default-news-date mb-3">{GLYPH=fas fa-calendar}&nbsp;&nbsp;{NEWS_DATE=yyyy. M. dd.}</div>
        <div class="default-news-summary">{NEWS_SUMMARY: limit=200}</div> 
        <div class="default-item-read-more"><a class="d-inline-block my-3 px-4 py-2" href="{NEWSURL}">{LAN=READ_MORE}&nbsp;&nbsp;{GLYPH=fas fa-long-arrow-right}</a></div>
      </div>
    </div>
  </div>
';

$NEWS_TEMPLATE['category']['end'] = '
</div>
';
*/


/**
 * @todo (experimental)
 */
$NEWS_TEMPLATE['2-column']['caption']  = '{NEWS_CATEGORY_NAME}';
$NEWS_TEMPLATE['2-column']['start']    = '<div class="row">';
$NEWS_TEMPLATE['2-column']['item']     = '<div class="item col-md-6">
											{SETIMAGE: w=400&h=400&crop=1}
											{NEWSTHUMBNAIL=placeholder}
	                                            <h3>{NEWS_TITLE}</h3>
	                                            <p>{NEWS_SUMMARY}</p>
	                                         	<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							  </div>';
$NEWS_TEMPLATE['2-column']['end']      = '</div>';


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/


$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=800&h=600&crop=1}
<div class="related-news-caption mb-3 py-3"><h2>{LAN=LAN_RELATED}</h2></div>
<div class="related-news-items">
  <div class="row">
';

$NEWS_TEMPLATE['related']['item'] = '
    <div class="col-lg-4">
      <div class="related-item mb-5">
        <div class="related-news-image mb-2">
          <a href="{THEME_RELATED_URL}">{THEME_RELATED_IMAGE}</a>
        </div>
        <div class="related-news-category related-news-category-{THEME_RELATED_CATEGORY_ID}">{THEME_RELATED_CATEGORY_NAME}</div> 
        <div class="related-news-title"><h4 class="mb-0"><a href="{THEME_RELATED_URL}">{THEME_RELATED_TITLE}</a></h4></div>
      </div>
    </div>';

$NEWS_TEMPLATE['related']['end'] = '
  </div>
</div>';

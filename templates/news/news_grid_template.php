<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '<div class="row news-grid-default news-menu-grid gx-3">';

	$NEWS_GRID_TEMPLATE['col-md-6']['featured'] = '<div class="row featured">
													<div class="col-sm-12">
													<div class="item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
													</div>
													<div class="item col-sm-6">
		                                                <h3>{NEWSTITLE}</h3>
		                                                <p>{NEWSMETADIZ: limit=100}</p>
		                                                <p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
	                                                </div>
	                                               </div>
	                                               </div>
            							          ';

	$NEWS_GRID_TEMPLATE['col-md-6']['item'] = '<div class="item col-md-6">
												{SETIMAGE: w=400&h=400&crop=1}
												{NEWSTHUMBNAIL=placeholder}
              									<h3>{NEWS_TITLE}</h3>
              									<p>{NEWS_SUMMARY}</p>
              									<p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
            							   </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '</div>';


// ------------------ col-md-4 -----------------

	$NEWS_GRID_TEMPLATE['col-md-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-4']['item']     = '<div class="item col-md-4">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];



// ------------------ col-md-3 -----------------


	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '<div class="item col-md-3">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right text-end"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">{LAN=READ_MORE}</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];


//  ---------------- col-lg-4 Bootstrap 5 only ---------------

	$NEWS_GRID_TEMPLATE['col-lg-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-lg-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
	$NEWS_GRID_TEMPLATE['col-lg-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];
	$NEWS_GRID_TEMPLATE['col-lg-4']['item']     = '{SETIMAGE: w=412&h=250&crop=1}
						<div class="item col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                 {NEWS_IMAGE: type=tag&class=card-img-top&placeholder=1}
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">{NEWS_CATEGORY_NAME}</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{NEWS_URL}">
                                    <h5 class="card-title mb-3">{NEWS_TITLE}</h5></a>
                                    <p class="card-text mb-0">{NEWS_SUMMARY}</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                        	{NEWS_AUTHOR_AVATAR: class=rounded-circle me-3&w=40&h=40&crop=1&placeholder=1}
                                            <div class="small">
                                                <div class="fw-bold">{NEWS_AUTHOR}</div>
                                                <div class="text-muted">{NEWS_DATE=short}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
	';

// ------------------ media-list -----------------



	$NEWS_GRID_TEMPLATE['media-list']['start'] = '<div class="row news-grid-default">';

	$NEWS_GRID_TEMPLATE['media-list']['featured'] = '<div class="featured item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
														 <h3><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
														 <p>{NEWS_SUMMARY: limit=60}</p>
													</div>


            							          ';


	$NEWS_GRID_TEMPLATE['media-list']['item'] = '<div class="item col-sm-6">
												{SETIMAGE: w=120&h=120&crop=1}
												<ul class="media-list">
													<li class="media">
													  <div class="media-left media-top">
													    <a href="{NEWS_URL}">
													      {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
													    </a>
													  </div>
													  <div class="media-body">
													    <h4 class="media-heading"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h4>
													    <p>{NEWS_SUMMARY: limit=60}</p>
													  </div>
													  </li>

												</ul>
            							    </div>';


	$NEWS_GRID_TEMPLATE['media-list']['end'] = '</div>';
    

/************ MODOFIED BY FIZI ***********************************************************************************************************************/
   
//  This News Grid for latest news - 5 items
$NEWS_GRID_TEMPLATE['front-latest-news']['start'] = '
<div class="front-latest-news-header pt-2 pb-4"><span>{LAN=LAN_THEME_100}</span></div>
<div id="front-latest-news">
  <div class="row">
';
$NEWS_GRID_TEMPLATE['front-latest-news']['featured'] = '
    <div class="col-lg-6 latest-featured-news-item mb-5">
      {SETIMAGE: w=800&h=600&crop=1}        
      <div class="latest-news-image">
        <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
        <div class="latest-news-category news-category-{NEWS_CATEGORY_ID}">{NEWS_CATEGORY_NAME: link=1}</div>
      </div>
      <div class="latest-news-content">
        <h3 class="latest-news-title">{NEWS_TITLE: link=1}</h3>
        <div class="latest-news-info">
          {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
          <span class="latest-news-rate ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</span>
        </div> 
        <div class="latest-news-summary">{NEWS_SUMMARY: limit=200}</div>
      </div>                             
    </div>  
    <div class="col-lg-6 items mb-5">
';
$NEWS_GRID_TEMPLATE['front-latest-news']['item'] = '
      <div class="latest-news-item">
        <div class="row">
          <div class="col-lg-3">
	        {SETIMAGE: w=1000&h=800&crop=1}
            <div class="latest-news-image">
              <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="latest-news-content">
              <h4 class="latest-news-title">{NEWS_TITLE: link=1}</h4>
              <div class="latest-news-info">
                {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
                <span class="latest-news-category ps-3 news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</span>
                <span class="latest-news-rate ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</span>
              </div> 
            </div>
          </div>                     
        </div>
      </div>
';
$NEWS_GRID_TEMPLATE['front-latest-news']['end'] = '     
    </div>
  </div>
</div>
';


//  This News Grid for category 1 - 4 items
$NEWS_GRID_TEMPLATE['front-category-1']['start'] = '
<div class="front-category-{NEWS_CATEGORY_ID}-header pt-2 pb-4"><span class="news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</span></div>
<div id="front-category-{NEWS_CATEGORY_ID}">
  <div class="row">
';
$NEWS_GRID_TEMPLATE['front-category-1']['featured'] = ' ';
$NEWS_GRID_TEMPLATE['front-category-1']['item'] = '
    <div class="col-lg-3  d-flex align-items-stretch mb-5">     
      <div class="news-item">
	    {SETIMAGE: w=1000&h=800&crop=1}
        <div class="news-image">
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
        </div>
        <div class="news-content d-flex flex-column">
          <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
          <div class="news-info mt-1 mb-2">
            <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
            {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
          </div>                      
        </div>
      </div>
    </div>
';
$NEWS_GRID_TEMPLATE['front-category-1']['end'] = '     
  </div>
</div>
';


//  This News Grid for category 2 - 5 items
$NEWS_GRID_TEMPLATE['front-category-2']['start'] = '
<div class="front-category-{NEWS_CATEGORY_ID}-header pt-2 pb-4"><span class="news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</span></div>
<div id="front-category-{NEWS_CATEGORY_ID}">
';
$NEWS_GRID_TEMPLATE['front-category-2']['featured'] = '
  <div class="featured-news-item mb-3">
    <div class="row">
      <div class="col-lg-5">
        {SETIMAGE: w=1000&h=800&crop=1}        
        <div class="news-image">
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="news-content">
          <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
          <div class="news-info mt-1 mb-2">
            <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
            {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
          </div> 
          <div class="news-summary">{NEWS_SUMMARY: limit=200}</div>
        </div>                             
      </div> 
    </div>
  </div>
  <div class="row mb-2">     
';
$NEWS_GRID_TEMPLATE['front-category-2']['item'] = '
    <div class="col-lg-6 items d-flex align-items-stretch mb-3">
      <div class="news-item">
        <div class="row">
          <div class="col-lg-4">
	        {SETIMAGE: w=1000&h=800&crop=1}
            <div class="news-image">
              <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="news-content">
              <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
              <div class="news-info mt-1 mb-2">
                <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
                {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
              </div>
              <div class="news-summary">{NEWS_SUMMARY: limit=200}</div>
            </div>
          </div>                      
        </div>
      </div>
    </div>
';
$NEWS_GRID_TEMPLATE['front-category-2']['end'] = '   
  </div>
</div>
';


//  This News Grid for category 3 - 3 items
$NEWS_GRID_TEMPLATE['front-category-3']['start'] = '
<div class="front-category-{NEWS_CATEGORY_ID}-header pt-2 pb-4"><span class="news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</span></div>
<div id="front-category-{NEWS_CATEGORY_ID}">
';
$NEWS_GRID_TEMPLATE['front-category-3']['featured'] = ' ';
$NEWS_GRID_TEMPLATE['front-category-3']['item'] = '
  <div class="news-item mb-3">
    <div class="row">
      <div class="col-lg-3">          
	    {SETIMAGE: w=1000&h=800&crop=1}
        <div class="news-image">
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
        </div>
      </div>
      <div class="col-lg-9">     
        <div class="news-content">
          <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
          <div class="news-info mt-1 mb-2">
            <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
            {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
          </div>
          <div class="news-summary">{NEWS_SUMMARY: limit=200}</div>                      
        </div>
      </div>
    </div>
  </div>
';
$NEWS_GRID_TEMPLATE['front-category-3']['end'] = '     
</div>
';


//  This News Grid for category 4 - 3 items
$NEWS_GRID_TEMPLATE['front-category-4']['start'] = '
<div class="front-category-{NEWS_CATEGORY_ID}-header pt-2 pb-4"><span class="news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</span></div>
<div id="front-category-{NEWS_CATEGORY_ID}">
  <div class="row">
';
$NEWS_GRID_TEMPLATE['front-category-4']['featured'] = '
    <div class="col-lg-8 mb-5">
      <div class="featured-news-item">
        {SETIMAGE: w=1000&h=800&crop=1}        
        <div class="news-image">
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
        </div>
        <div class="news-content">
          <h3 class="news-title">{NEWS_TITLE: link=1}</h3>
          <div class="news-info">
            <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
            {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
          </div> 
          <div class="news-summary">{NEWS_SUMMARY: limit=200}</div>
        </div>
      </div>                             
    </div>  
    <div class="col-lg-4 mb-5">
';
$NEWS_GRID_TEMPLATE['front-category-4']['item'] = '
      <div class="news-item mb-3">
	    {SETIMAGE: w=1000&h=800&crop=1}
        <div class="news-image">
          <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
        </div>
        <div class="news-content">
          <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
          <div class="news-info">
            <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
            {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
          </div>                      
        </div>
      </div>
';
$NEWS_GRID_TEMPLATE['front-category-4']['end'] = '     
    </div>
  </div>
</div>
';


//  This News Grid for category 5 - 4 items
$NEWS_GRID_TEMPLATE['front-category-5']['start'] = '
<div class="front-category-{NEWS_CATEGORY_ID}-header pt-2 pb-4"><span class="news-category-{NEWS_CATEGORY_ID}">{NEWSCATEGORY}</span></div>
<div id="front-category-{NEWS_CATEGORY_ID}">
  <div class="row">
';
$NEWS_GRID_TEMPLATE['front-category-5']['featured'] = ' ';
$NEWS_GRID_TEMPLATE['front-category-5']['item'] = '
    <div class="col-lg-6 d-flex align-items-stretch mb-3">     
      <div class="news-item">
        <div class="row">
          <div class="col-lg-5">
	        {SETIMAGE: w=1000&h=800&crop=1}
            <div class="news-image">
              <a href="{NEWS_URL}">{NEWSIMAGE: item=1&class=rounded-0 img-fluid}</a>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="news-content">
              <h4 class="news-title">{NEWS_TITLE: link=1}</h4>
              <div class="news-info mt-1 mb-2">
                <div class="default-news-rate mb-2 ps-3">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
                {GLYPH=fas fa-calendar}&nbsp;{NEWS_DATE=yyyy. M. dd.}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&nbsp;&nbsp;{GLYPH=fas fa-eye}&nbsp;{HITS_UNIQUE}
              </div>
              <div class="news-summary">{NEWS_SUMMARY: limit=80}</div> 
            </div>
          </div>                     
        </div>
      </div>
    </div>
';
$NEWS_GRID_TEMPLATE['front-category-5']['end'] = '     
  </div>
</div>
';













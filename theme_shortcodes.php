<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2022 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/



/**
 *
 */
class theme_shortcodes extends e_shortcode
{

	/**
	 * Special Header Shortcode for dynamic menuarea templates.
	 * @shortcode {---HEADER---}
	 * @return string
	 */
	function sc_header()
	{
		return "<!-- Dynamic Header template -->\n";
	}


	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	function sc_footer()
	{
		return "<!-- Dynamic Footer template -->\n";
/*
		return '
			<footer class="footer py-4 bg-dark text-white">
			<div class="container">       		
				<div class="content">         			
					<div class="row">           				
						<div class="col-md-3">   <h4>Navigation</h4>{NAVIGATION: type=main&layout=alt} 
							{MENUAREA=14}
						</div>
						<div class="col-md-3">   <h4>Follow Us</h4>{XURL_ICONS: template=footer}
							{MENUAREA=15}
						</div>           				
						<div class="col-md-3">  
							{MENUAREA=16}
						</div>           				
						<div class="col-md-3">  
							{MENUAREA=17}
						</div>                 			
					</div>       		
				</div>       		
				<hr>   	 
				<div class="container">    {NAVIGATION: type=main&layout=footer} </div>
				<div class="container">      
					<p class="m-0 text-center text-white">{SITEDISCLAIMER}</p>
				</div>    
				<!-- /.container -->
				</div>
		</footer>';*/


	}

	/**
	 * Optional {---CAPTION---} processing.
	 * @shortcode {---CAPTION---}
	 * @return string
	 */
	function sc_caption($caption)
	{
		return $caption; 
	}

	/**
	 * Optional {---BREADCRUMB---} processing.
	 * @shortcode {---BREADCRUMB---}
	 * @return string
	 */
	 /*
	function sc_breadcrumb($array)
	{
		$route = e107::route();

		if(strpos($route,'news/') === 0)
		{
			$array[0]['text'] = 'Blog';
		}

		return e107::getForm()->breadcrumb($array, true);

	}
	*/

	/**
	 * Will only function on the news page.
	 *
	 * @example {THEME_NEWS_BANNER: type=date}
	 * @example, {THEME_NEWS_BANNER: type=image}
	 * @example {THEME_NEWS_BANNER: type=author}
	 * @param null $parm
	 * @return string|null
	 *
	 */
	function sc_theme_news_banner($parm=null)
	{
		/** @var news_shortcodes $news */
		$sc = e107::getScBatch('news');
		$news = $sc->getScVar('news_item');

		$ret = '';
		$type = varset($parm['type']);

		switch($type)
		{
			case "title":
				$ret = $sc->sc_news_title();
				break;

			case "date":
				$ret = $sc->sc_news_date();
				break;

			case "comment":
				$ret = $sc->sc_news_comment_count();
				break;

			case "author":
				$ret = $sc->sc_news_author();
				break;

			case "image":
			default:
			if(!empty($news['news_thumbnail']))
			{
				$tmp = explode(',', $news['news_thumbnail']);

				$opts = array(
					'w' => 1800,
					'h' => null,
					'crop' => false,
				);

				$ret = e107::getParser()->toImage($tmp[0], $opts);
			}
			
		}

		return $ret;


	}
    /*
	function sc_bootstrap_branding()
	{
		$pref = e107::pref('theme', 'branding');

		switch ($pref)
		{
			case 'logo':

				return e107::getParser()->parseTemplate('{SITELOGO: h=30}', true);

				break;

			case 'sitenamelogo':
				return "<span>" . e107::getParser()->parseTemplate('{SITELOGO: h=30}', true) . "</span>" . SITENAME;

				break;

			case 'sitename':
			default:

				return SITENAME;

				break;
		}
	}
    */
    /*
	function sc_bootstrap_nav_align()
	{
		$pref = e107::pref('theme', 'nav_alignment');

		if ($pref == 'right')
		{
			return 	e107::getParser()->parseTemplate('{NAVIGATION: type=main&class=ms-auto}');
		}
		else
		{
			return e107::getParser()->parseTemplate('{NAVIGATION: type=main&class=me-auto}');
		}
	}
    */
    
    /*
    *
    * @example, {THEME_RELATED_NEWS: type=category-id}
    *
    */
    
    function sc_theme_related_news($parm=null)
	{
      /** @var news_shortcodes $news */
		$sc = e107::getScBatch('news');
		$news = $sc->getScVar('news_item');

		$ret = '';
		$type = varset($parm['type']);
        
        switch($type)
		{
			case "category-id":
			$ret = $sc->sc_news_category_id();
			break;
            
            case "category-name":
			$ret = $sc->sc_news_category_name();
			break;
        }
    }
    
    
    /* {MEMBERS_LANGUAGE_SWITCHER} */
    function sc_members_language_switcher($parm = '')
    {
        $slng = e107::getLanguage();
        $code = $slng->convert(e_LANGUAGE);
        $text = '<ul class="multilan">
                   <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-uppercase" href="javascript:void(0)" id="navbarLangDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$code.'</a>
                     <ul class="dropdown-menu" aria-labelledby="navbarLangDropdown">';

        
        $languages = $slng->installed();
        sort($languages);
 
        if (count($languages) > 1)
        {
            $c = 0;
            $checked = "active'";
            foreach ($languages as $lng)
            {
                $code = $slng->convert($lng);
             
                $selected = '';
                if ($lng == e_LANGUAGE)
                {
                    $selected = $checked;
                    $link = '#';
                }

                else
                {
                    $get = $_GET;
                    $get['elan'] = $code;

                    $qry = http_build_query($get, '', '&amp;');
                    $link = e_REQUEST_SELF . '?' . $qry;
                }

                $tmp[$c]['text'] =  $lng ;
                $tmp[$c]['code'] =  $code;
                $tmp[$c]['link'] = $link;
                $tmp[$c]['checked'] = $selected; 
                $c++;
            }
 
        }      
        foreach($tmp AS $option) {
            $value =  $option['code']  ;
            $checked =  $option['checked'];
            $code =  $option['text'];  
            $link =  $option['link'];    
            $text .= '
            <li><a class="dropdown-item '.$checked.' text-uppercase" href="'.$link.'"><img class="flags" src="'.THEME_ABS.'images/flags/'.$code.'.png" /> '.$value.'</a></li> ';
        }  
       

        $text .= "</ul>
                  </li>
                  </ul>";
  
   
        return $text; 
    }
    
    
/*----------------------------- 
  NEWS GRID SHORTCODE 
-----------------------------*/ 
    function sc_bootstrap_grid_news_front_latest(){
  
      $template = "
        <!-- News Grid Menu for Latest 5 News -->
        {MENU: path=news/news_grid&limit=6&category=0&source=latest&featured=1&layout=front-latest-news}

      ";

      $text = e107::getParser()->parseTemplate($template,true);

      echo $text;
  
    }
    
    function sc_bootstrap_grid_news_front_category_1(){
  
      $template = "
        <!-- News Grid Menu for Category 1 - 4 News -->
        {MENU: path=news/news_grid&limit=4&category=1&source=latest&featured=0&layout=front-category-1}

      ";

      $text = e107::getParser()->parseTemplate($template,true);

      echo $text;
  
    }
    
    function sc_bootstrap_grid_news_front_category_2(){
  
      $template = "
        <!-- News Grid Menu for Category 2 - 5 News -->
        {MENU: path=news/news_grid&limit=5&category=2&source=latest&featured=1&layout=front-category-2}

      ";

      $text = e107::getParser()->parseTemplate($template,true);

      echo $text;
  
    }
    
    function sc_bootstrap_grid_news_front_category_3(){
  
      $template = "
        <!-- News Grid Menu for Category 3 - 3 News -->
        {MENU: path=news/news_grid&limit=3&category=3&source=latest&featured=0&layout=front-category-3}

      ";

      $text = e107::getParser()->parseTemplate($template,true);

      echo $text;
  
    }
    
    function sc_bootstrap_grid_news_front_category_4(){
  
      $template = "
        <!-- News Grid Menu for Category 4 - 3 News -->
        {MENU: path=news/news_grid&limit=4&category=4&source=latest&featured=1&layout=front-category-4}

      ";

      $text = e107::getParser()->parseTemplate($template,true);

      echo $text;
  
    }
    
    function sc_bootstrap_grid_news_front_category_5(){
  
      $template = "
        <!-- News Grid Menu for Category 5 - 4 News -->
        {MENU: path=news/news_grid&limit=4&category=5&source=latest&featured=0&layout=front-category-5}

      ";

      $text = e107::getParser()->parseTemplate($template,true);

      echo $text;
  
    }

    
    
    


}







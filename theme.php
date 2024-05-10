<?php

if(!defined('e107_INIT'))
{
	exit();
}

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected) 

class theme implements e_theme_render {

  public function init() {

    e107::meta('viewport', 'width=device-width, initial-scale=1.0'); // added to <head>
	// e107::link('rel="preload" href="{THEME}fonts/myfont.woff2?v=2.2.0" as="font" type="font/woff2" crossorigin');  // added to <head>
    // e107::meta('apple-mobile-web-app-capable','yes');

    
    e107::js("theme", "js/jquery.lettering.js"); 
    e107::js("theme", "js/custom.js", "jquery");
  }

  /**
  * Override how THEME_STYLE is loaded. Duplicates will be automatically removed.
  * @return void
  */
  function css() {
    // e107::css('url', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap'); 
    e107::css('url', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    e107::css('url', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap');
    e107::css("url", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css");
    e107::css('theme', THEME_STYLE);
	e107::css('theme', 'style.css'); // always load style.css last.
	e107::css('inline', '#carousel-hero.carousel {   margin-bottom: 80px; }');
  }

  
  /**
  * @param string $text
  * @return string without p tags added always with bbcodes
  * note: this solves W3C validation issue and CSS style problems
  * use this carefully, mainly for custom menus, let decision on theme developers
  */
  function remove_ptags($text = '') { // FIXME this is a bug in e107 if this is required.		
    $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);
	return $text;
  }

  function tablestyle($caption, $text, $mode='', $options = array()) {
    $style = varset($options['setStyle'], 'default');

	// Override style based on mode.
	switch($mode) {
	  case 'wmessage':
	  case 'wm':
	  $style = 'wmessage';
	  break;

	  case 'news_months_menu':
	  $style = 'listgroup';
	  break;
      
      case 'news_months_menu':
	  $style = 'listgroup';
	  break;
      
      case 'comment':
	  $style = 'main-menu';
	  break;
	}

	echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";
			
	if($style === 'listgroup' && empty($options['list'])) {
	  $style = 'cardmenu';
	}
    if($style === 'cardmenu' && !empty($options['list'])) {
	  $style = 'listgroup';
	}

	/* Changing card look via prefs */
	if(!e107::pref('theme', 'cardmenu_look') && $style == 'cardmenu') {
	  $style = 'menu';
	}

	// echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

	if(deftrue('e_DEBUG')) {
	  echo "\n<!-- \n";
	  echo json_encode($options, JSON_PRETTY_PRINT);
	  echo "\n-->\n\n";
	}

	switch($style) {

	  case 'wmessage':
	  echo '<div class="wm p-5"><div class="container text-center">';
	  if(!empty($caption)) {
	    echo '<h1 class="display-4">'.$caption.'</h1>';
	  }
	  echo '<div class="lead">'.$this->remove_ptags($text).'</div>';
	  echo '</div></div>';
	  break;
    
	  case 'nocaption':
      case 'main':
	  echo $text;
	  break;
      
      case "side-menu":
	  echo "<div class='side-menubox mt-4'>";
	  if(!empty($caption)) {
	    echo "<div class='side-menubox-title'><h4 class='title-text'>{$caption}</h4></div>";
	  }
      echo "<div class='side-menubox-content'>{$text}</div>";
	  echo "</div>";
	  break;
      
      case "listgroup": 
	  echo "<div class='side-menubox mt-4'>";
	  if(!empty($caption)) {
	    echo "<div class='side-menubox-title'><h4 class='title-text'>{$caption}</h4></div>";
	  }
	  echo "<div class='side-menubox-content'>{$text}</div>";
	  echo "</div>";
	  break;
      
      case "footer-menu": 
	  echo "<div class='footer-menubox my-4'>";
	  if(!empty($caption)) {
	    echo "<div class='footer-menubox-title'><h4 class='title-text'>{$caption}</h4></div>";
	  }
	  echo "<div class='footer-menubox-content'>{$text}</div>";
	  echo "</div>";
	  break;
      
      case "main-menu":
	  echo "<div class='main-menubox mt-4'>";
	  if(!empty($caption)) {
	    echo "<div class='main-menubox-title'><h4 class='title-text'>{$caption}</h4></div>";
	  }
      echo "<div class='main-menubox-content'>{$text}</div>";
	  echo "</div>";
	  break;
      
      case "portfolio":
	  echo "<div class='portfolio-box mt-4'>";
	  if(!empty($caption)) {
	    echo "<div class='portfolio-box-title'><h4 class='title-text'>{$caption}</h4></div>";
	  }
      echo "<div class='portfolio-box-content'>{$text}</div>";
	  echo "</div>";
	  break;

	  default:
	  // default style
	  // only if this always work, play with different styles
	  if(!empty($caption)) {
	    echo '<h4>' . $caption . '</h4>';
	  }
	  echo $text;
	  return;
	}
  }
}


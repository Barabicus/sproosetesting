<?php 
use Cms\Classes\Theme;use Cms\Classes\Page;class Cms57cd8e177cc64_1434152281Class extends \Cms\Classes\LayoutCode
{


public function onStart(){

$currentTheme = Theme::getEditTheme();
$allPages = Page::listInTheme($currentTheme, true);
    
    $this['derps'] = $allPages;
}
}

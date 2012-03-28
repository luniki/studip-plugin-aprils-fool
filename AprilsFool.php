<?php

class AprilsFool extends StudipPlugin implements SystemPlugin
{
    function __construct()
    {
        $js = '
jQuery(function ($) {
  if (new Date().getDate() === 1) {
    $("body").animate({opacity:0}, 480000);
  }
});';
        PageLayout::addHeadElement("script", array(), $js);


        $css = '
img {
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
';
        PageLayout::addHeadElement("style", array(), $css);
    }
}

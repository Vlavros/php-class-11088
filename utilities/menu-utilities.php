<?php
function buildDropdownMenu( $sId, $sTitle, $asLinks) : string {

  $htmlMenu = "
  <li id=\"li($sId)_dropdown\"
      class=\"nav-item dropdown\">
      <a id=\"a($sId)_toggle\"
         href=\"#\"
         class=\"nav-link dropdown-toggle\"
         data-toggle=\"dropdown\">
          $sTitle
      </a>
      <ul class=\"dropdown-menu\"
          id=\"ulNavItem2_dropdown_menu\">
  ";
  $iCount = count( $asLinks );
  for ( $i = 0; $i < $iCount; $i++ ){
      $sHref = $asLinks[ $i ][ "href" ];
      $sTarget = $asLinks[ $i ][ "target" ];
      $sCaption = $asLinks[ $i ][ "caption" ];
      $sLink = "<a href=\"$sHref\" target=\"$sTarget\" >$sCaption</a>";
      $htmlMenu = $htmlMenu."<li class=\"dropdown-item\" >$sLink</li>";
  }

  $htmlMenu .= "
    </ul>
  </li>
  ";

  return $htmlMenu;
}

/*
  $htmlMenu = '
  <li id=\"li'.$sId.'_dropdown\"
      class=\"nav-item dropdown\">
      <a id=\"a'.$sId.'_toggle\"
         href=\"#\"
         class=\"nav-link dropdown-toggle\"
         data-toggle=\"dropdown\">
          '.$sTitle.'
      </a>
  ';

  $htmlMenu = "
  <li id='li($sId)_dropdown'
      class='nav-item dropdown'>
      <a id='a($sId)_toggle'
         href='#'
         class='nav-link dropdown-toggle'
         data-toggle='dropdown'>
          $sTitle
      </a>
  ";
*/
 ?>

	<?php
#####################
#
#code高亮
#
######################
include ('geshi.php');
/*
function php($matches)
{	
$matches[1]=html_entity_decode( $matches[1] );
$language='php';
$geshi=new GeSHi($matches[1] , $language);
$geshi->set_header_type(GESHI_HEADER_DIV);
$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS); 
$html = $geshi->parse_code();
return $html;
}*/

function code($matches)
{	
$matches[1]= html_entity_decode( $matches[1] );
$language='c';
$geshi=new GeSHi($matches[1] , $language);
$geshi->set_header_type(GESHI_HEADER_DIV);
$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS); 
$html = $geshi->parse_code();
return $html;
}

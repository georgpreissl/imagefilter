<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 *
 *
 *
 * @author     Georg Preissl <http://www.georg-preissl.at> 
 * @package    imagefilter
 * @license    MIT
 * 
 */

$GLOBALS['BE_MOD']['system']['files']['imagefilter'] = array('GeorgPreissl\Imagefilter\Filtering', 'filterImage');




?>
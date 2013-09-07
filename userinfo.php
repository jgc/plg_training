<?php
/**
 * @Plugin "Training Form"
 * @version 3.2.0.1
 * @author bloggundog editor
 * @authorUrl http://www.bloggundog.com.com
 *
 * User information
 *
 **/

defined( '_JEXEC' ) or die( 'Restricted access' );

$user =& JFactory::getUser();
 
if ($user->guest){
	$html = '<p>You must login to see the content.</p>';
	}
		
if (!$user->guest){
	$html = '<p>Welcome ' . $user->name . '<br/>' . 
	$html .= 'Your email is ' . $user->email . ' and username ' . $user->username . "</p>";
	}

return $html;
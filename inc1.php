<?php
/**
 * @Plugin "Training Form"
 * @version 3.2.0.1
 * @author bloggundog editor
 * @authorUrl http://www.bloggundog.com.com
**/

defined( '_JEXEC' ) or die( 'Restricted access' );

$user = JFactory::getUser();
$userinfo .= '<p>Welcome {$user->name}, (your email is {$user->email}, and username {$user->username}</p>';
// echo "<p>Your usertype is {$user->usertype} which has a group id of {$user->gid}.</p>";

return $userinfo;


<?php 
/**
 * @Plugin "Training Form"
 * @version 3.2.0.1
 * @author bloggundog editor
 * @authorUrl http://www.bloggundog.com.com
 *
 * Facebook link
 *
 **/

defined( '_JEXEC' ) or die( 'Restricted access' );

         $app_id = "340031409395063";

         // $canvas_page = "http://bloggundog.com/fb.php";
         $canvas_page = "http://bloggundog.com";

         $message = "Hi! I am testing a new Facebook App.";

         // Additional parameters
         $link    = "http://www.wikipedia.com";
         $picture = "http://upload.wikimedia.org/wikipedia/commons/f/fe/American_Brittany_standing.jpg";
         $name    = "Brittany picture";
         $caption = "new blog test";
         $description = "HPR line 1 <center></center> line 2 <center></center>  line 3";

         $feed_url = "http://www.facebook.com/dialog/feed?app_id="
                . $app_id . "&link=" . $link . "&picture=" . $picture . "&name=" . $name . "&caption=" . $caption . "&description=" . $description . "&redirect_uri=" . $canvas_page . "&message=" . $message;

         if (empty($_REQUEST["post_id"])) {
            echo("<script> top.location.href='" . $feed_url . "'</script>");
         } else {
            echo ("Feed Post Id: " . $_REQUEST["post_id"]);
         }
// https://www.facebook.com/dialog/feed?app_id=340031409395063&link=http://www.wikipedia.com&
// picture=http://upload.wikimedia.org/wikipedia/commonsf/fe/American_Brittany_standing.jpg&name=new blog&
// caption=news and views&description=about gundogs&redirect_uri=http://bloggundog.com
?>
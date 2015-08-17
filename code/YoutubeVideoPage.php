<?php

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 17.08.15
 * Time: 09:04
 */
class YoutubeVideoPage extends Page
{
    private static $singular_name = 'Youtube video page';
    private static $description = 'Page for your youtube videos.';
}
class YoutubeVideoPage_Controller extends Page_Controller {

    public function getYoutubeVideos(){
        return YoutubeVideo::get();
    }

}
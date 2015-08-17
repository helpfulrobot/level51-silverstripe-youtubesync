<?php

class YoutubeVideoPage extends Page
{
    private static $singular_name = 'Youtube video page';
    private static $description = 'Basic page for your Youtube videos.';
}
class YoutubeVideoPage_Controller extends Page_Controller {

    // Get all visible videos
    public function getYoutubeVideos(){
        return YoutubeVideo::get()->filter('Visible', 1);
    }

}
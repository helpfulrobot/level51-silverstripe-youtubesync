<?php

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 17.08.15
 * Time: 09:18
 */
class YoutubeSettings extends Extension
{
    private static $db = array(
        'YoutubeApiKey' => 'Varchar(255)',
        'YoutubeUserName' => 'Varchar',
        'Playlists' => 'Varchar(255)'
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Youtube', array(
            TextField::create('YoutubeApiKey', 'Youtube API Key'),
            TextField::create('YoutubeUserName', 'Youtube user name'),
            TextField::create('Playlists', 'Youtube playlists')
                ->setDescription('Kommaseparierte Liste der Youtube Playlists - leer lassen um alle zu bekommen')
        ));
    }

}
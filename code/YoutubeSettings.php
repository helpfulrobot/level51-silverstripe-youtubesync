<?php

class YoutubeSettings extends Extension
{
    private static $db = array(
        'YoutubeApiKey' => 'Varchar(255)',
        'YoutubeUserName' => 'Varchar',
        'Playlists' => 'Varchar(255)'
    );

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Youtube', array(
            TextField::create('YoutubeApiKey'),
            TextField::create('YoutubeUserName'),
            TextField::create('Playlists', 'Youtube playlists')
                ->setDescription(_t('YoutubeSettings.PLAYLISTS_DESCRIPTION', 'Comma-separated list of Youtube playlists - leave it empty to get all'))
        ));
    }

    public function updateFieldLabels($labels){
        $labels['YoutubeApiKey'] = _t('YoutubeSettings.YOUTUBE_API_KEY', 'Youtube API Key');
        $labels['YoutubeUserName'] = _t('YoutubeSettings.YOUTUBE_USER_NAME', 'Youtube user name');
        $labels['Playlists'] = _t('YoutubeSettings.PLAYLISTS', 'Youtube playlists');
    }

}
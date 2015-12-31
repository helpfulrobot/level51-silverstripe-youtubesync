<?php

class YoutubeSettings extends DataExtension
{
    private static $db = array(
        'YoutubeApiKey' => 'Varchar(255)',
        'YoutubeUserName' => 'Varchar',
        'Playlists' => 'Varchar(255)'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Youtube', array(
            TextField::create('YoutubeApiKey', _t('YoutubeSettings.YOUTUBE_API_KEY', 'Youtube API Key')),
            TextField::create('YoutubeUserName', _t('YoutubeSettings.YOUTUBE_USER_NAME', 'Youtube user name')),
            TextField::create('Playlists', _t('YoutubeSettings.PLAYLISTS', 'Youtube playlists'))
                ->setDescription(_t('YoutubeSettings.PLAYLISTS_DESCRIPTION', 'Comma-separated list of Youtube playlists - leave it empty to get all'))
        ));
    }
}

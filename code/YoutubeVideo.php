<?php

class YoutubeVideo extends DataObject
{

    private static $db = array(
        'PlaylistItemID' => 'Varchar',
        'VideoID' => 'Varchar',
        'Title' => 'Varchar(255)',
        'Description' => 'Text',
        'ThumbnailURL' => 'Varchar(255)',
        'SortOrder' => 'Int',
        'Visible' => 'Boolean'
    );

    private static $indexes = array(
        'PlaylistItemID' => array(
            'type' => 'unique',
            'value' => 'PlaylistItemID'
        ),
        'VideoID' => array(
            'type' => 'unique',
            'value' => 'VideoID'
        )
    );

    private static $defaults = array(
        'Visible' => '1'
    );

    private static $default_sort = 'SortOrder ASC';

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->removeByName('PlaylistItemID');
        $fields->removeByName('SortOrder');
        $fields->addFieldsToTab('Root.Main', array(
            ReadonlyField::create('VideoID'),
            ReadonlyField::create('ThumbnailURL')
        ), 'Title');

        return $fields;
    }

    public function fieldLabels($includerelations = true) {
        $labels = parent::fieldLabels($includerelations);

        $labels['Title'] = _t('YoutubeVideo.TITLE', 'Title');
        $labels['Description'] = _t('YoutubeVideo.DESCRIPTION', 'Description');
        $labels['ThumbnailURL'] = _t('YoutubeVideo.THUMBNAIL_URL', 'Thumbnail URL');
        $labels['Visible'] = _t('YoutubeVideo.VISIBLE', 'Visible?');

        return $labels;
    }

    /**
     * Get the URL to the video on youtube
     * @return string
     */
    public function getURL(){
        return 'https://www.youtube.com/watch?v=' . $this->VideoID;
    }

    /**
     * Get the URL for the embedded video
     * @return string
     */
    public function getEmbedURL(){
        return 'https://www.youtube.com/embed/' . $this->VideoID;
    }

    /**
     * Get the full iFrame tag to embed the video
     * @return string
     */
    public function getIframe(){
        return '<iframe src="' . $this->getEmbedURL() . '?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
    }

}
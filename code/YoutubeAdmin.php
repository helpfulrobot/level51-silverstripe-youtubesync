<?php

class YoutubeAdmin extends ModelAdmin
{

    private static $managed_models = array(
        'YoutubeVideo'
    );
    private static $menu_title = 'Youtube';
    private static $url_segment = 'youtube';
    private static $menu_icon = 'youtubesync/images/youtubesync.png';

    public function getEditForm($id = null, $fields = null)
    {
        $form = parent::getEditForm($id = null, $fields = null);

        // Get the gridfield ...
        $gridField = $form->Fields()->fieldByName($this->modelClass);

        // ... and it's config
        $config = $gridField->getConfig();

        // Remove/Add some components
        $config
            ->removeComponentsByType('GridFieldAddNewButton')
            ->removeComponentsByType('GridFieldExportButton')
            ->removeComponentsByType('GridFieldPrintButton')
            ->addComponent(new GridFieldSyncYoutubeVideos());

        // Add the sortable component if installed
        if (class_exists("GridFieldSortableRows")) {
            $config->addComponent(new GridFieldSortableRows('SortOrder'));
        }

        return $form;
    }
}

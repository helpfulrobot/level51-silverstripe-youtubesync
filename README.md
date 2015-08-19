# YoutubeSync - A SilverStripe module for syncing your videos with youtube
**YoutubeSync** is the module of your choice, if you like to show your youtube videos on your homepage. It allows you to fetch videos from Youtube by just giving your username and a valid API key. The videos are stored in the database with a custom DataObject, so the API must not be called on every page load. 

## Maintainers

- Daniel Kliemsch <dk@lvl51.de>

## Installation

```
composer require level51/silverstripe-youtubesync 
```


## Setup

1. Be sure that the module is in a folder **youtubesync/** on the root of the project.
2. <code>sake dev/build "flush=all"</code>, depending on your config you might have to do this via URI in the browser.
3. Checkout the [google developers console](https://console.developers.google.com) and:
    * Activate the YouTube Data API
    * Create a API key (Browser key) in the **Credentials** section
4. Go to the CMS settings and put your key and username in the Youtube tab
5. Take a look in the Youtube model admin ... and sync for the first time
6. You can use the videos in your pages - all you need is a getter - or you can take a look in the basic **YoutubeVideoPage** contained in the module

## Features

* Fetching your Youtube videos - by just giving your username and a valid API key
* A YoutubeVideo DataObject for storage in the database
* A GridField action that allows you to sync with youtube
* The sync is done manually in the backend - so it's not necessary to call the API on each pageload
* The title and description of the fetched videos can be edited - and will not be overwritten on the next sync
* Thanks to the [sortablegridfield module](https://github.com/UndefinedOffset/SortableGridField) the records are also sortable
* A checkbox allows you to hide some videos
* A model admin for the whole process
* A basic page type, that shows the usage (including a basic template)



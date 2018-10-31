# Craft3 Time Diff

Bring Twig Date extension to your Craft3 CMS.

Plugins should be normaly installed via Craf3 Plugin manager, but as the plugin was not intendet to be shared, it was added as DEV-plugin to my project at the time.
So, to implement it, you'll have to do the same.

### Installation

  - Copy the files to the root document of your Craft3 installation
  - Open your **Craft3** composer.json
  - Add the following above "require" ( *where "../timedif" is path to the plugin directory* ):

 ```sh
"repositories": [
      {
        "type": "path",
        "url": "../timediff"
      }
    ]
```
 - In your terminal, go to your Craft project and tell Composer to require your plugin.
 ```sh
composer require mishellnovosel/craft3-timediff
```

### Usage
Renders the difference between a date and now:
```sh
{{ post.published_at|time_diff }}
```
 - Outputs "1 day ago" or "in 5 months"

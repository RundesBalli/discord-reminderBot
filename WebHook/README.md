# discord-reminderBot
Sends a predefined message with an image to a discord text channel at defined intervals.

## Configuration
Rename the `config.template.php` to `config.php` and fill in the variables with the text editor of your choice:  
```
mv config.template.php config.php
mcedit config.php
```

## Dependencies
This bot is written in php and uses cURL to interact with the Discord API.  
`sudo apt install php-curl`

## Crontab
To send the text automatically, you can use `crontab -e` and add the following entry:  
`15 0-2,6-23 * * * /usr/bin/php /path/to/bot.php > /dev/null 2>&1`  
This entry will send the predefined message between 0am to 2am and between 6am to 11pm, at x:15.  

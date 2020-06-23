<?php
/**
 * Discord ReminderBot
 * 
 * Sends a previously defined message to a discord text channel at defined intervals.
 * 
 * @author    RundesBalli <webspam@rundesballi.com>
 * @copyright 2020 RundesBalli
 * @version   1.0
 * @license   MIT-License
 * @see       https://github.com/RundesBalli/discord-reminderBot
 */

/**
 * Including the configuration file.
 */
require_once(__DIR__.DIRECTORY_SEPARATOR."config.php");

/**
 * Initialize cURL
*/
$ch = curl_init();

/**
 * cURL options
 * @see https://www.php.net/manual/en/function.curl-setopt.php
 */
$options = array(
  CURLOPT_RETURNTRANSFER => TRUE,
  CURLOPT_URL => $webHookURL,
  CURLOPT_CONNECTTIMEOUT => 5,
  CURLOPT_TIMEOUT => 10,
  CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
  CURLOPT_POST => TRUE
);

/**
 * Data
 */
$data = array(
  'content' => $text,
  'embeds' => array(
    array(
      'image' => array(
        'url' => $imageURL
      )
    )
  )
);
$options[CURLOPT_POSTFIELDS] = json_encode($data);

/**
 * Insert the options-array into the cURL handle.
 */
curl_setopt_array($ch, $options);

/**
 * Execute the cURL handle.
 */
curl_exec($ch);

/**
 * Close the cURL handle.
 */
curl_close($ch);
?>

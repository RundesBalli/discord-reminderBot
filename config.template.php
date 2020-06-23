<?php
/**
 * config.php
 * 
 * Configuration file
 */

/**
 * The text to be sent.
 */
$text = "";

/**
 * The URLs of the images to be sent.
 */
$imageURLs = array(
  "",
  "",
  ""
);
$imageURL = $imageURLs[array_rand($imageURLs)];

/**
 * Discord WebhookURL
 */
$webHookURL = "";
?>

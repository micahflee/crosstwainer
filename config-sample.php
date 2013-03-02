<?php

$config = array(

  // Basic auth settings, so other people can post as you
  'basic_auth' => array(
    'turned_on' => true,
    'username' => '',       // make up a username
    'password' => '',       // make up a password
    'password_sha1' => ''   // if you prefer, put a sha1 of your password instead of putting a plaintext password
  ),

  // Twitter settings
  'twitter' => array(
    'consumer_key' => '',
    'consumer_secret' => '',
    'oauth_token' => '',
    'oauth_token_secret' => ''
  ),

  // Identi.ca settings
  'identi.ca' => array(
    'username' => '',
    'password' => ''
  )

);

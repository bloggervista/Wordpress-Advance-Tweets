<?php
/*
Plugin Name: Advanced TWITTER WIDGET BY SHIRSHAK BAJGAIN.
Description: Change boring login to custom login .
Author: Shirshak Bajgain
Version: 1.0
Text Domain: shirshak
License: MIT
*/
defined('ABSPATH') or die("Cannot access pages directly."); 
class Twitter_Tweets_Widget extends WP_Widget {
	function __construct() {
    parent::__construct(
        'twitter-tweets-widget',
        __( 'Twitter Tweets Widget', 'twitter_tweets_widget' ),
        array(
            'description' => __( 'Displays latest tweets from Twitter.', 'twitter_tweets_widget' )
        )
    );
}
}
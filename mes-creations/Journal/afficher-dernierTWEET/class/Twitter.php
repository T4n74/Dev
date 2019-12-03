<?php
namespace Grafikart;

use Abraham\TwitterOAuth\TwitterOAuth;
use Twitter_Autolink;

class Twitter{

    private $consumer_key;
    private $consumer_secret;
    private $cache;

    /**
     * Parse un contenu et crée des liens automatiquement
     * @param $tweet
     * @return string
     */
    public static function autolink($tweet){
        return Twitter_Autolink::create()->autoLink($tweet);
    }

    /**
     * Créer une balise <time> pour une date donnée pour l'utiliser avec jquery.timeago.js
     * @param $date
     * @return string
     */
    public static function timeTag($date){
        $date = date('c', strtotime($date));
        return "<time class='timeago' datetime='#{$date}'></time>";
    }

    /**
     * Twitter constructor.
     * @param $consumer_key
     * @param $consumer_secret
     * @param $cache
     */
    public function __construct($consumer_key, $consumer_secret, $cache){
        $this->consumer_key = $consumer_key;
        $this->consumer_secret = $consumer_secret;
        $this->cache = $cache;
    }

    /**
     * @return string
     */
    private function getAppAccessToken(){
        $oauth = new TwitterOAuth($this->consumer_key, $this->consumer_secret);
        $accessToken = $oauth->oauth2('oauth2/token', ['grant_type' => 'client_credentials']);
        return $accessToken->access_token;
    }


    /**
     * Récupère les derniers tweets d'un utilisateur
     * @param string $screen_name Pseudo twitter
     * @param int $limit Nombre de tweets à extraire
     * @return array Tweets
     */
    public function lastTweets($screen_name, $limit = 3){
        $cache = $this->cache . "_" . $screen_name;
        if(time() - filemtime($cache) > 60) {
            $twitter = new TwitterOAuth($this->consumer_key, $this->consumer_secret, null, $this->getAppAccessToken());
            $tweets = $twitter->get('statuses/user_timeline', [
                'screen_name' => $screen_name,
                'exclude_replies' => true,
                'count' => 50
            ]);
            file_put_contents($cache, serialize($tweets));
        } else {
            $tweets = unserialize(file_get_contents($cache));
        }
        return array_splice($tweets, 0, $limit);
    }

}
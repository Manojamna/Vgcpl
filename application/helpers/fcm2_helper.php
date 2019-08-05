<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('test_method')) {
    error_reporting(-1);
    ini_set('display_errors', 'On');
    require_once __DIR__ . '/firebase/firebase.php';
    require_once __DIR__ . '/firebase/push.php';

    function send_fcm($data) {
        //_pre($data);
        $firebase = new Firebase();
        $push = new Push();
        // optional payload
        $payload = array();
        $payload['product_id'] = $data["product_id"];
        $payload['sound'] = 'default';
        // notification title
        $title = $data["title"];
        // notification message
        $message = $data["message"];
        $regId = $data["deviceId"];
        // push type - single user / topic
        $push_type = "individual"; //topic
        // whether to include to image or not

        $include_image = isset($_GET['include_image']) ? TRUE : FALSE;
        $push->setTitle($title);
        $push->setMessage($message);
        if ($include_image) {
            $push->setImage('http://api.androidhive.info/images/minion.jpg');
        } else {
            $push->setImage('');
        }
        $push->setIsBackground(FALSE);
        $push->setPayload($payload);
        $json = '';
        $response = '';
        if ($push_type == 'topic') {
            $json = $push->getPush();
            $response = $firebase->sendToTopic('global', $json);
        } else if ($push_type == 'individual') {
            $json = $push->getPush();
//            $m = array(
//                    'data'=>array('title'=>'coan',"message"=>"This is wow")
//                );
            //$regId = "dhZNN3KJU7g:APA91bG-sR06WBf7awDF6yJIP_kCtbRJQl88UcWmOn8nVDo13Ezr-Z91AVsrnCF_TRX4OyA8RYGGMHLEkQxArnz2iPdp5PpSbl3lAkTiC6AbPiKUIN7XiCvtvNvNdB1MATXJI7_ViMvh";
            $response = $firebase->send($regId, $json); // get log here
            //_pre($response);
        }
    }

}    
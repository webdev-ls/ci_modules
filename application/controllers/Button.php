<?php
//require_once 'vendor/autoload.php';

//use GeoIp2\Database\Reader;
defined('BASEPATH') OR exit('No direct script access allowed');

class Button extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('user_agent');
        // $this->load->library('GeoIP');
    }

    public function index(){
        $this->load->view('button');
    }

    public function index2(){
        $time = date('Y-m-d H:i:s');
        echo "Time-->".$time;

        echo "<br>";

        $ip = $this->input->ip_address();
        echo "IP-Address-->".$ip;

        echo "<br>";

        $userDevice = $this->agent->is_mobile() ? 'Mobile':'PC' ;
        echo "The User's Device is ".$userDevice;
        
        // $reader = new Reader('GeoIP2-City.mmdb');
        // $record = $reader->city('128.101.101.101');

        // print($record->country->isoCode . "\n"); // 'US'
        // print($record->country->name . "\n"); // 'United States'
        // print($record->country->names['zh-CN'] . "\n"); // '美国'
        // $reader = new Reader('/path/to/maxmind-database.mmdb');

// $record = $reader->city('128.101.101.101');

// print($record->country->isoCode);


        // $location_data = $this->geoip->lookup($ip);

        // $state = $location_data['state'];

        // echo $state;





        // $ch = curl_init();

        // $headers = array (
        //     'Content-Type: application/json',
        // );

        // curl_setopt($ch, CURLOPT_URL,"http://ip-api.com/php/{$ip}");
        // curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        // // curl_setopt($ch,CURLOPT_FOLLOWLOCATION ,true);
        // curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);

        // $result = curl_exec($ch);
        // echo "<pre>";
        // var_dump($result);

        // curl_close($ch);

        // $response = json_decode($result);

        // echo"<br>";

        // // echo $result;

        $ipaddress = $this->input->ip_address();
        // $access_key = 'b0b9aa12b150d3ae4770d5c38ce449f8';

        $headers = array(
            'Content-Type: application/json',
        );

        $ch = curl_init('https://api.iplocation.net/?ip='.$ipaddress);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);


        $result = curl_exec($ch);

        curl_close($ch);

        // $api_result = json_decode($json, true);

        echo $result;
        

        // echo $api_result['location']['capital'];
        
        








        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        // $locationData = $this->getLocationData($ip);

        // if ($locationData) {
        //     //echo "<pre>";
        //     echo ($locationData);
        //     //echo "</pre>";
        // } else {
        //     echo "Location data not available."; 
        // }

    }
    //     private function getLocationData($userip) {
    //         $url = "https://ipinfo.io/{$userip}/json";
    //         $response = file_get_contents($url);

    //         if ($response) {
    //             $locationData = json_decode($response, true);
    //             return $locationData;
    //         } else {
    //             return null;
    //         }
    //    }
}
?>
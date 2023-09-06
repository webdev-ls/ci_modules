<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "welcpme index";
		// $search = $_GET['q'];
		// $ch = curl_init();

		// // $search = $_GET['SEARCH_QUERY'];

		// curl_setopt($ch, CURLOPT_URL,'https://api.iconbolt.com/search?q='. urlencode($search));
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);


		// $result = curl_exec($ch);

		// curl_close($ch);

		// $response = json_decode($result);
		// echo $result;
		// $responseString = json_encode($response, JSON_PRETTY_PRINT);
		// header('Content-Type: application/json');

		// if (is_array($response)) {
		// 	$response = json_encode($response);
		// }
		// echo $response;
		//  echo $responseString;
		// echo "<pre>";
		// echo $response;
		// exit();
		// echo "<pre>";
		//var_dump($response);
		// echo $response;
		// exit();
	}

	public function api(){
		$this->load->view('new');
	}


}

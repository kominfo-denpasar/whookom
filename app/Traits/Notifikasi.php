<?php
namespace App\Traits;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

trait Notifikasi {

	/**
	 * @param Request $request
	 * @return $this|false|string
	 */
	public function kirimWhatsapp($data = null)
	{
		// dd($data);
		$client = new Client(['headers' => [
			'Authorization' => 'Basic emVuODpQcmlhbWJhZGEyOQ==',
			'Content-Type' => 'application/json'
		]]);

		$body = [
			"phone" => $data["phone"]."@s.whatsapp.net",
			"message" => $data["message"],
			"reply_message_id" => ""
		];

		$request = $client->post('https://wa.kreatifitas.site/send/message', [
    		'json' => $body
		]);

		$response = json_decode($request->getBody(), true);
		
		if($response['code'] == 'SUCCESS'){
			return true;
		} else return false;
		// dd($response);
		/**
		* [
		*		"code" => "SUCCESS"
		*		"message" => "Message sent to 6281238921686@s.whatsapp.net (server timestamp: 2025-05-14 21:09:47 +0000 UTC)"
		*		"results" => [
		*			"message_id" => "3EB0BD253EF6799A354DB7"
		*			"status" => "Message sent to 6281238921686@s.whatsapp.net (server timestamp: 2025-05-14 21:09:47 +0000 UTC)"
		*		]
		*	]
		*/
	}
}
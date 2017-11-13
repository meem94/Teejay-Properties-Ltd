<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller {


	public function send(Request $request)
	{

		//return $request;
		$data = array(
			'email' => $request->Email,
			'name' => $request->Name,
			'bodyMessage' => $request->Message
		);
		Mail::to('meemnishat@gmail.com')->send(new SendMail);
		/*Mail::send('mail', $data, function($message) use ($data){
			$message->to('meemnishat@gmail.com');
			$message->subject('Test');
		});*/
	
		return "ss";
		/*Session::flash('success', 'Your Email was Sent!');*/

		/*return redirect('/');*/
		
	}



	

}

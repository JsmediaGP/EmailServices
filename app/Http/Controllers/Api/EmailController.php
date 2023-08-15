<?php

namespace App\Http\Controllers\Api;






use App\Mail\EmailSend;
use App\Models\emailrecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    
    public function sendEmail(Request $request)
    {
        // $recipient = $request->input('recipient');

        // $message = $request->input('message');
       
        // Mail::to($recipient)->send(new EmailSend($message));

        // $record = new emailrecord([
        //     'recipient_email' => $recipient,
        //     'email_template' => $message,
        //     'time_sent' => now(),
        // ]);
        // $record->save();

        // return response()->json(['message' => 'Email sent and record saved']);



//====================================================================================================
      // Validate input
      $details = Validator::make($request->all(), [
        'recipient_email' => 'required|email',
        'email_template' => 'required',
    ]);
    if($details->fails()){

        return response()->json($details->messages());
    
    }else{
              // Create a new email instance
    $email = new EmailSend($request->email_template);

    // Send the email
    Mail::to($request->recipient_email)->send($email);
 
    emailrecord::create([
        'recipient_email' => $request->recipient_email,
        'email_template' => $request->email_template,
        'time_sent'=>now(),
    ]);

    return response()->json(['message' => 'Email sent and details saved.']);
       
    }
    
  


       
    //}

 }
   

}


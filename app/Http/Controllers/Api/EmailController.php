<?php

namespace App\Http\Controllers\Api;






use App\Mail\EmailSend;
use App\Mail\testingmail;
use App\Models\emailrecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    
    public function sendEmail(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'recipient_email' => 'required',
            'email_template' => 'required',
        ]);
        if($validatedData->fails()){
            return response()->json([
                'status'=>"Error",
                'message'=> $validatedData->messages()
            ]);
        }else{
            $validatedData = $validatedData->validated();
           

            $recipientEmails = explode(',', $validatedData['recipient_email']);
            $messageBody = $validatedData['email_template'];

            foreach ($recipientEmails as $recipient) {
                $recipient = trim($recipient);
                
            
            Mail::to($recipient)->send(new testingmail($messageBody));
           // Mail::to($recipient)->send(new Gmailservice($messageBody));
            
                
                $emailrecord = new emailrecord([
                    'recipient_email' => $recipient,
                    'email_template' => $messageBody,
                    'time_sent' => now(),
                ]);
                $emailrecord->save();
            }
            return response()->json(['message' => 'Email sent and details saved.']);

        }   
    }

    function viewAllMails(){
        $allemails= emailrecord::latest()->get();

        if($allemails){
            return response()->json([
                'status'=> "success",
                'data'=> $allemails,
            ]);
        }
        else{
            return response()->json([

                'status'=> "Error",
                'message'=> "No Mail sent yet."
            ]);
        }
        
    }

 }
   




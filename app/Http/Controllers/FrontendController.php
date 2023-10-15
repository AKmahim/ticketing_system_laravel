<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use PDF;
use Spatie\Browsershot\Browsershot;
use App\Mail\PdfEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\QrCode;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Facade;
use SimpleSoftwareIO\QrCode\Generator;
// use simplesoftwareio\simple-qrcode\src\Facades\QrCode;
class FrontendController extends Controller
{
    
    protected function sendSMS($sms,$phone_number){
        $phone = $phone_number;
        // / sms for registration start
        $user_id = "rabbyfarhan@gmail.com";
        $user_password = "84100800";
        $route_id = "RT_MN0961";
        $sms_type_id = "1";
        $sms_sender = "8809612442451";
        $sms_receiver ="88". $phone;
        $sms_text = $sms;
        $url = "http://services.powersms.biz/sendSms";
        $data = array(
            'user_id' => $user_id,
            'user_password' => $user_password,
            'route_id' => $route_id,
            'sms_type_id' => $sms_type_id,
            'sms_sender' => $sms_sender,
            'sms_receiver' => $sms_receiver,
            'sms_text' => $sms_text
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if ($response === false) {
            $error = curl_error($ch);
            echo "cURL Error: " . $error;
            // dd($error);
        } else {
            echo $response;
            // dd($response);
        }
        curl_close($ch);
    }
    

    public function Index(){
        $data = DB::table('stream_editor')->latest()->first();
        if($data->server_status == null){
            return view('frontend.waiting');
        }
        else{
            return view('frontend.index');
        }
        
        
        
    }
    
    //sign up page controller
    public function SignUp(){
        return view('frontend.signup');
    }
    
   public function RegisterUsers(Request $request){
        // dd($request);
        $validated = $request->validate([
                'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:11',
                'email' => 'max:255',
                    
            ],
            [
                'phone_number.required' => 'Please Input phone number',
                    
                    
            ]
        );
        $users = DB::select('select * from users_ticket where phone_number = :phone_number', ['phone_number'=>$request->phone_number]);
        // $user = StreamViewer::where('phone_number', $request->phone_number)->first();
        // dd($users);
        if($users){
            return Redirect()->back()->with('status','এই নম্বরটি ইতিমধ্যেই নিবন্ধিত');
        }
        else{
            //store nid photo
            $nid_photo_base = $request->file('NID_photo');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($nid_photo_base->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'frontend/images/';
            $nid_photo_location = $up_location.$img_name;
            $nid_photo_base->move($up_location,$img_name);
            
            //store user photo
            $user_photo_base = $request->file('user_photo');
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($user_photo_base->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'frontend/images/';
            $user_photo_location = $up_location.$img_name;
            $user_photo_base->move($up_location,$img_name);



            DB::table('users_ticket')->insert([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'date_of_birth' => $request->data_of_birth,
                'NID' => $request->NID_number,
                'NID_photo' => $nid_photo_location,
                'fb_id' => $request->fb_id,
                'occupation' => $request->occupation,
                'address' => $request->address,
                'user_photo' => $user_photo_location,

                'created_at' => Carbon::now(),
            ]);
            Session::put('phone_number',$request->phone_number);
            
            return Redirect()->route('success');
            
        
        }
        
    }

    public function Login(){
        return view('frontend.signin');
    }

    public function LoginLogic(Request $request){
        $users = DB::select('select * from users_ticket where phone_number = :phone_number', ['phone_number'=>$request->phone_number]);
        // dd($users[0]->email); 
        if($users){
            Session::put('phone_number',$request->phone_number);
            return Redirect()->route('success');
        }
        else{
            return Redirect()->back()->with('status','এই নম্বরটি নিবন্ধিত নয়');

        }

    }


    // public function ViewTicket(){
    //     if(Session::has('phone_number')){
    //         return view('frontend.view_ticket');
    //     }
    //     else{
    //         return Redirect()->route('index');
    //     }
    // }
    public function ViewTicket(){
        return view('frontend.view_ticket');
    }

    public function Success(){
        if(Session::has('phone_number')){
            return view('frontend.success');
        }
        else{
            return Redirect()->route('index');
        }
        
    }

    public function generatePDF()
    {
        // debugCss: false
        $pdf = PDF::loadView('frontend.view_ticket',)
        ->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
            'isPhpEnabled' => true,
            'isHtml5ParserEnabled' => true,
            'isFontSubsettingEnabled' => true,
            
        ]);

        return $pdf->stream('ticket.pdf');
        // return Pdf::loadFile(public_path("Emad/index.html"))->save('/frontend/pdf/output.pdf')->stream('download.pdf');
    }

    public function generateAndSaveQRCode(Request $request)
    {
        // Replace with the text you want to encode
        $textToEncode = "https://cholo-bangladesh-concert/users/01635227460";

        // Make a request to the Express API
        $response = Http::post('http://localhost:3000/generate-qr-code', [
            'text' => $textToEncode,
        ]);

        
        if ($response->successful()) {
            // Get the dataURL from the API response
            $dataURL = $response->json('dataURL');

            // Save the QR code image to local storage
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $dataURL));
            $imageName = 'frontend/images/qr_code.png'; // Specify the desired image name
            
            $publicPath = public_path($imageName); // Get the full public path

            // Save the image to the public folder
            file_put_contents($publicPath, $imageData);

            return 'QR code saved as ' . $imageName;
        } else {
            return 'Error: Unable to generate QR code';
        }
    }

    public function test(){

    }

    
    

   
}

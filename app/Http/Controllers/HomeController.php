<?php

namespace App\Http\Controllers;
use App\Models\StreamViewer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $data = DB::table('stream_editor')->latest()->first();
        $viewers = DB::table('users_ticket')->latest()->paginate(20);
        // $viewer_amount = StreamViewer::count();
        // // payment_status
        // $total_payment = StreamViewer::where('payment_status', 'Completed')->count();
        // $currentDate = Carbon::today();
        // $today_registration = StreamViewer::whereDate('created_at', $currentDate)->count();
        // $viewers = 10;
        $viewer_amount =10;
        $total_payment =10;
        $today_registration =10;
        $data = DB::table('stream_editor')->latest()->first();

        return view('home',compact('viewers','viewer_amount','data'));
    }


    public function TotalViews(){
        $views = DB::select('select * from page_views');
        // $data = DB::select("SELECT * FROM `stream_viewers` WHERE payment_status = \'pending\';");
        // $results = DB::select('select * from stream_viewers where payment_status = :payment_status', ['payment_status' => 'pending']);
        // $data = $this->convertToCSV($results);
        // Log::debug($data);
        return view('total-views',compact('views'));
    }

    public function EditSetting(Request $request){
        DB::table('stream_editor')->insert([
            'server_status' => $request->server_status,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->route('home');
    }

    //function for convert data into csv
    private function convertToCSV($data)
    {
        $outputBuffer = fopen('php://temp', 'w');
        
        // Add headers to the CSV file
        fputcsv($outputBuffer, ['ID', 'Name', 'Phone_number','Email','Date_of_birth','NID','Occupation','Address']);

        // Add data rows to the CSV file
        foreach ($data as $row) {
            fputcsv($outputBuffer, [$row->id,$row->name, $row->phone_number, $row->email,$row->date_of_birth,$row->NID,$row->occupation,$row->address]);
        }

        rewind($outputBuffer);
        $csvData = stream_get_contents($outputBuffer);
        fclose($outputBuffer);

        return $csvData;
    }
    

     // ---------- for download all registed  user data -------
     public function generateCSV(){
        // Logic to generate CSV data
        // $csvData = $this->generateCSVData();
        $results = DB::select('select id,name,phone_number,email,date_of_birth,NID,occupation,address from users_ticket',);
        $csvData = $this->convertToCSV($results);

        // Set the appropriate headers for CSV download
        $headers = array(
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="All_users_data.csv"',
        );

        // Generate the CSV file and return it as a download response
        return response($csvData, 200, $headers);
    }
    
    
}

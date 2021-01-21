<?php

namespace App\Http\Controllers;

use App\Claimant;
use App\Objector;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use PDF;

class ReportController extends Controller
{
    public function index()
    {

        $number_appointment = Claimant::where('status', Claimant::STATUS_E_APPOINTMENT)->get()->count();
        $number_waiting = Claimant::where('status', Claimant::STATUS_WAITING)->get()->count();
        $number_verified = Claimant::where('status', Claimant::STATUS_VERIFICATION_IN_PROGRESS)->get()->count();
        $number_completed = Claimant::where('status', Claimant::STATUS_COMPLETED)->get()->count();
        $number_walk = Claimant::where('status', Claimant::STATUS_WALK_IN_ENQUIRIES)->get()->count();

        $claimants = Claimant::all()->count();
        $objectors = Objector::all()->count();


        $overview = [
            'claimants' => $claimants,
            'objectors' => $objectors,
            'totals' => $claimants + $objectors
        ];

        //echo "<pre>";
        //print_r($overview);

        return view('report.index', compact([
            'number_appointment',
            'number_waiting',
            'number_verified',
            'number_completed',
            'number_walk',
            'overview'
        ]));
    }
    public function createPDF() {

      
      // retreive all records from db
      //$data = Employee::all();

      // share data to view
      //view()->share('employee',$data);
      // $pdf = PDF::loadView('report.index');
      // // download PDF file with download method
      // return $pdf->download('pdf_file.pdf');
    }
}

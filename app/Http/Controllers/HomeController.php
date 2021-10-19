<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use Illuminate\Http\Request;
use DataTables;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }


    public function purchases()
    {
        return view('purchases');
    }


    public function sales()
    {
        return view('sales');
    }


    public function makeSale()
    {
        return view('make-sale');
    }


    public function carDetails()
    {
        return view('car-details');
    }
    
    public function addPurchases()
    {
        return view('add-purchases');
    }

    public function storePurchases(){
        $data = request()->validate([
            'model'=>"required",
            'make'=>"",
            'y_o_m'=>"",
            'color'=>"",
            'reg_no'=>"",
            'log_book_no'=>"",
            'engine_no'=>"",
            'chasis_no'=>"",
            'price'=>"",
            'surplier_type'=>"",
            'city'=>"",
            'phone_number'=>"",
            'email'=>"",
            'kra_pin'=>"",
            'purchase_date'=>"",
            'description'=>""     
        ]);
        if($data["surplier_type"] == "Company"){
            $company =request()->validate([
                'company_name'=>"required"
            ]);
            Purchases::create([
                'model'=>$data["model"],
                'make'=>$data["make"],
                'y_o_m'=>$data["y_o_m"],
                'color'=>$data["color"],
                'reg_no'=>$data["reg_no"],
                'log_book_no'=>$data["log_book_no"],
                'engine_no'=>$data["engine_no"],
                'chasis_no'=>$data["chasis_no"],
                'price'=>$data["price"],
                'surplier_type'=>$data["surplier_type"],
                'company_name'=>$company["company_name"],
                'first_name'=>"n/a",
                'middle_name'=>"n/a",
                'last_name'=>"n/a",
                'national_id'=>"n/a",
                'city'=>$data["city"],
                'phone_number'=>$data["phone_number"],
                'email'=>$data["email"],
                'kra_pin'=>$data["kra_pin"],
                'purchase_date'=>$data["purchase_date"],
                'description'=>$data["description"]         
            ]);
        }elseif($data["surplier_type"] == "Individual"){
            $person =request()->validate([
                'first_name'=>"required",
                'middle_name'=>"required",
                'last_name'=>"required",
                'national_id'=>"required",
            ]);
            Purchases::create([
                'model'=>$data["model"],
                'make'=>$data["make"],
                'y_o_m'=>$data["y_o_m"],
                'color'=>$data["color"],
                'reg_no'=>$data["reg_no"],
                'log_book_no'=>$data["log_book_no"],
                'engine_no'=>$data["engine_no"],
                'chasis_no'=>$data["chasis_no"],
                'price'=>$data["price"],
                'surplier_type'=>$data["surplier_type"],
                'company_name'=>"n/a",
                'first_name'=>$person["first_name"],
                'middle_name'=>$person["middle_name"],
                'last_name'=>$person["last_name"],
                'national_id'=>$person["national_id"],
                'city'=>$data["city"],
                'phone_number'=>$data["phone_number"],
                'email'=>$data["email"],
                'kra_pin'=>$data["kra_pin"],
                'purchase_date'=>$data["purchase_date"],
                'description'=>$data["description"]         
            ]);
        }

        return back()->with('success', 'Purchases successfully added.');
    }
    
    // public function getPurchases()
    // {
    //     $purchases = Purchases::all();
    //     return view('purchases', compact('purchases'));
    // }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Purchases::latest()->get();;
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('purchases');
    }
}

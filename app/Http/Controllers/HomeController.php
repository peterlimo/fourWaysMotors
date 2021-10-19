<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use DataTables;
use Illuminate\Http\Request;

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


    public function makeSale()
    {
        return view('make-sale');
    }

    public function storeSale($car_id)
    {
        $data = request()->validate([
            "make"=> "",
            "model"=>"",            
            "reg_no"=>"",          
            "engine_no"=>"",          
            "chasis_no"=>"",          
            "y_o_m"=>"",          
            "kra_number"=>"",            
            "amount_paid"=>"",          
            "log_book_no"=>"",          
            "color"=>"",          
            "buyer_type"=>"required",          
            "phone_number"=>"",          
            "city"=>"", 
            "email"=>"", 
            "price"=>"",          
            "date_of_sale"=>"", 
            "description"=>"",
        ]);


        if($data['buyer_type'] == "company"){
            $company_name = request()->validate([
                "company_name"=>"required", 
            ]);  

            $sale = Sale::create([
                "car_id" => $car_id,
                "make"=> $data['make'],
                "amount_paid"=> 1000,
                "price"=> $data['price'],
                "model"=>$data['model'],            
                "reg_no"=>$data['reg_no'],          
                "engine_no"=>$data['engine_no'],          
                "chasis_no"=>$data['chasis_no'],          
                "kra_pin"=>$data['kra_number'],          
                "y_o_m"=>$data['y_o_m'],          
                "log_book_no"=>$data['log_book_no'],          
                "color"=>$data['color'],          
                "buyer_type"=>$data['buyer_type'],          
                "phone_number"=>$data['phone_number'],          
                "city"=>$data['city'], 
                "email"=>$data['email'],          
                "sales_date"=>$data['date_of_sale'], 
                "description"=>$data['description'],        
                "first_name"=>"n/a",          
                "middle_name"=>"n/a",          
                "last_name"=>"n/a",         
                "national_id"=>"n/a",    
                "balance"=>0,
                "company_name"=>$company_name['company_name'], 
            ]);
                   
        }elseif($data['buyer_type'] == "individual"){
            $names = request()->validate([         
                "first_name"=>"required",          
                "middle_name"=>"required",          
                "last_name"=>"",          
                "national_id"=>"required", 
            ]);
            
            $sale = Sale::create([
                "car_id" => $car_id,
                "make"=> $data['make'],
                "amount_paid"=> 1000,
                "model"=>$data['model'], 
                "price"=>$data['price'],            
                "reg_no"=>$data['reg_no'],          
                "engine_no"=>$data['engine_no'],          
                "chasis_no"=>$data['chasis_no'],          
                "y_o_m"=>$data['y_o_m'],          
                "log_book_no"=>$data['log_book_no'],          
                "color"=>$data['color'],          
                "buyer_type"=>$data['buyer_type'],          
                "phone_number"=>$data['phone_number'],          
                "city"=>$data['city'], 
                "email"=>$data['email'],   
                "balance"=>0,          
                "kra_pin"=>$data['kra_number'],          
                "sales_date"=>$data['date_of_sale'], 
                "description"=>$data['description'],        
                "first_name"=>$names['first_name'],          
                "middle_name"=>$names['middle_name'],          
                "last_name"=>$names['last_name'],          
                "national_id"=>$names['national_id'],
                "company_name"=>"n/a", 
            ]);
        }

        return back()->with("success", "Sales added successfully");
    }


    public function carDetails()
    {
        return view('car-details');
    }
    
    public function addPurchases()
    {
        return view('add-purchases');
    }


    public function getSales(Request $request)
    {
        if ($request->ajax()) {
            $data = Sale::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('sales');
    }
}

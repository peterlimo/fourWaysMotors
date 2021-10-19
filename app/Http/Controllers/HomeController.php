<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Purchases;

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

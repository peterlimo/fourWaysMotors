@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Add Purchases')])

@section('content')
  <div class="content" >
    <div class="container-fluid">
      <div class="row" style="overflow-y: scroll;height:600px">
        <div class="col-md-12"  >
          <form method="post" action="/add-purchases" autocomplete="off" class="form-horizontal">
            @csrf
           
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Car Details</h4>
              </div>
              <div class="card-body ">
                @if (session('success'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('success') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                
            
              
                
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Model</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" id="input-model" type="text" placeholder="model" required="true" aria-required="true" value="{{ old('model', auth()->user()->model) }}" />
                        @if ($errors->has('model'))
                            <span id="model-error" class="error text-danger" for="input-model">{{ $errors->first('model') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Make</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('make') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" id="input-make" type="text" value="{{ old('make', auth()->user()->make) }}"  placeholder="make" required="true" aria-required="true"/>
                        @if ($errors->has('make'))
                            <span id="make-error" class="error text-danger" for="input-make">{{ $errors->first('make') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Year of Making</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('y_o_m') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('y_o_m') ? ' is-invalid' : '' }}" name="y_o_m" id="input-y_o_m" type="text" placeholder="Year of making" value="{{ old('y_o_m', auth()->user()->y_o_m) }}" required="true" aria-required="true"/>
                        @if ($errors->has('y_o_m'))
                            <span id="y_o_m-error" class="error text-danger" for="input-y_o_m">{{ $errors->first('y_o_m') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Color</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" value="{{ old('color', auth()->user()->color) }}"  type="text" placeholder="i.e. Yellow ,Black" required="true" aria-required="true"/>
                        @if ($errors->has('color'))
                            <span id="color-error" class="error text-danger" for="input-color">{{ $errors->first('color') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Registration Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('reg_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="input-reg_no" type="text" placeholder="i.e. KAB 225Y"   value="{{ old('reg_no', auth()->user()->reg_no) }}" required="true" aria-required="true"/>
                        @if ($errors->has('reg_no'))
                            <span id="reg_no-error" class="error text-danger" for="input-reg_no">{{ $errors->first('reg_no') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Log Book Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('log_book_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('log_book_no') ? ' is-invalid' : '' }}" name="log_book_no" id="input-log_book_no" type="text" placeholder="Log Book number" value="{{ old('log_book_no', auth()->user()->log_book_no) }}" required="true" aria-required="true"/>
                        @if ($errors->has('log_book_no'))
                            <span id="log_book_no-error" class="error text-danger" for="input-log_book_no">{{ $errors->first('log_book_no') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Engine Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('engine_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('engine_no') ? ' is-invalid' : '' }}" name="engine_no" id="input-engine_no" type="text" placeholder="{{ __('engine_no') }}" value="{{ old('engine_no', auth()->user()->engine_no) }}" required="true" aria-required="true"/>
                        @if ($errors->has('engine_no'))
                            <span id="engine_no-error" class="error text-danger" for="input-engine_no">{{ $errors->first('engine_no') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Chasis Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('chasis_no') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('chasis_no') ? ' is-invalid' : '' }}" name="chasis_no" id="input-chasis_no" type="text" placeholder="{{ __('chasis_no') }}" value="{{ old('chasis_no', auth()->user()->chasis_no) }}" required="true" aria-required="true"/>
                        @if ($errors->has('chasis_no'))
                            <span id="chasis_no-error" class="error text-danger" for="input-chasis_no">{{ $errors->first('chasis_no') }}</span>
                        @endif
                        </div>  
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Price</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __('price') }}" value="{{ old('price', auth()->user()->price) }}" required="true" aria-required="true"/>
                        @if ($errors->has('price'))
                            <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                        @endif
                        </div>  
                    </div>
                  </div>
                </div>
                <div class=" " style="margin-top :20px;">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Seller Details</h4>
              </div>
              <div class="card-body ">
    
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Surplier type</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                            <select name="surplier_type" id="selectType" class="form-control"  value="{{ old('surplier_type', auth()->user()->surplier_type) }}" onchange="myFunction()"> 
                            <option  disabled selected>Click Here to choose seller </option>
                                <option value="Company">Company</option>
                                <option value="Individual">Individual</option>
                            </select>
                        <!-- <input class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="input-type" type="text" placeholder="type" required="true" aria-required="true"/> -->
                        @if ($errors->has('type'))
                            <span id="type-error" class="error text-danger" for="input-type">{{ $errors->first('type') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4" id="com_name">
                    <label class="col-sm-12 col-form-label">Company Name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('company_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" id="input-company_name" type="text" value="{{ old('company_name', auth()->user()->company_name) }}"  placeholder="company_name">
                        @if ($errors->has('company_name'))
                            <span id="company_name-error" class="error text-danger" for="input-company_name">{{ $errors->first('company_name') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4" id="first_name">
                    <label class="col-sm-12 col-form-label">First Name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="input-first_name" type="text" placeholder="First Name" value="{{ old('first_name', auth()->user()->first_name) }}" />
                        @if ($errors->has('first_name'))
                            <span id="first_name-error" class="error text-danger" for="input-first_name">{{ $errors->first('first_name') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
             
                  <div class="col-sm-4" id="middle_name">
                    <label class="col-sm-12 col-form-label">Middle name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('middle_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" id="input-middle_name" type="text" placeholder="Middle Name" value="{{ old('middle_name', auth()->user()->middle_name) }}" />
                        @if ($errors->has('middle_name'))
                            <span id="middle_name-error" class="error text-danger" for="input-middle_name">{{ $errors->first('middle_name') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4" id="last_name">
                    <label class="col-sm-12 col-form-label">Last Name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="input-last_name" type="text" placeholder="Last Name" value="{{ old('last_name', auth()->user()->last_name) }}" />
                        @if ($errors->has('last_name'))
                            <span id="last_name-error" class="error text-danger" for="input-last_name">{{ $errors->first('last_name') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">City</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="City" value="{{ old('city', auth()->user()->city) }}" />
                        @if ($errors->has('city'))
                            <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Phone Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" id="input-phone_number" type="text" placeholder="Phone number" value="{{ old('phone_number', auth()->user()->phone_number) }}"  />
                        @if ($errors->has('phone_number'))
                            <span id="phone_number-error" class="error text-danger" for="input-phone_number">{{ $errors->first('phone_number') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Email</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="Email" value="{{ old('email', auth()->user()->email) }}" />
                        @if ($errors->has('email'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                        @endif
                        </div>  
                    </div>
                  </div>
                  <div class="col-sm-4" id="national_id">
                    <label class="col-sm-12 col-form-label">National Id</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('national_id') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" id="input-national_id" type="text" placeholder="{{ __('national_id') }}" value="{{ old('national_id', auth()->user()->national_id) }}" />
                        @if ($errors->has('national_id'))
                            <span id="national_id-error" class="error text-danger" for="input-national_id">{{ $errors->first('national_id') }}</span>
                        @endif
                        </div>  
                    </div>
                    
                  </div>
                  <div class="col-sm-4" id="description">
                    <label class="col-sm-12 col-form-label">KRA PIN</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('kra_pin') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('kra_pin') ? ' is-invalid' : '' }}" name="kra_pin" id="input-kra_pin" type="text" placeholder="{{ __('kra_pin') }}" value="{{ old('kra_pin', auth()->user()->kra_pin) }}" />
                        @if ($errors->has('kra_pin'))
                            <span id="kra_pin-error" class="error text-danger" for="input-kra_pin">{{ $errors->first('kra_pin') }}</span>
                        @endif
                        </div>  
                    </div>
                </div>
        </div>
                <div class="" style="margin-top :20px;">
              <div class="card-header card-header-primary">
                <h4 class="card-title">More Details</h4>
              </div>
              <div class="card-body ">
         
                <div class="row w-100 p-3">
         
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Date Of Purchase</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('purchase_date') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('purchase_date') ? ' is-invalid' : '' }}" name="purchase_date" id="input-purchase_date" type="text" placeholder="purchase_date" required="true" aria-required="true" value="{{ old('purchase_date', auth()->user()->purchase_date) }}" />
                        @if ($errors->has('purchase_date'))
                            <span id="purchase_date-error" class="error text-danger" for="input-purchase_date">{{ $errors->first('purchase_date') }}</span>
                        @endif
                        </div>  
                    </div>
                  </div>

                  <div class="col-sm-4" id="kra_pin">
                    <label class="col-sm-12 col-form-label">Description</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('description') }}" value="{{ old('description', auth()->user()->description) }}" required="true" aria-required="true"/>
                        @if ($errors->has('description'))
                            <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                        @endif
                        </div>  
                    </div>
                </div>
        
                </div>  
                </div>
                <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary  btn-lg">{{ __('SAVE') }}</button>
          </div>
        
            </form>
      
       </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
function myFunction()
{
    var type=document.getElementById("selectType").value;
   
    if(type=="Individual")
    {
        document.getElementById("com_name").style.display="none";
        document.getElementById("first_name").style.display="block";
        document.getElementById("middle_name").style.display="block";
        document.getElementById("last_name").style.display="block";
        document.getElementById("national_id").style.display="block";
    }
    else if(type =="Company")
    {
        document.getElementById("first_name").style.display="none";
        document.getElementById("middle_name").style.display="none";
        document.getElementById("last_name").style.display="none";
        document.getElementById("national_id").style.display="none";
        document.getElementById("com_name").style.display="block";
    }
}
</script>
@endsection
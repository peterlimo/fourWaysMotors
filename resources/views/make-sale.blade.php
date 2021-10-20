@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row" style="overflow-y: scroll; height:600px;">
        <div class="col-md-12" style="height:fit-content">
          <form method="post" action="/make-sale/{{ $car_id }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">New sale</h4>
                <p class="card-category">Car details</p>
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
                    <label class="col-sm-12 col-form-label">Make</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('make') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" id="input-make" value="{{old('make') ?? $car->make }}" type="text" placeholder="make" required="true" aria-required="true"/>
                        @if ($errors->has('make'))
                            <span id="make-error" class="error text-danger" for="input-make">{{ $errors->first('make') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Model</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" id="input-model" value="{{old('model') ?? $car->model }}" type="text" placeholder="model" required="true" aria-required="true"/>
                        @if ($errors->has('model'))
                            <span id="model-error" class="error text-danger" for="input-model">{{ $errors->first('model') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Year of Make</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('y_o_m') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('y_o_m') ? ' is-invalid' : '' }}" name="y_o_m" value="{{old('y_o_m') ?? $car->y_o_m }}" id="input-y_o_m" type="text" placeholder="Year of making" value="" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" value="{{old('color') ?? $car->price }}" type="text" placeholder="i.e. Yellow ,Black" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="input-reg_no" type="text" value="{{old('reg_no') ?? $car->reg_no }}" placeholder="i.e. KAB 225Y"  required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('log_book_no') ? ' is-invalid' : '' }}" name="log_book_no" id="input-log_book_no" type="text" placeholder="Log Book number" value="{{ old('log_book_no') ?? $car->log_book_no }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('engine_no') ? ' is-invalid' : '' }}" name="engine_no" id="input-engine_no" type="text" placeholder="{{ __('engine_no') }}" value="{{ old('engine_no') ?? $car->engine_no }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('chasis_no') ? ' is-invalid' : '' }}" name="chasis_no" id="input-chasis_no" type="text" placeholder="{{ __('chasis_no') }}" value="{{ old('chasis_no') ?? $car->chasis_no }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __('price') }}" value="{{ old('price') }}" required="true" aria-required="true"/>
                        @if ($errors->has('price'))
                            <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Buyer details</h4>
              </div>
              <div class="card-body ">                
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Buyer Type</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('buyer_type') ? ' has-danger' : '' }}">
                        <select onchange="buyerType(this)" class="form-control{{ $errors->has('buyer_type') ? ' is-invalid' : '' }}" name="buyer_type" id="buyer_type" type="text" placeholder="buyer_type" required="true" aria-required="true">
                          <option value="" disabled selected>Select</option>
                          <option value="company">Company</option>
                          <option value="individual">Individual</option>
                        </select>
                        @if ($errors->has('buyer_type'))
                            <span id="buyer_type-error" class="error text-danger" for="input-buyer_type">{{ $errors->first('buyer_type') }}</span>
                        @endif
                        </div>                        
                    </div>
                  </div>
                  <div class="col-sm-4" id="company">
                    <label class="col-sm-12 col-form-label">Company name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('company_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" id="company_name" value="{{old('company_name') }}" type="text" placeholder="company_name"/>
                        @if ($errors->has('company_name'))
                            <span id="company_name-error" class="error text-danger" for="input-company_name">{{ $errors->first('company_name') }}</span>
                        @endif
                        </div>                        
                    </div>
                  </div>                                    
                  <div class="col-sm-4" id="F_N">
                    <label class="col-sm-12 col-form-label">First name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="first_name" type="text" placeholder="Year of making" value="{{old('first_name') }}"/>
                        @if ($errors->has('first_name'))
                            <span id="first_name-error" class="error text-danger" for="input-first_name">{{ $errors->first('first_name') }}</span>
                        @endif
                        </div>                        
                    </div>
                  </div>                  
                  <div class="col-sm-4" id="M_N">
                    <label class="col-sm-12 col-form-label">Middle name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('middle_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name" id="middle_name" type="text" value="{{old('middle_name') }}"/>
                        @if ($errors->has('middle_name'))
                            <span id="middle_name-error" class="error text-danger" for="input-middle_name">{{ $errors->first('middle_name') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4" id="L_N">
                    <label class="col-sm-12 col-form-label">Last name</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="last_name" type="text" value="{{old('last_name') }}" />
                        @if ($errors->has('last_name'))
                            <span id="last_name-error" class="error text-danger" for="input-last_name">{{ $errors->first('last_name') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Phone number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" id="input-phone_number" type="text" placeholder="Log Book number" value="{{ old('phone_number') }}" required="true" aria-required="true"/>
                        @if ($errors->has('phone_number'))
                            <span id="phone_number-error" class="error text-danger" for="input-phone_number">{{ $errors->first('phone_number') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4" id="N_ID">
                    <label class="col-sm-12 col-form-label">National ID</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('national_id') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" id="national_id" type="text" value="{{ old('national_id') }}"/>
                        @if ($errors->has('national_id'))
                            <span id="national_id-error" class="error text-danger" for="input-national_id">{{ $errors->first('national_id') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">KRA PIN</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('kra_number') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('kra_number') ? ' is-invalid' : '' }}" name="kra_number" id="input-kra_number" type="text" value="{{ old('kra_number') }}" required="true" aria-required="true"/>
                        @if ($errors->has('kra_number'))
                            <span id="kra_number-error" class="error text-danger" for="input-kra_number">{{ $errors->first('kra_number') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Email</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('email') }}" value="{{ old('email') }}" required="true" aria-required="true"/>
                        @if ($errors->has('email'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">City</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('city') }}" value="{{ old('city') }}" required="true" aria-required="true"/>
                        @if ($errors->has('city'))
                            <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
                        
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">More Details.</h4>
              </div>
              <div class="card-body ">      
                  <div class="row">                    
                    <div class="col-sm-4">
                      <label class="col-sm-12 col-form-label">Date of sale</label>
                      <div class="col-sm-12">
                          <div class="form-group{{ $errors->has('date_of_sale') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('date_of_sale') ? ' is-invalid' : '' }}" name="date_of_sale" id="input-date_of_sale" type="date" value="{{ old('date_of_sale') }}" required="true" aria-required="true"/>
                          @if ($errors->has('date_of_sale'))
                              <span id="date_of_sale-error" class="error text-danger" for="input-date_of_sale">{{ $errors->first('date_of_sale') }}</span>
                          @endif
                          </div>
                          
                      </div>
                    </div>                   
                    <div class="col-sm-4">
                      <label class="col-sm-12 col-form-label">Amount paid</label>
                      <div class="col-sm-12">
                          <div class="form-group{{ $errors->has('amount_paid') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('amount_paid') ? ' is-invalid' : '' }}" name="amount_paid" id="input-amount_paid" type="number" placeholder="cash amount paid" value="{{ old('amount_paid') }}" required="true" aria-required="true"/>
                          @if ($errors->has('amount_paid'))
                              <span id="amount_paid-error" class="error text-danger" for="input-amount_paid">{{ $errors->first('amount_paid') }}</span>
                          @endif
                          </div>
                          
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <label class="col-sm-12 col-form-label">Description</label>
                      <div class="col-sm-12">
                          <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                          <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="text" placeholder="{{ __('description') }}" aria-required="true">{{ old('description', auth()->user()->description) }}</textarea>
                          @if ($errors->has('description'))
                              <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                          @endif
                          </div>
                          
                      </div>
                    </div>                  
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                  </div>
              </div>
               
            </div>         
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function buyerType(obj){
      var type = $(obj).val();
      if(type == "individual"){
        document.getElementById("F_N").style.display="block";
        document.getElementById("M_N").style.display="block";
        document.getElementById("N_ID").style.display="block";
        document.getElementById("L_N").style.display="block";
        document.getElementById("company").style.display="none";
      }else if(type == "company"){
        document.getElementById("F_N").style.display="none";
        document.getElementById("M_N").style.display="none";
        document.getElementById("N_ID").style.display="none";
        document.getElementById("L_N").style.display="none";
        document.getElementById("company").style.display="block";
      }
    }
  </script>
@endsection
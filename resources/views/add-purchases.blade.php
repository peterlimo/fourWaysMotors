@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Add Purchases')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row" >
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Car Details</h4>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                
            
              
                
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Model</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" id="input-model" type="text" placeholder="model" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" id="input-make" type="text" placeholder="make" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('y_o_m') ? ' is-invalid' : '' }}" name="y_o_m" id="input-y_o_m" type="text" placeholder="Year of making" value="" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" type="text" placeholder="i.e. Yellow ,Black" required="true" aria-required="true"/>
                        @if ($errors->has('color'))
                            <span id="color-error" class="error text-danger" for="input-color">{{ $errors->first('color') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Registration Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('nareg_nome') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="input-reg_no" type="text" placeholder="i.e. KAB 225Y"  required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('engine_no') ? ' is-invalid' : '' }}" engine_no="engine_no" id="input-engine_no" type="text" placeholder="{{ __('engine_no') }}" value="{{ old('engine_no', auth()->user()->engine_no) }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('chasis_no') ? ' is-invalid' : '' }}" chasis_no="chasis_no" id="input-chasis_no" type="text" placeholder="{{ __('chasis_no') }}" value="{{ old('chasis_no', auth()->user()->chasis_no) }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" price="price" id="input-price" type="text" placeholder="{{ __('price') }}" value="{{ old('price', auth()->user()->price) }}" required="true" aria-required="true"/>
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
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Model</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" id="input-model" type="text" placeholder="model" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" id="input-make" type="text" placeholder="make" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('y_o_m') ? ' is-invalid' : '' }}" name="y_o_m" id="input-y_o_m" type="text" placeholder="Year of making" value="" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" type="text" placeholder="i.e. Yellow ,Black" required="true" aria-required="true"/>
                        @if ($errors->has('color'))
                            <span id="color-error" class="error text-danger" for="input-color">{{ $errors->first('color') }}</span>
                        @endif
                        </div>
                        
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label class="col-sm-12 col-form-label">Registration Number</label>
                    <div class="col-sm-12">
                        <div class="form-group{{ $errors->has('nareg_nome') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('reg_no') ? ' is-invalid' : '' }}" name="reg_no" id="input-reg_no" type="text" placeholder="i.e. KAB 225Y"  required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('engine_no') ? ' is-invalid' : '' }}" engine_no="engine_no" id="input-engine_no" type="text" placeholder="{{ __('engine_no') }}" value="{{ old('engine_no', auth()->user()->engine_no) }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('chasis_no') ? ' is-invalid' : '' }}" chasis_no="chasis_no" id="input-chasis_no" type="text" placeholder="{{ __('chasis_no') }}" value="{{ old('chasis_no', auth()->user()->chasis_no) }}" required="true" aria-required="true"/>
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
                        <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" price="price" id="input-price" type="text" placeholder="{{ __('price') }}" value="{{ old('price', auth()->user()->price) }}" required="true" aria-required="true"/>
                        @if ($errors->has('price'))
                            <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                        @endif
                        </div>  
                    </div>
                  </div>
                </div>
        
            </form>
            </div>
        </div>
   
       </div>
      </div>
    </div>
  </div>
@endsection
@extends('layouts.app')

@section('content')
{{-- @foreach($settings as $row) 
    {{$row}}
@endforeach --}}

{{-- @php
dd($settings['show_reg_field_twitter']);
@endphp --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>
                            
                            <div class="col-md-6">
                                <input id="firstname" name='firstname' type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" name= 'lastname' type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if($settings['show_reg_field_fullname'] == 1)
                            <div class="form-group row">
                                <label for="fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>

                                <div class="col-md-6">
                                    <input id="fullname" name= 'fullname' type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                    @if ($errors->has('fullname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fullname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif    

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                            <div class="col-md-6">
                                <input id="email" name = 'email' type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" name = 'password' type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
    
                        @if($settings['show_reg_field_skypeid'] == 1)
                            <div class="form-group row">
                                <label for="skypeid" class="col-md-4 col-form-label text-md-right">Skype Id</label>

                                <div class="col-md-6">
                                    <input id="skypeid" type="text" class="form-control{{ $errors->has('skypeid') ? ' is-invalid' : '' }}" name="skypeid" value="{{ old('skypeid') }}" required autofocus>

                                    @if ($errors->has('skypeid'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('skypeid') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_phonework'] == 1)
                            <div class="form-group row">
                                <label for="phonework" class="col-md-4 col-form-label text-md-right">Phone Work</label>

                                <div class="col-md-6">
                                    <input id="phonework" name= 'phonework' type="text" class="form-control{{ $errors->has('phonework') ? ' is-invalid' : '' }}" name="phonework" value="{{ old('phonework') }}" required autofocus>

                                    @if ($errors->has('phonework'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phonework') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_phonemobile'] == 1)
                            <div class="form-group row">
                                <label for="phonemobile" class="col-md-4 col-form-label text-md-right">Phone Mobile</label>

                                <div class="col-md-6">
                                    <input id="phonemobile" name= 'phonemobile' type="text" class="form-control{{ $errors->has('phonemobile') ? ' is-invalid' : '' }}" name="phonemobile" value="{{ old('phonemobile') }}" required autofocus>

                                    @if ($errors->has('phonemobile'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phonemobile') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_timezone'] == 1)
                            <div class="form-group row">
                                <label for="timezone" class="col-md-4 col-form-label text-md-right">Timezone</label>
        
                                <div class="col-md-6">
                                    <select class="form-control {{ $errors->has('timezone') ? ' is-invalid' : '' }}" name="timezone" value="{{ old('timezone') }}" required autofocus>
                                            <option value="disabled" disabled="true" selected>Select timezone</option>
                                            <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                            <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                            <option value="-10:00">(GMT -10:00) Hawaii</option>
                                            <option value="-09:30">(GMT -09:30) Taiohae</option>
                                            <option value="-09:00">(GMT -09:00) Alaska</option>
                                    </select>
                                                
                                    @if ($errors->has('timezone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('timezone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_street1'] == 1)
                            <div class="form-group row">
                                <label for="street1" class="col-md-4 col-form-label text-md-right">Street1</label>

                                <div class="col-md-6">
                                    <textarea id="street1" rows="7" class="form-control{{ $errors->has('street1') ? ' is-invalid' : '' }}" name="street1" value="{{ old('street1') }}" required autofocus></textarea>

                                    @if ($errors->has('street1'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('street1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_street2'] == 1)
                            <div class="form-group row">
                                <label for="street2" class="col-md-4 col-form-label text-md-right">Street2</label>
        
                                <div class="col-md-6">
                                    <textarea id="street2" rows="7" class="form-control{{ $errors->has('street2') ? ' is-invalid' : '' }}" name="street2" value="{{ old('street2') }}" required autofocus></textarea>
        
                                    @if ($errors->has('street2'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('street2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_city'] == 1)
                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

                                <div class="col-md-6">
                                    <input id="city" name= 'city' type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_state'] == 1)
                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                                <div class="col-md-6">
                                    <input id="state" name= 'state' type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

                                    @if ($errors->has('state'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_postalcode'] == 1)
                            <div class="form-group row">
                                <label for="postalcode" class="col-md-4 col-form-label text-md-right">Postal Code</label>

                                <div class="col-md-6">
                                    <input id="postalcode" name= 'postalcode' type="text" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" name="postalcode" value="{{ old('postalcode') }}" required autofocus>

                                    @if ($errors->has('postalcode'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('postalcode') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_country'] == 1)
                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
            
                                <div class="col-md-6">
                                    <select class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>
                                        <option value="disabled" disabled="true" selected>Select country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                    </select>
                                                    
                                    @if ($errors->has('country'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_companyname'] == 1)
                            <div class="form-group row">
                                <label for="companyname" class="col-md-4 col-form-label text-md-right">Company name</label>

                                <div class="col-md-6">
                                    <input id="companyname" name= 'companyname' type="text" class="form-control{{ $errors->has('companyname') ? ' is-invalid' : '' }}" name="companyname" value="{{ old('companyname') }}" required autofocus>

                                    @if ($errors->has('companyname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('companyname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_jobtitle'] == 1)
                            <div class="form-group row">
                                <label for="jobtitle" class="col-md-4 col-form-label text-md-right">Job Title</label>
            
                                <div class="col-md-6">
                                    <select class="form-control {{ $errors->has('jobtitle') ? ' is-invalid' : '' }}" name="jobtitle" value="{{ old('jobtitle') }}" required autofocus>
                                            <option value="disabled" disabled="true" selected>Select job title</option>
                                            <option value="Programmer">Programmer</option>
                                            <option value="Testing">Testing</option>
                                            <option value="Human resource">Human resource</option>
                                            <option value="Analyst">Analyst</option>
                                    </select>
                                                    
                                    @if ($errors->has('jobtitle'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('jobtitle') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_website'] == 1)
                            <div class="form-group row">
                                <label for="website" class="col-md-4 col-form-label text-md-right">Website</label>

                                <div class="col-md-6">
                                    <input id="website" name= 'website' type="text" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" value="{{ old('website') }}" required autofocus>

                                    @if ($errors->has('website'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if($settings['show_reg_field_twitter'] == 1)
                            <div class="form-group row">
                                <label for="twitter" class="col-md-4 col-form-label text-md-right">Twitter</label>

                                <div class="col-md-6">
                                    <input id="twitter" name= 'twitter' type="text" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" name="twitter" value="{{ old('twitter') }}" required autofocus>

                                    @if ($errors->has('twitter'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('twitter') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> 
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<script type = "text/javascript">
    $(document).ready(function() {
        
        $("#account_update").click(function(e) {
            e.preventDefault();
            var litmoskey = $("#litmoskey").val();
            var litmossource = $("#litmossource").val();
            var appname = $("#appname").val();
            var appurl = $("#appurl").val();
            var dataString = {
                _token:  $("input[name=_token]").val(),
                litmoskey:litmoskey,
                litmossource:litmossource,
                appname:appname, 
                appurl:appurl
            };

           console.log(dataString);

           $.ajax({
                url: "{{URL::route('accountsettings')}}",
                dataType: 'json',
                type: 'post',
                contentType: 'application/json',
                data: JSON.stringify(dataString),
                processData: false,
                success: function( data, textStatus, jQxhr ){
                    alert(JSON.stringify( data ) );
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });
        });
    });

    $(document).ready(function(){
        $('#registration_update').click(function(e){
            e.preventDefault();
            alert("working");
            // if ($("#fullname").is(":checked")) {
            //     var fullname=1;
            // }
            // else {
            //     var fullname=0;
            // }
            // alert(fullname);
        })
    });
</script>
 
    <!--Begin Container-->
    <div class="containerli">
        <div class="ui equal width left aligned padded grid stackable">
            

            <div class="two wide column">
                <div class="ui vertical secondary pointing inverted fluid tabular menu">
                    <a class="item active" data-tab="profile">
                        Profile
                    </a>
                    <a class="item" data-tab="account">
                        Account Settings
                    </a>
                    <a class="item" data-tab="emails">
                        Emails
                    </a>
                    <a class="item" data-tab="notifications">
                        Notifications
                    </a>
                    <a class="item" data-tab="security">
                        Security
                    </a>
                    <a class="item" data-tab="registration" >
                        Registration Settings
                    </a>
                </div>
            </div>
            <div class="fourteen wide stretched column">
                <div class="ui segment">
                    <div class="ui tab active" data-tab="profile">

                        @if(Session::has('success'))
                            <div class="ui success message">
                                <strong>Updated Successfully!</strong> 
                                <i class="close icon"></i>
                            </div>
                        @endif

                        <form class="ui form segment">
                            <h3 class="ui header">
                                Profile Settings
                            </h3>
                            <div class="ui hidden divider"></div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Name</label>
                                    <input placeholder="First Name" name="name" type="text">
                                </div>
                                <div class="field">
                                    <label>Gender</label>
                                    <select class="ui dropdown" name="gender">
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <label>Username</label>
                                    <input placeholder="Username" name="username" type="text">
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                </div>
                            </div>
                            <div class="field">
                                <label>Skills</label>
                                <select name="skills" multiple="" class="ui dropdown">
                                    <option value="">Select Skills</option>
                                    <option value="css">CSS</option>
                                    <option value="html">HTML</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="design">Graphic Design</option>
                                    <option value="plumbing">Plumbing</option>
                                    <option value="mech">Mechanical Engineering</option>
                                    <option value="repair">Kitchen Repair</option>
                                </select>
                            </div>
                            <div class="inline field">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="terms">
                                    <label>I agree to the terms and conditions</label>
                                </div>
                            </div>
                            <div class="ui blue submit button">Update</div>
                            <div class="ui error message"></div>
                        </form>
                    </div>

                    <div class="ui tab" data-tab="account">
                            {!! Form::open(['action'=>"SettingController@account_setting", "method"=>"POST" ,"class"=>"ui form segment"]) !!}
                            
                            <h3 class="ui header">
                                Account Settings
                            </h3>
                            <div class="ui hidden divider"></div>
                            <div class="field">
                                    {{ Form::label('litmoskey', 'Litmos Key') }}
                                    {{ Form::text('litmoskey', ' ', ['placeholder'=>'Litmos Key', 'id'=>'litmoskey']) }}
                            </div>
                            <div class="field">
                                    {{ Form::label('litmossource', 'Litmos Source') }}
                                    {{ Form::text('litmossource', ' ', ['placeholder'=>'Litmos Source','id'=>'litmossource']) }}
                            </div>
                            <div class="field">
                                    {{ Form::label('appname', 'App Name') }}
                                    {{ Form::text('appname', ' ', ['placeholder'=>'App Name','id'=>'appname']) }}
                            </div>
                            <div class="field">
                                    {{ Form::label('appurl', 'App URL') }}
                                    {{ Form::text('appurl', ' ', ['placeholder'=>'http://example.com','id'=>'appurl']) }}
                            </div> 
                                
                            {{Form::submit('Update',['class' => 'ui blue submit button', 'id'=>'account_update'])}} 
                        {!! Form::close() !!}
                    </div>

                    <div class="ui tab" data-tab="emails">
                        <div class="ui form">
                            <div class="field">
                                <div class="ui toggle button">Toggle</div>
                                <div class="ui positive check button">Check</div>
                                <div class="ui negative uncheck button">Uncheck</div>
                            </div>

                            <div class="field">
                                <div class="ui test toggle checkbox">
                                    <input type="checkbox" checked="checked">
                                    <label>Anyone invite me to group</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test toggle checkbox">
                                    <input type="checkbox">
                                    <label>Anyone send me a message</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test toggle checkbox">
                                    <input type="checkbox" checked="checked">
                                    <label>Anyone follow me</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test toggle checkbox">
                                    <input type="checkbox" checked="checked">
                                    <label>Anyone posts a comment</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test toggle checkbox">
                                    <input type="checkbox">
                                    <label>Anyone send me a comment</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test toggle checkbox">
                                    <input type="checkbox" checked="checked">
                                    <label>Anyone send me an email</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui tab" data-tab="notifications">
                        <div class="ui form">
                            <div class="field">
                                <div class="ui toggle button">Toggle</div>
                                <div class="ui positive check button">Check</div>
                                <div class="ui negative uncheck button">Uncheck</div>
                            </div>

                            <div class="field">
                                <div class="ui test slider checkbox">
                                    <input type="checkbox">
                                    <label>Automatically watch repositories </label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test slider checkbox">
                                    <input type="checkbox" checked="checked">
                                    <label>Participating</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test slider checkbox">
                                    <input type="checkbox">
                                    <label>Watching</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test slider checkbox">
                                    <input type="checkbox" checked="checked">
                                    <label>Notification email</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui test slider checkbox">
                                    <input type="checkbox">
                                    <label>Custom routing</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui tab" data-tab="security">
                        <form class="ui form segment">
                            <h3 class="ui header">
                                Security Settings
                            </h3>
                            <div class="ui hidden divider"></div>
                            <div class="field">
                                <label>Old Password</label>
                                <input placeholder="Old Password" value="" name="name" type="text">
                            </div>
                            <div class="field">
                                <label>New Password</label>
                                <input placeholder="New Password" value="" name="name" type="text">
                            </div>
                            <div class="field">
                                <label>New Password Repeat</label>
                                <input placeholder="New Password Repeat" name="name" type="text">
                            </div>

                            <div class="ui blue submit button">Update</div>
                            <div class="ui red submit button">Delete Account</div>
                            <div class="ui error message"></div>
                        </form>
                    </div>

                    <div class="ui tab" data-tab="registration">
                        
                        {!! Form::open(['action'=>"SettingController@store", "method"=>"POST" ,"class"=>"ui form segment"]) !!}
                            <h3 class="ui header">
                                Registration Settings
                            </h3>
                            <div class="ui hidden divider"></div>
                            <div class="two fields">
                                <?php 
                                    if (!array_key_exists("show_reg_field_fullname",$settings)) {
                                        $settings['show_reg_field_fullname'] = 'null';
                                    }
                                ?>
                                        
                                <div class = "field">
                                    <label>
                                        {{ Form::checkbox('fullname',1,$settings['show_reg_field_fullname'], ['class' => 'checkbox-inline','id' => 'fullname'] ) }}
                                        Fullname
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('skypeid', 1, $settings['show_reg_field_skypeid'], ['class' => 'checkbox-inline']) }}
                                        SkypeId
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                        {{ Form::checkbox('phonemobile', 1, $settings['show_reg_field_phonemobile'], ['class' => 'checkbox-inline']) }}
                                        Phone Mobile
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('phonework', 1, $settings['show_reg_field_phonework'], ['class' => 'checkbox-inline']) }}
                                        Phone Work
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                        {{ Form::checkbox('timezone', 1, $settings['show_reg_field_timezone'], ['class' => 'checkbox-inline']) }}
                                        Timezone
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('street1', 1, $settings['show_reg_field_street1'], ['class' => 'checkbox-inline']) }}
                                        Street1
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                       {{ Form::checkbox('street2', 1, $settings['show_reg_field_street2'], ['class' => 'checkbox-inline']) }}
                                        Street2
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('city', 1, $settings['show_reg_field_city'], ['class' => 'checkbox-inline']) }}
                                        City
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                       {{ Form::checkbox('state', 1, $settings['show_reg_field_state'], ['class' => 'checkbox-inline']) }}
                                       State
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('postalcode', 1, $settings['show_reg_field_postalcode'], ['class' => 'checkbox-inline']) }}
                                        Postal Code
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                        {{ Form::checkbox('country', 1, $settings['show_reg_field_country'], ['class' => 'checkbox-inline']) }}
                                        Country
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('companyname', 1, $settings['show_reg_field_companyname'], ['class' => 'checkbox-inline']) }}
                                        Company Name
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                        {{ Form::checkbox('jobtitle', 1, $settings['show_reg_field_jobtitle'], ['class' => 'checkbox-inline']) }}
                                        Job Title
                                    </label>
                                </div>
                                <div class="field">
                                    <label>
                                        {{ Form::checkbox('website', 1, $settings['show_reg_field_website'], ['class' => 'checkbox-inline']) }}
                                        Website
                                    </label>
                                </div>
                            </div>

                            <div class="two fields">
                                <div class = "field">
                                    <label>
                                        {{ Form::checkbox('twitter', 1, $settings['show_reg_field_twitter'], ['class' => 'checkbox-inline']) }}
                                        Twitter
                                    </label>
                                </div>
                            </div>
                            {{Form::submit('Update',['class' => 'ui blue submit button', 'name'=>'update','id'=>'registration_update'])}}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Finish Container-->
@endsection
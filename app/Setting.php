<?php

namespace App;
use Request;
// use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;
class Setting extends Model
{
    protected $fillable = ['tenant_id', 'key', 'value'];

    /*
    *To store registration settings fields
    */
    
    public static function registration_setting($request) {
        
        $registration_fields = array('fullname','skypeid','phonework','phonemobile','timezone','street1','street2',
                            'city','state','postalcode','country','companyname','jobtitle','website','twitter');

        foreach($registration_fields as $field){
            $value = $request->has( $field) ?? 0;
            $_this = new self;
            $_this->store_setting($field,$value);
        }
    }

    /*
    *To store account settings fields
    */

    public static function account_setting($request) {
        $account_fields = array('litmoskey','litmossource','appname','appurl');

        foreach($account_fields as $field) {
            $value = $request->input($field) ?? null;
            $_this = new self;
            $_this->store_setting($field,$value);
        }
        
    }

    /*
    *Common method for update and create in table
    */
    private function store_setting($field,$value){
        Setting::updateOrCreate ([
            'tenant_id' => config('tenant'),
            'key' =>'show_reg_field_'.$field
            ],[
            'tenant_id' => config('tenant'),
            'key' => 'show_reg_field_'.$field,
            'value' => $value
        ]);
        return;
    }

    /*
    *To retieve the key and its value in array form
    */
    public function getSettingsByTenant($tenant_id){
       $settings = Setting::where('tenant_id', $tenant_id)->select('key', 'value')->get()->toArray();
       $regSettings = array();
        foreach ($settings as $setting) {
            $regSettings[$setting['key']] = $setting['value'];
        }
        
        return $regSettings;
    }
}


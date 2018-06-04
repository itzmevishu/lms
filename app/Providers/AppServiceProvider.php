<?php

namespace App\Providers;
// namespace App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Config;
use DB;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        if(isset($_SERVER['HTTP_HOST'])) 
        {
            $host_name = $_SERVER['HTTP_HOST'];
            $tenant_name = DB::table('tenants')->where('url', $host_name)->value('domain');
            $tenant_name = (empty($tenant_name))?'default':$tenant_name;
            Config::set('TENANT_NAME', $tenant_name);
            // $settings = Setting::all();
        // echo $settings;

    // // Sharing is caring
    //     View()->share('settings', $settings);
      
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}

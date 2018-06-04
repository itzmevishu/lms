<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\Tenant;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (Schema::hasTable('tenants')) {
            $domain = Request::server("HTTP_HOST");
            $tenant_id = DB::table('tenants')->where('url', $domain)->value('id');
            $tenant_id = $tenant_id ?? 0 ;
            $config = app('config');
            $config->set('tenant', $tenant_id);
        }
    }
}

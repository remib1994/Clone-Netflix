<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class   AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
        Blade::directive('role', function ($roles) {  
            $allowedRoles = explode('|', $roles);     
            $allowedRoles = array_map('trim', $allowedRoles);
              
            return "<?php if(auth()->check() && in_array(auth()->user()->role, [" . implode(', ', $allowedRoles) . "])) : ?>"; 
        
        });
        
        Blade::directive('endrole', function () {
            return "<?php endif; ?>";
        });
    }

}

<?php
namespace CarvingIT\LaravelUserRoles;

class LaravelUserRolesServiceProvider extends ServiceProvider{
    public function boot(){
        $this->publishes([ __DIR__.'/database/migrations' => database_path('migrations')], 'laravel-assets');
        $this->publishes([ __DIR__.'/database/seeders' => database_path('seeders')], 'laravel-assets');
    }
    public function register(){
    }
}



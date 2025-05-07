<?php
namespace CarvingIT\LaravelUserRoles;

use Illuminate\Support\ServiceProvider;

class LaravelUserRolesServiceProvider extends ServiceProvider{
    public function boot(){
        $this->publishes([ __DIR__.'/database/migrations' => database_path('migrations')], 'migration');
        $this->publishes([ __DIR__.'/database/seeders' => database_path('seeders')], 'seeder');
    }
    public function register(){
    }
}



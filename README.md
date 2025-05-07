# laravel-user-roles
Composer package for user roles in a Laravel project.

## Installation

    composer require carving-i-t/laravel-user-roles 

    php artisan vendor:publish --provider="CarvingIT\LaravelUserRoles\LaravelUserRolesServiceProvider" 

    php artisan migrate


## Running the role seeder (optional)

    php artisan db:seed --class=RoleSeeder

## Usage

In your User model, use the trait - LaravelUserRoles and then your user model can have following methods. 

    use CarvingIT\LaravelUserRoles\App\Traits\LaravelUserRoles;

    class User extends Authenticatable{
        use LaravelUserRoles;

        .
        .
    }

In your code elsewhere in your app -
   
    //assign roles 
    $user->assignRoles(['admin','staff']);
    //unassign roles 
    $user->unassignRoles(['admin']);

    // check if your has a role
    // returns true or false
    $user->hasRole('admin'); 

    // get all roles of a user

    $roles = $user->roles(); // remember to use the parentheses

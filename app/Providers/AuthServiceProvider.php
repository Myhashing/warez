<?php

namespace App\Providers;

use App\Permission;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate ;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @param GateContract $gate
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
      //  $this->registerPostPolicies();

        foreach($this->getPermissions() as $permission){
            Gate::define($permission->name, function($user) use ( $permission) {
                return $user->hasRole($permission->roles);
            });
        }

    }

    protected function getPermissions()
    {

        return Permission::with('roles')->get();
    }

  /*  public function registerPostPolicies()
    {
        Gate::define('create-post', function ($user){
           return $user->hasAccess(['create-post']);
        });
       Gate::define('update-post', function ($user, Post $post){
           return $user->hasAccess(['update-post']) or $user->id == $post->user_id;
        });

        Gate::define('publish-post', function ($user){
            return $user->hasAccess(['publish-post']);
        });
        Gate::define('see-all-drafts', function ($user){
            return $user->inRole(['editor']);
        });



    }
 */


}

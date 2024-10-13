<?php

namespace App\Providers;

use App\Models\Branch;
use App\Services\implementation\BranchService;
use App\Services\interface\IBranchService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IBranchService::class , BranchService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

//    public function currentBranchInfo()
//    {
//        $currentBranch = Branch::where('id' , auth()->user()->branch_id)->first();
//        return $currentBranch;
//    }



}

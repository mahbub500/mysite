<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Portfolio;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;

class ServiceController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    protected $table = 'services';
    public function home(){
        $services = Service::all();
        $portfolios = Portfolio::all();
        // $services = DB::table('services')->get();
        
        // dd($services);

        return view('frontend.index',[
            'services' => $services,
            'portfolios' => $portfolios,
            ] );
    }
}

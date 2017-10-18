<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Location;
use DB;
class DashboardController extends Controller
{
    

    public function __constructor(){

    }

    public function index(){

    	return view('backend.dashboard');
    }
   
   public function get_location(){

    	$locations = DB::table('locations')->get();

    	return $locations;
    }


    public function new_location(){

    	return view('backend.add-locations');
    }

     public function add_location(Request $data){

    	$locationTable = new Location;


    	$locationTable->name = $data->name;
    	$locationTable->img = 'no-img.jpg';
    	$locationTable->lat = $data->lat;
    	$locationTable->lng = $data->lng;
    	$locationTable->locate = $data->location;
    	$locationTable->locate_type = $data->type;
    	$locationTable->address = $data->address;
    	if($locationTable->save()){
            session()->flash('msg','Your Location added successfully!');
    	}
    	else{
            session()->flash('Whoops!','Your Location not added!');
    	}

    	return redirect('admin/add/location');
    }
}

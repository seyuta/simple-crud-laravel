<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activations;
use App\Subscribers;
use App\Plans;
use App\Stores;
use Alert;

class FormController extends Controller
{
	public function index()
    {
        $activaions = Activations::all();
        return view('index', ['activations' => $activaions]);
    }

    public function store(Request $request)
    {
        Alert::success('Data Berhasil Di Input', 'Sukses');
        $subscribers = new Subscribers;
        $subscribers->fullname = $request->fullname;
        $subscribers->email = $request->email;
        $subscribers->address = $request->alamat_pelanggan;
        $subscribers->birth_date = $request->birth_date;
        $subscribers->save();
        $subsId = $subscribers->id;

        $plans = new Plans;
        $plans->plan_name = $request->plan_name;
        $plans->price = $request->price;
        $plans->save();
        $plansId = $plans->id;

        $stores = new Stores;
        $stores->store_name = $request->store_name;
        $stores->region = $request->region;
        $stores->address = $request->alamat_store;
        $stores->status = $request->store_status;
        $stores->save();
        $storesId = $stores->id;

        $activations = new Activations;
        $activations->msisdn = $request->msisdn;
        $activations->subscribers_id = $subsId;
        $activations->plans_id = $plansId;
        $activations->periode = $request->periode;
        $activations->stores_id = $storesId;
        $activations->agent_name = $request->agent_name;
        $activations->agent_email = $request->agent_email;
        $activations->status = $request->status;
        $activations->save();

        return redirect()->back();
    }

    public function edit($id, Request $request)
    {
        Alert::success('Data Berhasil Di Edit', 'Sukses');
        $subscribers = Subscribers::find($id);
        $subscribers->fullname = $request->fullname;
        $subscribers->email = $request->email;
        $subscribers->address = $request->alamat_pelanggan;
        $subscribers->birth_date = $request->birth_date;
        $subscribers->save();
        $subsId = $subscribers->id;

        $plans = Plans::find($id);
        $plans->plan_name = $request->plan_name;
        $plans->price = $request->price;
        $plans->save();
        $plansId = $plans->id;

        $stores = Stores::find($id);
        $stores->store_name = $request->store_name;
        $stores->region = $request->region;
        $stores->address = $request->alamat_store;
        $stores->status = $request->store_status;
        $stores->save();
        $storesId = $stores->id;

        $activations = Activations::find($id);
        $activations->msisdn = $request->msisdn;
        $activations->subscribers_id = $subsId;
        $activations->plans_id = $plansId;
        $activations->periode = $request->periode;
        $activations->stores_id = $storesId;
        $activations->agent_name = $request->agent_name;
        $activations->agent_email = $request->agent_email;
        $activations->status = $request->status;
        $activations->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        Alert::success('Data Berhasil Di Hapus', 'Sukses');
        $activations = Activations::find($id);
		$activations->delete();
        return redirect()->back();
    }
}
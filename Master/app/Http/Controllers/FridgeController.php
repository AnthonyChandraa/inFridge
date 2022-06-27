<?php

namespace App\Http\Controllers;

use App\Models\Fridge;
use App\Models\FridgeDetail;
use App\Models\Item;
use App\Models\ItemCategory;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FridgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {

        $fridgeID = Fridge::query()->select('id')->where('user_id', '=', Auth::user()->id)->first();
        $datas = DB::table('fridge_details')->join('items', 'items.id', '=','fridge_details.item_id')->join
        ('item_categories', 'items.category_id', '=',
            'item_categories.id')
            ->select('fridge_details.quantity as quantity', 'items.name as item_name', 'item_categories.name as category_name', 'item_categories.type as type', 'fridge_details.added_date as date', 'fridge_details.fridge_id as id')->where('fridge_details.fridge_id', $fridgeID['id'])->whereNull('fridge_details.deleted_at')->get();
//        dd($datas);
        return view('content.fridge-management', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $itemCategory = ItemCategory::query()->select('name')->distinct()->get();
        return view('content.fridge.add', compact('itemCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'item_category' => 'required',
            'item_type' => 'required',
            'quantity' => 'required'
        ]);

        $findIfItemExist = Item::query()->select('*')->where('name', '=', $request->input('name'))->first();
        $userFridgeId = Fridge::query()->select('id')->where('user_id', Auth::user()->id)->first();
        if($findIfItemExist!=null){

            FridgeDetail::query()->insert([
                'fridge_id' => $userFridgeId['id'],
                'item_id' => $findIfItemExist['id'],
                'quantity' => $request->input('quantity'),
                'added_date' => date('Y-m-d ')
            ]);
        }else{
//            dd($request);
            $itemId = Str::uuid();
            $catID = ItemCategory::query()->select('id')->where('type','=', $request->input('item_type'))->first();
//            dd($catID->id);
            $newItem = new Item();
            $newItem->id = $itemId;
            $newItem->name = $request->input('name');
            $newItem->category_id = $catID['id'];
            $newItem->save();


            FridgeDetail::query()->insert([
                'fridge_id' => $userFridgeId->id,
                'item_id' => $itemId,
                'quantity' => $request->input('quantity'),
                'added_date' => date('Y-m-d ')
            ]);
        }
        return redirect()->route('manage_fridge_page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     *
     */
    public function destroy(Request $request)
    {
//        dd($request);
        FridgeDetail::query()->where('fridge_id', '=', $request->id)->delete();
        return redirect()->back();
    }
}

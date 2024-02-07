<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'items' => Item::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        // if ($item->users->id !== auth()->users()->id) {
        //     abort(403);
        // }

        // return view('dashboard.index', [
        //     'item' => $item
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $used = $item->stock;
        $used_by = DB::table('users')->where('used', '>', 0)->sum('used');
        $stock_ready = $used - $used_by;
        return view('dashboard.edit', [
            'item' => $item,
            'using_by' => User::where('using', $item->id)->get(),
            'stock_ready' => $stock_ready
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $rules = [
            'using' => 'required|integer',
            'used' => 'required|integer'
        ];

        $validatedData = $request->validate($rules);

        $used = $item->stock;
        $stock_ready = $used - $validatedData['used'];

        User::where('id', $item->id)->update($validatedData);
        Item::where('id', $item->id)->update(['stock_ready' => $stock_ready]);

        return redirect('/dashboard')->with('success', 'Postingan telah diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}

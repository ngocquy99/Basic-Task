<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Controllers\Controller;


class VueItemController extends Controller
{

    public function manageVue()
    {
        return view('manage-vue');
    }

    public function index(Request $request)
    {
        $items = Item::first()->paginate(3);

        $response = [
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
                'from' => $items->firstItem(),
                'to' => $items->lastItem()
            ],
            'data' => $items
        ];
        return response()->json($response);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'maker' => 'required',
        ]);

        $create = Item::create($request->all());

        return response()->json($create);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'maker' => 'required',
        ]);

        $edit = Item::find($id)->update($request->all());

        return response()->json($edit);
    }
    public function destroy($id)
    {
        Item::find($id)->delete();
        return response()->json(['done']);
    }
}

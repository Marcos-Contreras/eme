<?php

namespace App\Http\Controllers;

use App\Models\Sale;

use Illuminate\Http\Request;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;

class SaleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sales=Sale::get();
        return view('admin.Sale.index', compact('Sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::get();
        return view('admin.Sale.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all());
        foreach($request->product_id as $key => $product){
            $results[]=array("product_id"=>$request->product_id[$key], 
            "quantity"=>$request->quantity[$key], "price"=>$request->price[$key],
            "discount"=>$request->quantity[$key]);
        }
        $sale->saleDetails()->createMany($results);
        
        
        return redirect()->route('Sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $Sale)
    {
        return view('admin.Sale.show', compact('Sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $Sale)
    {
        $clients = Client::get();
        return view('admin.Sale.show', compact('Sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function update(updateRequest $request, Sale $Sale)
    {
        //$Sale->update($request->all());
        //return redirect()->route('Sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $Sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $Sale)
    {
        //$Sale->delete();
        //return redirect()->route('Sales.index');
    }
}

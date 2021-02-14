<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequst;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequst $request)
    {
        $product_data = $request->except('_token','heighlights','videos','image','header','integrations',);
        $product_data['image'] = upload_image_without_resize('products',$request->image);
        $product_data['header'] = upload_image_without_resize('products',$request->header);
        $product = Product::create($product_data);

        //TODO:: validate investigations , videos
        if($request->heighlights){
            foreach ($this->process_heighlights($request) as $investigation) {
                $product->heighlights()->create($investigation);
            }
        }
        if($request->integrations){
            foreach ($this->process_integrations($request) as $investigation) {
                $product->integrations()->create($investigation);
            }
        }
        


        return redirect()->back()->with('success','تمت الإضافة بنجاح');
    }

    private function process_integrations(Request $request){
        $data = [];
        foreach ($request->integrations as $key => $investigation) {
            $data[$key]['ar']['name'] = $investigation['ar_name'];
            $data[$key]['en']['name'] = $investigation['en_name'];
            $data[$key]['image']      = upload_image_without_resize('integrations',$investigation['image']);
            $data[$key]['url']      = $investigation['url'];
        }
        return $data;
    }
    private function process_heighlights(Request $request){
        $data = [];
        foreach ($request->heighlights as $key => $investigation) {
            $data[$key]['ar']['name'] = $investigation['ar_name'];
            $data[$key]['en']['name'] = $investigation['en_name'];
            $data[$key]['image']      = upload_image_without_resize('heighlights',$investigation['image']);
        }
        return $data;
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
    public function edit(Product $product)
    {
        return view('dashboard.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

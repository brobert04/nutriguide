<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    public function index(){
        return view('nutriguide.users.dashboard.product.index');
    }

    public function scanBarcode(Request $request){
        $request->validate([
            'barcode' => 'required|string', // Assuming barcode is a string
        ]);

        $barcode = $request->input('barcode');
        $redirect_url = route('product.show', ['barcode' => $barcode]);
        return response()->json(['redirect_url' => $redirect_url]);
    }

    public function product($barcode){
        $client = new Client();
        $base_url = 'https://world.openfoodfacts.org/api/v0/product/';

        try {
            $response = $client->request('GET', $base_url . $barcode . '.json');

            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $product_info = json_decode($response->getBody(), true);
            } else {
                return response()->json(['error' => 'API Error'], $statusCode);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('nutriguide.users.dashboard.product.show', ['product_info' => $product_info]);
//        dd($product_info);
    }
}

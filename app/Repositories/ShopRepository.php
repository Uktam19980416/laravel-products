<?php

namespace App\Repositories;

use App\Models\ {
    Product,
    Cart,
    Subscribe
};

// use Illuminate\Support\Facades\DB;

class ShopRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_product;
    protected $model_cart;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Product $product, Cart $cart)
    {
        $this->model_product = $product;
        $this->model_cart = $cart;
    }

    /**
     * Create a query for Products.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelect($request)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            // ->where('top9', 1)
            ->orderBy('price', 'asc');

            if (isset($request->top9)) {
                $query->where('top9', $request->top9)->where('name', 'like', '%' . $request->search . '%');
            }
            else{
                $query->where('top9', 1);
            }

        return $query->get();
    }

    /**
     * Create a query for Product.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function funcSelectOne($id)
    {
        $query = $this->model_product
            ->select('id', 'name', 'price', 'image')
            ->where('id', $id);
        return $query->get();
    }    

    /**
     * Store data to cart.
     *
     * @param  \App\Http\Requests\Request $request
     * @return void
     */
    public function store($request)
    {
        // Cart::create($request->all());
        $this->model_cart->name = $request->name;
        $this->model_cart->price = $request->price;
        $this->model_cart->image = $request->image;
        $this->model_cart->save();
    }

    /**
     * Create a query for Carts.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function fromCart()
    {
        $query = $this->model_cart
            ->select('id', 'name', 'price', 'image');
            
        return $query->get();
    }  

     /**
     * Remove all cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function clearall()
    {
        $this->cart->truncate();
    }            

     /**
     * Remove one to cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clearone($request)
    {
        $cart = $this->model_cart->find($request->id);
        $cart->delete();
    }

     /**
     * Mailer for sending message.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mailer($request)
    {
        Subscribe::create($request->all());
        $title = 'Message of your registration- ' . date('d-m-Y H:i:s');
        $message = 'You has been successfully registered!';
        $client = new \GuzzleHttp\Client([
           'headers' => [
               //'Authorization' => '9267585bb333341dc049321d4e74398f',
               //'Content-Type' => 'application/json',
            ]
        ]);
        $response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . $request->email . '&title=' . $title . '&message=' . $message,
         [
            //...
         ]);    
        //return json_decode($response->getBody()->getContents());  
        return response()->json([
                'answer' => $response->getBody()->getContents(),
            ]);        
    }    
    
}

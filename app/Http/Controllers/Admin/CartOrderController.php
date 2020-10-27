<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Cart;
use App\User;
use App\Order;
use App\Article;
use App\ArticleOrder;
use Illuminate\Http\Request;
use App\Notifications\OrderCreated;
use App\Http\Controllers\Controller;

class CartOrderController extends Controller
{
    public function index()
    {
        $articles = [];
        $cart = Session::has('cart') ? Session::get('cart') : null;

        if ($cart) {
            foreach ($cart->items as $item) {
                $articles[] = $item;
            }
        }

        return view('cart.index', [
                'articles' => $articles,
                'totalPrice' => $cart->totalPrice ?? 0
            ]);
    }

    public function show(Article $article, Request $request)
    {
        $cart = $this->getCart($request);

        $cart->add($article, $article->id);

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    /**
     * Store given order, order items and emty cart
     * 
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $cart = $this->getCart($request);

        $order = Order::create([
            'user_id' => auth()->id(),
            'amount' => $cart->totalSum,
            'total_price' => $cart->totalPrice,
            'status' => 0
        ]);

        $order->addItems($cart->items);

        $request->session()->forget('cart');
        return redirect()->back()->with('message', 'Order successfully sent !');

    }

    /**
    * Remove the given article from cart.
    *
    * @param Article $article
    * @return \Illuminate\Http\RedirectResponse
    */
    public function destroy(Article $article, Request $request)
    {
        $cart = $this->getCart($request);

        $cart->remove($article, $article->id);

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    protected function getCart(Request $request)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        
        return new Cart($oldCart, $request->get('amount'));
    }
}

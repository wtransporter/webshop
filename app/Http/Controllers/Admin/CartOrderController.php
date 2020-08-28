<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Cart;
use App\Order;
use App\Article;
use App\ArticleOrder;
use Illuminate\Http\Request;
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
// dd($cart);
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

    public function store(Request $request)
    {
        $cart = $this->getCart($request);

        $order = Order::create([
            'user_id' => auth()->id(),
            'amount' => $cart->totalSum,
            'total_price' => $cart->totalPrice,
            'status' => 0
        ]);
        // dd($cart->items);
        foreach ($cart->items as $article) {
            $orderItems = ArticleOrder::create([
                'order_id' => $order->id,
                'article_id' => $article['items']->id,
                'amount' => $article['amount'],
                'price' => $article['price'],
                'discount' => 0
            ]);
        }
        $request->session()->forget('cart');
        return redirect()->back()->with('message', 'Order successfully sent !');

    }

    /**
    * Delete the given article.
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

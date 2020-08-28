<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalSum = 0;
    public $totalPrice = 0;
    public $amount = 0;

    /**
     * @param Cart $oldCart
     * 
     */    
    public function __construct($oldCart, $itemAmount)
    {            
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalSum = $oldCart->totalSum;
            $this->totalPrice = $oldCart->totalPrice;
        }

            $this->amount = $itemAmount ?? 1;
    }

    /**
     * @param array $item
     * @param int $id
     * 
     */

    public function add($item, $id)
    {
        $storedItem = ['amount' => 0, 'price' => $item->price, 'items' => $item];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['amount'] += $this->amount;
        $storedItem['price'] = $storedItem['amount'] * $item->price;
        $this->items[$id] = $storedItem;
        $this->totalSum += $this->amount;
        $this->totalPrice += $this->amount * $item->price;
    }

    public function remove($item, $id)
    {
        $storedItem = ['amount' => 0, 'price' => $item->price, 'items' => $item];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['amount']--;
        $storedItem['price'] = $storedItem['amount'] * $item->price;
        $this->items[$id] = $storedItem;
        $this->totalSum--;
        $this->totalPrice -= $item->price;


        if ($storedItem['amount'] < 1) {
            unset($this->items[$id]);
        }
    }

}
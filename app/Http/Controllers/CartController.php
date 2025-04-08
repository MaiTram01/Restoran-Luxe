<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Thêm sản phẩm vào giỏ hàng (lưu trong Session)
    public function addToCart(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Vui lòng đăng nhập để thêm vào giỏ hàng!'], 401);
        }
        $product = Item::find($request->id);
        if (!$product) {
            return response()->json(['error' => 'Sản phẩm không tồn tại!'], 404);
        }

        $cart = Session::get('cart', []);

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] += $request->quantity;
        } else {
            $cart[$request->id] = [
                'avatar' => $product->avatar,
                'name' => $product->item_name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'id' => $request->id,
                'categoryName' => $request->categoryName,
            ];
        }

        Session::put('cart', $cart);
        return response()->json(['success' => 'Sản phẩm đã được thêm vào giỏ hàng!', 'cart' => $cart]);
    }
    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        $productId = $request->id;
        $newQty = $request->quantity;

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $newQty;
        }

        session()->put('cart', $cart);

        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return response()->json([
            'success' => true,
            'totalPrice' => $total
        ]);
    }

    public function showCart()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xem giỏ hàng!');
        }

        $cartItems = Session::get('cart', []);
        return view('page.cart', compact('cartItems'));
    }
    public function load()
    {
        $cart = session('cart', []);
        return response()->json([
            'cart' => $cart
        ]);
    }


    public function removeFromCart(Request $request, $id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    public function updateCart(Request $request, $id)
    {
        $cart = Session::get('cart', []);

        if (!isset($cart[$id])) {
            return redirect()->route('cart.show')->with('error', 'Sản phẩm không tồn tại trong giỏ hàng!');
        }

        if ($request->action === 'increase') {
            $cart[$id]['quantity'] += 1;
        } elseif ($request->action === 'decrease' && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity'] -= 1;
        }

        Session::put('cart', $cart);
        return back()->with('success', 'Giỏ hàng đã được cập nhật!');
    }

}

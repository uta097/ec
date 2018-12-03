<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get("/item/{id}",function($id){
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        return view("item_detail",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    };
});

Route::get("/cart/list",function(){
    return view("cart_list");
});

Route::get("/cart/list",function(){
    // DBからデータを１つ取り出す。
    $items = DB::select("SELECT * FROM items where id = 1");
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);
    // セッションにデータを追加して格納
    $cartItems[] = $items[0];
    session()->put("CART_ITEMS",$cartItems);

    return view("cart_list", [
        "cartItems" => $cartItems
    ]);
});

Route::post("/cart/add",function(){
    // フォームから IDを読み込みDBへ問い合わせる
    $id = request()->get("item_id");
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        // セッションにデータを追加して格納
        $cartItems = session()->get("CART_ITEMS",[]);
        $cartItems[] = $items[0];
        session()->put("CART_ITEMS",$cartItems);
        return redirect("/cart/list");
    }else{
        return abort(404);
    }
});

Route::get("/cart/list",function(){
    // セッションからカートの情報を取り出す
    $cartItems = session()->get("CART_ITEMS",[]);

    return view("cart_list", [
        "cartItems" => $cartItems
    ]);
});

Route::post("/cart/clear",function(){
    $id = request()->get("item_id");
    $items = DB::select("SELECT * FROM items where id = ?",[$id]);
    if(count($items) > 0){
        $cartItems = session()->forget('CART_ITEMS');
        $cartItems[] = $items[0];
        session()->put("CART_ITEMS",$cartItems);
        return redirect("/cart/list");
    }else{
        return abort(404);
    }
});

Route::get("/order",function(){
    return view("order");
});

Route::get("/order/thanks",function(){
    return view("thanks");
});

Route::post("/order",function(){



    // ここで カートの中身をDBに保存する
    DB::insert("INSERT into orders (name,address,tel,email,orders) VALUES (?,?,?,?,?)",[
        request()->get("name"),
        request()->get("address"),
        request()->get("tel"),
        request()->get("email"),
        json_encode(session()->get("CART_ITEMS"))
    ]);

    session()->forget("CART_ITEMS"); // ここでカートを空に

    return redirect("/order/thanks");
});

Route::get("/",function(){
    $searchKey = request()->get("searchkey");
    if($searchKey){
        $items = DB::select("select * from items where name like ?",["%$searchKey%"]);
    }else{
        $items = DB::select("select * from items");
    }
    return view("items", [
        "items" => $items,
        "searchKey" => $searchKey
    ]);
});



<?php
/**
 * Created by PhpStorm.
 * User: zhen
 * Date: 2018/12/5
 * Time: 上午10:33
 */

namespace App\Services;

use App\Models\CartItem;
use Auth;

class CartService
{
    public function get()
    {
        return Auth::user()->cartItems()->with(['productSku.product'])->get();
    }


    public function add($skuId, $amount)
    {
        $user = Auth::user();
        // 从数据库中查询该商品是否已经在购物车中
        if($item = $user->cartItems()->where('product_sku_id',$skuId)->first()){
            // 如果存在则直接叠加商品数量
            $item->update([
                'amount' => $item->amount + $amount,
            ]);
        }else{
            // 否则创建一个新的购物车记录
            $item = new CartItem(['amount'=>$amount]);
            $item->user()->associate($user);
            $item->productSku()->associate($skuId);
            $item->save();
        }
        return $item;
    }


    public function remove($skuIds)
    {
        //可以传单个ID，也可以传 ID 数组
        if (!is_array($skuIds)) {
            $skuIds = [$skuIds];
        }

        Auth::user()->cartItems()->whereIn('product_sku_id',$skuIds)->delete();
    }





}
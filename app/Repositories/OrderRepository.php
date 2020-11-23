<?php

namespace App\Repositories;

use Cart;
use App\Models\Order;
use App\Models\Seedling;
use App\Models\OrderItem;
use App\Contracts\OrderContract;

class OrderRepository extends BaseRepository implements OrderContract
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function storeOrderDetails($params)
    {
        $order = Order::create([
            'order_number'      =>  'ORD-'.strtoupper(uniqid()),
            'user_id'           => auth()->user()->id,
            'status'            =>  'pending',
            'grand_total'       =>  Cart::getSubTotal(),
            'payment_status'    =>  0,
            'first_name'        =>  $params['first_name'],
            'last_name'         =>  $params['last_name'],
            'address'           =>  $params['address'],
            'city'              =>  $params['city'],
            'country'           =>  $params['country'],
            'phone_number'      =>  $params['phone_number'],
            'notes'             =>  $params['notes']
        ]);

        if ($order) {

            $items = Cart::getContent();

            foreach ($items as $item)
            {
                // A better way will be to bring the Seedling id with the cart items
                // you can explore the package documentation to send Seedling id with the cart
                $seedling = Seedling::where('myan_name', $item->name)->first();

                $orderItem = new OrderItem([
                    'seedling_id'    =>  $seedling->id,
                    'quantity'      =>  $item->quantity,
                    'price'         =>  $item->getPriceSum()
                ]);

                $order->items()->save($orderItem);
            }
        }

        return $order;
    }

    public function listOrders(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    public function findOrderByNumber($orderNumber)
    {
        return Order::where('order_number', $orderNumber)->first();
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteOrder($orderNumber)
    {
        $order = $this->findOrderByNumber($orderNumber);

        $order->delete();

        return $order;
    }
}
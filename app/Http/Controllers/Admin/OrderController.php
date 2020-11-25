<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\OrderContract;
use App\Http\Controllers\BaseController;
class OrderController extends BaseController
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->listOrders();
        $this->setPageTitle('Orders', 'List of all orders');
        return view('admin.orders.index', compact('orders'));
    }

    public function show($orderNumber)
    {
        $order = $this->orderRepository->findOrderByNumber($orderNumber);

        $this->setPageTitle('Order Details', $orderNumber);
        return view('admin.orders.show', compact('order'));
    }

    public function delete($orderNumber)
    {
        $order = $this->orderRepository->deleteOrder($orderNumber);

        if (!$order) {
            return $this->responseRedirectBack('Error occurred while deleting order.', 'error', true, true);
        }
        return $this->responseRedirect('admin.orders.index', 'Order deleted successfully' ,'success',false, false);
    }
}

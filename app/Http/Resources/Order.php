<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\User as UserResource;
use App\Http\Resources\OrderItem as OrderItemsResource;
class Order extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'      => $this->id,
            'status'  => $this->status,
            'total'   => $this->sumTotalOrder($this),
            'user'    => new UserResource($this->user),
            'items'   => OrderItemsResource::collection($this->items)
        ];
    }
}

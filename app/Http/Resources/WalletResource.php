<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WalletResource extends JsonResource
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
            'buyer_id' => $this->buyer_id,
            'debit' => $this->debit,
            'credit' => $this->credit,
            'balance' => $this->debit - $this->credit

        ];
    }
}

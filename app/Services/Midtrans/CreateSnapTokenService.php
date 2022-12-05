<?php

namespace App\Services\Midtrans;

use App\Models\User;
use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
	protected $transaction;
	protected $costumer;

	public function __construct($transaction)
	{
		parent::__construct();

		$this->transaction = $transaction;
		$this->costumer = User::where('id',$transaction->costumer_id)->first();
	}

	public function getSnapToken()
	{
		$params = [
			'transaction_details' => [
				'order_id' => $this->transaction->transaction_number,
				'gross_amount' => $this->transaction->total,
			],
			'customer_details' => [
				'first_name' => $this->costumer->name,
				'email' => $this->costumer->email,
				'phone' => $this->costumer->phone,
				'alamat'=> $this->transaction->alamat,
			]
		];

		$snapToken = Snap::getSnapToken($params);
		return $snapToken;
	}
}

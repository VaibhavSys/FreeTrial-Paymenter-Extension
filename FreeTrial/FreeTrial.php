<?php

namespace App\Extensions\Gateways\FreeTrial;

use App\Classes\Extensions\Gateway;

class FreeTrial extends Gateway
{
    /**
    * Get the extension metadata
    *
    * @return array
    */
    public function getMetadata()
    {
        return [
            'display_name' => 'Free Trial',
            'version' => '1.0.0',
            'author' => 'Vaibhav Dhiman',
            'website' => 'https://github.com/VaibhavSys/FreeTrial-Paymenter-Extension',
        ];
    }

    /**
    * Get all the configuration for the extension
    *
    * @return array
    */
    public function getConfig()
    {
        return [
            [
                'name' => 'max_order_value',
                'friendlyName' => 'Maximum Order Value',
                'type' => 'text',
                'description' => 'Maximum Order Value',
                'required' => true,
            ]
        ];
    }

    /**
    * Get the URL to redirect to
    *
    * @param int $total
    * @param array $products
    * @param int $invoiceId
    * @return string
    */
    public function pay($total, $products, $invoiceId)
    {
        return route('FreeTrial.activate', ['invoice_id' => $invoiceId]);
    }
}

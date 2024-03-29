<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'number_invoice' => 'required|max:30',
            'transaction_id' => 'required|nullable',
            'company_id' => 'required|nullable',
            'invoice_date' => 'required|date|',
            'buyer' => 'required|max:30',
            'NIP' => 'string|digits:10|nullable',
            'address' => 'required|max:50',
            'payment_method' => 'required|max:50',
            'service' => 'required|max:50',
            'VAT' => 'required|integer|digits:3',
            
        ];
    }
}

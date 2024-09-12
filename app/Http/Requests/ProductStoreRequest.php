<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "product_title" => 'bail|required|string',
            "product_description" => 'bail|required|string',
            "product_image" => "bail|required|image|mimes:png,jpg,jpeg",
            "product_price" => "bail|required|numeric",
            "product_compare_price" => "bail|required|numeric",
            "product_sku" => "bail|required|numeric",
            "product_barcode" => "bail|nullable|numeric",
            "product_status" => "bail|required|numeric",
            "category_id" => "bail|required|numeric",
            "sub_category_id" => "bail|required|numeric",
            "clr_name" => "bail|array",
            "product_size" => 'bail|array',
            "product_featured_status" => "bail|nullable|numeric"
        ];
    }
}

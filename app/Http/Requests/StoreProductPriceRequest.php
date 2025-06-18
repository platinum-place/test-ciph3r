<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPriceRequest extends FormRequest
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
            'price' => ['required', 'numeric', 'min:0'],
            'product_id' => ['required', 'exists:products,id'],
            'currency_id' => ['required', 'exists:currencies,id'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'product_id' => $this->route('id')
        ]);
    }
}

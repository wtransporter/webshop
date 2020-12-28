<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'code' => 'required',
            'bs_code' => 'sometimes|required',
            'category_id' => 'required',
            'active' => 'sometimes|required',
            'price' => 'required',
            'amount' => 'required',
            'tax' => 'required'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'active' => !! request()->get('active') ? 1 : 0,
            // 'price' => mySqlPrice(request()->get('price'))
        ]);
    }
}

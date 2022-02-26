<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreOrderReq extends FormRequest
{

    public function rules()
    {
        return [
            'f_tel' => 'required|min:9|numeric',
            'f_addr' => 'required',
            'f_food' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'f_tel.required' => 'Bạn hãy nhập Số ĐT nhé',
            'f_addr.required' => 'Bạn hãy nhập Địa chỉ nhé',
            'f_food.required' => 'Bạn hãy nhập Món nhé'
        ];
    }

}

?>
<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
        $rules = [];
        switch ($this->method()) {
            case 'POST':
            case 'PUT':
            case 'PATCH':
                $rules = [
                    'title' => 'required|min:2',
                    'body' => 'required|min:3',
                    'category_id' => 'required|numeric',
                ];
                break;
            case 'GET':
            case 'DELETE':
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'title.min' => '标题必须至少两个字符',
            'body.min' => '文章内容必须至少三个字符',
        ];
    }
}
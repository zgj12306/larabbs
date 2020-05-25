<?php

namespace App\Http\Requests;

class TopicRequest extends Request
{
    public function rules()
    {
        switch($this->method())
        {
            // CREATE
            case 'POST':
            // UPDATE
                //幂等性
            case 'PUT':
                //非幂等性，局部更新
            case 'PATCH':
            {
                return [
                    'title' => 'require|min:2',
                    'body' => 'require|min:3',
                    'category_id' => 'require|numeric',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            };
        }
    }

    public function messages()
    {
        return [
            'title.min' => '标题必须至少两个字符',
            'body.min' => '文章内容必须至少三个字符',
        ];
    }
}

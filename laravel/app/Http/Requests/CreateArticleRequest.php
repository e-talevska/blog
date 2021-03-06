<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request
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
            'title' => 'required|min:3',
            'slug' => 'required',
            'body' => 'required',
            'published_at' => 'required|date_format:"m/d/Y H:i A"',
            'featured_image' => 'mimes:jpeg,bmp,png,gif'
        ];
    }
}

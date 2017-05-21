<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user() ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	/// TODO: Fix this request so it wont return 403
	    return [
		    'name' => 'required|max:100',
		    'description' => 'required',
		    'markdown' => 'required',
	        'publishDate' => 'required',
	    ];
    }
}

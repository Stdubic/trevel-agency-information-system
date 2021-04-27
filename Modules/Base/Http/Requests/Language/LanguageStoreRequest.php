<?php

namespace Modules\Base\Http\Requests\Language;

use Modules\Base\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\Auth;

class LanguageStoreRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = Auth::user();

        if(!$user->can('create-language')) {
            return false;
        }

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
            'name' => 'required|string',
            'code' => 'required|string',
            'active' => 'boolean',
        ];
    }
}
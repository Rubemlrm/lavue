<?php

namespace App\Http\Requests;

/**
 *
 * Class UserFormRequest
 * @package Lavue
 * @subpackage FormRequest
 * @author  Rubem Mota rubemmota89@gmail.com
 * @version 1.0
 * @copyright 2016 Rubem Mota
 */

use App\Repositories\UserRepository;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

/**
 * Validates user input to check if all input is validated by the rules
 */
class UserFormRequest extends FormRequest
{

    /**
     * stores all validation rules that we will need
     * @var array
     */
    protected $rules = [
        'password' => 'min:3|max:25|required',
        'email' => 'min:5|max:35|email|required|unique:users,email,',
        'name' => 'min:5|required',
        'password2' => 'required|same:password'
    ];

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
        $rules = $this->rules;
        $rules['email'] .= $this->route('users')['id'];
        return $rules;
    }

    /**
     * return error message for each rule
     * @return array list of error messages that are triggered
     */
    public function messages()
    {
        $messages = [
            'unique' => "The field :attribute must be unique",
            'required' => "The field :attribute must be filled",
            'same' => 'Passwords must be equal'
        ];

        return $messages;
    }

    /**
     * OVERRIDE response message
     */

    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        $message = [];
        if ($this->expectsJson()) {
            $message['status'] = 'error';
            $message["errors"] = $errors;
            return new JsonResponse($message, 200);
        }

        return $this->redirector->to($this->getRedirectUrl())
                                        ->withInput($this->except($this->dontFlash))
                                        ->withErrors($errors, $this->errorBag);
    }
}

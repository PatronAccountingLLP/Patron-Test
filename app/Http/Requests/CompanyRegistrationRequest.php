<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegistrationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|regex:/^[0-9]{10}$/|max:20',
            'location' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.string' => 'Please enter a valid name.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'mobile.required' => 'Mobile number is required.',
            'mobile.regex' => 'Please enter a valid 10-digit mobile number.',
            'location.required' => 'City/Pincode is required.',
        ];
    }
}

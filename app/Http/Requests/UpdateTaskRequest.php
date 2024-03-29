<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {        
        return $this->user()->can('update', Task::find($this->task));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max: 255'],
            'description' => ['nullable', 'max: 255'],
            'deadline' => ['required'],
            'remind_at' => ['nullable'],
            'priority' => ['nullable', 'numeric', 'min:0', 'max:2'],
        ];
    }
}

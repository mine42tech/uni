<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|max:191',
            'description'=> 'sometimes|max:191',
            'image' => 'sometimes',
            'content' => 'required',
            'published_at' => 'required',
            'active' => 'sometimes|boolean'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo Título é obrigatório.',
            'title.max' => 'O tamanho máximo do campo título é 191.',
            'description.max' => 'O campo Descrição não pode conter mais de 191 caracteres.',
            'image.required' => 'O campo Imagem é obrigatório.',
            'content.required' => 'O campo Conteúdo é obrigatório.',
            'published_at.required' => 'O campo Data de Publicação é obrigatório.',
            'image.required' => 'O Campo Imagem é obrigatório'
        ];
    }
}

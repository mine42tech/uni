<?php

namespace App\Http\Controllers\Controle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreatePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post;
use Rd7\ImagemUpload\ImagemUpload;
use Exception;

class PostController extends Controller
{
    public function __construct()
    {
        $this->post = [
            'input_file' => 'image', //nome do input
            'destino' => 'posts/', //Pasta que será criada automáticamente dentro de storage/app/public/
            'resolucao' => ['p' => ['h' => 68, 'w' => 150], 'h' => ['h' => 380, 'w' => 720], 'm' => ['h' => 300, 'w' => 300]] //Não há limites de quantos tamanhos podem ser configuradas.
        ];
    }

    public function index()
    {
        $posts = Post::orderBy('order', 'ASC')->get();

        return view('controle.post.index', compact('posts'));
    }

    public function create()
    {
        return view('controle.post.form');
    }

    public function store(CreatePostRequest $request)
    {
        $input = $request->except('_token');

        if (!isset($input['active'])) {
            $input['active'] = 0;
        }

        if (!empty($input['image'])) {
            // a função retorna o novo nome da imagem. guarde em seu banco de dados.

            $imagens = ImagemUpload::salva($this->post);

            $input['image'] = $imagens;
        }

        try {
            Post::create($inputs);

            return redirect()->route('controle.blog.index')->with('msg', 'Post cadastrado com sucesso!');

        } catch (Exception $error) {
            return redirect()->back()->withErrors('Erro ao criar Post: ' . $error->getMessage());
        }
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('controle.post.form', compact('post'));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $input = $request->except('_token', 'method');

        if (!isset($input['active'])) {
            $input['active'] = 0;
        }

        try {
            $post = Post::find($id);

            $imagens = ImagemUpload::salva($this->post);
            //retorno: image-example_3fc5ac232a6e60a10ca20a90350954a9.jpg
            if ($imagens) {
                // a função retorna o novo nome da imagem. guarde em seu banco de dados.
                $input['image'] = $imagens;
            }

            $post->update($input);

            return redirect()->route('controle.blog.index')->with('msg', 'Post atualizado com sucesso!');

        } catch (Exception $error) {
            return redirect()->back()->withErrors('Erro ao atualizar Post: ' . $error->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Post::destroy($id);

            return redirect()->route('controle.blog.index')->with('msg', 'Post excluido com sucesso!');

        } catch (Exception $error) {
            return redirect()->back()->withErrors('Erro ao excluir Post: ' . $error->getMessage());
        }
    }
}


<?php

use Bredi\BrediDashboard\Models\CategoriaTransacao;
use Bredi\BrediDashboard\Models\Transacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categoriaTransacaos = [

            'Blog' => [
                [
                    'permissao' => 'controle.blog.index',
                    'descricao' => 'Visualizar',
                ],
                [
                    'permissao' => 'controle.blog.create',
                    'descricao' => 'Cadastrar',
                ],
                [
                    'permissao' => 'controle.blog.store',
                    'descricao' => 'Salvar',
                ],
                [
                    'permissao' => 'controle.blog.edit',
                    'descricao' => 'Editar',
                ],
                [
                    'permissao' => 'controle.blog.update',
                    'descricao' => 'Atualizar',
                ],
                [
                    'permissao' => 'controle.blog.destroy',
                    'descricao' => 'Excluir',
                ],
            ],
            'Post' => [
                [
                    'permissao' => 'controle.post.index',
                    'descricao' => 'Visualizar',
                ],
                [
                    'permissao' => 'controle.post.create',
                    'descricao' => 'Cadastrar',
                ],
                [
                    'permissao' => 'controle.post.store',
                    'descricao' => 'Salvar',
                ],
                [
                    'permissao' => 'controle.post.edit',
                    'descricao' => 'Editar',
                ],
                [
                    'permissao' => 'controle.post.update',
                    'descricao' => 'Atualizar',
                ],
                [
                    'permissao' => 'controle.post.destroy',
                    'descricao' => 'Excluir',
                ],
            ],

        ];

        foreach ($categoriaTransacaos as $nome => $categoriaTransacao) {
            $categoria = CategoriaTransacao::updateOrCreate([
                'nome' => $nome
            ], [
                'nome' => $nome
            ]);

            if (isset($categoria->id)) {
                $this->command->info($categoria->nome . ' Adicionado com sucesso!');

                foreach ($categoriaTransacao as $transacao) {
                    $transacao['categoria_transacao_id'] = $categoria->id;

                    $novaTransacao = Transacao::updateOrCreate([
                        'permissao' => $transacao['permissao'],
                    ], $transacao);

                    if (isset($novaTransacao->id)) {
                        $this->command->info($novaTransacao->permissao . ' Adicionado com sucesso!');
                    }
                }
            }
        }
    }
}

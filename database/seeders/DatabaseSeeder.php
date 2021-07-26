<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Produto;

use App\Models\Login;

use App\Models\Baixa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Produto::create(['nome' => 'Feijao','sku' => '001FE','qtd' => '600','metodo' => 'sistema']);
        Produto::create(['nome' => 'Arroz','sku' => '002AR','qtd' => '90','metodo' => 'sistema']);
        Produto::create(['nome' => 'Sal','sku' => '003SA','qtd' => '60','metodo' => 'sistema']);
        Produto::create(['nome' => 'Goiaba','sku' => '004GO','qtd' => '250','metodo' => 'sistema']);
        Produto::create(['nome' => 'Banana','sku' => '005BA','qtd' => '200','metodo' => 'sistema']);
        Produto::create(['nome' => 'Batata','sku' => '006BA','qtd' => '100','metodo' => 'sistema']);
        Produto::create(['nome' => 'Melancia','sku' => '007ME','qtd' => '50','metodo' => 'sistema']);
        Produto::create(['nome' => 'Biscoito','sku' => '008BI','qtd' => '200','metodo' => 'sistema']);
        Produto::create(['nome' => 'Manga','sku' => '009MA','qtd' => '200','metodo' => 'sistema']);
        Login::create(['login' => 'admin','password' => 'admin']);
        Baixa::create(['idproduto' => '1','qtd' => '-100','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '3','qtd' => '10','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '4','qtd' => '50','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '5','qtd' => '50','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '4','qtd' => '-100','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '5','qtd' => '-50','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '2','qtd' => '-10','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '1','qtd' => '100','metodo' => 'sistema']);
        Baixa::create(['idproduto' => '1','qtd' => '100','metodo' => 'sistema']);
    }
}

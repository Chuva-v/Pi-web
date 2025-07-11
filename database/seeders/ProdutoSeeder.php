<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::truncate(); //se não queser que apague algo que ja tem no banco, apague essa linha.
        Produto::insert([
          [
            'name'=>'torta de limão',
            'descricao'=>'produto',
            'preco'=>100.23,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
//começo dos produtos             
          [
            'name'=>'Açaí Copo',
            'descricao'=>'250g',
            'preco'=>10.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí Copo',
            'descricao'=>'300g',
            'preco'=>13.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí Copo',
            'descricao'=>'400g',
            'preco'=>16.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],       
          [
            'name'=>'Açaí',
            'descricao'=>'700g',
            'preco'=>30.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Vitamina de Açaí',
            'descricao'=>'300ml',
            'preco'=>12.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Vitamina de Açaí',
            'descricao'=>'400ml',
            'preco'=>14.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Vitamina de Açaí',
            'descricao'=>'500ml',
            'preco'=>16.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Vitamina de Açaí',
            'descricao'=>'700ml',
            'preco'=>20.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
// fim dos produtos
// começo das frutas
          [
            'name'=>'Morango',
            'descricao'=>'fruta',
            'preco'=>2.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Banana',
            'descricao'=>'fruta',
            'preco'=>2.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Kiwi',
            'descricao'=>'fruta',
            'preco'=>2.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Abacaxi',
            'descricao'=>'fruta',
            'preco'=>2.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Manga',
            'descricao'=>'fruta',
            'preco'=>2.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Uva',
            'descricao'=>'fruta',
            'preco'=>2.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
// fim das frutas
// começo das vitaminas
          [
            'name'=>'Açaí com banana',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí com cupuaçu',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí com morango',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí com ninho',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí com whey',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí cremoso',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí natural',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Tradicional',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Açaí zero açúcar',
            'descricao'=>'vitamina',
            'preco'=>0.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
// fim das vitaminas
// começo dos cremes
          [
            'name'=>'Avelâ com cacau',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Delícia de abacaxi',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Nata goiaba',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Pitaya',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Morango',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Ninho',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Ninho com morango',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Ninho com oreo',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Cupuaçu',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Energético',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Maracujá',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Ovomaltine',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Nutella com chocolate',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Coco',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Pavê',
            'descricao'=>'creme',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
// fim dos cremes
// começo das caldas
          [
            'name'=>'Pistache',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Finni Banana',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Finni Beijinho',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Skimo',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Leite condensado',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Nutella',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Doce de leite',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Mel karo',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Morango',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Chocolate',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Tutti fruti',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Classic colorido',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Chocolate belga',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Morango silvestre',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Chocolate branco',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Amendoim',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Chocolate black',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Uva',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Menta',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Milho verde',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Cereja',
            'descricao'=>'calda',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
// fim das caldas
// começo dos complementod
          [
            'name'=>'Cobertura de ouro branco',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Cobertura de ouro negro',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini mix',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'M&M',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Bolinha de chocolate',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Miçangas',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Amendoim',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Castanha',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Cereal de chocolate',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Ovinhi de amendoim',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini de banana',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini de beijinho',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Ovomaltine',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Granola',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Pingo de chocolate',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini de brigadeiro',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini de dentadura',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Jujuba',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Mashmallow',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Paçoca',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini cobrinha',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Fini rosquinha',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Palito de biscoito',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Farinha láctea',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Farinha de paçoca',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Cereal',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Mini oreo',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
          [
            'name'=>'Bis',
            'descricao'=>'complemento',
            'preco'=>3.00,
            'created_at'=>now(),
            'updated_at'=>now()
            ]
// fim dos complementos
          ]);
    }
}

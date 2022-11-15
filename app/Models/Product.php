<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['PRODUTO_NOME', 'PRODUTO_DESC', 'PRODUTO_PRECO', 'PRODUTO_DESCONTO', 'CATEGORIA_ID' , 'PRODUTO_ATIVO'];

    //chave primaria
    protected $primaryKey = 'PKPRODUTO';

    //nome da tabela
    protected $table = 'PRODUTO';

    //informa que esta trabalhando com incremento
    public $incrementing = true;

    // não utiliza timestamps nos controles (created & updated)
    public $timestamps = false;

    // public function categoria() {
    //     return $this->belongsTo(Categoria::class, 'fkcategoria', 'pkcategoria');
    // }
}

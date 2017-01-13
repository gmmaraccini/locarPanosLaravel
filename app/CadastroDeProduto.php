<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CadastroDeProduto
 *
 * @package App
 * @property string $nome_do_produto
 * @property string $preco_padrao
*/
class CadastroDeProduto extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nome_do_produto', 'preco_padrao'];
    
    
}

<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CadastroDeCliente
 *
 * @package App
 * @property string $nome
 * @property string $nome_fantasia
 * @property string $endereco
 * @property string $bairro
 * @property string $cep
 * @property string $cnpj
 * @property string $vcto_primeira_quinzena
 * @property string $vcto_segunda_quinzena
 * @property string $vcto_mensal
 * @property string $rota
 * @property string $telefone
 * @property string $contato
 * @property string $email
*/
class CadastroDeCliente extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nome', 'nome_fantasia', 'endereco', 'bairro', 'cep', 'cnpj', 'vcto_primeira_quinzena', 'vcto_segunda_quinzena', 'vcto_mensal', 'rota', 'telefone', 'contato', 'email'];
    
    
}

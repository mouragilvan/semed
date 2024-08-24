<?php

namespace Semed\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioPerfil extends Model
{
    use HasFactory;


    // Nome da tabela
    protected $table = 'TB_USUARIO_PERFIL';

    // Nome da chave primária
    protected $primaryKey = 'USU_PERFIL_COD_PK';

    // Campos que podem ser atribuídos em massa
    protected $fillable = [
        'PERFIL_NOME',
        'USU_COD_FK',
        'PERFIL_COD_FK',
        'USU_STATUS',
        'PERFIL_DESCRICAO',
    ];

    // Relacionamentos
    public function user()
    {
        return $this->belongsTo(User::class, 'USU_COD_FK', 'id');
    }

    public function perfil()
    {
        return $this->belongsTo(Perfil::class, 'PERFIL_COD_FK', 'PERFIL_COD_PK');
    }
}
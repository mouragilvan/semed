<?php

namespace Semed\Models;


use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    
    protected $table = 'TB_PERFIL';
    protected $primaryKey = 'PERFIL_COD_PK';

    protected $fillable = [
        'PERFIL_NOME',
        'USU_STATUS',
        'PERFIL_DESCRICAO',
    ];

    public $timestamps = true;

    protected $casts = [
        'CREATED_AT' => 'datetime',
        'UPDATED_AT' => 'datetime',
    ];

    /**
     * Relacionamento com a tabela `users` através da tabela `TB_USUARIO_PERFIL`
     */
    // public function users()
    // {
    //     return $this->hasMany(UsuarioPerfil::class, 'PERFIL_COD_FK', 'PERFIL_COD_PK');
    // }
}
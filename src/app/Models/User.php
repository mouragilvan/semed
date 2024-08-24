<?php 

namespace Semed\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject {

    protected $table = 'TB_USUARIOS';

    protected $primaryKey = 'USU_COD_PK';

    public $with = ['perfis'];

    public $timestamps = false;

    protected $fillable = [
        'USU_CPF',
        'USU_NOME',
        'STATUS',
        'USU_EMAIL_PRINCIPAL',
        'USU_EMAIL_SECUNDARIO',
        'USU_CONTATO_PRINCIPAL',
        'USU_CONTATO_SECUNDARIO',
        'USU_MATRICULA',
        'USU_LOGIN',
        'USU_PASSWORD',
        'USU_TIPO',
    ];

    protected $hidden = [
        'USU_PASSWORD',
    ];

    public function perfis()
    {
        return $this->hasMany(UsuarioPerfil::class, 'USU_COD_FK', 'USU_COD_PK');
    }

    public function scopeUsuariosAtivos($query)
    {
        return $query->where('STATUS', 1);
    }



     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
    
}
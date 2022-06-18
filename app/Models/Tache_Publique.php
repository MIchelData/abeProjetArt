<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\Tache_PubliqueRequest;
class Tache_Publique extends Model
{
    use HasFactory;
    //proteger la table
    protected $table = 'taches_publique';
    protected $fillable=['type','date_debut','duree','description','titre','classe','localisation','id_enseignant','id_eleve'];

    public function matieres() {
        return $this->belongsToMany(Matiere::class);
    }

    public function enseignants() {
        return $this->belongsTo(Enseignant::class);
    }
    public function eleves() {
        return $this->belongsTo(eleve::class);
    }
    public function taches(){
        return $this->belongsTo(Matiere::class);
    }



}

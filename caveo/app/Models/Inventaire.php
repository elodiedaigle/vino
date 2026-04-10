<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    use HasFactory;

    /**
     * Nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'inventaires';

    /**
     * Clé primaire du modèle.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indique si le modèle utilise les colonnes created_at et updated_at.
     *
     * Mets cette propriété à false seulement si ta table inventaires
     * ne contient pas les colonnes timestamps de Laravel.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Attributs pouvant être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_cellier',
        'id_bouteille',
        'quantite',
        'description',
        'date_ajout',
    ];

    /**
     * Retourne le cellier associé à cette ligne d'inventaire.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cellier()
    {
        return $this->belongsTo(Cellier::class, 'id_cellier');
    }

    /**
     * Retourne la bouteille associée à cette ligne d'inventaire.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bouteille()
    {
        return $this->belongsTo(Bouteille::class, 'id_bouteille');
    }
}

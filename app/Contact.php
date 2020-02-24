<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*Ce sont les seules colonnes qui seront impactées par la méthode create 
(et équivalentes). Attention à cela lorsque vous avez un bug mystérieux 
avec des colonnes qui ne se mettent pas à jour !
Mais quel est le risque ?
Imaginez qu’il y ait une autre colonne avec des données sensibles 
et non prévue dans le formulaire mais qu’un petit malin l’ajoute 
à la requête, cette colonne serait mise à jour en même temps que les autres*/
class Contact extends Model
{
    protected $fillable = ['email', 'message'];
}



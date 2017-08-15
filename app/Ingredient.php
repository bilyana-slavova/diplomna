<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    public function ingredientCategory()
    {
       return $this->belongsTo('App\ingredientCategory');
    }

    public function recipeIngredient()
   {
       return $this->hasMany('App\RecipeIngredient');
   }
}
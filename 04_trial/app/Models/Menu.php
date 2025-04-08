<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    // One Menu has many SubMenus
    public function subMenus()
    {
        return $this->hasMany(SubMenu::class, 'menus_id','id');
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FormLayoutTrait;

class House extends Model
{
    use FormLayoutTrait;

    public function formFields(){
        
        return $this->field('image', 3)
        ->field('title',8)
        ->field('house_belongsto_user_relationship',2)->field('house_belongsto_category_relationship',2)->field('status',2)
        ->field('address',8)
        ->subViewField('houses.sub-views.select-address', ['grid' => 2])->field('acreage',2)
        ->field('tang',2)->field('giadien',2)->field('gianuoc',2)->field('price',2)
        ->field('tienich',8)->field('description',8)->get();
    }
}

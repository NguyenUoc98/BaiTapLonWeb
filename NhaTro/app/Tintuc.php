<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FormLayoutTrait;

class Tintuc extends Model
{
    use FormLayoutTrait;

    public function formFields(){
        return $this ->field('title', 6)->field('image', 6)
       ->field('body', 12)->get();
    }
}

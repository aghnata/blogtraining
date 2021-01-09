<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class Book extends Model
{
    protected $table = 'book';

    public function showMyId(){
        $id = $this->id;
        return $id;
    }

    public function showTitlePage($idPage){
        $page = Page::find($idPage)->judul;
        return $page;
    }




}

<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{

    protected $table = 'post_images';

    public $timestamps = false;


    public function getURL() {
        return url('images/dauka1.jpg');
    }

}
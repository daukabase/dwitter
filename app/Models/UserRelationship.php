<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserRelationship extends Model
{

    protected $table = 'user_relationship';

    public $timestamps = false;


    public function relative(){
        return $this->belongsTo('App\Models\User', 'related_user_id');
    }

    public function main(){
        return $this->belongsTo('App\Models\User', 'main_user_id');
    }

    public function getAllow(){
        return $this->allow;
    }

    public function getType(){
        if ($this->relation_type == 0){
            return "Mother";
        }else if($this->relation_type == 1){
            return "Father";
        }else if($this->relation_type == 2){
            return "Spouse";
        }else if($this->relation_type == 3){
            return "Sister";
        }else if($this->relation_type == 4){
            return "Brother";
        }else{
            return "Relative";
        }
    }
}
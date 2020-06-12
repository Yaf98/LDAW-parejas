<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Alumno extends Model{
        
        protected $table = 'alumno';
        protected $primaryKey = 'id_alumno';
        public $timestamps = false;
        
    }

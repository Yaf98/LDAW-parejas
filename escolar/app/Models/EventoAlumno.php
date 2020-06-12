<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class EventoAlumno extends Model{
        
        protected $table = 'eventoalumno';
        protected $primaryKey = 'id_evento_alumno';
        public $timestamps = false;
        
        public $fillable = ['id_evento', 'id_alumno', 'lugar_alumno'];
    }

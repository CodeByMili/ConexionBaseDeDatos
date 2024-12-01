<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use File;

class EjecutarSQL extends Command
{
    // Nombre y firma del comando
    protected $signature = 'sql:ejecutar';

    // Descripción del comando
    protected $description = 'Ejecuta el archivo sql_command.sql';

    public function __construct()
    {
        parent::__construct();
    }

    // Método para ejecutar el comando
    public function handle()
    {
        // Ruta completa al archivo SQL
        $sqlFile = base_path('resources/sql/sql_command.sql');

        // Verificar si el archivo SQL existe
        if (File::exists($sqlFile)) {
            // Obtener el contenido del archivo SQL
            $sql = File::get($sqlFile);

            // Ejecutar el SQL en la base de datos
            DB::unprepared($sql);

            // Mensaje de éxito
            $this->info('SQL ejecutado correctamente');
        } else {
            // Si el archivo no se encuentra
            $this->error('El archivo SQL no se encuentra');
        }
    }
}

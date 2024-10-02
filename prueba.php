<?php

class TaskModel {
    private $db;

    public function __construct() {
        // Configura la conexión a la base de datos
        $this->db = new PDO('mysql:host=localhost;dbname=autosss;charset=utf8', 'root', '');
    }

    public function getAutosConMarcas() {
        // Prepara la consulta para seleccionar todas las marcas
        $query = $this->db->prepare('SELECT  * FROM autos');
        
        // Ejecuta la consulta
        $query->execute();

        // Obtiene los resultados como un arreglo de objetos
        $Marcas = $query->fetchAll(PDO::FETCH_OBJ);

        // Verifica si se obtuvieron resultados y los muestra
        if ($Marcas) {
            echo '<pre>'; // Formato para mejorar la legibilidad
            print_r($Marcas); // Muestra el contenido de la variable
            echo '</pre>';
        } else {
            echo 'No se encontraron marcas.';
        }

        return $Marcas; // Devuelve las marcas
    }
}

// Crea una instancia del modelo y llama a la función para probar
$model = new TaskModel();
$model->getAutosConMarcas(); // Llama a la función

?>

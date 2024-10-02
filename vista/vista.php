<?php

class TaskView {
    public function showTasks($tasks) {
        
        require '../templates/encabezado.phtml';

        echo "  <table class='task-table'>
        <thead>
            <tr>
                <th>color</th>
                <th>Modelo</th>
                <th>Kilometros</th>
                <th>Asientos</th>
                
                
            </tr>
        </thead>
        <tbody>";
foreach ($tasks as $viaje) {
    echo "<tr>
            <td>{$viaje->color}</td>
            <td>{$viaje->Modelo}</td>
            <td>{$viaje->Kilometros}</td>
             <td>{$viaje->Asientos}</td>
            

           
          </tr>";
}

echo "</tbody></table>";

require '../templates/footer.phtml';

}
}
?>


      
    

    


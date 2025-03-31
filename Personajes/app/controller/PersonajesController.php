<?php
require __DIR__ . '/../conexion.php';


/*require("app/conexion.php");*/ // Incluye la conexión a la base de datos

class PersonajesController
{
    private $conexion;

    function __construct()
    {
        global $conexion;
        $this->conexion = $conexion;
    }

    public function index()
    {
        $query = "SELECT * FROM personajes";
        $stmt = $this->conexion->query($query);
        $rowset = $stmt->fetchAll(PDO::FETCH_OBJ);
        require __DIR__ . '/../view/todosRegistros.php';
    }

    public function verRegistro($id)
    {
        $row = $this->obtenerPersonajeId($id); // Usa el nuevo método
        if ($row) {
            require("view/unRegistro.php");
        } else {
            $this->index();
        }
    }

    public function agregar()
    {
        require __DIR__ . '/../view/agregar.php';

    }

    public function guardar($personaje, $saga, $especie)
{
    $query = "INSERT INTO personajes (personaje, saga, especie) VALUES (:personaje, :saga, :especie)";
    $stmt = $this->conexion->prepare($query);
    $stmt->bindParam(':personaje', $personaje);
    $stmt->bindParam(':saga', $saga); // Cambié $modelo por $saga
    $stmt->bindParam(':especie', $especie);
    $stmt->execute();

    header("Location: index.php");
    exit();
}


    public function editarPersonaje($id)
    {
        $row = $this->obtenerPersonajeId($id); // Usa el nuevo método
        if ($row) {
            require __DIR__ . '/../view/editarPersonaje.php';

        } else {
            $this->index();
        }
    }

   public function actualizarPersonaje($id, $personaje, $saga, $especie)
{
    $query = "UPDATE personajes 
              SET personaje = :personaje, 
                  saga = :saga, 
                  especie = :especie
              WHERE id = :id";
    
    $stmt = $this->conexion->prepare($query);
    $stmt->bindParam(':personaje', $personaje);
    $stmt->bindParam(':saga', $saga); 
    $stmt->bindParam(':especie', $especie);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
    $stmt->execute();

    header("Location: index.php");
    exit();
}


    public function eliminar($id)
    {
        if (isset($_GET['confirmar'])) {
            //  elimina el videojuego
            $query = "DELETE FROM celulares WHERE id = :id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            header("Location: index.php");
            exit();
        } else {
            // 
            $row = $this->obtenerPersonajeId($id);
            if ($row) {
                require("view/eliminar.php"); // Muestra la confirmación de eliminación
            } else {
                header("Location: index.php"); // Si no existe, redirige al menu
            }
        }
    }

    public function obtenerPersonajeId($id)
    {
        $query = "SELECT * FROM personajes WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ); // Retorna el celular o false si no existe
    }
}
?>
<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mCliente;
use App\Models\mProducto;
use App\Models\mGastos;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    
    public function registro()
    {
        return view ('registro');
    }
    public function vRegistro()
    {
        return view ('vRegistro');
    }
    public function vBienvenida()
    {
        return view ('vBienvenida');
    }
    public function vIngresar()
    {
        return view ('vIngresar');
    }
    public function Vregistros()
    {
        return view ('Vregistros');
    }

    /*public function insertarForm()
    {
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "usuario" => $_POST['email'],
            "password" => $_POST['password'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido']

        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios->db->insertID();

        return view("success",$datoId);
    }

    public function Insertar_formulario()
    {
        $mCliente = new mCliente();
        $usuarioNuevo = [
            "usuario" => $_POST['email'],
            "password" => $_POST['password'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "edad" => $_POST['edad']

        ];
        $mCliente->insert($usuarioNuevo);
        $datoId['idRegistrado'] = $mCliente->db->insertID();

        return view("Succcesss",$datoId);
    }
    public function mostrarRegistros()
    {
        $mCliente = new mCliente();
        $todos = $mCliente -> findAll();
        $usuarios = array('usuarios' => $todos);

        return view("Vregistros", $usuarios);
    }
    public function ingresarForm()
   {
    $mCliente = new mCliente();
    $usuario = $_POST['email'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $user = $mCliente->where('usuario',$usuario)->where('password',$password)->where('nombre',$nombre)->where('apellido',$apellido)->first();

    return view("vIngresado",$user);

   }
public function buscarRegistro()
   {
    $mCliente = new mCliente();
    $id_cliente = $_POST['id_cliente'];
    $usuario = $mCliente->find($id_cliente);
    return view("vRegistroEncontrado",$usuario);
   }
public function actualizarRegistro()
  {
    $mCliente = new mCliente();
    $id_cliente = $_POST['id_cliente'];
    $usuarioActualizado = [
            "usuario" => $_POST['email'],
            "password" => $_POST['password'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "edad" => $_POST['edad']
        ];
        $mCliente->update($id_cliente, $usuarioActualizado);

        return $this->mostrarRegistros();
  }
  public function eliminarRegistros($id)
  {
    $mCliente = new mCliente();
    $id_cliente = $id;
    $mCliente->delete($id_cliente);
    
    return $this->mostrarRegistros();
  }
*/

 /* public function V_Registrar()
    {
        return view ('V_Registrar');
    }
    public function V_Inicio()
    {
        return view ('V_Inicio');
    }
     public function V_Ingresar()
    {
        return view ('V_Ingresar');
    }
    public function Insertar_Form()
    {
        $mProducto = new mProducto();
        $ProductoNuevo = [
            "fecha_compra" => $_POST['fecha'],
            "descripcion_articulo" => $_POST['descripcion'],
            "cantidad_articulo" => $_POST['cantidad'],
            "precio_articulo" => $_POST['precio'],
            "subtotal_articulo" => $_POST['subtotal']

        ];
        $mProducto ->insert($ProductoNuevo);
        $datoId['idRegistrado'] = $mProducto ->db->insertID();

        return view("successful",$datoId);
    }
    public function Mostrar_Registros()
    {
        $mProducto = new mProducto();
        $todos = $mProducto ->findAll();
        $productos = array('productos' => $todos);

        return view("V_TablaRegistros", $productos);
    }
    public function Ingresar_Form()
   {
    $mProducto = new mProducto();
    $fecha_compra = $_POST['fecha'];
    $descripcion_articulo = $_POST['descripcion'];
    $cantidad_articulo = $_POST['cantidad'];
    $precio_articulo = $_POST['precio'];
    $subtotal_articulo = $_POST['subtotal'];
    $user = $mProducto->where('fecha_compra',$fecha_compra)->where('descripcion_articulo',$descripcion_articulo)->where('cantidad_articulo',$cantidad_articulo)->where('precio_articulo',$precio_articulo)->where('subtotal_articulo',$subtotal_articulo)->first();

    return view("V_Ingresado",$user);

   }
public function Buscar_Registro()
   {
    $mProducto = new mProducto();
    $id_factura = $_POST['id_factura'];
    $producto = $id_factura->find($id_factura);
    return view("V_RegistroEncontrado",$producto);
   }
public function Actualizar_Registro()
  {
    $mProducto = new mProducto();
    $id_factura = $_POST['id_factura'];
    $ProductoActualizado = [
            "fecha_compra" => $_POST['fecha'],
            "descripcion_articulo" => $_POST['descripcion'],
            "cantidad_articulo" => $_POST['cantidad'],
            "precio_articulo" => $_POST['precio'],
            "subtotal_articulo" => $_POST['subtotal']
        ];
        $mProducto->update($id_factura, $ProductoActualizado);

        return $this->Mostrar_Registros();
  }
  public function Eliminar_Registros($id)
  {
    $mProducto = new mProducto();
    $id_factura = $id;
    $mProducto->delete($id_factura);
    
    return $this->Mostrar_Registros();
  }*/







//Examen2
   public function VInicio()
    {
        return view ('VInicio');
    }
  public function VRegistrarUsuario()
    {
        return view ('VRegistrarUsuario');
    }
  public function VIniciarSesion()
    {
        return view ('VIniciarSesion');
    }
      public function VRegistrarGasto()
    {
        return view ('VRegistrarGasto');
    }
    public function VIngresarGasto()
    {
      return view ('VIngresarGasto');
    }
    
  public function InsertForm()
    {
        $mUsuarios = new mUsuarios();
        $UsuarioNuevo = [
            "usuario" => $_POST['usuario'],
            "password" => $_POST['password']
        ];
        $mUsuarios ->insert($UsuarioNuevo);
        $datoId['idRegistrado'] = $mUsuarios ->db->insertID();

        return view("exitoso",$datoId);
    }
    public function IngresarForm()
   {
    $mUsuarios = new mUsuarios();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $user = $mUsuarios->where('usuario',$usuario)->where('password',$password)->first();

    return view("VsesionIniciada",$user);

   }
    public function InsertG()
    {
        $mGastos = new mGastos();
        $GastoNuevo = [
            "cantidad" => $_POST['cantidad'],
            "fecha" => $_POST['fecha'],
            "descripcion" => $_POST['descripcion'],
            "categoria" => $_POST['categoria']
        ];
        $mGastos ->insert($GastoNuevo);
        $datoId['idRegistrado'] = $mGastos ->db->insertID();

        return view("GastoExitoso",$datoId);
    }
    public function mostrarRegistros()
    {
        $mGastos = new mGastos();
        $todos = $mGastos -> findAll();
        $gastos = array('gastos' => $todos);

        return view("vRegistrosG", $gastos);
    }
    public function IngresarG()
   {
    $mGastos = new mGastos();
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $user = $mGastos->where('cantidad',$cantidad)->where('fecha',$fecha)->where('descripcion',$descripcion)->where('categoria',$categoria)->first();

    return view("vIngresadoG",$user);

   }
   public function BuscarRegistro()
   {
    $mGastos = new mGastos();
        $id_gasto = $_POST['id_gasto'];
        $gasto=$mGastos->find($id_gasto);
        return view("VGastoEncontrado", $gasto);
   }
   public function ActualizarG()
  {
    $mGastos = new mGastos();
    $id_gasto = $_POST['id_gasto'];
    $GastoActualizado = [
            "cantidad" => $_POST['cantidad'],
            "fecha" => $_POST['fecha'],
            "descripcion" => $_POST['descripcion'],
            "categoria" => $_POST['categoria']
        ];
        $mGastos->update($id_gasto, $GastoActualizado);

        return $this->mostrarRegistros();
  }
  public function EliminarRegistros($id)
  {
    $mGastos = new mGastos();
    $id_gasto = $id;
    $mGastos->delete($id_gasto);
    
    return $this->mostrarRegistros();
  }

}

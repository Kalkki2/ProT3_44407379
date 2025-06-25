<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('catalogo_producto', 'Home::mostrarCatalogo');
$routes->get('carrito', 'Home::mostrarCarrito');
$routes->get('producto_detallado', 'Home::mostrarDetallesProducto');
$routes->get('opciones_pago', 'Home::mostrarOpcionesPago');
$routes->get('comercializacion', 'Home::mostrarComercializacion');
$routes->get('quienes_somos', 'Home::mostrarQuienesSomos');
$routes->get('terminosyUsos', 'Home::mostrarTerminosYUsos');

//Formularios
$routes->get('registrarse', 'Usuario_Controller::mostrarFormRegistro');
$routes->post('crear_cuenta', 'Usuario_Controller::validarYAgregarUsuario');
$routes->get('contacto', 'Mensaje_Controller::mostrarContacto');
$routes->post('enviar_mensaje', 'Mensaje_Controller::validarYAgregarMensaje');
$routes->get('login', 'Usuario_Controller::mostrarFormLogin');
$routes->post('logear', 'Usuario_Controller::iniciarSesion');
$routes->get('logout', 'Usuario_Controller::cerrarSesion');

/**--------------------- RUTAS DEL ADMINISTRADOR ------------------------------*/
$routes->get('usuario_admin', 'Administrador_Controller::mostrarIndexAdmin');

$routes->get('gestionar_usuarios', 'Administrador_Controller::gestionarUsuarios');
$routes->get('dar_Baja_User(:num)', 'Administrador_Controller::darBajaUsuario/$1');
$routes->get('dar_Alta_User(:num)', 'Administrador_Controller::darAltaUsuario/$1');
$routes->get('form_editar_usuario(:num)', 'Administrador_Controller::formEditarUsuario/$1');
$routes->post('actualizar_datos', 'Administrador_Controller::actualizarPerfilUser');
$routes->get('ver_consultas', 'Mensaje_Controller::listarConsultas');
$routes->get('leer_mensaje(:num)', 'Mensaje_Controller::leerMensaje/$1'); 
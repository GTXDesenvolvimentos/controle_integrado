<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'SigninController::index');
$routes->get('/signin', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');

$routes->get('/membros', 'MembrosController::index',['filter' => 'authGuard']);
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('/vendasmenu', 'VendasMenuController::index');
$routes->get('/listview', 'ListviewController::index');
$routes->get('/pagamento', 'PagamentoController::index',['filter' => 'authGuard']);
$routes->get('/pagamento1', 'PagamentoController::index',['filter' => 'authGuard']);
$routes->get('/vendas', 'VendasController::index');


$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->match(['get', 'post'], 'MembrosController/cadMembros', 'MembrosController::cadMembros');
$routes->match(['get', 'post'], 'MembrosController/validaCPF', 'MembrosController::validaCPF');
$routes->match(['get', 'post'], 'VendasController/cadPedidos', 'VendasController::cadPedidos');
$routes->match(['get', 'post'], 'ListviewController/buscapedido', 'ListviewController::buscaPedido');





$routes->get('/sair', 'SigninController::logout');



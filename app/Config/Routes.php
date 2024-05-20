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

// ROTEAMENTO PARA LOGIN
$routes->get('/', 'VendasMenuController::index');
$routes->get('/signin', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');

// ROTEAMENTO PARA HOME
$routes->get('/home', 'HomeController::index',['filter' => 'authGuard']);


// ROTEAMENTO PARA CLIENTES / FORNECEDORES
$routes->get('/cadcli', 'CadcliController::index', ['filter' => 'authGuard']);
$routes->match(['get', 'post'], 'CadCliController/cadcliForn', 'CadCliController::cadcliForn');






$routes->get('/membros', 'MembrosController::index',['filter' => 'authGuard']);
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('/vendasmenu', 'VendasMenuController::index');
$routes->get('/listview', 'ListviewController::index');
$routes->get('/pagamentos', 'PagamentoController::index',['filter' => 'authGuard']);
//$routes->get('/pagamento1', 'PagamentoController::index');
$routes->get('/vendas', 'VendasController::index');
$routes->get('/doacao', 'DoacaoController::index');

$routes->get('/teste', 'TesterController::index');



$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->match(['get', 'post'], 'MembrosController/cadMembros', 'MembrosController::cadMembros');
$routes->match(['get', 'post'], 'MembrosController/validaCPF', 'MembrosController::validaCPF');
$routes->match(['get', 'post'], 'VendasController/cadPedidos', 'VendasController::cadPedidos');
$routes->match(['get', 'post'], 'ListviewController/buscapedido', 'ListviewController::buscaPedido');
$routes->match(['get', 'post'], 'DoacaoController/cadDoacao', 'DoacaoController::cadDoacao');
$routes->match(['get', 'post'], 'PagamentoController/retorno', 'PagamentoController::retorno');
$routes->match(['get', 'post'], 'PagamentoController/finalizar', 'PagamentoController::finalizar');
$routes->match(['get', 'post'], 'PagamentoController/retCompas', 'PagamentoController::retCompas');




$routes->get('/sair', 'SigninController::logout');



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//Parte do controlador "Main"  ----------------Controlador Principal
$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inicio'] = 'Main/inicio';
$route['formulario'] = 'Main/formulario';
$route['login'] = 'Main/login';
$route['validation'] = 'Main/form_validate';
$route['logged'] = 'Main/logged';
$route['changePass'] = 'Main/changePass';
$route['newPass'] = 'Main/newPass';
$route['sendMail'] = 'Main/sendMail';
$route['validtoken'] = 'Main/validToken';
$route['updatetoken'] = 'Main/updateToken';
$route['quit'] = 'Main/Quit';

//Parte do controlador "User_change" ---------------Controlador de Alteração de dados(usuario padrao)
$route['change'] = 'User_change/change';
$route['update'] = 'User_update/update';


//Parte dos controladores "Adm_course e Adm_subject"  -----------------Controlador da parte de administração do sisgap
$route['AdmBegin'] = 'Adm_course/AdmBegin';
$route['CadDisciplina'] = 'Adm_subject/CadDisciplina';
$route['CadCursos'] = 'Adm_course/CadCursos';
$route['ListDisciplina'] = 'Adm_subject/ListDisciplina';
$route['ListCursos'] = 'Adm_course/ListCursos';
$route['validDisciplina'] = 'Adm_subject/validDisciplina';
$route['validCurso'] = 'Adm_course/validCurso';





$route['teste'] = 'ControllerTest/teste';

//Note que se seu servidor nao estiver reconhecendo as rotas, você deve dar permissão amigavel para o acesso
//Aqui tem um link de como arrumar no ubunto : https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-16-04
/* cole isso no arquivo criado :

    <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^(.*)$ index.php/$1 [L]
    </IfModule>

    note que o arquivo .htaccess deve ser criado na raiz da pasta do projeto var/www/html/sisgap/
*/



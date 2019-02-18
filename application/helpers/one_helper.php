<?php
defined('BASEPATH') OR exist('No direct script access allowed');

if(!function_exists('set_msg')):
    function set_msg($msg = NULL){
        $Sisgap = & get_instance();
        $Sisgap->session->set_userdata('aviso', $msg);
    }
endif;
if(!function_exists('get_msg')):
    function get_msg($destroy = TRUE){
        $Sisgap = & get_instance();
        $retorno = $Sisgap->session->set_userdata('aviso');
        if($destroy) $Sisgap->session->unset_userdata('aviso');
        return $retorno;
    }
endif;

if(!function_exists('checkLogin')):
    function checkLogin($redirect = 'inicio'){
        $Sisgap = & get_instance();
        if($Sisgap->session->userdata('Logado') != TRUE):
           //$this->session->set_flashdata('acessoRestrito', 'Acesso restrito, faça login para continuar!');
           redirect($redirect, 'refresh');
        endif;
    }

endif;
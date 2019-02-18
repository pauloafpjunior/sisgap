<?php
class usuarios_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

    //Salvar dados do formulario no banco de dados
    public function salvar($dados) {
    
        return $this->db->insert('Usuarios', $dados);
    }

    //Funcao que pega Nome especificos do Banco de dados
    public function get_info($CPF){
        $this->db->where('CPF', $CPF);
        $query = $this->db->get('Usuarios', 1);

        if($query->num_rows() == 1):
            $row = $query->row();
            return $row->option_value; 
        else:
            return NULL;
        endif;
        //return ($query->num_rows() == 1) ? true : false;
    }

    //Função para evitar o cadastro de dados iguais ---- CPF, RG
    public function statusVerifica($CPF, $RG){
        $this->db->where('CPF', $CPF);
        $this->db->where('RG', $RG);
        $query = $this->db->get('Usuarios');

        return ($query->num_rows() == 1) ? true : false;
    }

    //Função para checar se já existe o CPF no sistema
    public function verificaCPF($CPF){
        $this->db->where('CPF', $CPF);
        $query = $this->db->get('Usuarios');
        return ($query->num_rows() == 1) ? true : false;
    }

    //Função para checar se já existe o RG no sistema
    public function verificaRG($RG){
        $this->db->where('RG', $RG);
        $query = $this->db->get('Usuarios');
        return ($query->num_rows() == 1) ? true : false;
    }

    //Verificação do login
    public function loginVerifica($CPF, $Senha){

        $this->db->where('CPF', $CPF);
        $this->db->where('Senha', $Senha);
        $query = $this->db->get('Usuarios');

        return ($query->num_rows() == 1) ? true : false;
    }

    //Atualização de informações
    public function update($CPF, $altera)
    {
        $this->db->where('CPF', $CPF);
        return($this->db->update('Usuarios', $altera)) ? true : false;
    }

    //Funcão para listar dados do Banco e retonar as informações referentes ao cpf
    public function listData($CPF)
    {
        $this->db->where('CPF', $CPF);
        $query = $this->db->get('Usuarios');
        foreach($query->result() as $row){
            $infoNome = $row->Nome;
            $infoNascimento = $row->Nascimento;
            $infoCPF = $row->CPF;
            $infoRG = $row->RG;
            $infoEndereco = $row->Endereco;
            $infoBairro = $row->Bairro;
            $infoCidade = $row->Cidade;
            $infoCEP = $row->CEP;
            $infoEstado = $row->Estado;
            $infoPais = $row->Pais;
            $infoCelular = $row->Celular;
            $infoTelefone = $row->Telefone;
            $infoEmail = $row->Email;
            $infoGraduacao = $row->Graduacao;
            $infoPosGraduacao = $row->PosGraduacao;
            $infoAreaposGrad = $row->AreaposGrad;
            $infoPExpDoc = $row->PExpDoc;
            $infoExpProf = $row->ExpProf;
            $infoExpEAD = $row->ExpEAD;
            $infoConhecInfo = $row->ConhecInfo;
            $infoCurriculo = $row->Curriculo;
            $infoAtuaTutor = $row->AtuaTutor;
            $infoOutrasInfo = $row->OutrasInfo;
        }
        $data = [     'Nome' => $infoNome,
                      'Nascimento' => $infoNascimento,
                      'CPF' => $infoCPF,
                      'RG' => $infoRG,
                      'Endereco' => $infoEndereco,
                      'Bairro' => $infoBairro,
                      'Cidade' => $infoCidade,
                      'CEP' => $infoCEP,
                      'Estado' => $infoEstado,
                      'Pais' => $infoPais,
                      'Celular' => $infoCelular,
                      'Telefone' => $infoTelefone,
                      'Email' => $infoEmail,
                      'Graduacao' => $infoGraduacao,
                      'PosGraduacao' => $infoPosGraduacao,
                      'AreaposGrad' => $infoAreaposGrad,
                      'PExpDoc' => $infoPExpDoc,
                      'ExpProf' => $infoExpProf,
                      'ExpEAD' => $infoExpEAD,
                      'ConhecInfo' => $infoConhecInfo,
                      'Curriculo' => $infoCurriculo,
                      'AtuaTutor' => $infoAtuaTutor,
                      'OutrasInfo' => $infoOutrasInfo
                ];
        return $data;
    }

    // Consultar: https://codeigniter.com/user_guide/database/query_builder.html
    // Consultar: https://codeigniter.com/user_guide/tutorial/create_news_items.html
}
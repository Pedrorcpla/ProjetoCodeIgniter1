<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class PessoasModel extends Model{
        protected $table = 'tb_pessoas';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;

        protected $allowedFields = ['nome', 'profissao', 'idade'];
        protected $validationRules = [
            'nome'          => 'required|min_length[3]',
            'profissao'     => 'required|min_length[2]',
            'idade'         => 'required|min_length[1]|max_length[3]'
        ];

        public function getPessoas(){
            return $this->findAll();
        }
    } 
?>

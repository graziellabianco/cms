<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array(
            'depoimentos'=>array()
        );

        //Código para pegar os depoimentos
        $depo = new Depoimentos();
        $dados['depoimentos'] = $depo->getDepoimentos(2);

        $this->loadTemplate('home', $dados);
    }

}
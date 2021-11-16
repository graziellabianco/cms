<?php
class controller
{

	private $config;

	public function __construct()
	{
		$cfg = new Config();
		$this->config = $cfg->getConfig();
	}

	public function loadView($viewName, $viewData = array())
	{
		extract($viewData);
		include 'views/' . $viewName . '.php';
	}

	public function loadTemplate($viewName, $viewData = array())
	{
		include 'views/templates/' . $this->config['site-template'] . '.php'; /*Template que vai ser carregado do banco de dados*/
	}

	public function loadViewInTemplate($viewName, $viewData)
	{
		extract($viewData);
		include 'views/' . $viewName . '.php';
	}

	public function loadMenu()
	{
		$menu = new Menu();
		$m = array();
		$m["menu"]= $menu->getMenu();

		$this->loadView("menu",$m);
	}
}

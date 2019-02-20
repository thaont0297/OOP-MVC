<?php
// tao function dung nhieu lan
class BaseController
{    

	protected $_view;

	public $_controller;

	private $_method;

	protected $name;	

    public function __construct()
    {        
    	
    }
// truyen du lieu view data (neu de = rong thi se tranh bi loi thieu du lieu tham so)
	protected function renderView($view = '', $data = [], $where = [], $search ='')
	{
		$view = @str_replace('.', '/', $view);
		require VIEW_PATH . $view . '.php';
	} 

	protected function setName($name = '')
	{
		$this->name = $name;
	} 

	protected function getName()
	{
		return $this->name;
	}               
}
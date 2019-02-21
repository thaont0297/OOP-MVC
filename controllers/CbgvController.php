<?php 
  require CONTROLLER_PATH . 'BaseController.php';
  require MODEL_PATH . 'CBGV.php';

  class CbgvController extends BaseController {

    protected $model;

    public function __construct()
    {        
        parent::__construct();
        $this->model = new CBGV(); 
    }

    public function index()
    {
      $data = [];
      $this->model->tinhLuong();
      $gv = $this->model->getGV($data);
      $data['gv'] = $gv;
      $this->renderView('index',$data);
    }

    public function create($where = [])
    {
      $where = [];
      if (isset($_POST) && isset($_POST['create'])) {
        $where = [
          'ten' => $_POST['ten'],
          'ngaysinh' => $_POST['ngaysinh'],
          'que' => $_POST['que'],
          'luongcung' => $_POST['luongcung'],
          'thuong' => $_POST['thuong'],
          'phat' => $_POST['phat'],
        ];
        var_dump($where);
        if ($this->model->create($where)) {
          header('Location: ?c=cbgv');
        }
      }      
      $this->renderView('create');
    }

    public function edit($where = [])
    {

      $where = [];
      if (isset($_GET['id']) && $_GET['id'] != '') {
        $where['id'] = $_GET['id'];
        $gv = $this->model->getOne($where);
        $data = [];
        $data['gv'] = $gv;
        var_dump($data);
      }
      if (isset($_POST) && isset($_POST['edit'])) {
        $where = [
          'id' => $_GET['id'],
          'ten' => $_POST['ten'],
          'ngaysinh' => $_POST['ngaysinh'],
          'que' => $_POST['que'],
          'luongcung' => $_POST['luongcung'],
          'thuong' => $_POST['thuong'],
          'phat' => $_POST['phat'],
        ];
        var_dump($where);
        if ($this->model->edit($where)) {
          header('Location: ?c=cbgv');
        }      
      }
      $this->renderView('edit',$data);
    }

    public function delete()
    {
        $data = [];
        $where = [];
        if( isset($_GET['id']) && $_GET['id'] != '') {
            $where['id'] = $_GET['id'];
        }
        var_dump($where);
        if($this->model->delete($where)) {
            header('location: ?c=cbgv');
        }   
    }
  }
?>

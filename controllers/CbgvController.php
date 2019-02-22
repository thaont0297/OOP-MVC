<?php 
  require CONTROLLER_PATH . 'BaseController.php';
  require MODEL_PATH . 'RepoCBGV.php';

  class CbgvController extends BaseController {

    protected $model;

    public function __construct()
    {        
        parent::__construct();
        $this->model = new RepoCBGV(); 
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
        if ($this->model->createGV($where)) {
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
        if ($this->model->editGV($where)) {
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
        if($this->model->deleteGV($where)) {
            header('location: ?c=cbgv');
        }   
    }

    public function search()
    {
      if (isset($_POST['ten'])) {
        $strWhere = $_POST['ten'];
        $search = $this->model->searchGV($strWhere);
        $data = [];
        $data['gv'] = $search;
      }
      if (!empty($data)) {
        $this->renderView('search',$data);
      }
      else {
        echo "Không có kết quả phù hợp";
      }
      
    }
  }
?>

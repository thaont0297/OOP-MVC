<?php 
  require CONTROLLER_PATH . 'BaseController.php';
  require MODEL_PATH . 'RepoCBGV.php';


  class CbgvController extends BaseController {

    protected $repo;

    public function __construct()
    {        
        parent::__construct();
        $this->repo = new RepoCBGV(); 
    }

    public function index()
    {
      $this->repo->getSalary();
      $data = $this->repo->getlistGV();

      $this->renderView('index',$data);
    }

    public function create()
    {
      $gv = new CBGV();
      if (isset($_POST) && isset($_POST['create'])) {
        $gv->setTen($_POST['ten']);
        $gv->setNgaySinh($_POST['ngaysinh']);
        $gv->setQue($_POST['que']);
        $gv->setLuongCung($_POST['luongcung']); 
        $gv->setThuong($_POST['thuong']); 
        $gv->setPhat($_POST['phat']);
        if ($this->repo->createGV($gv)) {
          header('Location: ?c=cbgv');
        }
      }      
      $this->renderView('create');
    }

    public function edit()
    {
      $gv = new CBGV();
      if (isset($_GET['id']) && $_GET['id'] != '') {
        $gv->setID($_GET['id']);
        $data = $this->repo->getGV($_GET['id']);
      }
      if (isset($_POST) && isset($_POST['edit'])) {
        $gv->setID($_GET['id']);
        $gv->setTen($_POST['ten']);
        $gv->setNgaySinh($_POST['ngaysinh']);
        $gv->setQue($_POST['que']);
        $gv->setLuongCung($_POST['luongcung']); 
        $gv->setThuong($_POST['thuong']); 
        $gv->setPhat($_POST['phat']);
        if ($this->repo->editGV($gv)) {
          header('Location: ?c=cbgv');
        }      
      }
      $this->renderView('edit',$data);
    }

    public function delete()
    {
      if( isset($_GET['id']) && $_GET['id'] != '') { 
        $id = $_GET['id'];
        if($this->repo->deleteGV($id)) {
            header('location: ?c=cbgv');
        }
      }   
    }

    public function search()
    {
      if (isset($_POST['ten'])) {
        $ten = $_POST['ten'];
        $data = $this->repo->searchGV($ten);
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

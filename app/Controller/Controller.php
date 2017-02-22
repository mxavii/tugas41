<?php

namespace App\Controller;

require __DIR__ . '/../../vendor/autoload.php';

use App\Model\Model;

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index(){
        $data = $this->model->selectAll();
        include "app/view/view.php";
    }

    public function viewEdit($nopol){
        $data = $this->model->selectMtr($nopol);
        $row = $this->model->fetch($data);
        include "app/view/view_edit.php";
    }

    public function viewInsert(){
        include "app/view/view_add.php";
    }

    public function update(){
        $nopol = $_POST['nopol'];
        $merk = $_POST['merk'];
        $warna = $_POST['warna'];
        $kubikasi = $_POST['kubikasi'];
        $tahun_perakitan = $_POST['tahun_perakitan'];

        $update = $this->model->updateMtr($nopol, $merk, $warna, $kubikasi, $tahun_perakitan);
        header("location:index.php");
    }

    public function delete($nopol){
        $delete = $this->model->deleteMtr($nopol);
        header("location:index.php");
    }

    public function insert(){
        $nopol = $_POST['nopol'];
        $merk = $_POST['merk'];
        $warna = $_POST['warna'];
        $kubikasi = $_POST['kubikasi'];
        $tahun_perakitan = $_POST['tahun_perakitan'];

        $insert = $this->model->insertMtr($nopol, $merk, $warna, $kubikasi, $tahun_perakitan);
        header("location:index.php");
    }

    // public function __destruct(){
    // }
}
?>

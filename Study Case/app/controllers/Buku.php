<?php

class Buku extends Controller {
    public function index()
{
    $data['page'] = 'Data Buku';
    $data['buku'] = $this->model('MinjamModel')->getAllMinjam();
    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer');
}


public function tambahMinjam()
{
    $data['page'] = 'Tambah Buku'; 
    $this->view('templates/header', $data);
    $this->view('buku/create');
    $this->view('templates/footer');
}

public function simpanMinjam() 
{
    if( $this->model('MinjamModel')->tambahMinjam ($_POST) > 0 ) {
            header('location: '. BASE_URL .'/buku/index');
            exit;
        }else{
            header('location: '. BASE_URL .'/buku/index'); 
            exit;
        }
}

public function edit($id){

    $data['judul'] = 'Edit Buku';
    $data['minjam'] = $this->model('MinjamModel')->getMinjamById($id);
    $this->view('templates/header', $data);
    $this->view('buku/edit', $data);
    $this->view('templates/footer');
}

public function updateMinjam()
{
    if( $this->model('MinjamModel')->updateDataMinjam ($_POST) > 0 ) { 
            header('location: '. BASE_URL . '/buku/index'); 
            exit;
    }else{
        header('location: '. BASE_URL . '/buku/index');
        exit;
}
}

public function hapus($id){
    if ( $this->model('MinjamModel')->deleteMinjam($id) > 0) {
        header('location: '. BASE_URL . '/buku/index');
        exit;
    }else{
        header('location: '. BASE_URL . '/buku/index');
        exit;
    }
    }


public function cari(){

    $data['judul'] = 'Data Peminjaman';
    $data['buku'] = $this->model('MinjamModel')->cariMinjam();
    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer');
}

}
?>
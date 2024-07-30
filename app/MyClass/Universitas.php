// app/MyClass/Universitas.php

namespace app\MyClass;

class Universitas implements UniversitasInterface{
    private $nama;
    private $alamat;

    public function __construct($nama, $alamat){
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setNama(){
        $this->nama = $nama;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    public function setAlamat(){
        $this->alamat = $alamat;
    }

    public function greeting(){
        return "Selamat datang di Universitas " . $this->nama ." yg berlokasi di " . $this->alamat;
    }
} 
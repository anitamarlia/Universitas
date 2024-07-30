// app/MyClass/Mahasiswa.php

namespace App\MyClass;

class Mahasiswa extends Universitas
{
    private $nim;
    private $namaMahasiswa;

    public function __construct($nama, $alamat, $nim, $namaMahasiswa)
    {
        parent::__construct($nama, $alamat);
        $this->nim = $nim;
        $this->namaMahasiswa = $namaMahasiswa;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNamaMahasiswa()
    {
        return $this->namaMahasiswa;
    }

    public function setNamaMahasiswa($namaMahasiswa)
    {
        $this->namaMahasiswa = $namaMahasiswa;
    }

    public function greeting()
    {
        return "Selamat datang Mahasiswa " . $this->namaMahasiswa . " dengan NIM " . $this->nim . " di Universitas " . parent::getNama();
    }
}
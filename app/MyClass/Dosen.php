// app/MyClass/Dosen.php

namespace App\MyClass;

class Dosen extends Universitas
{
    private $nip;
    private $namaDosen;

    public function __construct($nama, $alamat, $nip, $namaDosen)
    {
        parent::__construct($nama, $alamat);
        $this->nip = $nip;
        $this->namaDosen = $namaDosen;
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function getNamaDosen()
    {
        return $this->namaDosen;
    }

    public function setNamaDosen($namaDosen)
    {
        $this->namaDosen = $namaDosen;
    }

    public function greeting()
    {
        return "Selamat datang Dosen " . $this->namaDosen . " dengan NIP " . $this->nip . " di Universitas " . parent::getNama();
    }
}
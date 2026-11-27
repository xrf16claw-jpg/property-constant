
<?php

class Produk
{
    public string $kode ;
    public string $nama ;
    public int $harga ;
    public int $stok ;

    const PAJAK = 0.11;

    public function __construct(string $kode, string $nama, int $harga,int $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function totalHargaSetelahPajak()
    {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

$produk = new Produk("P001", "Laptop", 10000000, 5);

echo "Produk: " . $produk->nama . PHP_EOL;
echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.') . PHP_EOL;
echo "Stok: " . $produk->stok . PHP_EOL;
echo "Pajak: " . (self::PAJAK * 100) . "%" . PHP_EOL;

echo PHP_EOL;

echo "Total harga setelah pajak: Rp"
    . number_format($produk->totalHargaSetelahPajak(), 0, ',', '.')
    . PHP_EOL;

?>

<?php

namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Config;

class Model
{
	private $db;

    public function __construct()
    {
        $this->db = new Config();
    }

	public function selectAll()
	{
		$query = "SELECT * FROM motor";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	public function selectMtr($nopol)
	{
		$query = "SELECT * FROM motor WHERE nopol=:nopol";
		$stmt  = $this->db->prepare($query);
		$stmt->bindParam(':nopol',$nopol);
		$stmt->execute();
		return $stmt;
	}

	public function updateMtr($nopol, $merk, $warna, $kubikasi, $tahun_perakitan)
	{
		$query = "UPDATE motor SET nopol=:nopol, merk=:merk, warna=:warna, kubikasi=:kubikasi, tahun_perakitan=:tahun_perakitan WHERE nopol=:nopol";
		$stmt = $this->db->prepare($query);
        $stmt->bindParam(':nopol', $nopol);
        $stmt->bindParam(':merk', $merk);
        $stmt->bindParam(':warna', $warna);
        $stmt->bindParam(':kubikasi', $kubikasi);
        $stmt->bindParam(':tahun_perakitan', $tahun_perakitan);
        $stmt->execute();
		return $stmt;
	}

	public function deleteMtr($nopol)
	{
		$query = "DELETE FROM motor WHERE nopol=:nopol";
		$stmt  = $this->db->prepare($query);
	    $stmt->bindParam(':nopol',$nopol);
	    $stmt->execute();
		return $stmt;
	}

	public function insertMtr($nopol, $merk, $warna, $kubikasi, $tahun_perakitan)
	{
		$query = "INSERT INTO motor (nopol, merk, warna, kubikasi, tahun_perakitan)
				  VALUES (:nopol, :merk, :warna, :kubikasi, :tahun_perakitan)";
		$stmt = $this->db->prepare($query);
        $stmt->bindParam(':nopol', $nopol);
        $stmt->bindParam(':merk', $merk);
        $stmt->bindParam(':warna', $warna);
        $stmt->bindParam(':kubikasi', $kubikasi);
        $stmt->bindParam(':tahun_perakitan', $tahun_perakitan);
        $stmt->execute();
		return $stmt;
	}

	public function fetch($var)
	{
		$stmt = $var->fetch();
		return $stmt;
	}

	// public function __destruct(){
	// }
}
?>

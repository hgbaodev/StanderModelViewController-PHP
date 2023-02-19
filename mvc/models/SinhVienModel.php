<?php
class SinhVienModel extends DB{
    public function GetSV(){
        //Connect db
        return "Nguyen Van Teo";
    }

    public function Tong($a, $b){
        return $a+$b;
    }

    public function SinhVien(){
        $qr = "Select * from sinhvien";
        return mysqli_query($this->con,$qr);
    }

}
?>
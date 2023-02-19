<?php
class ApiSinhVien extends Controller{
    function getAPIApp(){
        $sinhvien = $this->model("SinhVienModel");
        $result = $sinhvien->SinhVien();
        $rows = array();
        while($r = mysqli_fetch_assoc($result)){
            $rows[] = $r;
        }
        print json_encode($rows);
    }
}
?>
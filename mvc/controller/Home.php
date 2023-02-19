<?php
class Home extends Controller{

    function SayHi(){
        $svlist = $this->model("SinhVienModel");
        echo $svlist->GetSV();
    }

    function Show($a, $b){
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b);
        $this->view("AoDep", [
            "Page" => "news",
            "Number" => $tong,
            "Color" => "Red",
            "SoThich" => ["A","B","C"],
            "SV" => $teo->SinhVien()
        ]);
        
    }

    function XuLy(){
        echo "Hoang Gia Bao";
    }


}
?>
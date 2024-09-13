<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
        <?php
            echo "<h2>Selamat datang di Praktikum PWI</h2><br />";
            echo "Hari ini parktikum : \"Sintaks Dasar PHP\"";
        
        //contoh fungsi yang tidak mengembalikan nilai (disebut juga prosedur)
        function print_mhs($nama,$nim,$prodi){
        echo 'Nama: '.$nama.'<br />';
        echo 'NIM: '.$nim.'<br />';
        echo 'Prodi: '.$prodi.'<br />';
        }
        print_mhs('Alfa','123456123','Ilmu Komputer/ Informatika');

        //menghitung harga setelah diskon
        //parameter input: harga dan diskon
        function hitung_diskon($harga,$diskon){
        $harga = $harga - ($harga*$diskon/100);
        return $harga;
        }
        //contoh pemanggilan fungsi
        $harga = 10000;
        $diskon = 20;
        $harga_diskon = hitung_diskon($harga,$diskon);
        echo 'Harga sebelum diskon = '.$harga.'<br />';
        echo 'Harga setelah diskon = '.$harga_diskon.'<br />';

        //menghitung harga setelah diskon
        //parameter input: harga dan diskon (nilai default=10)
        function hitung_diskon2($harga,$diskon=10){
        $harga = $harga - ($harga*$diskon/100);
        return $harga;
        }
        //contoh pemanggilan fungsi
        $harga = 10000;
        $harga_diskon = hitung_diskon2($harga);
        echo 'Harga sebelum diskon = '.$harga.'<br />';
        echo 'Harga setelah diskon = '.$harga_diskon.'<br />';
        
        //menghitung harga setelah diskon
        //harga sebagai parameter input dan output
        function hitung_diskon3(&$harga,$diskon){
        $harga = $harga - ($harga*$diskon/100);
        return $harga;
        }
        //contoh pemanggilan fungsi
        $harga = 10000;
        $diskon = 20;
        echo 'Harga sebelum diskon = '.$harga.'<br />';
        hitung_diskon3($harga,$diskon);
        echo 'Harga setelah diskon = '.$harga.'<br />';
        
        function faktorial($n)
        {
        if($n == 0){
        return 1;
        }else{
        return $n * faktorial($n-1);
        }
        } 
        
        require_once("fungsi.php");
        //pemanggilan fungsi hitung_diskon
        $harga = 10000;
        $diskon = 20;
        $harga_diskon = hitung_diskon($harga,$diskon);
        echo 'Harga sebelum diskon = '.$harga.'<br />';
        echo 'Harga setelah diskon = '.$harga_diskon.'<br />';
        //pemanggilan fungsi faktorial
        print(faktorial(4));
        
        ?>
    </body>
</html>
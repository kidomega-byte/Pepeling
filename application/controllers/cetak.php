<?php 

/**
 * 
 */
class Cetak extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('cetak_pdf');
	}

	function index(){
		$pdf = new FPDF('L', 'mm','Letter');

        // $cellWidth=40; //lebar sel
        // $cellHeight=12; //tinggi sel satu baris normal

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DATA PENCEMARAN LINGKUNGAN',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,12,'No',1,0,'C');
        $pdf->Cell(25,12,'Id Pengaduan',1,0,'C');
        $pdf->Cell(50,12,'Nama Pelapor',1,0,'C');
        $pdf->Cell(35,12,'NIK',1,0,'C');
        $pdf->Cell(35,12,'Alamat',1,0,'C');
        $pdf->Cell(30,12,'No. Hp',1,0,'C');
        $pdf->Cell(40,12,'Isi Pengaduan',1,0,'C');
        $pdf->Cell(35,12,'Tanggal',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $pengaduan = $this->db->get('pengaduan')->result();
        $no=1;
        foreach ($pengaduan as $p){
            $pdf->Cell(8,12,$no++,1,0);
            $pdf->Cell(25,12,$p->id_pengaduan,1,0);
            $pdf->Cell(50,12,$p->nama_pengadu,1,0);
            $pdf->Cell(35,12,$p->nomor_identitas,1,0);
            $pdf->Cell(35,12,$p->alamat_pengadu,1,0);
            $pdf->Cell(30,12,$p->no_hp,1,0);
            $pdf->Cell(40,12,$p->isi_pengaduan,1,0);
            $pdf->Cell(35,12,$p->tanggal,1,1);
            
        }

        //periksa apakah teksnya melibihi kolom?
    // if($pdf->GetStringWidth($p->alamat_pengadu) < $cellWidth){
    //     //jika tidak, maka tidak melakukan apa-apa
    //     $line=1;
    // }else{
    //     //jika ya, maka hitung ketinggian yang dibutuhkan untuk sel akan dirapikan
    //     //dengan memisahkan teks agar sesuai dengan lebar sel
    //     //lalu hitung berapa banyak baris yang dibutuhkan agar teks pas dengan sel
        
    //     $textLength=strlen($p->alamat_pengadu);    //total panjang teks
    //     $errMargin=5;       //margin kesalahan lebar sel, untuk jaga-jaga
    //     $startChar=0;       //posisi awal karakter untuk setiap baris
    //     $maxChar=0;         //karakter maksimum dalam satu baris, yang akan ditambahkan nanti
    //     $textArray=array(); //untuk menampung data untuk setiap baris
    //     $tmpString="";      //untuk menampung teks untuk setiap baris (sementara)
        
    //     while($startChar < $textLength){ //perulangan sampai akhir teks
    //         //perulangan sampai karakter maksimum tercapai
    //         while( 
    //         $pdf->GetStringWidth( $tmpString ) < ($cellWidth-$errMargin) &&
    //         ($startChar+$maxChar) < $textLength ) {
    //             $maxChar++;
    //             $tmpString=substr($p->alamat_pengadu,$startChar,$maxChar);
    //         }
    //         //pindahkan ke baris berikutnya
    //         $startChar=$startChar+$maxChar;
    //         //kemudian tambahkan ke dalam array sehingga kita tahu berapa banyak baris yang dibutuhkan
    //         array_push($textArray,$tmpString);
    //         //reset variabel penampung
    //         $maxChar=0;
    //         $tmpString='';
            
    //     }
    //     //dapatkan jumlah baris
    //     $line=count($textArray);
    // }
        $pdf->Output();
	}

}

 ?>
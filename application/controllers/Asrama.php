<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Asrama extends CI_Controller {
    public function lihatkamar(){
		
		$this->output->enable_profiler(TRUE);
		$this->load->view('lihatkamar');
    }

    public function pengelompokan(){		
		$id_mahasiswa = $_SESSION['id_mahasiswa'];
		$tipe_kepribadian = $_SESSION['tipe_kepribadian'];
		$jenis_kelamin = $_SESSION['jenis_kelamin'];
        $this->load->model('kamar');
		$result_kamar = $this->kamar->get_datakamar();

		if(mysqli_num_rows($result_kamar) > 0){

			if ($jenis_kelamin=='Perempuan'){
                // $this->load->model('kamar');
    			$result_kamar_perempuan = $this->kamar->get_datakamarperempuan();

        		while($row_kamar_perempuan = mysqli_fetch_assoc($result_kamar_perempuan)){
					// $this->load->model('kamar');
              		$jml_cek=0;
              		$jml_kriteria=0;
					$id_kamar_perempuan = $row_kamar_perempuan['id_kamar'];
					

                    //GET DATA DARI TBISIKAMAR DIMANA KAMAR DI TBISIKAMAR = IDKAMAR YANG ADA DI TBKAMAR                    
					$result_isi_kamar = $this->kamar->get_datakamarperempuan_isikamar();
              		$jml_orang = mysqli_num_rows($result_isi_kamar);
              		$is_penghuni = mysqli_num_rows($result_isi_kamar);
                	if ($is_penghuni > 0 && $is_penghuni < 4){

                  		while($row_isi_kamar = mysqli_fetch_assoc($result_isi_kamar)){
							// $this->load->model('kamar');
                    		$id_kamar_isi_kamar = $row_isi_kamar['id_kamar'];
							$id_penghuni_isi_kamar = $row_isi_kamar['id_penghuni'];							

                            //QUERY LOOPING PENGHUNI
							$result_hasil_tes = $this->kamar->get_penghuniisikamar();
                    		$row_hasil_tes = mysqli_fetch_array($result_hasil_tes);
							$tipekepribadian_penghuni = $row_hasil_tes['tipe_kepribadian'];
							
							$result_cek = $this->kamar->cek_kriteria();

                    		while($row_cek = mysqli_fetch_array($result_cek)){
								$is_kriteria = $row_cek['is_cocok'];
                      			$jml_cek++;
					  			$jml_kriteria=$jml_kriteria+$is_kriteria;
					  
                      			//kalau kondisinya kriteria 0 dan udh gaada yg dicek
                      			if($jml_kriteria==0 && $jml_orang==$jml_cek){
                        			break 2;
                      			}else if($jml_kriteria==$jml_orang && $jml_orang==$jml_cek){
                                    // $this->load->model('kamar');
									$input = $this->kamar->input_penghuniperempuan();
                        			break 3; //EVALUASI
                    			}else{
                        			break ; //EVALUASI
                    			}
                  			} //end while kecocokan
                		} //end while cek jumlah penghuni
            		}
        			if($is_penghuni == 0 ){
                        // $this->load->model('kamar');
						$input = $this->kamar->input_penghuniperempuan();
                		break; //evaluasi aja
              		}else{
                   		continue;
                	}
        		}

			}else{
				// $this->load->model('kamar');
				$result_kamar_laki = $this->kamar->get_datakamarlakilaki();

      			while($row_kamar_laki = mysqli_fetch_assoc($result_kamar_laki)){
					// $this->load->model('kamar');
            		$jml_cek=0;
            		$jml_kriteria=0;
					$id_kamar_laki = $row_kamar_laki['id_kamar'];					

					//GET DATA DARI TBISIKAMAR DIMANA KAMAR DI TBISIKAMAR = IDKAMAR YANG ADA DI TBKAMAR
					$result_isi_kamar = $this->kamar->get_datakamarlaki_isikamar();
					$jml_orang = mysqli_num_rows($result_isi_kamar);
					$is_penghuni = mysqli_num_rows($result_isi_kamar);
					if ($is_penghuni > 0 && $is_penghuni < 4){

                		while($row_isi_kamar = mysqli_fetch_assoc($result_isi_kamar)){
							// $this->load->model('kamar');

							$id_kamar_isi_kamar = $row_isi_kamar['id_kamar'];
							$id_penghuni_isi_kamar = $row_isi_kamar['id_penghuni'];							

							//QUERY LOOPING PENGHUNI
							$result_hasil_tes = $this->kamar->get_penghuniisikamar();
							$row_hasil_tes = mysqli_fetch_array($result_hasil_tes);
							$tipekepribadian_penghuni = $row_hasil_tes['tipe_kepribadian'];

							$result_cek = $this->kamar->cek_kriteria();

                  			while($row_cek = mysqli_fetch_array($result_cek)){
								$is_kriteria = $row_cek['is_cocok'];
								$jml_cek++;
								$jml_kriteria=$jml_kriteria+$is_kriteria;

								//kalau kondisinya kriteria 0 dan udh gaada yg dicek
								if($jml_kriteria==0 && $jml_orang==$jml_cek){
                      				break 2;
                    			}else if($jml_kriteria==$jml_orang && $jml_orang==$jml_cek){
									// $this->load->model('kamar');
									$input = $this->kamar->input_penghunilaki();
									break 3; //EVALUASI
                    			}else{                      
                      				break ; //EVALUASI
                    			}
                			} //end while kecocokan
              			} //end while cek jumlah penghuni
            		}
					if($is_penghuni == 0 ){
						// $this->load->model('kamar');
						$input = $this->kamar->input_penghunilaki();
						break; //evaluasi aja
            		}else{
                 		continue;
              		}
          		}
        	}
		}else{
  			echo "0 results";
		}

		redirect('asrama/lihatkamar');	
    }
}

?>
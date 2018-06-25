<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Asrama extends CI_Controller {
    public function lihatkamar(){
		
		$this->output->enable_profiler(TRUE);
		$this->load->model('kamar');

		$data['tbkamar'] = $this->kamar->lihatkamar()->result();
		$data['tbisikamar'] = $this->kamar->lihat_isikamar()->result();
		
		$this->load->view('lihatkamar', $data);
    }

    public function pengelompokan(){		
		$id_mahasiswa = $_SESSION['id_mahasiswa'];
		$tipe_kepribadian = $_SESSION['tipe_kepribadian'];
		$jenis_kelamin = $_SESSION['jenis_kelamin'];
        $this->load->model('kamar');
		$result_kamar = $this->kamar->get_datakamar();

		if($result_kamar->num_rows() > 0 ){

			if ($jenis_kelamin=='Perempuan'){
    			$result_kamar_perempuan = $this->kamar->get_datakamarperempuan();
        		foreach($result_kamar_perempuan->result_array() as $row_kamar_perempuan){
              		$jml_cek=0;
              		$jml_kriteria=0;
					$id_kamar_perempuan = $row_kamar_perempuan['id_kamar'];		

					$result_isi_kamar = $this->kamar->get_datakamarperempuan_isikamar($id_kamar_perempuan);
              		$jml_orang = $result_isi_kamar->num_rows();
              		$is_penghuni = $result_isi_kamar->num_rows();
                	if ($is_penghuni > 0 && $is_penghuni < 4){
                  		foreach($result_isi_kamar->result_array() as $row_isi_kamar){
                    		$id_kamar_isi_kamar = $row_isi_kamar['id_kamar'];
							$id_penghuni_isi_kamar = $row_isi_kamar['id_penghuni'];							

                            //QUERY LOOPING PENGHUNI
							$result_hasil_tes = $this->kamar->get_penghuniisikamar($id_penghuni_isi_kamar);
							$row_hasil_tes = $result_hasil_tes->result();
							$tipekepribadian_penghuni = $row_hasil_tes['tipe_kepribadian'];
							
							$result_cek = $this->kamar->cek_kriteria($tipekepribadian_penghuni);

                    		foreach($result_cek->result_array() as $row_cek){
								$is_kriteria = $row_cek['is_cocok'];
                      			$jml_cek++;
					  			$jml_kriteria=$jml_kriteria+$is_kriteria;
					  
                      			if($jml_kriteria==0 && $jml_orang==$jml_cek){
                        			break 2;
                      			}else if($jml_kriteria==$jml_orang && $jml_orang==$jml_cek){
									$input = $this->kamar->input_penghuniperempuan($id_kamar_perempuan);
                        			break 3; //EVALUASI
                    			}else{
                        			break ; //EVALUASI
                    			}
                  			} //end while kecocokan
                		} //end while cek jumlah penghuni
            		}
        			if($is_penghuni == 0 ){
						$input = $this->kamar->input_penghuniperempuan($id_kamar_perempuan);
                		break; //evaluasi aja
              		}else{
                   		continue;
                	}
				}
				

			}else{
				$result_kamar_laki = $this->kamar->get_datakamarlakilaki();

				foreach($result_kamar_laki->result_array() as $row_kamar_laki){
            		$jml_cek=0;
            		$jml_kriteria=0;
					$id_kamar_laki = $row_kamar_laki['id_kamar'];				

					$result_isi_kamar = $this->kamar->get_datakamarlaki_isikamar($id_kamar_laki);
					$jml_orang = $result_isi_kamar->num_rows();
              		$is_penghuni = $result_isi_kamar->num_rows();
					if ($is_penghuni > 0 && $is_penghuni < 4){

                		foreach($result_isi_kamar->result_array() as $row_isi_kamar){
							$id_kamar_isi_kamar = $row_isi_kamar['id_kamar'];
							$id_penghuni_isi_kamar = $row_isi_kamar['id_penghuni'];							

							$result_hasil_tes = $this->kamar->get_penghuniisikamar($id_penghuni_isi_kamar);
							$row_hasil_tes = $result_hasil_tes->result();
							$tipekepribadian_penghuni = $row_hasil_tes['tipe_kepribadian'];

							$result_cek = $this->kamar->cek_kriteria($tipekepribadian_penghuni);

							foreach($result_cek->result_array() as $row_cek){
								$is_kriteria = $row_cek['is_cocok'];
								$jml_cek++;
								$jml_kriteria=$jml_kriteria+$is_kriteria;

								//kalau kondisinya kriteria 0 dan udh gaada yg dicek
								if($jml_kriteria==0 && $jml_orang==$jml_cek){
                      				break 2;
                    			}else if($jml_kriteria==$jml_orang && $jml_orang==$jml_cek){
									$input = $this->kamar->input_penghunilaki($id_kamar_laki);
									break 3; //EVALUASI
                    			}else{                      
                      				break ; //EVALUASI
                    			}
                			} //end while kecocokan
              			} //end while cek jumlah penghuni
            		}
					if($is_penghuni == 0 ){
						$input = $this->kamar->input_penghunilaki($id_kamar_laki);
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
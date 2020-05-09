<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
        
    }
    public function v_siswa()
    {
        // $data['details'] = $this->Model->details_siswa();

        $data['tb_siswa'] = $this->Model->tampil_siswa();
        
        $this->load->view('admin/header');
        $this->load->view('admin/v_siswa',$data);
        $this->load->view('admin/footer');
    }
    public function tambah_siswa()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/v_tambah_siswa');
        $this->load->view('admin/footer');
    }
       // tambah kan fungsi upload  untuk semua
       public function upload($name)
       {
           $config['upload_path'] = './assets/images/'; //path folder
           $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
           $config['encrypt_name'] = true; //nama yang terupload nantinya
		   $this->load->library('upload', $config);
           if (!empty($_FILES[$name]['name'])) {
               if ($this->upload->do_upload($name)) {
                   $gbr = $this->upload->data();
                   // Compress Image
                   $config['image_library'] = 'gd2';
                   $config['source_image'] = './assets/images/' . $gbr['file_name'];
                   $config['create_thumb'] = false;
                   $config['maintain_ratio'] = false;
                   $config['quality'] = '60%';
                   $config['width'] = 710;
                   $config['height'] = 420;
                   $config['new_image'] = './assets/images/' . $gbr['file_name'];
                   $this->load->library('image_lib', $config);
                   $this->image_lib->resize();
                   $response['data'] = $gbr['file_name'];
                   $response['status'] = 'success';
                   return $response;
               } else {
                   $response['status'] = 'error';
                   return $response;
                   // redirect('c_admin/V_berita');
               }
   
           } else {
               return $response['status'] = 'image not found';
           }
	   }

    public function save_siswa()
    {
        // input nik tidak boleh sama
        $nik = $this->input->post('nik');
        $sql = $this->db->query("select nik from tb_siswa where nik='$nik'");
        $cek_nik = $sql->num_rows();
        if ($cek_nik > 0 ) {
            $this->session->set_flashdata('error', 'data nik sudah ada');
            
            redirect('c_admin/tambah_siswa');
        }
        

        $agama =  $this->input->post('agama');
        if ($agama == '0')
        {
            $this->session->set_flashdata('error', 'Anda belum memilih agama');
            redirect('c_admin/tambah_siswa');
        }
        $image = $this->upload('image');
        if ($image['status'] == 'success'){
            $data = array(
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'agama' => $this->input->post('agama'),
                'image' => $image['data'],
                'tanggal' => date('d-m-Y H:i:s'),
                );
                $this->Model->save_siswa($data);
                $this->session->set_flashdata('success', 'data success in save');
   
                redirect('c_admin/v_siswa');
            }else {
                $this->session->set_flashdata('error', 'Foto yang anda upload tidak sesuai kriteria sisten');
                redirect('c_admin/tambah_siswa');
            }
             
    }

    public function delete_siswa($id)
    {
        $this->Model->delete_siswa($id);
        $this->session->set_flashdata('danger', 'resident data successfully deleted');
        
        redirect('c_admin/v_siswa');
    }
    public function edit_siswa($id)
    {
        $data ['edit'] = $this->Model->edit_siswa($id);
        
        $this->load->view('admin/header');
        $this->load->view('admin/v_edit_siswa',$data);
        $this->load->view('admin/footer');
        // print_r($data);
    }

    public function update_siswa($id)
    {
        $image = $this->upload('image');
        if ($image['status'] =='success') {
            $data = array(
                'nik' =>$this->input->post('nik'),
                'nama' =>$this->input->post('nama'),
                'tgl_lahir' =>$this->input->post('tgl_lahir'),
                'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
                'alamat' =>$this->input->post('alamat'),
                'no_hp' =>$this->input->post('no_hp'),
                'agama' =>$this->input->post('agama'),
                'image' => $image['data'],
                  );

                  $this->Model->update_siswa($id,$data);
                  $this->session->set_flashdata('success', 'Data success Update');
                  redirect('c_admin/v_siswa');
                  
          
        }else {
            $data = array(
                'nik' =>$this->input->post('nik'),
                'nama' =>$this->input->post('nama'),
                'tgl_lahir' =>$this->input->post('nik'),
                'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
                'alamat' =>$this->input->post('alamat'),
                'no_hp' =>$this->input->post('no_hp'),
                'agama' =>$this->input->post('agama'),
                // 'image' => $image['data'],
                  );
                  $this->Model->update_siswa($id,$data);
                  $this->session->set_flashdata('error', 'Data success Update');
                  redirect('c_admin/v_siswa');
            
        }
    }

    public function details_siswa($id)
    {
        $data['details'] = $this->Model->details_siswa($id);
        
        $this->load->view('admin/header');
        $this->load->view('admin/details_siswa',$data);
        $this->load->view('admin/footer');
        
    }
        
    public function v_guru()
    {
        $data['tb_guru'] = $this->Model->tampil_guru();
        
        $this->load->view('admin/header');
        $this->load->view('admin/v_guru',$data);
        $this->load->view('admin/footer');
    }

    public function V_tambah_guru()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/v_tambah_guru');
        $this->load->view('admin/footer');
    }

    public function save_guru()
    {
        $pendidikan = $this->input->post('pendidikan');
       if ($pendidikan == '0') {
        $this->session->set_flashdata('error', 'pendidikan wajib di isi');
        
        redirect('c_admin/v_tambah_guru');
       } 
       $image = $this->upload('image');
       if ($image['status'] =='success')
        {
          $data = array(
              'nip' => $this->input->post('nip'),
              'nama' => $this->input->post('nama'),
              'tgl_lahir' => $this->input->post('tgl_lahir'),
              'pangkat' => $this->input->post('pangkat'),
              'pendidikan' => $this->input->post('pendidikan'),
              'jabatan' => $this->input->post('jabatan'),
              'alamat' => $this->input->post('alamat'),
              'no_hp' => $this->input->post('no_hp'),
              'email' => $this->input->post('email'),
              'image' => $image['data'],
          );
          $this->Model->save_guru($data);
          $this->session->set_flashdata('success', 'data berhasil save');
          
          redirect('c_admin/v_guru');
          
       }else {
        $this->session->set_flashdata('error', 'Foto yang anda upload tidak sesuai kriteria sisten');
        redirect('c_admin/v_tambah_guru');
    }
       

        
    }
    public function delete_guru($id)
    {
        $this->Model->delete_guru($id);
        $this->session->set_flashdata('danger', 'resident data successfully deleted');
        
        redirect('c_admin/v_guru');        
        
    }


}

?>

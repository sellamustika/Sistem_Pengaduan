<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("member_model");
        $this->load->library('form_validation');
        // $this->load->library('excel');
         // $this->load->library('excel');
    }
        public function index(){
            $data ["member"] = $this->member_model->getData();
           
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('member',$data);
        }

        public function member()
        {
            //$data["products"] = $this->coba_model->getAll();
            
            $data ["member"] = $this->member_model->getData();
           
            $this->load->view('member');
        }

         public function create(){
            $data ["customer"] = $this->form_model->getData();
            $data ["cabang"] = $this->form_model->getCabang();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

        public function fetchBrandDataById($id)
        {
                if($id) {
                    $data = $this->form_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
        }

        public function add()
    {
        $form = $this->form_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["customer"] = $this->form_model->getData();
            $data ["cabang"] = $this->form_model->getCabang();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
             $this->session->set_flashdata('error', 'Successfully created');
                redirect('form', 'refresh');
            $this->load->view("form",$data);
    }

    //      function edit()
    // {

    //     $id=  $this->input->post('id');
    //     $id_user=  $this->input->post('id_user');
    //     $pid=  $this->input->post('pid');
    //     $id_cabang=  $this->input->post('id_cabang');
    //     $nama=  $this->input->post('nama');
    //     $status=  $this->input->post('status');
    //     $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
    //     $tgl_terima=  $this->input->post('tgl_terima');
    //     $anold=  $this->input->post('anold');
    //     $pjold=  $this->input->post('pjold');
    //     $svold=  $this->input->post('svold');
    //     // $tgl_update=  $this->input->post('tgl_update');

    //     $an = $_FILES['an']['name'];
    //     $pj = $_FILES['pj']['name'];
    //     $sv = $_FILES['sv']['name'];



    //     $this->load->library('upload', $config);


    //     if (!empty($an)) {
    //         $config['upload_path'] = 'assets/dokumen/an';
    //         $config['allowed_types'] = 'pdf';
    //         $config['file_ext_tolower'] = TRUE;
    //         $config['max_size'] = '1024';
    //         $config['overwrite'] = TRUE;
    //         $x = explode(".", $an);
    //         $ext = strtolower(end($x));
    //         $config['file_name'] = time()."-".$an;
    //         $an = $config['file_name'];
    //         $this->upload->initialize($config);
    //         $this->upload->do_upload('an');
    //     }

    //     if (empty($an)) {
    //         $an = $anold;
    //     }

    //     if (!empty($pj)) {
    //         $config['upload_path'] = 'assets/dokumen/pj';
    //         $config['allowed_types'] = 'pdf';
    //         $config['file_ext_tolower'] = TRUE;
    //         $config['max_size'] = '2048';
    //         $config['overwrite'] = TRUE;
    //         $x = explode(".", $pj);
    //         $ext = strtolower(end($x));
    //         $config['file_name'] = time()."-".$pj;
    //         $pj = $config['file_name'];
    //         $this->upload->initialize($config);
    //         $this->upload->do_upload('pj');
    //     }
        
    //     if (empty($pj)) {
    //         $pj = $pjold;
    //     }

    //     if (!empty($sv)) {
    //         $config['upload_path'] = 'assets/dokumen/sv';
    //         $config['allowed_types'] = 'pdf';
    //         $config['file_ext_tolower'] = TRUE;
    //         $config['max_size'] = '2048';
    //         $config['overwrite'] = TRUE;
    //         $x = explode(".", $sv);
    //         $ext = strtolower(end($x));
    //         $config['file_name'] = time()."-".$sv;
    //         $sv = $config['file_name'];
    //         $this->upload->initialize($config);
    //         $this->upload->do_upload('sv');
    //     }

    //     if (empty($sv)) {
    //         $sv = $svold;
    //     }

    //     $this->form_model->edit($id,$id_user,$pid,$id_cabang,$nama,$status,$tgl_aplikasi,$tgl_terima,$an,$pj,$sv,$tgl_update);
    //     redirect('form');
    // }

         public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->member_model->delete($id)) {
             $this->session->set_flashdata('delete', 'your data was deleted');
            redirect(site_url('member/'));
        }
    }

         
     
  


}



        // importcsv

        // function fetch()
        // {
        //     $data = $this->form_model->select();
        //     $output = '
        //     <table class="table table-striped table-bordered">
        //         <tr>
        //             <th>Nama</th>
        //             <th>Cabang</th>
        //             <th>Status</th>
        //             <th>Tanggal Apliaksi</th>
        //             <th>Tanggal Terima</th>
        //         </tr>


        //     ';
        //     foreach ($data->result() as $row)
        //      {
        //         $output .= '
        //         <tr>
        //             <td>'.$row->nama.'</td>
        //             <td>'.$row->cabang.'</td>
        //             <td>'.$row->status.'</td>
        //             <td>'.$row->tgl_aplikasi.'</td>
        //             <td>'.$row->tgl_terima.'</td>
        //         </tr>
        //         ';
        //     }
        //     $output .='</table>';
        //     echo $output;
        // }

        // function import()
        // {
        //     if(isset($_FILES["file"]["name"]))
        //     {
        //         $path = $_FILES["file"]["name"];
        //         $object = PHPExcel_IOFactory::load($path);
        //         foreach ($object->getWorksheetIterator() as $worksheet)
        //          {
        //             $highestRow = $worksheet->getHighestRow();
        //             $highestColumn = $worksheet->getHighestColumn();
        //             for($row=2; $row<=$highestRow; $row++)
        //             {
        //                 $nama = $worksheet->
        //                 getCellByColumnAndRow(0, $row)->
        //                 getValue();
        //                 $cabang = $worksheet->
        //                 getCellByColumnAndRow(1, $row)->
        //                 getValue();
        //                 $status = $worksheet->
        //                 getCellByColumnAndRow(2, $row)->
        //                 getValue();
        //                 $tgl_aplikasi = $worksheet->
        //                 getCellByColumnAndRow(3, $row)->
        //                 getValue();
        //                 $tgl_terima = $worksheet->
        //                 getCellByColumnAndRow(4, $row)->
        //                 getValue();
        //                 $data[] = array(
        //                     'nama'          => $nama,
        //                     'cabang'        => $cabang,
        //                     'status'        => $status,
        //                     'tgl_aplikasi'  => $tgl_aplikasi,
        //                     'tgl_terima'    => $tgl_terima

        //                 );
        //             }
        //         }
        //         $this->form_model->insert($data);

        //         echo 'Data Imported successfully';
        //     }
        // }

    
     
    //  public function update()
    // {
    //   if (!isset($id)) redirect('form/'.$data->id);
       
    //     $form = $this->form_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($form->rules());

    //     $form = $this->form_model;

    //     $data["form"] = $form->getById($id);
    //     if (!$data["form"]) show_404();

    //     if ($validation->run()) {
    //         $form->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //         redirect(site_url('form'.$data->id));
    //     }

    //     $data["form"] = $form->getById($id);
    //     if (!$data["form"]) show_404();
        
    //     $this->load->view("form", $data);
    // }
    // public function edit0($id = null)
    // {
    //     if (!isset($id)) redirect('form/');
       
    //     $form = $this->form_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($form->rules());

    //     if ($validation->run()) {
    //         $form->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["form"] = $form->getById($id);
    //     if (!$data["form"]) show_404();
        
    //     $this->load->view("form", $data);
    // }

    



    // function edit(){

    //     $id=  $this->input->post('id');
    //     $id_user=  $this->input->post('id_user');
    //     $pid=  $this->input->post('pid');
    //     $id_cabang=  $this->input->post('id_cabang');
    //     $nama=  $this->input->post('nama');
    //     $status=  $this->input->post('status');
    //     $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
    //     $tgl_terima=  $this->input->post('tgl_terima');
    //     $an=  $this->input->post('anold');
    //     $pj=  $this->input->post('pjold');
    //     $sv=  $this->input->post('svold');
    //     $tgl_input=  $this->input->post('tgl_input');

    //     $an = $_FILES['an']['name'];
    //     $pj = $_FILES['pj']['name'];
    //     $sv = $_FILES['sv']['name'];

    //       $this->load->library('upload', $config);

    //       if (!empty($an)) {
    //         $config['upload_path'] = 'assets/dokumen/an';
    //         $config['allowed_types'] = 'pdf';
    //         $config['file_ext_tolower'] = TRUE;
    //         $config['max_size'] = '1024';
    //         $config['overwrite'] = TRUE;
    //         $x = explode(".", $an);
    //         $ext = strtolower(end($x));
    //         $config['file_name'] = time()."-".$an;
    //         $an = $config['file_name'];
    //         $this->upload->initialize($config);
    //         $this->upload->do_upload('an');

    //       }


    //       if (empty($an)) {
    //         $an = $anold;
    //       }
    //             if (!empty($pj)) {
    //         $config['upload_path'] = 'assets/dokumen/pj';
    //         $config['allowed_types'] = 'pdf';
    //         $config['file_ext_tolower'] = TRUE;
    //         $config['max_size'] = '1024';
    //         $config['overwrite'] = TRUE;
    //         $x = explode(".", $pj);
    //         $ext = strtolower(end($x));
    //         $config['file_name'] = time()."-".$pj;
    //         $pj = $config['file_name'];
    //         $this->upload->initialize($config);
    //         $this->upload->do_upload('pj');

    //       }
    //       if (empty($pj)) {
    //         $pj = $pjold;
    //       }
    //             if (!empty($sv)) {
    //         $config['upload_path'] = 'assets/dokumen/sv';
    //         $config['allowed_types'] = 'pdf';
    //         $config['file_ext_tolower'] = TRUE;
    //         $config['max_size'] = '1024';
    //         $config['overwrite'] = TRUE;
    //         $x = explode(".", $sv);
    //         $ext = strtolower(end($x));
    //         $config['file_name'] = time()."-".$sv;
    //         $sv = $config['file_name'];
    //         $this->upload->initialize($config);
    //         $this->upload->do_upload('sv');

    //       }

    //       if (empty($sv)) {
    //         $sv = $svold;
    //       }

    //       $this->form_model->edit($id,$id_user,$pid,$id_cabang,$nama,$status,$tgl_aplikasi,$tgl_terima,$an,$pj,$sv,$tgl_input);
    //     redirect('form');
    //     }
       

       
       

      

        // $file_name = "an";
        // $file_name1 = "pj";
        // $file_name2 = "sv";
        

        // $this->upload->do_upload($file_name);
        // $this->upload->do_upload($file_name1);
        // $this->upload->do_upload($file_name2);
        

        
    


    //  function edit(){

    //     $id=  $this->input->post('id');
    //     $id_user=  $this->input->post('id_user');
    //     $pid=  $this->input->post('pid');
    //     $id_cabang=  $this->input->post('id_cabang');
    //     $nama=  $this->input->post('nama');
    //     $status=  $this->input->post('status');
    //     $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
    //     $tgl_terima=  $this->input->post('tgl_terima');
    //     $an=  $this->input->post('an');
    //     $pj=  $this->input->post('pj');
    //     $sv=  $this->input->post('sv');
    //     $tgl_input=  $this->input->post('tgl_input');

    //     $this->form_model->edit($id,$id_user,$pid,$id_cabang,$nama,$status,$tgl_aplikasi,$tgl_terima,$an,$pj,$sv,$tgl_input);
    //     redirect('form');
    // }

   
    



 //    public function remove()
    // {
    //  // if(!in_array('deleteCategory', $this->permission)) {
    //  //  redirect('dashboard', 'refresh');
    //  // }
        
    //  $id = $this->input->post('id');

    //  $response = array();
    //  if($id) {
    //      $delete = $this->form_model->remove($id);
    //      if($delete == true) {
    //          $response['success'] = true;
    //          $response['messages'] = "Successfully removed"; 
    //      }
    //      else {
    //          $response['success'] = false;
    //          $response['messages'] = "Error in the database while removing the brand information";
    //      }
    //  }
    //  else {
    //      $response['success'] = false;
    //      $response['messages'] = "Refersh the page again!!";
    //  }

    //  echo json_encode($response);
    // }


   


// class Form extends CI_Controller{
        // public function __construct(){
        //          parent::__construct();
        //          $this->load->model("coba_model");
        //          $this->load->library('form_validation');
        //      }
        // public function index(){
        //  $this->load->view('form');
        // }

        // public function form()
        // {
        //  //$data["products"] = $this->coba_model->getAll();
        //  $this->load->view('form');
        // }
  //   }

//       public function add()
//      {
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->save();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $this->load->view("product/new_form");
//           }

//           public function edit($id = null)
//     {
//         if (!isset($id)) redirect('products');
       
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->update();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $data["product"] = $product->getById($id);
//         if (!$data["product"]) show_404();
        
//         $this->load->view("product/edit_form", $data);
//     }

//     public function delete($id=null)
//     {
//     if (!isset($id)) show_404();
        
//     if ($this->coba_model->delete($id)) {
//         redirect(site_url('coba/mhs'));
//         }
//     }

// }

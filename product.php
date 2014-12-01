<?php
class Product_controller extends CI_Controller
{
    public function index()
    {
        echo "<h1>product details</h1>";
        $this->load->model('product_model');
        $data['product_id'] = $this->product_model();
        $this->load->view("product_view",$data);
    }

        if($this->input->post('submit'))
        {
            $this->product_model->save();
        }
        //$this->load->view("product_view");
    }
}
?>

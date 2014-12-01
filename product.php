<?php
class Product_controller extends CI_Controller
{
    public function index()
    {
        echo "<h1>product details</h1>";
        $this->load->model('product_model');
        $data['product_id'] = $this->product_model->getProduct_id();
        $this->load->view("product_view",$data);
    }
//        function save()
//    {
//        $this->load->helper('form');
//        $this->load->helper('html');
//        $this->load->model('product_model');

        if($this->input->post('submit'))
        {
            $this->product_model->save();
        }
        //$this->load->view("product_view");
    }
}
?>

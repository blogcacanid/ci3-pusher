<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('M_product'=>'product'));
    }

    function index(){
        $this->load->view('v_product');
    }

    function get_product(){
        $data = $this->product->get_product()->result();
        echo json_encode($data);
    }

    function create(){
        $product_name = $this->input->post('product_name',TRUE);
        $product_price = $this->input->post('product_price',TRUE);
        $this->product->insert_product($product_name,$product_price);

        require_once(APPPATH.'views/vendor/autoload.php');
        $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
                'e126c9ce0f203ba42efe', //ganti dengan key pusher Anda
                'a1ad0f755a45b7dee759', //ganti dengan secret pusher Anda
                '883964', //ganti dengan app_id pusher Anda
                $options
        );

        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }

    function update(){
        $product_id = $this->input->post('product_id',TRUE);
        $product_name = $this->input->post('product_name',TRUE);
        $product_price = $this->input->post('product_price',TRUE);
        $this->product->update_product($product_id,$product_name,$product_price);

        require_once(APPPATH.'views/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'e126c9ce0f203ba42efe', //ganti dengan key pusher Anda
            'a1ad0f755a45b7dee759', //ganti dengan secret pusher Anda
            '883964', //ganti dengan app_id pusher Anda
            $options
        );

        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }

    function delete(){
        $product_id = $this->input->post('product_id',TRUE);
        $this->product->delete_product($product_id);

        require_once(APPPATH.'views/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'e126c9ce0f203ba42efe', //ganti dengan key pusher Anda
            'a1ad0f755a45b7dee759', //ganti dengan secret pusher Anda
            '883964', //ganti dengan app_id pusher Anda
            $options
        );

        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
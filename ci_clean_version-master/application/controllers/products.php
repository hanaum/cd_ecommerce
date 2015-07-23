<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Product');
    $this->load->model('Order');
    //$this->output->enable_profiler();

  }

  public function index()
  {
    // main page with search and stuff
    $categories=$this->Product->get_categories();
    // $images=$this->Product->get_all_main_images();
    $carosel=$this->Product->get_carosel_images();
    $cartCount = $this->session->userdata('cart');
    $products=$this->Product->getall_products();
    $this->load->view('products/mainpage', array(/*'images'=>$images,*/ 'carosel'=>$carosel, 'products'=>$products, 'categories' => $categories, 'cart' => $cartCount));
  }
  public function show($p_id)
  {
    $product = $this->Product->getproduct_byid($p_id);
    $main_pic = $this->Product->getmain_image($p_id);
    $other_pics = array('product' => $p_id, 'main_photo_id' => $main_pic['id']);
    $pics = $this->Product->getother_images($other_pics);
    $cartcount = $this->session->userdata('cart');
    $this->load->view("products/show", array("product" => $product, "main_img" => $main_pic, "images" => $pics, 'cart' => $cartcount));
    //$this->load->view("");
    // details page for an individual product
    // $info = $this->Product->show($id);
    // $this->load->view('products/show', $info);
  }

  public function show_partial_products() {
    $products = $this->Order->sold_products();
    $this->load->view("partials/admin_products", array("product_info" => $products));
  }
  public function mainpage_products_json_price()
  {
    $products=$this->Product->get_all_main_images_with_price();
    echo json_encode($products);
  }
public function mainpage_products_json_popularity()
  {
    $products=$this->Product->getproducts_bypopularity();
    echo json_encode($products);
  }
  public function show_admin_products() {
    $categories=$this->Product->get_categories();
    $cart = $this->session->userdata("cart");
    $this->load->view("products/products", array("cart" => $cart, 'categories'=>$categories));
  }


  public function add($id)
  {

  }

  public function delete($p_id)
  {
    // removes a product
  }

  public function update($p_id)
  {
    // updates a product
  }

  public function add_review($p_id)
  {

  }

  public function delete_review($p_id)
  {

  }

  public function update_review($p_id)
  {

  }

  public function show_reviews($p_id)
  {

  }
}


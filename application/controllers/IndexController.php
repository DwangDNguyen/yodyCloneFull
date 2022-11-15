<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IndexController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('IndexModel');
        $this->load->library('cart');

        $this->load->helper('url');
        $this->data['category'] = $this->IndexModel->getCategoryHome();
        $this->data['main_category'] = $this->IndexModel->getMainCategory();
        $this->data['title_category'] = $this->IndexModel->getTitleCategory();
        $this->data['categoryNam'] = $this->IndexModel->getCategoryNam();
        $slug = $this->input->post('cate_slug');
        $this->session->set_flashdata('slug_name', $slug);

    }
    public function index()
    {
        $this->data['allProducts'] = $this->IndexModel->getAllProductsHome();
        $this->data['allColors'] = $this->IndexModel->getAllColors();
        $this->data['allListProducts'] = $this->IndexModel->getAllProducts();

        $this->load->view('../views/components/header/headerHome.php', $this->data);
        $this->load->view('../views/pages/home.php', $this->data);
        $this->load->view('../views/components/footer/footerHome.php');
    }
    public function allProducts()
    {
        $this->data['allProducts'] = $this->IndexModel->getAllProducts();
        $this->data['allColors'] = $this->IndexModel->getAllColors();

        $config = array();
        $config["base_url"] = base_url() . '/listAllProducts';
        $config['total_rows'] = ceil($this->IndexModel->countAllProduct()); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang
        $config["per_page"] = 10; //từng trang 12 sản phẩn
        $config["uri_segment"] = 2; //lấy số trang hiện tại
        $config['use_page_numbers'] = true; //trang có số
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="pagination_active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        //end custom config link
        $this->pagination->initialize($config); //tự động tạo trang

        $this->page = ($this->uri->segment(2)) ? ($this->uri->segment(2) - 1) * $config['per_page'] : 0; //current page active
        $this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
        $this->data['allproduct_pagination'] = $this->IndexModel->getIndexPagination($config["per_page"], $this->page);
        //pagination

        $this->load->view('../views/components/header/headerListAllProducts.php', $this->data);
        $this->load->view('../views/pages/listAllProducts.php', $this->data);
        $this->load->view('../views/components/footer/footerHome.php', $this->data);
    }
    public function allSaleProducts()
    {
        // $this->data['allProducts'] = $this->IndexModel->getAllProducts();
        $this->data['allColors'] = $this->IndexModel->getAllColors();

        $config = array();
        $config["base_url"] = base_url() . '/allSaleProducts';
        $config['total_rows'] = ceil($this->IndexModel->countAllProductSale()); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang
        $config["per_page"] = 8; //từng trang 12 sản phẩn
        $config["uri_segment"] = 2; //lấy số trang hiện tại
        $config['use_page_numbers'] = true; //trang có số
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="pagination_active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        //end custom config link
        $this->pagination->initialize($config); //tự động tạo trang

        $this->page = ($this->uri->segment(2)) ? ($this->uri->segment(2) - 1) * $config['per_page'] : 0; //current page active
        $this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
        $this->data['allproductsale_pagination'] = $this->IndexModel->getSalePagination($config["per_page"], $this->page);
        //pagination

        $this->load->view('../views/components/header/headerListAllProducts.php', $this->data);
        $this->load->view('../views/pages/listSaleProducts.php', $this->data);
        $this->load->view('../views/components/footer/footerHome.php', $this->data);
    }
    public function category($id)
    {
        $this->data['categoryName'] = $this->IndexModel->getNameCategory($id);
        $this->data['categoryCharacteristics'] = $this->IndexModel->getCharacteristicsCategory($id);
        $this->data['categoryTitle'] = $this->IndexModel->getTitleNameCategory($id);
        $this->data['categoryMain'] = $this->IndexModel->getMainNameCategory($id);

        $this->data['allProducts'] = $this->IndexModel->getAllProducts();
        $this->data['allColors'] = $this->IndexModel->getAllColors();
        $this->data['allColorsCate'] = $this->IndexModel->getColorsCate();
        $this->data['allSizesCate'] = $this->IndexModel->getAllSizesCate();

        $this->data['slug'] = $this->IndexModel->getCategorySlug($id);

        //custom config link
        // $config = array();
        // $config["base_url"] = base_url() . '/category' . '/' . $id;
        // // $config["base_url"] = '#';
        // $config['total_rows'] = ceil($this->IndexModel->countAllProductByCate($id)); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang
        // $config["per_page"] = 4; //từng trang 12 sản phẩn
        // $config["uri_segment"] = 3; //lấy số trang hiện tại
        // $config['use_page_numbers'] = true; //trang có số
        // $config['full_tag_open'] = '<ul class="pagination">';
        // $config['full_tag_close'] = '</ul>';
        // $config['first_link'] = false;
        // $config['last_link'] = false;
        // $config['last_tag_open'] = '<li>';
        // $config['last_tag_close'] = '</li>';
        // $config['cur_tag_open'] = '<li class="pagination_active"><a>';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['num_tag_open'] = '<li>';
        // $config['num_tag_close'] = '</li>';
        // $config['next_tag_open'] = '<li>';
        // $config['next_tag_close'] = '</li>';
        // $config['prev_tag_open'] = '<li>';
        // $config['prev_tag_close'] = '</li>';
        // //end custom config link
        // $this->pagination->initialize($config); //tự động tạo trang

        // $this->page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0; //current page active
        // $this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
        // $this->data['allproductByCate_pagination'] = $this->IndexModel->getCatePagination($id, $config["per_page"], $this->page);
        // //pagination

        $this->data['category_product'] = $this->IndexModel->getCategoryProduct($id);

        $this->config->config['pageTitle'] = $this->data['categoryName'];

        $this->load->view('../views/components/header/headerListProducts.php', $this->data);
        $this->load->view('../views/pages/listProducts.php', $this->data);
        $this->load->view('../views/components/footer/footerListProducts.php', $this->data);
    }
    public function listCategories()
    {
        $this->load->view('../views/components/header/headerlistCategoryRes.php', $this->data);
        $this->load->view('../views/pages/listCategoryRes.php', $this->data);
        $this->load->view('../views/components/footer/footerlistCategoryRes.php');
    }
    public function products($id)
    {
        $this->data['allProducts'] = $this->IndexModel->getAllProductsHome();
        $this->data['detailProduct'] = $this->IndexModel->getDetailProduct($id);
        $this->data['allImages'] = $this->IndexModel->getAllImages();
        $this->data['allColors'] = $this->IndexModel->getAllColors();
        $this->data['allSizes'] = $this->IndexModel->getAllSizes();

        $this->data['name'] = $this->IndexModel->getProductName($id);
        $this->config->config['pageTitle'] = $this->data['name'];

        $this->load->view('../views/components/header/headerDetailProduct.php', $this->data);
        $this->load->view('../views/pages/detailProduct.php', $this->data);
        $this->load->view('../views/components/footer/footerDetailProduct.php');
    }
    public function cart()
    {
        $this->config->config['pageTitle'] = 'Cart';
        $this->load->view('../views/components/header/headerCart.php', $this->data);
        $this->load->view('../views/pages/cart.php', $this->data);
        $this->load->view('../views/components/footer/footerCart.php');
    }
    public function checkout()
    {
        $this->config->config['pageTitle'] = 'Checkout';

        if ($this->session->userdata('LoggedIn')) {
            $this->load->view('../views/components/header/headerCheckout.php', $this->data);
            $this->load->view('../views/pages/checkout.php', $this->data);
            $this->load->view('../views/components/footer/footerCheckout.php');
        } else {
            redirect(base_url(), '', 'refresh');
        }
    }

    public function add_to_cart()
    {
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $color = $this->input->post('option-color');
        $size = $this->input->post('option-size');
        $this->data['detailProduct'] = $this->IndexModel->getDetailProduct($product_id);
        // $this->data['size'] = $this->IndexModel->getSize($size);

        //dat hang
        foreach ($this->data['detailProduct'] as $key => $pro) {
            $cart = array(
                'id' => $pro->id,
                'qty' => $quantity,
                'price' => $pro->price,
                'name' => $pro->name,
                'options' => array('image' => $pro->images, 'color' => $color, 'size' => $size),
            );
        }

        $this->cart->insert($cart);
        redirect(base_url() . 'cart', 'refresh');
    }
    public function add_to_checkout()
    {
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $color = $this->input->post('option-color');
        $size = $this->input->post('option-size');
        $this->data['detailProduct'] = $this->IndexModel->getDetailProduct($product_id);
        // $this->data['size'] = $this->IndexModel->getSize($size);

        //dat hang
        foreach ($this->data['detailProduct'] as $key => $pro) {
            $cart = array(
                'id' => $pro->id,
                'qty' => $quantity,
                'price' => $pro->price,
                'name' => $pro->name,
                'options' => array('image' => $pro->images, 'color' => $color, 'size' => $size),
            );
        }

        $this->cart->insert($cart);
        redirect(base_url() . 'checkout', 'refresh');
    }
    public function delete_item($rowid)
    {
        $this->cart->remove($rowid);
        redirect(base_url() . 'cart', 'refresh');
    }
    // public function update_cart(){
    //     $id = $this->input->post('id');
    //     $qty = $this->input->post('qty');
    //     $data = array(
    //         'rowid' => $id,
    //         'qty' => $qty,
    //     );
    //     $this->cart->update($data);
    // }
    public function login()
    {
        $this->config->config['pageTitle'] = 'Login';

        $this->load->view('../views/components/header/headerLogin.php', $this->data);
        $this->load->view('../views/pages/login.php');
        $this->load->view('../views/components/footer/footerLogin.php');
    }
    public function register()
    {
        $this->config->config['pageTitle'] = 'Register';

        $this->load->view('../views/components/header/headerRegister.php', $this->data);
        $this->load->view('../views/pages/register.php');
        $this->load->view('../views/components/footer/footerRegister.php');
    }
    public function login_customer()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Bạn chưa điền %s.']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Bạn chưa điền %s.']);
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->load->model('LoginModel');
            $result = $this->LoginModel->checkLogin($email, $password);
            if ($result) {
                $session_array = ['id' => $result[0]->id, 'username' => $result[0]->username, 'email' => $result[0]->email];
                $this->session->set_userdata('LoggedIn', $session_array);
                $this->session->set_flashdata('success', 'Login successfully!!!');
                redirect(base_url(''));
            } else {
                $this->session->set_flashdata('error', 'Login Failed!!!');
                redirect(base_url('login'));

            }
        } else {
            $this->login();
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('LoggedIn');
        $this->session->set_flashdata('success', 'Logout successfully');
        redirect(base_url('/login'));

    }
    public function sign_up()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => 'Bạn chưa điền %s.']);
        $this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'Bạn chưa điền %s.']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Bạn chưa điền %s.']);
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
            );
            $this->load->model('LoginModel');
            $result = $this->LoginModel->newCustomer($data);
            if ($result) {
                $session_array = ['username' => $username, 'email' => $email];
                // $this->session->set_userdata('LoggedIn', $session_array);
                $this->session->set_flashdata('success', 'Signed Up successfully!!!');
                redirect(base_url('/login'));
            } else {
                $this->session->set_flashdata('error', 'Signed Up Failed!!!');
                redirect(base_url('register'));

            }
        } else {
            $this->register();
        }
    }
    public function confirm_checkout()
    {
        $this->form_validation->set_rules('name', 'họ tên', 'trim|required', ['required' => 'Bạn chưa điền %s.']);
        $this->form_validation->set_rules('phone', 'số điện thoại', 'trim|required', ['required' => 'Bạn chưa điền %s.']);
        $this->form_validation->set_rules('address', 'địa chỉ', 'required', ['required' => 'Bạn chưa điền %s.']);
        $this->form_validation->set_rules('method', 'hình thức thanh toán', 'required', ['required' => 'Bạn chưa chọn %s.']);

        if ($this->form_validation->run()) {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $method = $this->input->post('pay-option');
            $data = array(
                'name' => $name,
                'phone' => $phone,
                'address' => $address,
                'method' => $method,
            );
            $this->load->model('LoginModel');
            $result = $this->LoginModel->newShipping($data);
            if ($result) {
                // order
                $order_code = rand(00, 9999);
                $data_order = array(
                    'order_code' => $order_code,
                    'ship_id' => $result,
                    'status' => 1,
                );
                $insert_order = $this->LoginModel->insert_order($data_order);
                //order detail
                foreach ($this->cart->contents() as $items) {
                    $data_orders_detail = array(
                        'order_code' => $order_code,
                        'product_id' => $items['id'],
                        'quantity' => $items['qty'],
                        'size' => $items['options']['size'],
                        'color' => $items['options']['color'],
                    );
                    $insert_orders_detail = $this->LoginModel->insert_orders_detail($data_orders_detail);

                }
                $this->cart->destroy();
                $this->session->set_flashdata('success', 'Bạn đã đặt hàng thành công!');
                redirect(base_url('/checkout'));
            } else {
                $this->session->set_flashdata('error', 'Order Confirmation Failed');
                redirect(base_url('checkout'));

            }
        } else {
            $this->checkout();
        }
    }
    public function search()
    {
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }
        $this->data['searchText'] = $keyword;
        $this->data['products'] = $this->IndexModel->getAllProductsByKeyword($keyword);
        $this->config->config['pageTitle'] = $keyword;

        $this->data['allProducts'] = $this->IndexModel->getAllProducts();
        $this->data['allColors'] = $this->IndexModel->getAllColors();
        $this->load->view('../views/components/header/headerSearch.php', $this->data);
        $this->load->view('../views/pages/search.php', $this->data);
        $this->load->view('../views/components/footer/footerSearch.php');
    }
    public function user()
    {
        $this->load->view('../views/components/header/headerUser.php', $this->data);
        $this->load->view('../views/pages/user.php', $this->data);
        $this->load->view('../views/components/footer/footerUser.php');
    }
    public function fetch_data($id)
    {
        sleep(1);

        $color = $this->input->post('color');
        $size = $this->input->post('size');
        $minimum_price = $this->input->post('minimum_price');
        $maximum_price = $this->input->post('maximum_price');

        $config = array();
        $config["base_url"] = base_url() . '/category' . '/' . $id;
        // $config["base_url"] = '#';
        $config['total_rows'] = ceil($this->IndexModel->count_all($id, $minimum_price, $maximum_price, $color, $size)); //đếm tất cả sản phẩm //8 //hàm ceil làm tròn phân trang
        $config["per_page"] = 4; //từng trang 12 sản phẩn
        $config["uri_segment"] = 3; //lấy số trang hiện tại
        $config['use_page_numbers'] = true; //trang có số
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="pagination_active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        //end custom config link
        $this->pagination->initialize($config); //tự động tạo trang

        $this->page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0; //current page active
        // $this->data["links"] = $this->pagination->create_links(); //tự động tạo links phân trang dựa vào trang hiện tại
        $this->data['allproductByCate_pagination'] = $this->IndexModel->getCatePagination($id, $config["per_page"], $this->page);
        //pagination

        $output = array(
            'pagination_link' => $this->pagination->create_links(),
            'product_list' => $this->IndexModel->fetch_data($id, $config["per_page"], $this->page, $minimum_price, $maximum_price, $color, $size),

        );
        echo json_encode($output);
    }
}
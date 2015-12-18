<?php
	class User extends MY_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model("persistencia/Category_model", "menu");
			$elementos = $this->menu->all();
			$this->multi_menu->set_items($elementos);
			
		}

		public function index()
		{

			/*$data = array();
			
			// load Header View
			$this->load->view('vistasTienda/Header');
			// load login_signin_view
			$this->load->view('vistasTienda/login_singin_view');
			// load Footer View
			$this->load->view('vistasTienda/Footer');*/

			if ($this->require_role('admin')) {

	            echo $this->load->view('vistasTienda/Header', '', TRUE);

	            echo '<p>You are logged in!</p>';

	            echo $this->load->view('vistasTienda/Footer', '', TRUE);
        	}
		}

		public function login()
		{
		    // Method should not be directly accessible
		    if( $this->uri->uri_string() == 'user/login')
		    {
		        show_404();
		    }
		 
		    if( strtolower( $_SERVER['REQUEST_METHOD'] ) == 'post' )
		    {
		        $this->require_min_level(1);
		    }
		 
		    $this->setup_login_form();
		 
		    $html = $this->load->view('vistasTienda/Header', '', TRUE);
		    //$html .= $this->load->view('examples/login_form', '', TRUE);
		    $html .= $this->load->view('examples/login_form', '', TRUE);
		    $html .= $this->load->view('vistasTienda/Footer', '', TRUE);
		 
			echo $html;
		}

		public function logout()
    	{
	        $this->authentication->logout();

	        redirect( secure_site_url( LOGIN_PAGE . '?logout=1') );
		}
	}
?>
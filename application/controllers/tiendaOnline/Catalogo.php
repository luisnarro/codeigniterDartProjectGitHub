<?php
	class Catalogo extends CI_Controller{

		private $limit = "6";

		public function __construct()
		{
			parent::__construct();
			// Header setup
			$this->load->model("persistencia/Category_model", "menu");
			$elementos = $this->menu->all();
			$this->multi_menu->set_items($elementos);
			// Load category model
			$this->load->model("persistencia/Category_model", "category");
			// Load product model
			$this->load->model("persistencia/Product_model", "product");
		}

		public function index()
		{
			// Mostrar en la vista las diferentes categorias que hay haciendo uso de paginación.
			$data = array();

			$offset = $this->uri->segment(4) ? $this->uri->segment(4) : 0;
			$categories = $this->category->getLeafs($this->limit, $offset);
			$data['categories'] = $categories;
			$total_rows = $this->category->countLeafs();

			// configuración para la paginación.
			$config['total_rows'] = $total_rows;
			$config['per_page'] = $this->limit;
			$config['base_url'] = site_url("tiendaOnline/catalogo/index");
			$config['uri_segment'] = 4;

			$this->pagination->initialize($config);
			$page_links = $this->pagination->create_links();

			$data['page_links'] = $page_links;
			$data['total_rows'] = $total_rows;

			// load Header View
			$this->load->view('vistasTienda/Header');
			// load productView
			$this->load->view('vistasTienda/ProductView', $data);
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function categoria($idCategoria)
		{
			$data = array();

			$offset = $this->uri->segment(5) ? $this->uri->segment(5) : 0;
			$products = $this->product->allByCategory($idCategoria, $this->limit, $offset);
			$data['products'] = $products;
			$total_rows = $this->product->countProductsByCategory($idCategoria);

			// configuración para la paginación.
			$config['total_rows'] = $total_rows;
			$config['per_page'] = $this->limit;
			$config['base_url'] = site_url("tiendaOnline/catalogo/producto");
			$config['uri_segment'] = 5;

			$this->pagination->initialize($config);
			$page_links = $this->pagination->create_links();

			$data['page_links'] = $page_links;
			$data['total_rows'] = $total_rows;

			// load Header View
			$this->load->view('vistasTienda/Header');
			// load CatalogoProductView
			$this->load->view('vistasTienda/CatalogoProductView', $data);
			// load Footer View
			$this->load->view('vistasTienda/Footer', $data);
		}

		public function producto($idProducto)
		{
			$data = array();

			$product = $this->product->getProduct($idProducto);
			$data['product'] = $product;
			// load Header View
			$this->load->view('vistasTienda/Header');
			// load ProductDetailsView
			$this->load->view('vistasTienda/ProductDetailsView', $data);
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function sidebarLoad()
		{
			$this->load->view('vistasTienda/sidebar');
		}

		// Funciones definidas para cada una de las categorías, no se utilizan.
		/*
		public function dardosPuntaAcero()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function dardosPuntaPlastico()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function puntasPlastico()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function puntasAcero()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function canasNylon()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function canasMetalicas()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function plumasPlastico()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function plumasTela()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function colgantes()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function estuches()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function anillosPlumas()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function juntasPresion()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function coronas()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function dianasElectronicas()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}

		public function dianasTradicionales()
		{
			// load Header View
			$this->load->view('vistasTienda/Header');
			
			// load Footer View
			$this->load->view('vistasTienda/Footer');
		}
		*/
	}
?>
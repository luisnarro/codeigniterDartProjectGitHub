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
		}

		public function index()
		{
			// Mostrar en la vista los diferentes productos que hay haciendo uso de paginación.
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
	}
?>
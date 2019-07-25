<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();

		header("Access-Control-Allow-Origin: *"); 
		/* Standard Libraries of codeigniter are required */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */ 
 
		$this->load->library('grocery_CRUD'); 
    }
 
    public function index()
    {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }

    public function productions()
    {
		
		header("Access-Control-Allow-Origin: *");
		
		$output = $this->grocery_crud->render();

		$this->grocery_crud->unset_back_to_list();

		$this->_example_output($output);    
    }

    public function aboutus()
    {
	//	$this->grocery_crud->set_table('aboutus');
        $output = $this->grocery_crud->render();
 
	/*	echo "<pre>";
        print_r($output);
        echo "</pre>";
        die();
	*/
		$this->_example_output($output);    
    }


    public function angels()
    {
        $output = $this->grocery_crud->render();
		$this->_example_output($output);    
    }


    public function sponsors()
    {
        $output = $this->grocery_crud->render();
		$this->_example_output($output);    
    }

	
    public function staticpages()
    {
        $output = $this->grocery_crud->render();
		$this->_example_output($output);    
    }

    public function people()
    {
        $output = $this->grocery_crud->render();
		$this->_example_output($output);    
    }

    public function jumpstart()
    {
        $output = $this->grocery_crud->render();
		$this->_example_output($output);    
    }
	
	
    public function contact()
    {
        $output = $this->grocery_crud->render();
		$this->_example_output($output);    
    }
	
    public function show_pics()
    {
		header("Access-Control-Allow-Origin: *");

		$output = $this->grocery_crud->render();
		$this->_example_output($output);		
    }



//	function _example_output($output = null)
//	{
//		$this->load->view('our_template.php',$output);    
//	}


	function _example_output($output = null)
	{
		header("Access-Control-Allow-Origin: *");		

		$this->load->view('example.php',$output);    
	}
	 


}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */
 
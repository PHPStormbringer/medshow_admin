<?php
class Productions_model extends CI_Model 
{
    public static $pid;
    public $project;
    public $pathname;
    public $producer;
    public $writer;
    public $director;
    public $musicaldirector;
    public $setdesigner;
    public $sounddesign;
    public $technicaldirector;
    public $masterelectrician;
    public $lightingdesigner;
    public $costumedesigner;
    public $stagemanager;
    public $description;
    public $short_desc;
    public $biz_start;
    public $activ;
    public $rank;
    public $stage;
    
	public static $oneShow;
	public static $allShows;

	public function __construct()
	{
		parent::__construct();
	//	Your own constructor code
	}

	public function get_one_record_by_id()
	{
		$query = $this->db->get('productions', 10);
		return $query->result();
	}	
	
	public static function get_all_records()
	{
		$query = $this->db->get('productions', 10);
		return $query->result();

	}
	
	public function get_last_ten_entries()
	{
		$query = $this->db->get('entries', 10);
		return $query->result();
	}

	public function insert_entry()
	{
		$this->title    = $_POST['title']; // please read the below note
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->insert('entries', $this);
	}

	public function update_entry()
	{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

}

?>
<?php

class Pages_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function fetch_information($offset, $limit) {
        $sql = "SELECT place_name, image_path, place_description FROM tourist_spots AS tp JOIN images AS img ON image_id = img.id LIMIT $offset, $limit;";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($query->num_rows()) {
            return $result;
        }
        return FALSE;
    }

    public function get_row_count() {
        return $this->db->count_all('tourist_spots');
    }

    public function get_random_img() {
        return $this->db->limit(12)->order_by('RAND()')->select('image_path')->get('images')->result();
    }

    public function get_info() {
        $sql = "SELECT place_name, place_description, region_name, image_path, get_there, activities, get_there FROM tourist_spots AS ts JOIN regions AS r ON r.id = ts.region_id JOIN images AS i ON ts.image_id = i.id LEFT JOIN activities_tbl AS act ON ts.id = place_id;";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($query->num_rows()) {
            return $result;
        }
        return null;
    }

    public function get_regions() {
        return $this->db->select('*')->get('regions')->result();
    }

    public function get_by_region($region_id) {
        $sql = "SELECT image_path, place_name FROM tourist_spots AS ts JOIN regions AS r ON ts.region_id = r.id JOIN images AS i ON i.id = ts.image_id WHERE r.id = $region_id;";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($query->num_rows()) {
            return $result;
        }
        return null;
    }

    public function get_by_name($place_name) {
        $sql = "SELECT image_path, place_name, place_description, get_there, activities, best_time FROM tourist_spots AS ts JOIN images AS i ON ts.image_id = i.id LEFT JOIN activities_tbl AS act ON act.place_id = ts.id WHERE place_name = \"$place_name\";";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($query->num_rows()) {
            return $result;
        }
        return null;
    }
}

?>
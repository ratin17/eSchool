<?php

// Use to fetch course data
class Course
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch course data using getData Method
    public function getData($table = 'course')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch course data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get course using item id
    public function getCourse($c_id = null, $table = 'course-table')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE c_id={$c_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }
}

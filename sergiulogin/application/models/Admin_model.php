<?php

class Admin_model extends CI_Model {

    public function getAdmin() {
        return (object) array('admin' => '123');
    }

}

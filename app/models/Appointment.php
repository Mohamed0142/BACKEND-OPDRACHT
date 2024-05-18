<?php

class Appointment {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createAppointment($data) {
        $this->db->query('INSERT INTO appointments (color_1, color_2, color_3, color_4, phone_number, email, date, nail_biting, massage, nail_repair) VALUES (:color_1, :color_2, :color_3, :color_4, :phone_number, :email, :date, :nail_biting, :massage, :nail_repair)');

        // Bind values
        $this->db->bind(':color_1', $data['color_1']);
        $this->db->bind(':color_2', $data['color_2']);
        $this->db->bind(':color_3', $data['color_3']);
        $this->db->bind(':color_4', $data['color_4']);
        $this->db->bind(':phone_number', $data['phone_number']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':nail_biting', $data['nail_biting']);
        $this->db->bind(':massage', $data['massage']);
        $this->db->bind(':nail_repair', $data['nail_repair']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

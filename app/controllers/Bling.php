<?php

class Bling extends BaseController {
    private $appointmentModel;

    public function __construct() {
        $this->appointmentModel = $this->model('Appointment');
    }

    public function index() {
        $this->view('bling/index');
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, [
                'color_1' => FILTER_SANITIZE_SPECIAL_CHARS,
                'color_2' => FILTER_SANITIZE_SPECIAL_CHARS,
                'color_3' => FILTER_SANITIZE_SPECIAL_CHARS,
                'color_4' => FILTER_SANITIZE_SPECIAL_CHARS,
                'phone_number' => FILTER_SANITIZE_SPECIAL_CHARS,
                'email' => FILTER_SANITIZE_EMAIL,
                'date' => FILTER_SANITIZE_SPECIAL_CHARS,
                'nail_biting' => FILTER_SANITIZE_SPECIAL_CHARS,
                'massage' => FILTER_SANITIZE_SPECIAL_CHARS,
                'nail_repair' => FILTER_SANITIZE_SPECIAL_CHARS,
            ]);

            $data = [
                'color_1' => trim($_POST['color_1']),
                'color_2' => trim($_POST['color_2']),
                'color_3' => trim($_POST['color_3']),
                'color_4' => trim($_POST['color_4']),
                'phone_number' => trim($_POST['phone_number']),
                'email' => trim($_POST['email']),
                'date' => trim($_POST['date']),
                'nail_biting' => isset($_POST['nail_biting']) ? 1 : 0,
                'massage' => isset($_POST['massage']) ? 1 : 0,
                'nail_repair' => isset($_POST['nail_repair']) ? 1 : 0,
            ];

            // Save the data using the model
            if ($this->appointmentModel->createAppointment($data)) {
                // Redirect to a success page or render success message
                echo "Appointment created successfully! <br><button onclick='history.go(-1)'>Go Back</button>";
                
            } else {
                // Render an error message
                echo "Error creating appointment. <br><button onclick='history.go(-1)'>Go Back</button>";
            }
        } else {
            $this->view('bling/index');
        }
    }
}

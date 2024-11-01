<?php

    class Doctor extends Controller{

        private $data = [
            'elements' => [
                'dashboard' => ["fas fa-tachometer-alt", "Dashboard"],
                'appointments' => ["fas fa-calendar-alt", "Appointments"],
                'patients' => ["fas fa-user", "Patients"],
                'chat' => ["fa-regular fa-message", "Chat"],
                'logout' => ["fas fa-sign-out-alt", "Logout"]
            ],
            'userType' => 'doctor'
        ];

        public function index(){
            $this->view('Doctor/dashboard','dashboard');
        }

        public function patientQueue(){
            $this->view('Doctor/patientQueue','dashboard');
        }

        public function appointments(){
            $this->view('Doctor/appointments','appointments');
        }

        public function renderComponent($component,$active)
        {
            $elements = $this->data['elements'];
            $userType = $this->data['userType'];

            $filename = "../app/views/Components/{$component}.php";
            require $filename;
        }
    }
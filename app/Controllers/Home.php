<?php

namespace App\Controllers;

use App\Models\Cita_model;
use App\Models\Estudiante_model;
use App\Models\LoginModel;
use App\Models\Paciente_model;
use App\Models\Test_Paciente_model;
use App\Models\Test_model;

class Home extends BaseController
{
    public function index(): string
    {
        $userModel = new  LoginModel();
        $estudianteModel = new Estudiante_model();
        $pacienteModel = new Paciente_model();
        $testPacientModel = new Test_Paciente_model();
        $citasModel = new Cita_model();
        $testModel = new Test_model();
        $data['usuarios'] = $userModel->get()->getNumRows();
        $data['estudiantes'] = $estudianteModel->get()->getNumRows();
        $data['pacientes'] = $pacienteModel->get()->getNumRows();
        $data['citas'] = $citasModel->get()->getNumRows();
        $data['tests'] = $testModel->get()->getNumRows();
        $data['testsPaciente'] = $testPacientModel->get()->getNumRows();

        $citasModelNew = new Cita_model();

        $dataCitasModel = $citasModelNew
            ->select('citas.id_cita as cita, citas.fecha, citas.jornada, citas.hora,
		 citas.estado_cita, hr.nombre as paciente, cli.carnet, cli.nombre')
            ->join('estudiante as cli', 'cli.id_estudiante = citas.estudiante')
            ->join('paciente as hr', 'hr.id_paciente = citas.paciente')
            ->findAll();
        $data['citasModel'] = $dataCitasModel;

        return view('capas/cabecera')
            . view('capas/menu', $data)
            . view('capas/footer');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ending extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $a = rand(1,9);
        $b = rand(1,9);

        $this->session->set_userdata('captcha_answer', $a + $b);

        $data['a'] = $a;
        $data['b'] = $b;

        $data['pid']=$this->input->get('pid');
        $data['uid']=$this->input->get('uid');
        $data['st']=$this->input->get('st');

        $this->load->view('ending_verify',$data);
    }



public function verify()
{
    $pid = $this->input->post('pid');
    $uid = $this->input->post('uid');
    $st  = $this->input->post('st');

    $answer  = $this->input->post('answer');
    $correct = $this->session->userdata('captcha_answer');

    if($answer != $correct)
    {
        $this->session->set_flashdata('error','Incorrect answer. Please try again.');

        redirect(base_url('ending?pid='.$pid.'&uid='.$uid.'&st='.$st));
        return;
    }

    $this->processEnding($pid,$uid,$st);
}


   public function processEnding($pid,$uid,$st)
{
    $project_id = $pid;

    $ip = $this->input->ip_address();
    $browser = $this->input->user_agent();
    $device = (strpos(strtolower($browser),'mobile') !== false) ? 'Mobile' : 'Desktop';

    switch($st)
    {
        case 1:
            $status_name = 'Complete';
            break;

        case 2:
            $status_name = 'Terminate';
            break;

        case 3:
            $status_name = 'Quota Full';
            break;

        case 4:
            $status_name = 'Security Terminate';
            break;

        default:
            $status_name = 'Unknown';
    }

    // survey_clicks
    $this->db->insert('survey_clicks',[
        'project_id' => $project_id,
        'pid'        => $pid,
        'ip'         => $ip,
        'browser'    => $browser,
        'device'     => $device,
        'country'    => '',
        'city'       => '',
        'created_at' => date('Y-m-d H:i:s')
    ]);

    // survey_responses
    $this->db->insert('survey_responses',[
        'project_id' => $project_id,
        'pid'        => $pid,
        'uid'        => $uid,
        'status'     => $st,
        'status_name'=> $status_name,
        'ip'         => $ip,
        'url' => base_url('ending')
                    .'?pid='.$pid
                    .'&uid='.$uid
                    .'&st='.$st,
        'remarks'    => '',
        'created_at' => date('Y-m-d H:i:s')
    ]);

    // survey_logs
    $this->db->insert('survey_logs',[
        'project_id'   => $project_id,
        'pid'          => $pid,
        'uid'          => $uid,
        'url' => base_url('ending')
                    .'?pid='.$pid
                    .'&uid='.$uid
                    .'&st='.$st,
        'request_data' => json_encode($_POST),
        'response'     => $status_name,
        'created_at'   => date('Y-m-d H:i:s')
    ]);

    $data['status_name'] = $status_name;
    $this->load->view('ending_success', $data);
}

















}
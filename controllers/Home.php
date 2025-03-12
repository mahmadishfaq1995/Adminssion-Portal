<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('homemodel');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            if ($this->session->userdata('access_rights') == 'admin')
                redirect('admin', 'refresh');
            else
                redirect('admissionfor', 'refresh');
        }
        $content['view'] = 'home_view';
        $this->load->view('templates/template', $content);
    }

    function notice_board() {
        $list = $this->homemodel->get_notice();
        $var = '';
        $var1 = '';
        $var2 = '';
        foreach ($list as $val) {
            if ($val->notice_type == 'news') {
                $var .= '<article class="media">';
                $var .= '<a class="pull-left thumb p-thumb">';
                $var .= '<img src="img/news.png" alt="">';
                $var .= '</a>';
                $var .= '<div class="media-body b-btm">';
                if ($val->notice_link != "#") {
                    $var .= '<a href="' . base_url("openpdf/index/" . $val->notice_link) . '" class=" p-head">';
                } else
                    $var .= '<a href="#" class=" p-head">';
                $var .= $val->notice_desc;
                $var .= '</a>';
                $var .= '<p>';
                $var .= $val->notice_note;
                $var .= '</p>';
                $var .= '</div>';
                $var .= '</article>';
            } else
            if ($val->notice_type == 'event') {
                $var1 .= '<article class="media">';
                $var1 .= '<a class="pull-left thumb p-thumb">';
                $var1 .= '<img src="img/events.png" alt="">';
                $var1 .= '</a>';
                $var1 .= '<div class="media-body b-btm">';
                if ($val->notice_link != "#") {
                    $var1 .= '<a href="' . base_url("openpdf/index/" . $val->notice_link) . '" class=" p-head">';
                } else
                    $var1 .= '<a href="#" class=" p-head">';
                $var1 .= $val->notice_desc;
                $var1 .= '</a>';
                $var1 .= '<p>';
                $var1 .= $val->notice_note;
                $var1 .= '</p>';
                $var1 .= '</div>';
                $var1 .= '</article>';
            } else
            if ($val->notice_type == 'notice') {
                $var2 .= '<article class="media">';
                $var2 .= '<a class="pull-left thumb p-thumb">';
                $var2 .= '<img src="img/notice.png" alt="">';
                $var2 .= '</a>';
                $var2 .= '<div class="media-body b-btm">';
                if ($val->notice_link != "#") {
                    $var2 .= '<a href="' . base_url("openpdf/index/" . $val->notice_link) . '" class=" p-head">';
                } else
                    $var2 .= '<a href="#" class=" p-head">';
                $var2 .= $val->notice_desc;
                $var2 .= '</a>';
                $var2 .= '<p>';
                $var2 .= $val->notice_note;
                $var2 .= '</p>';
                $var2 .= '</div>';
                $var2 .= '</article>';
            }
        }
        echo $var . '@@@@' . $var1 . '@@@@' . $var2;
        exit;
    }

}

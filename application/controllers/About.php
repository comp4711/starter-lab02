<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author Nadia
 */
class About extends CI_Controller{
    /**
     * About Page for this controller.
     */
    public function index()
    {
	$this->load->view('about');
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\Controller;

/**
 * Description of LoginController
 *
 * @author ivc_shipul
 */
class DashboardController extends AdminController {
    
    public function index() {
        $this->view->render('dashboard');
        
    }
}


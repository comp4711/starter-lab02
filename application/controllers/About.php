<?php
class About extends Application {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/welcome.php/welcome
     *	- or -
     * 		http://example.com/welcome.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->data['pagebody'] = 'about';
        $this->render();
    }
}

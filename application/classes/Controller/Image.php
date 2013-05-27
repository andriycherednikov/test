<?php defined('SYSPATH') or die('No direct script access.');


/*
 * Image Controller.
 * Handles image uploading, displaying and altering tags. 
 * 
 */
class Controller_Image extends Controller {
    
    protected $template;
    
    public function before()
    {
         $this->template = View::factory('common/template');
         $this->template->title = NULL;
         $this->template->styles = array(
		'css/upload.css' => ''
        );
         $this->template->scripts = array();
         $this->template->after_scripts = array();
    }
   
    // All images display page
    public function action_index()
    {
         
         $this->template->scripts = array( 
                '/js/jquery-1.10.0.min.js',
                '/js/index_page.js'
	 );
                 
        $image_model = Model::factory("image");
                   
        $body  = View::factory('image/index');
                
        $body->images = $image_model->get_all();
        
        $this->template->body = $body;
        
        $this->response->body($this->template);
        
    }
    
    // Upload image display page
    public function action_image_upload()
    {
        $this->template->body = View::factory('image/image_upload');
        
        $this->template->scripts = array( 
                '/js/upload.js'
	);
        $this->response->body($this->template);
    }
 
    // Image Upload Action
    public function action_upload()
    {
        $view = View::factory('image/upload');
        $error_message = NULL;
        $filename = NULL;
        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['image_file']))
            {
                $filename = $this->_save_image($_FILES['image_file']);
            }
        }

        if ( ! $filename)
        {
            $error_message = 'There was a problem while uploading the image.
                Make sure it is uploaded and must be JPG/PNG/GIF file.';
        }

        $view->uploaded_file = $filename;
        $view->error_message = $error_message;
        $this->response->body($view);
    
        
    }
    
    // Change tag action
    public function action_change_tag()
    {
        
        if ($this->request->method() == Request::POST)
        {
            $image_model = Model::factory("image");
            
            $image_model->update_tag($_POST['id'],$_POST['tag']);
        }
        echo json_encode(array('tag' => $_POST['tag'] == ''?'no tag': $_POST['tag']));
         
    }
    
    // Image save function
    protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'uploads/';
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
 
            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
            
            $image_model = Model::factory("image");
            
            $image_model->insert_image($filename);
            
            return $filename;
        }
 
        return FALSE;
    }
} // End Image

<?php defined('SYSPATH') OR die('No Direct Script Access');

/*
 * Image Module
 * Manipulation with the 'sample_image' table of the database.
 * 
 */
class Model_Image extends Model
{
    private $_image_table = 'sample_image';
    
    /*
     *  Insert Image Funtion
     *  input:
     *      (string) name - name of the image to insert
     * 
     */
    public function insert_image($name)
    {
      
       $query = DB::insert($this->_image_table, array('name'))
                ->values(array($name));
       $query->execute();
    }
    
    /*
     * Update tag function
     * input:
     *      (int) id - id of row to update
     *      (string) tag - new tag of the row
     * 
     */
    public function update_tag($id, $tag)
    {
       $query = DB::update($this->_image_table)->set(array('tag' => $tag))
               ->where('id', '=', $id);
       $query->execute();
    }
    
    /*
     * Get all images function
     * output:
     *      database object with all the images
     * 
     */
    public function get_all()
    {
       $query = DB::select()->from($this->_image_table)->order_by('id', 'DESC');
       
       $row = $query->execute();
       
       return $row;
    }
}//end Image
?>

<div class="container">
    <div class="contr"><h2>All Images</h2></div>
    <div class="upload_form_cont">
        <div class="add_image">
            <input type="button" style="cursor:pointer;margin:2px;" onclick="window.location='<?php echo URL::site("image/image_upload") ?>'" value='Add Image'>
        </div>
        
            
        <?php
        foreach ($images as $image)
        {
        ?>  <div class="image_container">
                <div class="image">
                    <img src ="<?php echo URL::site("uploads/".$image['name'], NULL, FALSE) ?>">
                </div>
                <div id="image_tag_<?php echo $image['id']?>">
                     <input type="button" value="Change Tag" style="float: right;cursor:pointer;margin:2px;" onclick="change_tag(<?php echo $image['id']?>)">
                    <p id="tag_<?php echo $image['id']?>"><?php echo $image['tag'] == ''? 'no tag' : $image['tag'] ?></p>
                   
                </div>
                <div style="display:none; padding-top: 5px;" id="image_tag_change_<?php echo $image['id']?>">
                    <input type="text" size="10" id="tag" name="tag">
                    <input type="hidden" size="10" id="id" name="id" value="<?php echo $image['id']?>">
                    <input type="button" style="cursor:pointer;margin:2px;" value="Change Tag1" onclick="change_tag_ajax(<?php echo $image['id']?>)" id ="change_<?php echo $image['id']?>">
                </div>
            </div>
        <?php
        }
        ?>
        <input type="hidden" id="change_tag_url" value="<?php echo URL::site("image/change_tag") ?>" >

   </div>
</div>
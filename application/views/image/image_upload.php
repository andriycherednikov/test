<div class="container">
            <div class="contr"><h2>You can select an image and click Upload button</h2></div>
            
            <div class="upload_form_cont" id ="upload_form_cont">
                <div>
                    <input type="button" style="cursor:pointer;margin:2px;" onclick="window.location='<?php echo URL::site("image/") ?>'" value='Back'>
                </div>
                <div id="upload_form_left">
                    <form id="upload_form" enctype="multipart/form-data" method="post" action="<?php echo URL::site("image/upload") ?>">
                        <div>
                            <div><label for="image_file">Please select image file</label></div>
                            <div><input type="file" name="image_file" id="image_file" onchange="fileSelected();" /></div>
                        </div>
                        <div>
                            <input type="button" value="Upload" onclick="startUploading()" />
                        </div>
                        <div id="fileinfo">
                            <div id="filename"></div>
                            <div id="filesize"></div>
                            <div id="filetype"></div>
                            <div id="filedim"></div>
                        </div>
                        <div id="error">You should select valid image files only!</div>
                        <div id="error2">An error occurred while uploading the file</div>
                        <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
                        <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>


                    </form>
                    <div id="progress_info">
                           <div id="progress"></div>
                           <div id="progress_percent">&nbsp;</div>
                           <div class="clear_both"></div>
                           <div>
                               <div id="speed">&nbsp;</div>
                               <div id="remaining">&nbsp;</div>
                               <div id="b_transfered">&nbsp;</div>
                               <div class="clear_both"></div>
                           </div>
                           <div id="upload_response"></div>
                     </div>
                 </div>
                <div id="preview_block">
                    <p>Image Preview</p>
                    <img id="preview" />
                </div>
            </div>
        </div>
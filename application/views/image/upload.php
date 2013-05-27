
        <?php if ($uploaded_file): ?>
        <h1>Upload success</h1>
        <p>
            <img src="<?php echo URL::site("uploads/$uploaded_file", NULL, FALSE) ?>" alt="Uploaded avatar" />
        </p>
        <?php else: ?>
        <h1>Something went wrong with the upload</h1>
        <p><?php echo $error_message ?></p>
        <?php endif ?>

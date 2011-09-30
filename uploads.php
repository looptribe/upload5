<?php
    header('Content-Type: application/json');
    $results = array('result' => false);
    
    if (isset($_FILES['file']))
    {
        $file = $_FILES['file'];
        $results['result'] = $file['error'] == UPLOAD_ERR_OK;
        $results['filename'] = $file['name'];
        $results['size'] = $file['size'];
    }
        
    echo json_encode($results);

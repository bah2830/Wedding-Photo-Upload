<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class FileController
{
    public function uploadAction(Request $request, Application $app)
    {
        if (isset($_FILES["fileUpload"])) {
            if (!is_array($_FILES["fileUpload"]['name'])) {
                $ext = array_pop(explode('.', $_FILES['fileUpload']['name']));

                $this->moveFile($_FILES["fileUpload"]["tmp_name"], $ext);
            } else {
                $fileCount = count($_FILES["fileUpload"]['name']);

                for ($i=0; $i < $fileCount; $i++) {
                    $this->moveFile($_FILES["fileUpload"]["tmp_name"][$i]);
                }
            }
        }

        return true;
    }

    private function moveFile($file, $ext)
    {
        $output = "/www/wedding_uploads/upload_" . str_replace('.', '', microtime(true)) . '.' . $ext;

        move_uploaded_file($file, $output);
    }
}
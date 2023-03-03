<?php

class createLog
{
  public $directory;
  public $log;

    public function __construct($directory,$log)
    {
      $this->directory = $directory;
      $this->log = $log;
    }
    
    function check_directory($path) {
      if($path) {
          if(!is_dir($path)) {
              if(strpos($path, "/") === false) {
                  mkdir($path);
              } else {
                  mkdir($this->check_directory(substr($path, 0, strrpos($path, "/"))) . "/" . substr($path, strrpos($path, "/") + 1));
              }
          }
      }
      return $path;
    }
 
    public function createLog()
    {
        $filename  = date('Y-m-d') . '_';
        // Define a directory to store the file in
        $directory = "$this->directory/";
        // Loop until a unique filename is found
        $unique    = false;
        $count     = 0;
        while (!$unique) {
            $count++;
            $full_filename = $directory . $filename . $count . '.txt';

            if (!file_exists($full_filename)) {
                // Open the file for writing
                $filepath = $this->check_directory($directory);	
                $file = fopen("$full_filename", "wb");
                if ($file) {
                  fwrite($file, $this->log);
                  fclose($file);
                  return 1;
                }else
                  return 0;
                $unique = true;
            }
        }
    }
}


?>

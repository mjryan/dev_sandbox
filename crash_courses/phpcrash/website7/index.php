<?php
  $path ='/dir0/dir1/myfile.php';
  $file = 'file1.txt';

  /*
  // Return filename
   echo basename($path);

  // Return filename without ext
  echo basename($path, '.php');

  // Return  the directory name from path
  echo dirname($path);

  // Check if file exists
  echo file_exists($file);

  // Get abs path
  echo realpath($file);

  // Checks to see if file
  echo is_file($file);

  // Check if file writable
  echo is_writable($file);

  // Check if file writable
  echo is_readable($file);

  // Get the file size
  echo filesize($file);

  // Create a directory
  mkdir('testing');

  // Remove a directory if empty
  rmdir('testing');

  // Copy file
  echo copy('file1.txt', 'file2.txt');

  // Rename file
  rename('file2.txt', 'myfile.txt');

  // Delete File
  unlink('myfile.txt');

  // Write from file to screen
  echo file_get_contents($file);

  // Write string to file
  echo file_put_contents($file, 'Goodbye World');


  $current = file_get_contents($file);

  $current .= ' Goodbye World';

  file_put_contents($file, $current);

  // Open File For Reading
  $handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  echo $data;
  $fclose($handle);
  */

  // Open File for writing
  $handle = fopen('file2.txt', 'w');
  $txt = "John Doe\n";
  fwrite($handle, $txt);
  $txt = "Steve Smith\n";
  fwrite($handle, $txt);
  fclose($handle);

 ?>

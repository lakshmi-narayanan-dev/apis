<?php
// Set the directory relative to the location of this PHP script
$directory = "list/";

// Find all MP3 files in the directory
$songs = glob($directory . "*.mp3");

// Check if any songs are available or not
if ($songs) {
  // Output the array of song paths as a JSON object
  echo json_encode($songs);
} else {
  // Output a message indicating no songs were found
  echo json_encode(["message" => "No songs available"]);
}

// Directory Path: The variable $directory = "songs/"; specifies the relative path to the folder containing .mp3 files. This path should be relative to the location of this PHP file.
// Finding MP3 Files: The glob() function searches the specified directory for files matching the *.mp3 pattern. This function returns an array of file paths.
// Encoding as JSON: json_encode($songs); converts the array of song paths to a JSON string format, suitable for use in JavaScript or other frontend environments.

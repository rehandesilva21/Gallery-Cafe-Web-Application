<?php
echo "wadada";
// The command to run the Python script
$command = escapeshellcmd('python ./app.py');

// Execute the command
$output = shell_exec($command);

// Display the output from the Python script
echo $output;
?>

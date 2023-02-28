<?php

// Get the data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Extract the data
$title = $data['title'];
$bidHours = $data['bidHours'];
$hoursWorked = $data['hoursWorked'];
$ticketHours = $data['ticketHours'];

// Create the HTML file using the title
$filename = str_replace(' ', '_', strtolower($title)) . ".html";
$file = fopen("newProjects/".$filename, "w") or die("Unable to open file!");
$txt = "<!DOCTYPE html>\n";
$txt .= "<html>\n";
$txt .= "<head>\n";
$txt .= "<title>" . $title . "</title>\n";
$txt .= "</head>\n";
$txt .= "<body>\n";
$txt .= "<h1>" . $title . "</h1>\n";
$txt .= "<p>Bid Hours: " . $bidHours . "</p>\n";
$txt .= "<p>Hours Worked: " . $hoursWorked . "</p>\n";
$txt .= "<p>Ticket Hours: " . $ticketHours . "</p>\n";
$txt .= "</body>\n";
$txt .= "</html>";
fwrite($file, $txt);
fclose($file);

// Send a response to the client
echo "HTML file created successfully!";

?>
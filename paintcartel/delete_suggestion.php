<?php
// Read the contents of the JSON file
$jsonData = file_get_contents('safetySuggestions/suggestions.json');

// Parse the JSON data as an array
$suggestions = json_decode($jsonData, true);

// Get the ID of the suggestion to delete
$suggestionId = $_GET['id'];

// Loop through the suggestions to find the one to delete
foreach ($suggestions as $key => $suggestion) {
    if ($suggestion['id'] == $suggestionId) {
        // Remove the suggestion from the array
        unset($suggestions[$key]);

        // Write the updated suggestions to the JSON file
        $jsonData = json_encode($suggestions, JSON_PRETTY_PRINT);
        file_put_contents('safetySuggestions/suggestions.json', $jsonData);

        // Redirect back to the suggestions page
        header('Location: suggestions.php');
        exit;
    }
}
?>
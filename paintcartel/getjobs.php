<?php

// Set API credentials
$api_token = 'YOUR_API_TOKEN';
$api_secret = 'YOUR_API_SECRET';
$base_url = 'https://rest.tsheets.com/api/v1';

// Set API parameters
$user_id = 'YOUR_USER_ID'; // You can find your user ID in your QuickBooks Time account
$start_date = '2023-02-01';
$end_date = '2023-02-28';
$jobcodes_only = 'yes';

// Build API URL
$url = "$base_url/timesheets?user_ids=$user_id&start_date=$start_date&end_date=$end_date&jobcodes_only=$jobcodes_only";

// Set API headers
$headers = array(
    'Authorization: Bearer ' . $api_token,
    'Content-Type: application/json'
);

// Make API request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);

// Parse API response
$data = json_decode($response, true);
$jobs = $data['results']['timesheets'];

// Display jobs in HTML table using Bootstrap
echo '
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Job Name</th>
                <th>Hours Worked</th>
                <th>Hours Left</th>
            </tr>
        </thead>
        <tbody>
';

foreach ($jobs as $job) {
    $job_id = $job['jobcode_id'];
    $job_name = $job['jobcode'];
    $hours_worked = $job['duration'] / 3600; // Convert seconds to hours
    $hours_left = $job['jobcode_assigned_hours'] - $hours_worked;
    
    echo '
        <tr>
            <td>' . $job_name . '</td>
            <td>' . $hours_worked . '</td>
            <td>' . $hours_left . '</td>
        </tr>
    ';
}

echo '
        </tbody>
    </table>
';

?>

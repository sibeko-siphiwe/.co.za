<?php
session_start();
include_once "./Conn.php";

$output = "";

$sql = mysqli_query($conn, "SELECT name, company, start_date, end_date, content FROM experience");

if(mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) { 
        // Format dates
        $start = date('F Y', strtotime($row['start_date']));
        $end = date('M Y', strtotime($row['end_date']));
        
        $date_range = ($start === $end) ? $start : $start . ' - ' . $end;

        $output .= '
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3 class="company">'.$row['company'].'</h3>
                    <div class="meta">
                        <span>'.$row['name'].'</span>
                        <span class="date">'.$date_range.'</span>
                    </div>
                    <p>'.$row['content'].'</p>
                </div>
            </div>
        ';
    }
} else {
    $output = "No experience entries available.";
}

echo $output;
mysqli_close($conn);
?>
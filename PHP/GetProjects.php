<?php

session_start();
include_once "./Conn.php";

$output = "";

$sql = mysqli_query($conn, "SELECT * FROM Projects");

if (mysqli_num_rows($sql) > 0) {

    while ($row = mysqli_fetch_assoc($sql)) {
        $techstack = explode(',', $row['Stack']);
        $techstack_html = "";

        // Loop through each technology and add it as a <p> tag
        foreach ($techstack as $tech) {
            $tech = trim($tech);
            if (!empty($tech)) {
                $techstack_html .= '<p>' . htmlspecialchars($tech) . '</p>';
            }
        }

        $output .= '
            <div class="Project">
                <div class="Project_image">
                    <img src="php/' . htmlspecialchars($row['Image']) . '" alt="Project image">
                </div>
                <div class="Project_info">
                    <h3>' . htmlspecialchars($row['Title']) . '</h3>
                    <div class="Techstack">
                        ' . $techstack_html . '
                    </div>
                    <button>Live Preview</button>
                </div>
            </div>
        ';
    }

} else {
    $output = "No projects are available.";
}

echo $output;
mysqli_close($conn);

?>

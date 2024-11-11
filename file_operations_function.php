<?php
function performFileOperations($filename, $content) {
    $output = "";

    $output .= "<div class='section create-file'>";
    $output .= "<h2>Creating and Writing to File</h2>";
    file_put_contents($filename, $content);
    $output .= "<p>AYE WAZZUP GUYS</p>";
    $output .= "</div>";

    $output .= "<div class='section check-file'>";
    $output .= "<h2>Checking File Existence</h2>";
    if (file_exists($filename)) {
        $output .= "<p>The file {$filename} exists.</p>";
    } else {
        $output .= "<p>The file {$filename} does not exist.</p>";
    }
    $output .= "</div>";

    $output .= "<div class='section read-file'>";
    $output .= "<h2>Reading Entire File</h2>";
    $fileContent = file_get_contents($filename);
    $output .= "<p>File contents using file_get_contents():</p>";
    $output .= "<pre>" . htmlspecialchars($fileContent) . "</pre>";
    $output .= "</div>";

    $output .= "<div class='section read-lines'>";
    $output .= "<h2>Reading File Line by Line</h2>";
    $fileLines = file($filename);
    $output .= "<p>File contents using file() (line by line):</p>";
    $output .= "<pre>";
    foreach ($fileLines as $lineNumber => $line) {
        $output .= htmlspecialchars("Line " . ($lineNumber + 1) . ": " . $line);
    }
    $output .= "</pre>";
    $output .= "</div>";

    
    unlink($filename);
    $output .= "<p>File removed.</p>";

    return $output;
}
?>
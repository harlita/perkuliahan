<!DOCTYPE html>
<html>
<head>
    <title>Linear Search in PHP</title>
</head>
<body>
    <h2>Linear Search Example</h2>

    <form method="post">
        <label>Enter array (comma separated):</label><br>
        <input type="text" name="array" required><br><br>

        <label>Enter target value:</label><br>
        <input type="number" name="target" required><br><br>

        <input type="submit" value="Search">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arrInput = $_POST["array"];
        $targetValue = $_POST["target"];

        // Convert input to array
        $arr = array_map('intval', explode(',', $arrInput));

        function linearSearch($arr, $target) {
            $length = count($arr);
            for ($i = 0; $i < $length; $i++) {
                if ($arr[$i] == $target) {
                    return $i;
                }
            }
            return -1;
        }

        $result = linearSearch($arr, $targetValue);

        echo "<h3>Result:</h3>";
        if ($result != -1) {
            echo "Element <strong>$targetValue</strong> found at index <strong>$result</strong>.";
        } else {
            echo "Element <strong>$targetValue</strong> not found in the array.";
        }
    }
    ?>
</body>
</html>

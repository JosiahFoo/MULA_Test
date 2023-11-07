<!DOCTYPE html>
<html>
    <head>
        <title>MULA Test</title>
        <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        </style>
        <?php
        // Load your table
        $table1 = array_map('str_getcsv', file('Table_Input.csv'));

        // Calculate the values for Table 2
        $alpha_value = $table1[5][1] + $table1[20][1];  // A5 + A20
        $beta_value = $table1[15][1] / $table1[7][1];  // A15 / A7
        $charlie_value = $table1[13][1] * $table1[12][1];  // A13 * A12

        // Create Table 2
        $table2 = array(
            array('Alpha', $alpha_value),
            array('Beta', $beta_value),
            array('Charlie', $charlie_value)
        );
        ?>
    </head>
    <body>
        <!-- Display Table 1 in HTML -->
        <h2>Table 1</h2>
        <table>
            <?php foreach ($table1 as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?php echo $cell; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Display Table 2 in HTML -->
        <h2>Table 2</h2>
        <table>
            <tr>
                <th>Category</th>
                <th>Value</th>
            </tr>
            <?php foreach ($table2 as $row): ?>
                <tr>
                    <?php foreach ($row as $cell): ?>
                        <td><?php echo $cell; ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>


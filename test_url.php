<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.3 URL Server</title>
    </head>
    <body>
        <?php
        // Test the input date parameters (format ISO8601 --> YYYY-MM-DD)
        if ((isset($_REQUEST['startDate'])) && (!empty($_REQUEST['startDate'])))
        {
            $startDate= $_REQUEST['startDate'];
        }
        else
        {
            $startDate='?';
        }
        if ((isset($_REQUEST['endDate'])) && (!empty($_REQUEST['endDate'])))
        {
            $endDate= $_REQUEST['endDate'];
        }
        else
        {
            $endDate='?';
        }
        ?>
        <p>Received parameters on Server:</p>
        <p>test_url.php?endDate=<?= $endDate ?>&startDate=<?= $startDate ?></p>
    </body>
</html>
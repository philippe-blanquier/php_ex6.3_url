<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.2 URL Client</title>
    </head>
    <body >
        <!--
            Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent  
            et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016
        -->
        <p>Veuillez vous identifier</p>
        <form action="test_url.php" methode="get">
            <label for="startDate">date de début :</label>
			<input type="date" name="startDate" placeholder="startDate" pattern="\d{2}/\d{2}/\d{4}" min="10/06/2021" max="31/12/2021" required>
            <label for="endDate">date de fin :</label>
			<input type="date" name="endDate" placeholder="endDate" pattern="\d{2}/\d{2}/\d{4}" min="2021-06-10" max="2021-12-31">
            <input type="submit" value="OK">
        </form>
    </body>
</html>
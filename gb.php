<?php
session_start();

$err = '';
$msg = '';


// Fehlende Eingaben bestimmen
$kontrolliert = true;
if (isset($_POST['speichern'])) {
	if (empty($_POST['autor'])) {
		$err .= 'Bitte geben Sie Autor ein!' . "<br>\n";
        $kontrolliert=false;
	}
    if (empty($_POST['ueberschrift'])) {
        $err .= 'Bitte geben Sie eine &Uuml;berschrift ein!' . "<br>\n";
        $kontrolliert=false;
    }
	if (empty($_POST['text'])) {
		$err .= 'Bitte geben Sie einen Text ein!' . "<br>\n";
        $kontrolliert=false;
	}
}

//Verbindung aufbauen
$link = mysqli_connect('localhost', 'gaesteuser', '0000', 'gaestebuch');

if (!$link) {
    $err .= 'MySQL Error: ' . mysqli_connect_errno() . "<br>\n";
} else {

//Eintrag speichern
	if (isset($_POST['speichern'])) {
        if($kontrolliert==true){
        	$datum = new DateTime();
        	$datum = $datum->getTimestamp();
    		$query = "insert into film (autor, datum, ueberschrift, text) values 
                    ('".$_POST['autor']."',
                     '".$datum."',
                     '".$_POST['ueberschrift']."',
                     '".$_POST['text']."'
                     );";
    		$msg .= $query . "<br>\n";
    		$res = mysqli_query($link, $query);
            
    		if (!$res) {
              $err .= 'MySQL Error: ' . mysqli_error($link) . "<br>\n";
    		} else {
              //... mysqli_affected_rows($link) ...;
            }
 	    }
    }
}
	mysqli_close($link);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
  "http://www.w3.org/TR/html4/loose.dtd">
<html lang="de">
    <head>
        <title>G&auml;stebuch</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../styles/jquery.datetimepicker.css"/>
    </head>
    <body>
		<h1>G&auml;stebuch</h1>
        <?php if ($err != '') echo '<span style="color:red">'  . $err . '</span>'; ?>
        <?php if ($msg != '') echo '<span style="color:blue">' . $msg . '</span>'; ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table border="1">
				<tr>
					<td>
						Autor
					</td>
					<td>
						<input type="text" name="autor" value="<?php if (isset($_POST['autor'])) echo $_POST['autor']; ?>" style="width:98%">
					</td>
				</tr>
				<tr>
					<td>
						&Uuml;berschrift
					</td>
					<td>
						<input type="text" name="ueberschrift" value="<?php if (isset($_POST['ueberschrift'])) echo $_POST['ueberschrift']; ?>" style="width:98%">
					</td>
				</tr>
				<tr>
					<td>
						Text
					</td>
					<td>
						<input type="text" name="text" value="<?php if (isset($_POST['text'])) echo $_POST['text']; ?>" style="width:98%">
					</td>
				</tr>
			</table>
			<input type="submit" name="speichern" value="Film speichern">
		</form>
    </body>
</html>
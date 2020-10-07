<?php 
$user = 'trung';
$pass = 'trungdeptrai';

if( $_SERVER["PHP_AUTH_USER"] == $user && $_SERVER["PHP_AUTH_PW"] == $pass ){

} else {
    header("WWW-Authenticate: Basic realm=\"Please Enter Your Password\"");
    header("HTTP/1.0 401 Unauthorized");

    die('OOPS! Không được rồi! Tha cho mình đi bợn!');
}

$fn = fopen("data.txt","r");
  $thead = [];
  $tbody = [];
  $count = 0;
  while(! feof($fn))  {
	$result = fgets($fn);
	if ($count < 1) {
		$thead = explode('|', $result);
	} else {
		$tbody[] = explode('|', $result);
	}
	$count++;
  }

  fclose($fn);
?>
<html>
<head>
	  <meta charset="UTF-8">
	  <title>Trung Đẹp Trai</title>
	  <style type="text/css">
		.styled-table {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		.styled-table thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
		}
		.styled-table th,
		.styled-table td {
			padding: 12px 15px;
		}
		.styled-table tbody tr {
			border-bottom: 1px solid #dddddd;
		}

		.styled-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}
	  </style>
</head>
<body>
	<table class="styled-table">
    <thead>
        <tr>
            <?php
			foreach ($thead as $th) {
				echo '<th>'.$th.'</th>';
			}
			?>
        </tr>
    </thead>
    <tbody>
		<?php foreach ($tbody as $item): ?>
        <tr>
			<?php foreach ($item as $td): ?>
            <td><?php echo $td;?></td>
            <?php endforeach; ?>
        </tr>
		<?php endforeach; ?>
        <!-- and so on... -->
    </tbody>
</table>
</body>	
</html>  

<?php
require("UserInfo.php");
?>

<html>
	<style>
		* {
			font-family:monospace;
		}
		#data_table th {
			background: #DBEAFE;
		}

		#data_table {
			font-size: 20px;
		}
	</style>
	<body>
	<h1>UserInfo Demo</h2>
	<table id="data_table" border="1px">
		<tr>
			<th>IP</th>
			<th>OS</th>
			<th>Device</th>
			<th>Browser</th>
		</tr>
		<tr>
			<td><?= UserInfo::ip();?></td>
            <td><?= UserInfo::os();?></td>
            <td><?= UserInfo::device();?></td>
            <td><?= UserInfo::browser();?></td>
		</tr>
	</table>
	</body>
</html>

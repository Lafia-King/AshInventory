<?php
//Only the adminstrator has access to this page. when the administrator wants to approve a booking he simply views the booking on this page and gives approval by clicking the 'approve checkout button'//

include_once("..\Model\db.php");

?>


<html>

	<head>Borrowed Equipment</head>
	<br>


	<title>Borrowed Equipment</title>



	<body>
		




		<?php
		list_borrowed_equipment();

		?>


	</body>

</html>
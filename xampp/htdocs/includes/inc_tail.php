<?php 
	// prevent direct access
	if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])){
		http_response_code(404);
		echo '404 Forbidden';
		die();
	}
?>

			<?php
				// close the database connection
				mysqli_close($db);
			?>

			</div> <!-- content -->
		</div> <!-- row -->
	</div> <!-- container -->

</body>
</html>
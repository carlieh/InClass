<html>
<head>
	<title>My First View</title>
</head>

<body>
	<p>Hello Toast! Yay, this looks much better than just simply printing</p>
	
	<p><strong>my_string:</strong><?php print $my_string; ?></p>
	<p><strong>my_objejct:</stong><?php print_r( $my_object ); ?></p>
	<p><strong>my_array:</strong><?php print_r( $my_array ); ?></p>
	
	<ul>
	<?php foreach( $my_array as $key => $val ) : ?>
	<li>Key: <?php print $key; ?> = Val: <?php print $val; ?></li>
	<?php endforeach; ?>
	</ul>
	
</body>
</html>
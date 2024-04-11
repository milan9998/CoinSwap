<article>
		<h1><?= $page_output['page_title'] ?></h1>
		<!--<content>-->
		
			<?php if (!empty($_error)): ?>
			<error>
				<h3>Error</h3>
				<?= implode('<br>', $_error); ?>
			</error>
			<?php endif; ?>
			<?php if (!empty($_message)): ?>
			<message>
				<?= implode('<br>', $_message); ?>
			</message>
			<?php endif; ?>
			<?php include_once("./view/{$page_output['view']}"); ?>
			
		<!--</content>-->
		<script src="./public/js/script.js"></script>
</article>
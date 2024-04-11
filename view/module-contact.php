	<page-contact>
		<?php if (!empty($message)): ?>
		<a href="./index.php?module=contact">Back to Contact form</a>
		<?php else: ?>
		<form method="post">
			<label>First name</label>
			<input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>">
			
			<label>Last name</label>
			<input type="text" name="lastname" value="<?= $_POST['lastname'] ?? '' ?>">
			
			<label>Email</label>
			<input type="email" name="email"  value="<?= $_POST['email'] ?? '' ?>">
			
			<label>Message</label>
			<textarea name="message"><?= $_POST['message'] ?? '' ?></textarea>
			
			<button id="button">Send</button>
		</form>
		<?php endif; ?>
		<hr>
		<div>
				Work time: 09-20h
			</div>
			<div>
				Address: Nikole Pašića 28, 18000 Niš
			</div>
			<div>
				Contact phone: 0696979497
			</div>
			<div> 
				<ul class="mail">
					<li>
						<a href="mailto:ornjen.krcobic.21@singimail.rs">Ognjen Krčobić</a>
					</li>
					<li>
						<a href="mailto:milan.pronic.21@singimail.rs">Milan Pronić</a>
					</li>
					<li>
						<a href="mailto:ivan.adamovic.21@singimail.rs">Ivan Adamović</a>
					</li>
				</ul>
			</div>
			<hr>
		<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1-F-aP2looMF8EeAWnofRUx0udCcGHihT&ehbc=2E312F" 
				allowfullscrenn="";
				loading='lazy'>
		</iframe>
	</page-contact>
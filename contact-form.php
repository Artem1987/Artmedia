<div class="container page-content-center">
	<form action="send.php" id="mail" enctype="text/plain" class="project-form" method="post">
		<div class="row form-group">
			<div class="col-md-6">
				<input type="text" id="fname" name="fname" class="form-control" placeholder="Ваше имя" required>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<input type="text" id="lname" name="lname" class="form-control" placeholder="Ваша фамилия" required>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<input type="text" id="email" name="email" class="form-control" placeholder="Ваш email" required>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Сообщение пишите сюда" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<input type="submit" value="Отправить" class="btn btn-primary">
		</div>
	</form>
	<h3><?php include "send.php" ?></h3>
</div>
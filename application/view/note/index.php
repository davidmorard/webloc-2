<div class="container">

	<!-- echo out the system feedback (error and success messages) -->
	<?php $this->renderFeedbackMessages(); ?>


	<div class="row">
		<div class="col s12">

			<div class="card darken-1">
				<div class="card-content">
					<span class="card-title">Indiquez vos codes postaux</span>
					<p>Insérez ici les codes postaux d'intervention.</p>
				</div>
				<div class="card-action">
					<p>
						<form method="post" action="<?php echo Config::get('URL');?>note/create">
							<label>Code postal</label><input type="text" name="note_text" />
							<input class="waves-effect waves-light btn" type="submit" value='Validez' autocomplete="off" />
						</form>
					</p>

					<?php if ($this->notes) { ?>
						<table class="note-table">
							<thead>
								<tr>
									<!-- <td>Id</td> -->
									<td>Codes postaux</td>
									<td>Modifier</td>
									<td>Suprimer</td>
								</tr>
							</thead>
							<tbody>
								<?php foreach($this->notes as $key => $value) { ?>
									<tr>
										<!-- <td><?= $value->note_id; ?></td> -->
										<td><?= htmlentities($value->note_text); ?></td>
										<td><a href="<?= Config::get('URL') . 'note/edit/' . $value->note_id; ?>">Modifier</a></td>
										<td><a href="<?= Config::get('URL') . 'note/delete/' . $value->note_id; ?>">Supprimer</a></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php } else { ?>
						<div>Vous n'avez pas encore de zone d'intervention. Indiquez au moins un code postal !</div>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>

</div>

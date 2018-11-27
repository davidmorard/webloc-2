<div class="container">

	<div>

		<!-- echo out the system feedback (error and success messages) -->
		<?php $this->renderFeedbackMessages(); ?>

		
		<div>

			


			<div class="row">
				<div class="col s12">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Liste des utilisateurs</span>

							<table class="highlight">

								<thead>
									<tr>
										<th>Id</th>
										<th>Photo</th>
										<th>Pseudo</th>  
										<th>Email</th>
										<th>Compte activé ?</th>
										<th>Lien vers le profile</th>
										<th>Suspendre le compte</th>
										<!--<th>Suppression du compte</th><th>Validation</th>-->
									</tr>
								</thead>

								<?php foreach ($this->users as $user) { ?>
									<tbody>
										<tr class="<?= ($user->user_active == 0 ? 'inactive' : 'active'); ?>">
											<td><?= $user->user_id; ?></td>
											<td class="avatar">
												<?php if (isset($user->user_avatar_link)) { ?>
													<img src="<?= $user->user_avatar_link; ?>"/>
												<?php } ?>
											</td>
											<td><?= $user->user_name; ?></td>
											<td><?= $user->user_email; ?></td>
											<td><?= ($user->user_active == 0 ? 'No' : 'Yes'); ?></td>
											<td>
												<a href="<?= Config::get('URL') . 'profile/showProfile/' . $user->user_id; ?>">Profile</a>
											</td>
											<form action="<?= config::get("URL"); ?>admin/actionAccountSettings" method="post">
												<td><input type="number" name="suspension" /></td>
												<!--<td><input type="checkbox" name="softDelete" <?php if ($user->user_deleted) { ?> checked <?php } ?> /></td>-->
												<td>
													<input type="hidden" name="user_id" value="<?= $user->user_id; ?>" />
													<input type="submit" />
												</td>
											</form>
										</tr>
									</tbody>

								<?php } ?>
							</table>

						</div>
						
					</div>
				</div>
			</div>



		</div>
	</div>
</div>

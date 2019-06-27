<div>
	<div class="container w-50 shadows rounded-md pt-5 pb-3 pr-4 setting-float-left">
		<div class="float-right mr-5">
			<h3 class="text-white font-weight-bold">Your Details</h3>
			<ul class="nav flex-column" role="tablist">
				<li role="presentation" class="active">
					<a class="text-white font-weight-bold" href="#home" aria-controls="home" role="tab"
						data-toggle="tab">Home</a>
				</li>
				<li role="presentation">
					<a class="text-white font-weight-bold" href="#profile" aria-controls="profile" role="tab"
						data-toggle="tab">Email Settings</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="mr-0 mb-5 ml-auto w-65 border rounded-sm border-2">

		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade show active" id="home">
				<div class="p-0">
					<h3 class="ml-5 my-4 font-weight-bold">Public Profile</h3>
				</div>
				<div class="p-5 border-top mb-5">
					<h4 class="ml-4 font-weight-bold">Avatar</h4>
					<div class="upload-box ">
						<div class="hold w-75 px-3 py-2"><a href="#">No file chosen</a> <span
								class="btn-file py-1 px-4 btn">
								Chose file
								<input type="file">
							</span> </div>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="profile">
				<div class="p-0">
					<h3 class="ml-5 my-4 font-weight-bold">Email Settings</h3>
				</div>
				<div class="p-5 border-top">
					<label for="one">
						<input type="radio" id="one" name="item" value="1" />
						<b>Rating reminders</b>
						<p class="pl-3 user-caption">Send an email reminding me to rate an item a week after
							purchase
						</p>
					</label>
					<label for="two">
						<input type="radio" id="two" name="item" value="2" />
						<b>Item update notifications</b>
						<p class="pl-3 user-caption">Send an email when an item I've purchased is updated
						</p>
					</label>
					<label for="three">
						<input type="radio" id="three" name="item" value="3" />
						<b>Team comment notifications</b>
						<p class="pl-3 user-caption">Send me an email when someone comments on one of my team items
						</p>
					</label>
					<label for="four">
						<input type="radio" id="four" name="item" value="4" />
						<b>Daily summary emails</b>
						<p class="pl-3 user-caption">Send me a daily summary of all items approved or rejected
						</p>
					</label>
				</div>
			</div>
		</div>

	</div>
	<div class="w-100 text-right mb-5">
		<button class="btn-cyan btn-rounded py-2 user-caption ml-auto mr-1"> <b>Save Changes </b></button>

	</div>
</div>

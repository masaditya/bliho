<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/css/dashboard.css" />
	<link rel="stylesheet" href="<?=base_url()?>assets/css/css/style.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="d-flex w-auto justify-content-center ">
			<ul class="nav shadow bg-white rounded" role="tablist">
				<li class="nav-item tab ">
					<a href="#step-1" id="step1-tab" class="nav-link " aria-selected="true" data-toggle="tab"
						role="tab">Profile</a>
				</li>
				<li class="nav-item tab active-tab">
					<a href="#step-2" id="step2-tab" class="nav-link active" aria-selected="false" data-toggle="tab"
						role="tab">Following</a>
				</li>
				<li class="nav-item tab">
					<a href="#step-3" id="step3-tab" class="nav-link " aria-selected="false" data-toggle="tab"
						role="tab">Setting</a>
				</li>
				<li class="nav-item tab">
					<a href="#step-4" id="step4-tab" class="nav-link " aria-selected="false" data-toggle="tab"
						role="tab">Download</a>
				</li>
				<li class="nav-item tab">
					<a href="#step-5" id="step5-tab" class="nav-link " aria-selected="false" data-toggle="tab"
						role="tab">Favorite</a>
				</li>
				<li class="nav-item tab">
					<a href="#step-6" id="step6-tab" class="nav-link " aria-selected="false" data-toggle="tab"
						role="tab">My Subscription</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="container mt-5 tab-content">
		<div class="tab-pane fade " id="step-1" aria-labelledby="step1-tab" role="tabpanel">
			<?= include 'section-profile.php' ?>
		</div>

		<!-- section following -->
		<div class="tab-pane fade show active" id="step-2" aria-labelledby="step2-tab" role="tabpanel">
			<?php include 'section-follow-empty.php' ?>

		</div>

		<!-- section setting -->
		<div class="tab-pane fade" id="step-3" aria-labelledby="step3-tab" role="tabpanel">
			Setting
		</div>

		<!-- section download -->
		<div class="tab-pane fade" id="step-4" aria-labelledby="step4-tab" role="tabpanel">
			Download
		</div>

		<!-- section favorite -->
		<div class="tab-pane fade" id="step-5" aria-labelledby="step5-tab" role="tabpanel">
			Favorite
		</div>

		<!-- section subscription -->
		<div class="tab-pane fade" id="step-6" aria-labelledby="step6-tab" role="tabpanel">
			My Subscription
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

	<script>
		let tab = document.querySelectorAll(".tab");
		let link = document.querySelectorAll("a[data-toggle='tab']");

		function changebg(x) {
			$(tab[x]).addClass("active-tab");
			for (let i = 0; i < tab.length; i++) {
				if (i != x) {
					$(tab[i]).removeClass("active-tab");
				}
			}
		}

		$(document).ready(function () {
			for (let i = 0; i < tab.length; i++) {
				$(tab[i]).click(function () {
					changebg(i);
				});
			}
		});

	</script>
</body>

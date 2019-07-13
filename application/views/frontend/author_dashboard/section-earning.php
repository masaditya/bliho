<head>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<div class="container w-65">
	<div class="my-4 mx-auto">
		<div class="row p-0">
			<div class="col-md-6 m-0 py-0">
				<div class="bg-gray rounded-xs">
					<div class="container-fluid py-4">
						<p class="text-white m-0">Sales earnings this month (March), after associated author fees, &
							before
							taxes:</p>
					</div>
					<h2 class="text-white text-center pb-3"> <b> $ 0 </b> </h2>
				</div>
			</div>
			<div class="col-md-6 my-auto">
				<div class="bg-gray rounded-xs py-2 text-center">
					<div class="container-fluid py-4">
						<p class="text-white m-0">Your balance</p>
					</div>
					<h2 class="text-white  pb-3"> <b> $ 0 </b> </h2>
				</div>
			</div>
		</div>

		<div class="px-4 mt-5">
			<div class="row">
				<div class="dropdown text-left">
					<button class="btn-cyan w-100 active-tab rounded-xs user-caption px-2 py-2 m-0" type="button"
						data-toggle="dropdown">
						Item Sales
						<span class="fas ml-5 mr-0 fa-angle-down"></span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
						<li><a href="#">JavaScript</a></li>
					</ul>
				</div>
				<b class="ml-5 my-auto"> <a href="">All Time /</a> <a href=""> 2019 /</a> March </b>
			</div>
		</div>
		<div class="my-5 border border-2 rounded-sm p-3">
			<canvas id="myChart"></canvas>

		</div>

	</div>
</div>
<script>
	var ctx = document.getElementById('myChart').getContext('2d');

	// dummy data here 
	var label = []
	var data = []
	for (let i = 1; i < 30; i++) {
		label.push(i)

		if (i < 12) {
			if (i % 3 == 0) {
				data.push(i * 2)
			} else {
				data.push(i + 5)
			}
		}
	}
	// dummy data up here

	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'line',

		// The data for our dataset
		data: {
			labels: label,
			datasets: [{
				label: 'Earnings in this date',
				borderColor: '#e05555',
				fill: false,
				data: data,
				borderWidth: 2,
				pointBackgroundColor: "#ffffff",
				pointBorderColor: "#999999",
				pointBorderWidth: 1,
				pointRadius: 2,
				pointHoverRadius: 3

			}]
		},

		// Configuration options go here
		options: {
			legend: {
				display: false
			},
			scales: {
				xAxes: [{
					gridLines: {
						display: true
					}
				}],
				yAxes: [{
					gridLines: {
						display: false
					},
					ticks: {
						display: false
					}
				}]
			},
			elements: {
				line: {
					tension: 0
				}
			}
		}

	});

</script>

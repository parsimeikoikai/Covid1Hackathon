<style>
	#chartdiv,#chartdiv2,#chartdiv3 {
		width: 100%;
		height: 500px;
		background: #D3D3D3;
	}
	.container
	{
		border-style: ridge;
	}
	a.navList{text-decoration: none; color: gray;}
	a.activePage{ color: green;!important; border-bottom: solid; border-width: 3px;}

</style>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>



<script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>

<div class="container">
	<header class="topbar">
		<nav class="navbar top-navbar navbar-expand-md navbar-light">
			<div class="navbar-header">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<a class="navbar-brand" href="<? echo base_url('admin/dashboard') ?>">
								<b>
									<img src="<?php echo base_url(); ?>assets/images/A4Tlogo.png" alt="Logo"
										 class="img-responsive dark-logo"/>
								</b>
							</a>
						</div>
					</div>
				</div>

			</div>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url('') ?>"><span class="text-warning">AID TRACKER</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="#">EXPENDITURE</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#">COVID-19 CASES </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">USEFUL LINKS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">ANALYSIS</a>
				</li>
			</ul>



		</nav>
	</header>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger">

			<div class="text-center">
				<h3><b>TOTAL AID: 194,663,072,350</b></h3>
			</div>

			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header alert-success">
					Fund Received -National Government (2020)
				</div>
				<div class="card-body">
					<div id="chartdiv"></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header alert-info">
					Archive Menu
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="user_email">
							Select Counties

						</label>
						<select class="form-control">
							<?php foreach ($counties_list as $list){ ?>
							<option><?php echo $list->name ?></option>
							<?php } ?>
						</select>
				</div>
					<div class="form-group">
						<label for="user_email">
							Select Month

						</label>
						<select class="form-control">
							<?php foreach ($months_list as $list){ ?>
								<option><?php echo $list->month ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="user_email">
							Select Year

						</label>
						<select class="form-control">
							<option>2020</option>
							<option>2021</option>

						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-outline-success btn-block">Filter</button>
					</div>
			</div>

			</div>
		</div>


	</div>
	<hr />
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header alert-success">
					Main Donors
				</div>
				<div class="card-body">
					<div id="chartdiv2"></div>
				</div>
			</div>

		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header alert-success">
					Recipient Counties (Ksh * 1M)
				</div>
				<div class="card-body">
					<div id="chartdiv3">

					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<script>
	am4core.ready(function() {

// Themes begin
		am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
		var chart = am4core.create("chartdiv", am4charts.XYChart3D);

// Add data
		<?php foreach ($national_government_data as $values) {?>
		chart.data = [{
			"country": "January",
			"visits": <?php echo $values->Jan ?>
		}, {
			"country": "February",
			"visits": <?php echo $values->Feb ?>
		}, {
			"country": "March",
			"visits": <?php echo $values->March ?>
		}, {
			"country": "April",
			"visits": <?php echo $values->April ?>
		}, {
			"country": "May",
			"visits":  <?php echo $values->May ?>
		}, {
			"country": "June",
			"visits": <?php echo $values->June ?>
		}, {
			"country": "July",
			"visits": <?php echo $values->July ?>
		}, {
			"country": "August",
			"visits": <?php echo $values->August ?>
		}, {
			"country": "September",
			"visits":  <?php echo $values->September ?>
		}, {
			"country": "October",
			"visits":  <?php echo $values->October ?>
		}, {
			"country": "November",
			"visits":  <?php echo $values->November ?>
		}, {
			"country": "December",
			"visits":  <?php echo $values->December ?>
		}];
		<?php } ?>

// Create axes
		let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "country";
		categoryAxis.renderer.labels.template.rotation = 270;
		categoryAxis.renderer.labels.template.hideOversized = false;
		categoryAxis.renderer.minGridDistance = 20;
		categoryAxis.renderer.labels.template.horizontalCenter = "right";
		categoryAxis.renderer.labels.template.verticalCenter = "middle";
		categoryAxis.tooltip.label.rotation = 270;
		categoryAxis.tooltip.label.horizontalCenter = "right";
		categoryAxis.tooltip.label.verticalCenter = "middle";

		let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.title.text = "Amount(Ksh)";
		valueAxis.title.fontWeight = "bold";

// Create series
		var series = chart.series.push(new am4charts.ColumnSeries3D());
		series.dataFields.valueY = "visits";
		series.dataFields.categoryX = "country";
		series.name = "Visits";
		series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
		series.columns.template.fillOpacity = .8;

		var columnTemplate = series.columns.template;
		columnTemplate.strokeWidth = 2;
		columnTemplate.strokeOpacity = 1;
		columnTemplate.stroke = am4core.color("#FFFFFF");

		columnTemplate.adapter.add("fill", function(fill, target) {
			return chart.colors.getIndex(target.dataItem.index);
		})

		columnTemplate.adapter.add("stroke", function(stroke, target) {
			return chart.colors.getIndex(target.dataItem.index);
		})

		chart.cursor = new am4charts.XYCursor();
		chart.cursor.lineX.strokeOpacity = 0;
		chart.cursor.lineY.strokeOpacity = 0;

	}); // end am4core.ready()
</script>
<script>
	am4core.ready(function() {

// Themes begin
		am4core.useTheme(am4themes_material);
		am4core.useTheme(am4themes_animated);
// Themes end



// Create chart instance
		var chart = am4core.create("chartdiv2", am4charts.RadarChart);

// Add data
		chart.data = [{
			"category": "Donor 1",
			"value": 80,
			"full": 100
		}, {
			"category": "Donor 2",
			"value": 35,
			"full": 100
		}, {
			"category": "Donor 3",
			"value": 92,
			"full": 100
		}, {
			"category": "Donor 4",
			"value": 68,
			"full": 100
		}];

// Make chart not full circle
		chart.startAngle = -90;
		chart.endAngle = 180;
		chart.innerRadius = am4core.percent(20);

// Set number format
		chart.numberFormatter.numberFormat = "#.#'%'";

// Create axes
		var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "category";
		categoryAxis.renderer.grid.template.location = 0;
		categoryAxis.renderer.grid.template.strokeOpacity = 0;
		categoryAxis.renderer.labels.template.horizontalCenter = "right";
		categoryAxis.renderer.labels.template.fontWeight = 500;
		categoryAxis.renderer.labels.template.adapter.add("fill", function(fill, target) {
			return (target.dataItem.index >= 0) ? chart.colors.getIndex(target.dataItem.index) : fill;
		});
		categoryAxis.renderer.minGridDistance = 10;

		var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
		valueAxis.renderer.grid.template.strokeOpacity = 0;
		valueAxis.min = 0;
		valueAxis.max = 100;
		valueAxis.strictMinMax = true;

// Create series
		var series1 = chart.series.push(new am4charts.RadarColumnSeries());
		series1.dataFields.valueX = "full";
		series1.dataFields.categoryY = "category";
		series1.clustered = false;
		series1.columns.template.fill = new am4core.InterfaceColorSet().getFor("alternativeBackground");
		series1.columns.template.fillOpacity = 0.08;
		series1.columns.template.cornerRadiusTopLeft = 20;
		series1.columns.template.strokeWidth = 0;
		series1.columns.template.radarColumn.cornerRadius = 20;

		var series2 = chart.series.push(new am4charts.RadarColumnSeries());
		series2.dataFields.valueX = "value";
		series2.dataFields.categoryY = "category";
		series2.clustered = false;
		series2.columns.template.strokeWidth = 0;
		series2.columns.template.tooltipText = "{category}: [bold]{value}[/]";
		series2.columns.template.radarColumn.cornerRadius = 20;

		series2.columns.template.adapter.add("fill", function(fill, target) {
			return chart.colors.getIndex(target.dataItem.index);
		});

// Add cursor
		chart.cursor = new am4charts.RadarCursor();

	}); // end am4core.ready()
</script>
<script>
	am4core.ready(function() {

// Themes begin
		am4core.useTheme(am4themes_animated);
// Themes end

		/**
		 * Chart design taken from Samsung health app
		 */

		var chart = am4core.create("chartdiv3", am4charts.XYChart);
		chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

		chart.paddingRight = 40;
         var county_img = "https://i.pinimg.com/564x/27/7d/be/277dbe76b74b7db987875fd69f35741e.jpg";
		chart.data = [{
			"name": "County 1",
			"steps": 45688,
			"href":county_img
		}, {
			"name": "County 2",
			"steps": 35781,
			"href": county_img
		}, {
			"name": "County 3",
			"steps": 25464,
			"href": county_img
		}, {
			"name": "County 4",
			"steps": 18788,
			"href":county_img
		}, {
			"name": "County 5",
			"steps": 15465,
			"href": county_img
		}, {
			"name": "County 6",
			"steps": 11561,
			"href": county_img
		}];

		var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "name";
		categoryAxis.renderer.grid.template.strokeOpacity = 0;
		categoryAxis.renderer.minGridDistance = 10;
		categoryAxis.renderer.labels.template.dx = -40;
		categoryAxis.renderer.minWidth = 120;
		categoryAxis.renderer.tooltip.dx = -40;

		var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
		valueAxis.renderer.inside = true;
		valueAxis.renderer.labels.template.fillOpacity = 0.3;
		valueAxis.renderer.grid.template.strokeOpacity = 0;
		valueAxis.min = 0;
		valueAxis.cursorTooltipEnabled = false;
		valueAxis.renderer.baseGrid.strokeOpacity = 0;
		valueAxis.renderer.labels.template.dy = 20;

		var series = chart.series.push(new am4charts.ColumnSeries);
		series.dataFields.valueX = "steps";
		series.dataFields.categoryY = "name";
		series.tooltipText = "{valueX.value}";
		series.tooltip.pointerOrientation = "vertical";
		series.tooltip.dy = - 30;
		series.columnsContainer.zIndex = 100;

		var columnTemplate = series.columns.template;
		columnTemplate.height = am4core.percent(50);
		columnTemplate.maxHeight = 50;
		columnTemplate.column.cornerRadius(60, 10, 60, 10);
		columnTemplate.strokeOpacity = 0;

		series.heatRules.push({ target: columnTemplate, property: "fill", dataField: "valueX", min: am4core.color("#e5dc36"), max: am4core.color("#5faa46") });
		series.mainContainer.mask = undefined;

		var cursor = new am4charts.XYCursor();
		chart.cursor = cursor;
		cursor.lineX.disabled = true;
		cursor.lineY.disabled = true;
		cursor.behavior = "none";

		var bullet = columnTemplate.createChild(am4charts.CircleBullet);
		bullet.circle.radius = 30;
		bullet.valign = "middle";
		bullet.align = "left";
		bullet.isMeasured = true;
		bullet.interactionsEnabled = false;
		bullet.horizontalCenter = "right";
		bullet.interactionsEnabled = false;

		var hoverState = bullet.states.create("hover");
		var outlineCircle = bullet.createChild(am4core.Circle);
		outlineCircle.adapter.add("radius", function (radius, target) {
			var circleBullet = target.parent;
			return circleBullet.circle.pixelRadius + 10;
		})

		var image = bullet.createChild(am4core.Image);
		image.width = 60;
		image.height = 60;
		image.horizontalCenter = "middle";
		image.verticalCenter = "middle";
		image.propertyFields.href = "href";

		image.adapter.add("mask", function (mask, target) {
			var circleBullet = target.parent;
			return circleBullet.circle;
		})

		var previousBullet;
		chart.cursor.events.on("cursorpositionchanged", function (event) {
			var dataItem = series.tooltipDataItem;

			if (dataItem.column) {
				var bullet = dataItem.column.children.getIndex(1);

				if (previousBullet && previousBullet != bullet) {
					previousBullet.isHover = false;
				}

				if (previousBullet != bullet) {

					var hs = bullet.states.getKey("hover");
					hs.properties.dx = dataItem.column.pixelWidth;
					bullet.isHover = true;

					previousBullet = bullet;
				}
			}
		})

	}); // end am4core.ready()
</script>


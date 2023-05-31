<hr>
<!-- grafico de provincias -->
<?php
			$totalMedicos=0;
				$totalPacientes=0;
			$totalMasculinos=0;
			$totalFemeninos=0;
			$totalMasculinos=0;
			$totalFemeninos=0;
			$porcentajeMasculinos=0;
			$porcentajeFemeninos=0;
			$porcentajeMasculinos=0;
			$porcentajeFemeninos=0;
			$totalActivos=0;
			$totalInactivos=0;
			$porcentajeActivos=0;
			$porcentajeInactivos=0;

			$totalPsiquiatrias=0;
			$totalCirugias_generales=0;
			$totalPsiquiatrias=0;
			$totalMedicinas_generales=0;
			$totalMedicinas_preventives=0;


			$totalAspirinas=0;
			$totalParacetamoles=0;
			$totalOmeprazoles=0;
			$totalCarisoprodoles=0;
			$totalDiazepamales=0;
			$totalIbuprofenos=0;
			$totalMedicamentos=0;
			$porcentajeMedicamentos=0;

			$totalReuniones_internas=0;
			$totalReuniones_externas=0;
			$totalReuniones_formales=0;
			$totalReuniones_oficiales=0;

			$totalInmunoterapias=0;
			$totalQuimioterapias=0;
			$totalTerapias_fotodinamicas=0;
			$totalTerapias_de_hipertermias=0;
			$porcentajeInmunoterapias=0;
			$porcentajeQuimioterapias=0;
			$porcentajeTerapias_fotodinamicas=0;
			$porcentajeTerapias_de_hipertermias=0;

			$totalAzuayes=0;
			$totalPichinchas=0;
			$totalCotopaxis=0;
			$totalChimborazos=0;
			$porcentajeAzuayes=0;
			$porcentajePichinchas=0;
			$porcentajeCotopaxis=0;
			$porcentajeChimborazos=0;



			if($listadoMedicos){
					$totalMedicos=sizeof(
						$listadoMedicos->result()
					);
			}

						if($listadoPacientes){
								$totalPacientes=sizeof(
									$listadoPacientes->result()
								);
						}
						if($listadoMasculinos){
							$totalMasculinos=sizeof(
								$listadoMasculinos->result()
							);
						}
						if($listadoFemeninos){
							$totalFemeninos=sizeof(
								$listadoFemeninos->result()
							);
						}
			if($listadoMasculinos){
				$totalMasculinos=sizeof(
					$listadoMasculinos->result()
				);
			}
			if($listadoFemeninos){
				$totalFemeninos=sizeof(
					$listadoFemeninos->result()
				);
			}
			if($listadoActivos){
				$totalActivos=sizeof(
					$listadoActivos->result()
				);
			}
				if($listadoInactivos){
					$totalInactivos=sizeof(
						$listadoInactivos->result()
					);
				}

				if($listadoReumatologias){
					$totalReumatologias=sizeof(
						$listadoReumatologias->result()
					);
				}
				if($listadoCirugias_generales){
					$totalCirugias_generales=sizeof(
						$listadoCirugias_generales->result()
					);
				}
					if($listadoPsiquiatrias){
						$totalPsiquiatrias=sizeof(
							$listadoPsiquiatrias->result()
						);
					}
						if($listadoMedicinas_generales){
			$totalMedicinas_generales=sizeof(
				$listadoMedicinas_generales->result()
			);
		}

			if($totalMedicos>0){
 					$porcentajeMasculinos=
					$totalMasculinos*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajeFemeninos=
					$totalFemeninos*100/$totalMedicos;
			}
			if($totalPacientes>0){
					$porcentajeMasculinos=
					$totalMasculinos*100/$totalPacientes;
			}
			if($totalPacientes>0){
					$porcentajeFemeninos=
					$totalFemeninos*100/$totalPacientes;
			}

			if($listadoAspirinas){
				$totalAspirinas=sizeof(
					$listadoAspirinas->result()
				);
			}
			if($listadoParacetamoles){
				$totalParacetamoles=sizeof(
					$listadoParacetamoles->result()
				);
			}
			if($listadoOmeprazoles){
				$totalOmeprazoles=sizeof(
					$listadoOmeprazoles->result()
				);
			}
			if($listadoCarisoprodoles){
				$totalCarisoprodoles=sizeof(
					$listadoCarisoprodoles->result()
				);
			}
			if($listadoDiazepamales){
				$totalDiazepamales=sizeof(
					$listadoDiazepamales->result()
				);
			}
			if($listadoIbuprofenos){
				$totalIbuprofenos=sizeof(
					$listadoIbuprofenos->result()
				);
			}

			if($totalMedicos>0){
					$porcentajeMedicamentos=
					$totalMedicamentos*100/$totalMedicos;
			}

			if($listadoReuniones_internas){
				$totalReuniones_internas=sizeof(
					$listadoReuniones_internas->result()
				);
			}
			if($listadoReuniones_externas){
				$totalReuniones_externas=sizeof(
					$listadoReuniones_externas->result()
				);
			}
			if($listadoReuniones_formales){
				$totalReuniones_formales=sizeof(
					$listadoReuniones_formales->result()
				);
			}
			if($listadoReuniones_oficiales){
				$totalReuniones_oficiales=sizeof(
					$listadoReuniones_oficiales->result()
				);
			}


			if($listadoInmunoterapias){
				$totalInmunoterapias=sizeof(
					$listadoInmunoterapias->result()
				);
			}
			if($listadoQuimioterapias){
				$totalQuimioterapias=sizeof(
					$listadoQuimioterapias->result()
				);
			}
			if($listadoTerapias_fotodinamicas){
				$totalTerapias_fotodinamicas=sizeof(
					$listadoTerapias_fotodinamicas->result()
				);
			}
			if($listadoTerapias_de_hipertermias){
				$totalTerapias_de_hipertermias=sizeof(
					$listadoTerapias_de_hipertermias->result()
				);
			}
			if($totalMedicos>0){
					$porcentajeInmunoterapias=
					$totalInmunoterapias*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajeQuimioterapias=
					$totalQuimioterapias*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajeTerapias_fotodinamicas=
					$totalTerapias_fotodinamicas*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajeTerapias_de_hipertermias=
					$totalTerapias_de_hipertermias*100/$totalMedicos;
			}


			if($listadoAzuayes){
				$totalAzuayes=sizeof(
					$listadoAzuayes->result()
				);
			}
			if($listadoPichinchas){
				$totalPichinchas=sizeof(
					$listadoPichinchas->result()
				);
			}
			if($listadoCotopaxis){
				$totalCotopaxis=sizeof(
					$listadoCotopaxis->result()
				);
			}
			if($listadoChimborazos){
				$totalChimborazos=sizeof(
					$listadoChimborazos->result()
				);
			}
			if($totalMedicos>0){
					$porcentajeAzuayes=
					$totalAzuayes*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajePichinchas=
					$totalPichinchas*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajeCotopaxis=
					$totalCotopaxis*100/$totalMedicos;
			}
			if($totalMedicos>0){
					$porcentajeChimborazos=
					$totalChimborazos*100/$totalMedicos;
			}

 ?>


<!-- grafico de provincias -->
  	<div class="col-md-4">
 	 	<div class="panel panel-success">
 			  <div class="panel-body">
 					<a  <i class="fa fa-user"></i><h1>TOTAL DOCTORS</a>
  	  </div>
  	  <div class="panel-footer">
 			<?php if ($listadoMedicos): ?>
 				<?php echo sizeof($listadoMedicos->result()); ?>
 				<?php else: ?>
 					<h3>0</h3>
 			<?php endif; ?>
  		</div>
  	</div>
  	</div>
<!-- grafico de provincias -->
 	<div class="col-md-4">
 	<div class="panel panel-primary">
 	  <div class="panel-body">
 	  <a  <i class="fa fa-female" aria-hidden="true"></i><h1>TOTAL WOMEN DOCTORS</a>
 	  </div>
 	  <div class="panel-footer">
				 <h4>numero:</h4>
 				<?php echo $totalFemeninos; ?>
 					<br>
					<hr>
			<h4>porcentaje</h4>
 		<?php echo $porcentajeFemeninos ?>%
 		</div>
 	</div>
 	</div>


<!-- grafico de provincias -->
 <div class="col-md-4">
 <div class="panel panel-primary">
   <div class="panel-body">
   <a  <i class="fa fa-male" aria-hidden="true"></i><h1>TOTAL MEN DOCTORS</a>
   </div>
   <div class="panel-footer">
		 <h4>numero:</h4>
 			<?php echo $totalMasculinos; ?>
 				<br>
				<hr>
				<h4>porcentaje</h4>
 	<?php echo $porcentajeMasculinos ?>%
 	</div>
 </div>
 </div>

<br>
<br>
<br>


<!-- grafico de provincias -->
  	<div class="col-md-4">
 	 	<div class="panel panel-success">
 			  <div class="panel-body">

					<center><div class="text-warning"><i class="fa fa-user"></i><h1>TOTAL ACTIVE PHYSICIANS</h1></div></center>
  	  </div>
  	  <div class="panel-footer">
 			<?php if ($listadoActivos): ?>
 				<?php echo sizeof($listadoActivos->result()); ?>
 				<?php else: ?>
 					<h3>0</h3>
 			<?php endif; ?>
  		</div>
  	</div>
  	</div>
<br>
<br>

<!-- grafico de provincias -->
		  	<div class="col-md-4">
		 	 	<div class="panel panel-success">
		 			  <div class="panel-body">

								<center><div class="text-warning"><i class="fa fa-user"></i><h1>TOTAL INACTIVE DOCTORS</h1></div></center>
		  	  </div>
		  	  <div class="panel-footer">
		 			<?php if ($listadoInactivos): ?>
		 				<?php echo sizeof($listadoInactivos->result()); ?>
		 				<?php else: ?>
		 					<h3>0</h3>
		 			<?php endif; ?>
		  		</div>
		  	</div>
		  	</div>
<br>
<br>
<br>
<br>


<div class="col-md-4">
<div class="panel panel-success">
		<div class="panel-body">
		<center><div class="text-warning"><i class="fa fa-user"></i><h1>FEMALE PATIENT KPI</h1></div></center>


	</div>
	<div class="panel-footer">
	<?php if ($listadoPacientes): ?>
		<?php echo sizeof($listadoPacientes->result()); ?>
		<?php else: ?>
			<h3>0</h3>
	<?php endif; ?>
	</div>
</div>
</div>



<br>
								<!-- grafico de provincias -->

						<center><div class="text-info">
						 <h1>FEMALE PATIENT KPI</h1></div></center>
								<br>
								<div class="row">
								  <div class="col-md-6">
								      <canvas id="graficoCircular8" height="250px"></canvas>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-12">
							<center><script type="text/javascript">
								var graficoCircular8 = new Chart($("#graficoCircular8"), {
								type: "pie",
								data: {
									labels: ["PACIENTES", "PORCENTAJE"],
									datasets: [{
										label: "Total",
										data: [<?php echo round($totalFemeninos,2); ?>,
											<?php echo round($porcentajeFemeninos,2); ?>,
											],
										backgroundColor: [
											"orange",
											"pink",
											'',
											''
										],
										offset: [
											20
										]
									}]
								},
								options: {
									color: "#0000ff",
									responsive: true,
									maintainAspectRatio: true,
									aspectRatio: 2,
									layout: {
										padding: 60
									},
									rotation: 90,
									plugins: {
										legend: {
											position: "right",
											labels: {
												boxWidth: 25,
												boxHeight: 25,
												font: {
													weight: "bold",
													family: "Noto Sans"
												}
											}
										}
									}
								}
								});
								</script></center>
							</div>
						</div>

							 <br><br>
							  <center><div class="text-info">
							<h1>MALE PATIENT KPI</h1></div></center>
							 <!-- grafico de provincias -->
							 <center><div class="row">
							 	<div class="col-md-6">
							       <canvas id="graficoCircular12" height="150px"></canvas>
							   </div>
							 </div>
							 <script type="text/javascript">
							 var graficoCircular12 = new Chart($("#graficoCircular12"), {
							     type: "doughnut",
							     data: {
							         labels: ["PACIENTES", "PORCENTAJE"],
							         datasets: [{
							             label: "Total",
							             data: [<?php echo $totalMasculinos; ?>,
							                 <?php echo $porcentajeMasculinos; ?>,

							             ],
							             backgroundColor: [
							                 "Lawngreen",
							                 "pink",
							                 "",
							                 ""
							             ],
							             offset: [
							                 20
							             ]
							         }]
							     },
							     options: {
							         color: "#0000ff",
							         responsive: true,
							         maintainAspectRatio: true,
							         aspectRatio: 2,
							         layout: {
							             padding: 20
							         },
							         rotation: 90,
							         plugins: {
							             legend: {
							                 position: "right",
							                 labels: {
							                     boxWidth: 25,
							                     boxHeight: 25,
							                     font: {
							                         weight: "bold",
							                         family: "Noto Sans"
							                     }
							                 }
							             }
							         }
							     }
							 });
							 </script></center>

<br><br>

<center><div class="text-info">
<h1>SPECIALTIES KPI</h1></div></center>
<!-- grafico de provincias -->
<center><div class="row">
	<div class="col-md-6">
      <canvas id="graficoCircular9" height="150px"></canvas>
  </div>
</div>
<script type="text/javascript">
var graficoCircular9 = new Chart($("#graficoCircular9"), {
    type: "doughnut",
    data: {
        labels: ["REUMATOLOGIA", "CIRUGIA GENERAL", "PSIQUIATRIA", "MEDICINA GENERAL"],
        datasets: [{
            label: "Total",
            data: [<?php echo $totalReumatologias; ?>,
                <?php echo $totalCirugias_generales; ?>,
                <?php echo $totalPsiquiatrias; ?>,
                <?php echo $totalCirugias_generales; ?>,
            ],
            backgroundColor: [
                "blue",
                "pink",
                "yellow",
                "green"
            ],
            offset: [
                20
            ]
        }]
    },
    options: {
        color: "#0000ff",
        responsive: true,
        maintainAspectRatio: true,
        aspectRatio: 2,
        layout: {
            padding: 20
        },
        rotation: 90,
        plugins: {
            legend: {
                position: "right",
                labels: {
                    boxWidth: 25,
                    boxHeight: 25,
                    font: {
                        weight: "bold",
                        family: "Noto Sans"
                    }
                }
            }
        }
    }
});
</script></center>

<!-- grafico de provincias -->

<center><div class="text-info">
<h1>DRUG KPI</h1></div></center>
<div class="row">
  <div class="col-md-6">
      <canvas id="graficoBarras3" height="150px"></canvas>
  </div>
</div>
<script type="text/javascript">

var graficoBarras3 = new Chart(
	$("#graficoBarras3"), {
		type: "bar",
		data: {
			labels: ["ASPIRINA", "PARACETAMOL", "OMEPRAZOLL", "CARISOPRODOL", "DIAZEPAM" , "IBUPROFENO"],
			datasets: [{
				label: "TOTAL",
				data: [
					<?php echo $totalAspirinas; ?>,
					<?php echo $totalParacetamoles; ?>,
					<?php echo $totalOmeprazoles; ?>,
					<?php echo $totalCarisoprodoles; ?>,
					<?php echo $totalDiazepamales; ?>,
					<?php echo $totalIbuprofenos; ?>],
				backgroundColor:
				[
					'blue',
					'orange',
						'purple',
							'Cyan',
								'Springgreen',
					'yellow'


				]
				,
			}]
		},
		options: {
			plugins: {
				// Quitar Legend
				legend: {
					display: false,
				}
			},
			responsive: true,
			maintainAspectRatio: true,
			scales: {
				yAxes: {
					suggestedMin: "0",
					suggestedMax: "1000",
					ticks: {
						// forces step size to be 50 units
						stepSize: 50,
						callback: function(value, index, values) {
							return value + '';
						},
						color: "#000000",
						font: {
							weight: "bold",
							family: "Noto Sans"
						}
					}
				},
				xAxes: {
					ticks: {
						color: "purple",
						font: {
							weight: "bold",
							family: "Noto Sans"
						}
					}
				}
			},
		}
	}
);

</script>

<!-- grafico de provincias -->
<br><br>

<center><div class="text-info">
<h1>MEETING KPI</h1></div></center>
<div class="row">

	<div class="col-md-6">
      <canvas id="graficoBarras4" height="150px"></canvas>
  </div>
</div>
<script type="text/javascript">

var graficoBarras4 = new Chart(
    $("#graficoBarras4"), {
        type: "polarArea",
        data: {
            labels: ["REUNION INTERNA", "REUNION EXTERNA", "REUNION FORMA", "REUNION OFICIAL"],
            datasets: [{
                label: "TOTAL",
                data: [
                    <?php echo $totalReuniones_internas; ?>,
                    <?php echo $totalReuniones_externas; ?>,
                    <?php echo $totalReuniones_formales; ?>,
                    <?php echo $totalReuniones_oficiales; ?>
                ],
                backgroundColor: [
                    'blue',
                    'green',
										'orange',
										'yellow'
                ],
            }]
        },
        options: {
            plugins: {
                // Quitar Legend
                legend: {
                    display: false,
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                r: {
                    suggestedMin: 0,
                    suggestedMax: 1000,
                    ticks: {
                        stepSize: 50,
                        callback: function(value, index, values) {
                            return value + '';
                        },
                        color: "#000000",
                        font: {
                            weight: "bold",
                            family: "Noto Sans"
                        }
                    }
                }
            },
        }
    }
);


</script>
<br>
<br>

<!-- grafico de provincias -->
<center><div class="text-info">
<h1>KPI OF PROVINCES</h1></div></center>
<br>
<div class="row">
  <div class="col-md-6">
      <canvas id="graficoCircular5" height="250px"></canvas>
  </div>

</div>

<script type="text/javascript">

var graficoCircular5 = new Chart($("#graficoCircular5"), {
type: "pie",
data: {
	labels: ["AZUAY", "PICHINCHA", "COTOPAXI", "CHIMBORAZO"],
	datasets: [{
		label: "Total",
		data: [<?php echo round($totalAzuayes,2); ?>,
			<?php echo round($totalPichinchas,2); ?>,
						<?php echo round($totalCotopaxis,2); ?>,
			<?php echo round($totalChimborazos,2); ?>],
		backgroundColor: [
			"blue",
			"pink",
			'orange',
			'yellow'
		],
		offset: [
			20
		]
	}]
},
options: {
	color: "#0000ff",
	responsive: true,
	maintainAspectRatio: true,
	aspectRatio: 2,
	layout: {
		padding: 20
	},
	rotation: 90,
	plugins: {
		legend: {
			position: "right",
			labels: {
				boxWidth: 25,
				boxHeight: 25,
				font: {
					weight: "bold",
					family: "Noto Sans"
				}
			}
		}
	}
}
});


</script>

<center><div class="text-info">
<h1>THERAPIES KPI</h1></div></center>
<br>
<br>
<div class="row">
  <div class="col-md-6">
      <canvas id="graficoCircular6" height="250px"></canvas>
  </div>
  <div class="col-md-6">
      <canvas id="graficoBarras6" height="150px"></canvas>
  </div>
</div>

<script type="text/javascript">

var graficoCircular6 = new Chart($("#graficoCircular6"), {
type: "pie",
data: {
	labels: ["TERAPIA HIPERTERMIAS", "TERAPIA FOTODINAMICA", "QUIMIOTERAPIA", "INMUNOTERAPIA"],
	datasets: [{
		label: "Total",
		data: [<?php echo round($porcentajeTerapias_de_hipertermias,2); ?>,
			<?php echo round($porcentajeTerapias_fotodinamicas,2); ?>,
						<?php echo round($porcentajeQuimioterapias,2); ?>,
			<?php echo round($porcentajeInmunoterapias,2); ?>],
		backgroundColor: [
			"blue",
			"pink",
			'orange',
			'yellow'
		],
		offset: [
			20
		]
	}]
},
options: {
	color: "#0000ff",
	responsive: true,
	maintainAspectRatio: true,
	aspectRatio: 2,
	layout: {
		padding: 20
	},
	rotation: 90,
	plugins: {
		legend: {
			position: "right",
			labels: {
				boxWidth: 25,
				boxHeight: 25,
				font: {
					weight: "bold",
					family: "Noto Sans"
				}
			}
		}
	}
}
});

var graficoBarras6 = new Chart(
	$("#graficoBarras6"), {
		type: "bar",
		data: {
			labels: ["TERAPIA HIPERTERMIAS", "TERAPIA FOTODINAMICA", "QUIMIOTERAPIA", "INMUNOTERAPIA"],
			datasets: [{
				label: "TOTAL",
				data: [
					<?php echo $totalTerapias_de_hipertermias; ?>,
					<?php echo $totalTerapias_fotodinamicas; ?>,
					<?php echo $totalQuimioterapias; ?>,
					<?php echo $totalInmunoterapias; ?>],
				backgroundColor:
				[
					'blue',
					'pink',
					'orange',
						'yellow'
				]
				,
			}]
		},
		options: {
			plugins: {
				// Quitar Legend
				legend: {
					display: false,
				}
			},
			responsive: true,
			maintainAspectRatio: true,
			scales: {
				yAxes: {
					suggestedMin: "0",
					suggestedMax: "1000",
					ticks: {
						// forces step size to be 50 units
						stepSize: 50,
						callback: function(value, index, values) {
							return value + '';
						},
						color: "#000000",
						font: {
							weight: "bold",
							family: "Noto Sans"
						}
					}
				},
				xAxes: {
					ticks: {
						color: "purple",
						font: {
							weight: "bold",
							family: "Noto Sans"
						}
					}
				}
			},
		}
	}
);

</script>

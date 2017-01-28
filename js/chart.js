


/*     Chart Appareil de Mesure Disponible        */
$(function () {
               var processed_json = new Array();
               $.getJSON('data.php', function(data) {
                   // Populate series
                   for (i = 0; i < data.length; i++){
                       processed_json.push([data[i].Nom  , parseFloat(data[i].Id_Appareil)] );
                       console.log(data[i]);

                   }
                   console.log(processed_json);
                   // draw chart
                   $('#container').highcharts({
                   chart: {
                       type: "pie"
                   },
                   title: {
                       text: "Appareils de mesure"
                   },
                   xAxis: {
                       type: 'category',
                       allowDecimals: false,
                       title: {
                           text: ""
                       }
                   },
                   yAxis: {
                       title: {
                           text: "Id_Appareil"
                       }
                   },

                   series: [{
                     name: 'Subjects',
                       data: processed_json

                   }]
               });
           });


       });





			 $(function () {
			                var processed_json = new Array();
			                $.getJSON('datautilisateur.php', function(data) {
			                    // Populate series
			                    for (i = 0; i < data.length; i++){
			                        processed_json.push([data[i].Profil  , parseFloat(data[i].id)] );
			                        console.log(data[i]);

			                    }
			                    console.log(processed_json);
			                    // draw chart
			                    $('#user').highcharts({
			                    chart: {
			                        type: "pie"
			                    },
			                    title: {
			                        text: "Type d'utilisateur"
			                    },

                          tooltip: {
                              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                  },
                                  plotOptions: {
                                      pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        showInLegend: true
                                    }
                                },



			                    series: [{
			                      name: 'percentage',
			                        data: processed_json

			                    }]
			                });
			            });
			        });



	$(function () {
								 var processed_json = new Array();
                 var processed_json2 = new Array();
								 $.getJSON('dataMesure.php', function(data) {
										 // Populate series
										 for (i = 0; i < data.length; i++){
                        if (data[i].Mode == "ON"){
												 processed_json.push([data[i].Date_Mesure  , parseFloat(data[i].Id_Mesure, data[i].Mode )] );
												 console.log(data[i]);
                       }
										 }


                     for (i = 0; i < data.length; i++){
                        if (data[i].Mode == "OFF"){
												 processed_json2.push([data[i].Date_Mesure  , parseFloat(data[i].Id_Mesure, data[i].Mode )] );
												 console.log(data[i]);
                       }
										 }


										 console.log(processed_json);
										 // draw chart
										 $('#Mesure').highcharts({
										 chart: {
												 type: "column"
										 },
										 title: {
												 text: "Nombre de Marche/Arret"
										 },
										 xAxis: {
												 type: 'category',
												 allowDecimals: false,
												 title: {
														 text: ""
												 }
										 },
										 yAxis: {
												 title: {
														 text: "Nombre "
												 }
										 },
										 plotOptions: {
                      series: {
                          stacking: 'normal'
                      }
                      },

										 series: [{
											 name: 'ON',
												 data: processed_json


										 },{
											 name: 'OFF',
												 data: processed_json2


										 }
									 ]
								 });
						 });
				 });



$(function () {
				 var processed_json = new Array();
				 $.getJSON('datalocalisationOV.php', function(data) {
						 // Populate series
						 for (i = 0; i < data.length; i++){
								 processed_json.push([data[i].Localisation  , parseFloat(data[i].iNom)] );
								 console.log(data[i]);

						 }
						 console.log(processed_json);
						 // draw chart
						 $('#localisation').highcharts({
						 chart: {
								 type: "pie"
						 },
						 title: {
								 text: "Repartition de l\'utilisation des appareils par batiments"
						 },
             tooltip: {
                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                     },
                     plotOptions: {
                         pie: {
                           allowPointSelect: true,
                           cursor: 'pointer',
                           showInLegend: true
                       }
                   },



						 series: [{
							 name: 'localisation',
								 data: processed_json

						 }]
				 });
		 });


 });


/*************************************      GRAPHIQUE NOMBRE D'HEURE PAR APPAREILS   ********************************************************/

 $(function () {
                var processed_json = new Array();
                var processed_json2 = new Array();
                var processed_json3 = new Array();
                $.getJSON('Calcul.php', function(data) {

                    // Populate series
                    for (i = 0; i < data.length; i++){
                        if (data[i].Nom_Appareil == "BTSA_2"  ){
                        processed_json.push([data[i].datefin  , parseFloat(data[i].total) ,data[i].Nom_Appareil   ] );
                        //parseFloat(data[i].jour), parseFloat(data[i].heure),parseFloat(data[i].minute)
                        console.log(data[i]);
                      }
                    }

                    for (i = 0; i < data.length; i++){
                        if (data[i].Nom_Appareil == "APK"){
                        processed_json2.push([data[i].datefin  , parseFloat(data[i].total) ,data[i].Nom_Appareil   ] );
                        //parseFloat(data[i].jour), parseFloat(data[i].heure),parseFloat(data[i].minute)
                        console.log(data[i]);
                      }
                    }

                    for (i = 0; i < data.length; i++){
                        if (data[i].Nom_Appareil == "BTSA_1"){
                        processed_json3.push([data[i].datefin  , parseFloat(data[i].total) ,data[i].Nom_Appareil   ] );
                        //parseFloat(data[i].jour), parseFloat(data[i].heure),parseFloat(data[i].minute)
                        console.log(data[i]);
                      }
                    }
                    console.log(processed_json);
                    // draw chart
                    $('#Calculs').highcharts({
                    chart: {
                        type: "column"
                    },
                    title: {
                        text: "Nombre d\'heures d'utilisation des appareils en fonction des jours  "
                    },
                    xAxis: {
                        type: 'category',
                        allowDecimals: false,

                        title: {
                            text: ""
                        }
                    },

                    yAxis: {
                        title: {
                            text: "Nombre d'heure"
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                              }]
                    },

                    plotOptions: {
                     series: {
                         stacking: 'normal'
                     }
                     },


                    series: [{
                      name: 'BTSA_2',
                        data: processed_json,

                    }, {
                      name: 'APK',
                      data: processed_json2,

                    },{
                      name: 'BTSA_1',
                      data: processed_json3,

                    }
                  ]
                });
            });


        });

        /*************************************     SELECTION --> GRAPHIQUE NOMBRE D'HEURE PAR APPAREILS   ********************************************************/



         $(function () {


           $("#app").change(function(){
             var app = $(this).val();
             console.log(app);


                        var processed_json = new Array();
                        $.getJSON('Calcul.php', function(data) {

                            // Populate series
                            for (i = 0; i < data.length; i++){
                                if (data[i].Nom_Appareil == app){

                                processed_json.push([data[i].year  , parseFloat(data[i].total) ,data[i].Nom_Appareil ] );
                                //parseFloat(data[i].jour), parseFloat(data[i].heure),parseFloat(data[i].minute)
                                console.log(data[i]);
                              }
                            }


                            console.log(processed_json);
                            // draw chart
                            $('#Filtre').highcharts({

                            title: {
                                text: "Indicateur des heures d'utilisation de l'appareil "
                            },
                            xAxis: {
                                type: 'category',
                                allowDecimals: false,

                                title: {
                                    text: ""
                                }
                            },

                            yAxis: {
                                title: {
                                    text: "Nombre d'heure"
                                },
                                plotLines: [{
                                    value: 0,
                                    width: 1,
                                    color: '#808080'
                                      }]
                            },

                            plotOptions: {
                             series: {
                                 stacking: 'normal'
                             }
                             },
                             tooltip: {
                               valueSuffix: 'H'
                             },
                             legend: {
                                  layout: 'vertical',
                                  align: 'right',
                                  verticalAlign: 'middle',
                                  borderWidth: 0
                              },


                            series: [{
                              name: app,
                                data: processed_json,

                            }
                          ]
                        });
                    });
                    });

                });
/*************************************     SELECTION --> GRAPHIQUE PIE UTILISATION APPAREIL PAR Batiment   ********************************************************/



                   $(function () {


                     $("#appLoc").change(function(){
                       var app = $(this).val();
                       console.log(app);

                                  var processed_json = new Array();
                                  $.getJSON('datalocalisation.php', function(data) {

                                      // Populate series
                                      for (i = 0; i < data.length; i++){
                                          if (data[i].Nom == app ){
                                        processed_json.push([data[i].Localisation  , parseFloat(data[i].iNom)] );
                                          //parseFloat(data[i].jour), parseFloat(data[i].heure),parseFloat(data[i].minute)
                                          console.log(data[i]);
                                        }
                                      }


                                      console.log(processed_json);
                                      // draw chart
                                      $('#FiltreLoc').highcharts({
                           						 chart: {
                           								 type: "pie"
                           						 },
                           						 title: {
                           								 text: "Repartition de l\'utilisation de l'appareil par batiments"
                           						 },
                                        tooltip: {
                                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                                },
                                                plotOptions: {
                                                    pie: {
                                                      allowPointSelect: true,
                                                      cursor: 'pointer',
                                                      showInLegend: true
                                                  }
                                              },


                           						 series: [{
                           							 name: app,
                           								 data: processed_json

                                      }
                                    ]
                                  });
                              });
                              });

                          });

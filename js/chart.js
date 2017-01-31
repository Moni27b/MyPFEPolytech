


/* --------------------    Chart Appareil de Mesure Disponible   ----------------------------     */
$(function () {
               var processed_json = new Array();
               $.getJSON('data.php', function(data) {
                   // Populate series
                   for (i = 0; i < data.length; i++){
                       processed_json.push([data[i].Nom  , parseFloat(data[i].Id_Appareil)] );
                       //console.log(data[i]);

                   }
                   //console.log(processed_json);
                   // draw chart
                   $('#appareils').highcharts({
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



 /* --------------------    Chart type d'utilisateur   ----------------------------     */

			 $(function () {
			                var processed_json = new Array();
			                $.getJSON('datautilisateur.php', function(data) {
			                    // Populate series
			                    for (i = 0; i < data.length; i++){
			                        processed_json.push([data[i].Profil  , parseFloat(data[i].id)] );
			                        //console.log(data[i]);

			                    }
			                    //console.log(processed_json);
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

/* --------------------    Chart type d'utilisateur   ----------------------------     */

	$(function () {
								 var processed_json = new Array();
                 var processed_json2 = new Array();
								 $.getJSON('dataMesure.php', function(data) {
										 // Populate series
										 for (i = 0; i < data.length; i++){
                        if (data[i].Mode == "ON"){
												 processed_json.push([data[i].Date_Mesure  , parseFloat(data[i].Id_Mesure, data[i].Mode )] );
												 //console.log(data[i]);
                       }
										 }


                     for (i = 0; i < data.length; i++){
                        if (data[i].Mode == "OFF"){
												 processed_json2.push([data[i].Date_Mesure  , parseFloat(data[i].Id_Mesure, data[i].Mode )] );
												 //console.log(data[i]);
                       }
										 }



										 // draw chart
										 $('#OnOff').highcharts({
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

/* --------------------    Chart Repartition de l'utilisation des appareils par batiment  ----------------------------     */

$(function () {
				 var processed_json = new Array();
				 $.getJSON('datalocalisationOV.php', function(data) {
						 // Populate series
						 for (i = 0; i < data.length; i++){
								 processed_json.push([data[i].Localisation  , parseFloat(data[i].iNom)] );
								 //console.log(data[i]);

						 }
						 //console.log(processed_json);
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
             $.getJSON('Calcul.php', function(data) {

                 data.sort(function compare(a,b){
                 if (a.datefin > b.datefin) return -1
                 else if (a.datefin < b.datefin) return 1
                 else return 0
               });


                 // Populate series
                 for (i = 0; i < data.length; i++){

                     processed_json.push([data[i].datefin  , parseFloat(data[i].total) ,data[i].Nom_Appareil ] );
                 }


                 console.log(processed_json);
                 // draw chart
                 $('#Calculs').highcharts({
                chart: {
                     type: "bar"
                 },
                 title: {
                     text: "Nombre d\'heures d'utilisation des appareils en fonction des jours "
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
                   name: 'Appareils',
                     data: processed_json,

                 }
               ]
             });
         });
          });



/*************************************     SELECTION --> GRAPHIQUE NOMBRE D'HEURE PAR APPAREILS   ********************************************************/



         $(function () {

           // Recuper la variable selectionnée par l'utilisateur
           $("#app").change(function(){
             var app = $(this).val();
             //console.log(app);


                        var processed_json = new Array();
                        $.getJSON('Calcul.php', function(data) {  // Recuperer les donneés JSON

                          // Trier les donneés en fonction de la date
                          data.sort(function compare(a,b){
                          if (a.datefin > b.datefin) return 1
                          else if (a.datefin < b.datefin) return -1
                          else return 0
                        });

                            // Populate series
                            for (i = 0; i < data.length; i++){
                                if (data[i].Nom_Appareil == app){

                                processed_json.push([data[i].datefin  , parseFloat(data[i].total) ,data[i].Nom_Appareil ] );
                                //parseFloat(data[i].jour), parseFloat(data[i].heure),parseFloat(data[i].minute)

                                // Calcul de la somme des heures d'utilisation par appareil
                                var sum = processed_json.reduce(
                               function(sum, current){
                                 return sum + current[1];
                               }, 0
                             );


                              }
                            }
                            console.log(sum);
                            document.getElementById("sum").innerHTML = sum + " Heures"; // Envoie de la variable Sum vers Html


                            //console.log(processed_json);

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

                    // Trier les donneés en fonction de la date
                   data.sort(function compare(a,b){
                    if (a.Date_Mesure > b.Date_Mesure) return 1
                    else if (a.Date_Mesure < b.Date_Mesure) return -1
                    else return 0
                  });

                      // Populate series
                      for (i = 0; i < data.length; i++){
                          if (data[i].Nom == app ){
                        processed_json.push([data[i].Localisation  , parseFloat(data[i].iNom)] );

                          //console.log(data[i]);

                          // envoie de la dernier localisation de l'appareil selectionnée
                          document.getElementById("demo").innerHTML = "Bâtiment "+ data[i].Localisation;
                        }

                      }


                    //  console.log(processed_json);
                    
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

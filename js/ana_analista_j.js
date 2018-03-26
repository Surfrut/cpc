$(document).ready(function() {
$('.preloader').hide();
    $("#jsGrid").jsGrid({

        height: "90%",
        width: "100%",
        align: "center",
        paging: false,

        editButton: true,
        deleteButton: true,
        clearFilterButton: true,
        modeSwitchButton: true,

        headerRowRenderer: false,

        heading: true,
        filtering: false,
        editing: true,
        sorting: true,
        autoload: true,
        inserting: true,
        // pagerFormat: "Paginación: {pageIndex} &nbsp;&nbsp; {first} {prev} {pages} {next} {last} &nbsp;&nbsp; total de paginas: {pageCount} total Analisis: {itemCount}",
        pagerFormat: "Página: {pageIndex} &nbsp;&nbsp; {first} {prev} {pages} {next} {last} &nbsp;&nbsp; total Analisis: {itemCount}",
        pagePrevText: "<",
        pageNextText: ">",
        pageFirstText: "<<",
        pageLastText: ">>",

        pageSize: 5,
        pageButtonCount: 5,

        deleteconfirm: "borrar?",

        controller: db,
        headerRowRenderer: function() {
            var $result = $("<tr>").height(0)
            .append($("<th align='center' colspan='40'>").width("100%").text("ANALISTAS"));
            // .append($("<th>").width("100%").text("CALIDAD"));
            // .append($("<th>").width(300));

            // $result = $result.add($("<tr>")
                // .append($("<th>").attr("colspan", 2).text("Name")));

                return $result;
            },

            fields: [
            { name: "Id", title: "#", type: "number", sorting: true, editing: false },
            { name: "Locacion", title: "Locacion", type: "text" },
            { name: "Articulo", title: "Articulo", type: "text", sorting: true  },
            { name: "Fecha", title: "Fecha", type: "text" },
            { name: "Lote", title: "Lote", type: "text" },
            { name: "Referencia", title: "Referencia", type: "text" },
            { name: "Estado", title: "Estado", type: "text" },
            { name: "Descripcion", title: "Descripcion", type: "text" },
            { name: "Cliente", title: "Cliente", type: "text" },
            { name: "Nombre", title: "Nombre", type: "text", editing: false },
            { name: "Cantidad", title: "Cantidad", type: "text", editing: false },
            { name: "UM", title: "UM", type: "text" },
            { name: "PH", title: "PH", type: "text" },
            { name: "Brix", title: "Brix", type: "text" },
            { name: "Cons5sec", title: "Cons5sec", type: "text" },
            { name: "Cons30sec", title: "Cons30sec", type: "text" },
            { name: "Acasc", title: "Acasc", type: "text" },
            { name: "Acidez", title: "Acidez", type: "text" },
            { name: "Bar", title: "Bar", type: "text" },
            { name: "Color", title: "Color", type: "text" },
            { name: "Densidad", title: "Densidad", type: "text" },
            { name: "Pnegros", title: "Pnegros", type: "text" },
            { name: "Patulina", title: "Patulina", type: "text" },
            { name: "Ramacidos", title: "Ramacidos", type: "text" },
            { name: "Hongos", title: "Hongos", type: "text" },
            { name: "Levadura", title: "Levadura", type: "text" },
            { name: "Ecoli", title: "Ecoli", type: "text" },
            { name: "Coliformes", title: "Coliformes", type: "text" },
            { name: "HongosTerm", title: "HongosTerm", type: "text" },
            { name: "Salmonnela", title: "Salmonnela", type: "text" },
            { name: "Alyciclo", title: "Alyciclo", type: "text" },
            { name: "Howardm", title: "Howardm", type: "text" },
            { name: "Generico_1", title: "Generico_1", type: "text" },
            { name: "Generico_2", title: "Generico_2", type: "text" },
            { name: "Generico_3", title: "Generico_3", type: "text" },
            { name: "Generico_4", title: "Generico_4", type: "text" },
            { name: "Generico_5", title: "Generico_5", type: "text" },
            { name: "Generico_6", title: "Generico_6", type: "text" },
            { name: "Generico_7", title: "Generico_7", type: "text" },
            { name: "Generico_8", title: "Generico_8", type: "text" },
            { name: "Generico_9", title: "Generico_9", type: "text" },
            { name: "Generico_10", title: "Generico_10", type: "text" },
            { type: "control", editButton: true, width: "300",

            itemTemplate: function(value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);

                var $customButton = $("<i class='material-icons habilitar' dp48>check</i><buttton class='material-icons subir' dp48>arrow_upward</buttton>")
            // .text(item.id)
            .click(function(e) {
                console.log("Modificando el registro ID: " + item.id);
              //  let id = item.id;

                if(e.target.className =="material-icons subir"){
                  let largo = $(".jsgrid-table tbody tr");
                  let largoHijos=$(this).parent().parent().children();
                  var posicionActual = $(this).parent().parent("tr").index();
                  for (var i = posicionActual; i > 0 ; i--) {
                    var recorrer=false;

                    var ph=largo.eq(i-1).children("td").eq(12).text();

                       for (var h = 0; h < largo.eq(i).children("td").length; h++) {

                         if(ph==""){
                           if(largo.eq(i-1).children("td").eq(h).text()==""){
                             var add=$(this).parent().parent().children("td").eq(h).text()
                             largo.eq(i-1).children("td").eq(h).text(add)

                             recorrer = true;
                           }else {}
                         }else {
                           return;
                         }





                          }

                            if(recorrer){

                              var id = largo.eq(i-1).children("td").eq(0).text()
                              var locacion = largo.eq(i-1).children("td").eq(1).text()
                              var articulo = largo.eq(i-1).children("td").eq(2).text()
                              var fecha = largo.eq(i-1).children("td").eq(3).text()
                              var lote = largo.eq(i-1).children("td").eq(4).text()
                              var referencia = largo.eq(i-1).children("td").eq(5).text()
                              var estado = largo.eq(i-1).children("td").eq(6).text()
                              var descripcion = largo.eq(i-1).children("td").eq(7).text()
                              var cliente = largo.eq(i-1).children("td").eq(8).text()
                              var nombre = largo.eq(i-1).children("td").eq(9).text()
                              var cantidad = largo.eq(i-1).children("td").eq(10).text()
                              var um = largo.eq(i-1).children("td").eq(11).text()
                              var phs = largo.eq(i-1).children("td").eq(12).text()
                              var brix = largo.eq(i-1).children("td").eq(13).text()
                              var cons5sec = largo.eq(i-1).children("td").eq(14).text()
                              var cons30sec = largo.eq(i-1).children("td").eq(15).text()
                              var acasc = largo.eq(i-1).children("td").eq(16).text()
                              var acidez = largo.eq(i-1).children("td").eq(17).text()
                              var bar = largo.eq(i-1).children("td").eq(18).text()
                              var color = largo.eq(i-1).children("td").eq(19).text()
                              var densidad = largo.eq(i-1).children("td").eq(20).text()
                              var pnegro = largo.eq(i-1).children("td").eq(21).text()
                              var patulina = largo.eq(i-1).children("td").eq(22).text()
                              var ramacidos = largo.eq(i-1).children("td").eq(23).text()
                              var hongos = largo.eq(i-1).children("td").eq(24).text()
                              var levadura = largo.eq(i-1).children("td").eq(25).text()
                              var ecoli = largo.eq(i-1).children("td").eq(26).text()
                              var coliformes = largo.eq(i-1).children("td").eq(27).text()
                              var hongosterm = largo.eq(i-1).children("td").eq(28).text()
                              var salmonela = largo.eq(i-1).children("td").eq(29).text()
                              var alyciclo = largo.eq(i-1).children("td").eq(30).text()
                              var howard = largo.eq(i-1).children("td").eq(31).text()
                              var generico_1 = largo.eq(i-1).children("td").eq(32).text()
                              var generico_2 = largo.eq(i-1).children("td").eq(33).text()
                              var generico_3 = largo.eq(i-1).children("td").eq(34).text()
                              var generico_4 = largo.eq(i-1).children("td").eq(35).text()
                              var generico_5 = largo.eq(i-1).children("td").eq(36).text()
                              var generico_6 = largo.eq(i-1).children("td").eq(37).text()
                              var generico_7 = largo.eq(i-1).children("td").eq(38).text()
                              var generico_8 = largo.eq(i-1).children("td").eq(39).text()
                              var generico_9 = largo.eq(i-1).children("td").eq(40).text()
                              var generico_10 = largo.eq(i-1).children("td").eq(41).text()
                              actualiza_linea(
                                id, locacion, articulo, fecha, lote, referencia, estado, descripcion, cliente, nombre, cantidad, um, phs, brix, cons5sec ,cons30sec, acasc, acidez, bar, color, densidad, pnegro ,patulina, ramacidos ,hongos ,levadura ,ecoli, coliformes, hongosterm, salmonela ,alyciclo, howard ,generico_1, generico_2, generico_3, generico_4 ,generico_5, generico_6, generico_7, generico_8 ,generico_9 ,generico_10 );

                                for (var n = 0; n < db.analisis.length; n++) {
                                  if(db.analisis[n].Id == id){
                                    db.analisis[n].Acasc = acasc
                                    db.analisis[n].Acidez =acidez
                                    db.analisis[n].Alyciclo = alyciclo
                                    db.analisis[n].Articulo = articulo
                                    db.analisis[n].Bar =bar
                                    db.analisis[n].Brix = brix
                                    db.analisis[n].Cantidad = cantidad
                                    db.analisis[n].Cliente = cliente
                                    db.analisis[n].Coliformes = coliformes
                                    db.analisis[n].Color = color
                                    db.analisis[n].Cons5sec = cons5sec
                                    db.analisis[n].Cons30sec = cons30sec
                                    db.analisis[n].Densidad = densidad
                                    db.analisis[n].Descripcion = descripcion
                                    db.analisis[n].Ecoli = ecoli
                                    db.analisis[n].Estado = estado
                                    db.analisis[n].Fecha = fecha
                                    db.analisis[n].Generico_1 = generico_1
                                    db.analisis[n].Generico_2 = generico_2
                                    db.analisis[n].Generico_3 = generico_3
                                    db.analisis[n].Generico_4 = generico_4
                                    db.analisis[n].Generico_5 = generico_5
                                    db.analisis[n].Generico_6 = generico_6
                                    db.analisis[n].Generico_7 = generico_7
                                    db.analisis[n].Generico_8 = generico_8
                                    db.analisis[n].Generico_9 = generico_9
                                    db.analisis[n].Generico_10 = generico_10
                                    db.analisis[n].Hongos = hongos
                                    db.analisis[n].HongosTerm = hongosterm
                                    db.analisis[n].Howardm = howard
                                    db.analisis[n].Id = id
                                    db.analisis[n].Levadura = levadura
                                    db.analisis[n].Locacion = locacion
                                    db.analisis[n].Lote = lote
                                    db.analisis[n].Nombre = nombre
                                    db.analisis[n].PH = phs
                                    db.analisis[n].Patulina = patulina
                                    db.analisis[n].Pnegros = pnegro
                                    db.analisis[n].Ramacidos = ramacidos
                                    db.analisis[n].Referencia = referencia
                                    db.analisis[n].Salmonnela = salmonela
                                    db.analisis[n].UM = um


                                    console.log(db.analisis[i]);


                                  }
                                }



                            }


                  }


                }

                if(e.target.className =="material-icons bajar"){
                  let largob = $(".jsgrid-table tbody tr");
                  let largoHijosb=$(this).parent().parent().children();
                  var posicionActual = $(this).parent().parent("tr").index();
                  console.log("actual :" + posicionActual);
                  console.log("largo :" + largob.length);
                  for (var i = posicionActual ; i < largob.length ; i++) {
                    console.log("recorridos del for :" + i);
                    var recorrer=false;

                    var ph=largob.eq(i+1).children("td").eq(12).text();
                    console.log("ph :"+ph);
                      console.log(largob.eq(i+1).children("td").eq(h).text());
                       for (var h = 0; h < largob.eq(i).children("td").length; h++) {
                         if(ph==""){
                           if( largob.eq(i+1).children("td").eq(h).text()==""){
                             var add=$(this).parent().parent().children("td").eq(h).text()

                             largob.eq(i+1).children("td").eq(h).text(add)

                             recorrer = true;
                             console.log("true");
                           }

                         }else {
                           return;
                         }





                          }

                            if(recorrer){
                              console.log("recorrido");
                              var id = largob.eq(i+1).children("td").eq(0).text()
                              var locacion = largob.eq(i+1).children("td").eq(1).text()
                              var articulo = largob.eq(i+1).children("td").eq(2).text()
                              var fecha = largob.eq(i+1).children("td").eq(3).text()
                              var lote = largob.eq(i+1).children("td").eq(4).text()
                              var referencia = largob.eq(i+1).children("td").eq(5).text()
                              var estado = largob.eq(i+1).children("td").eq(6).text()
                              var descripcion = largob.eq(i+1).children("td").eq(7).text()
                              var cliente = largob.eq(i+1).children("td").eq(8).text()
                              var nombre = largob.eq(i+1).children("td").eq(9).text()
                              var cantidad = largob.eq(i+1).children("td").eq(10).text()
                              var um = largob.eq(i+1).children("td").eq(11).text()
                              var phs = largob.eq(i+1).children("td").eq(12).text()
                              var brix = largob.eq(i+1).children("td").eq(13).text()
                              var cons5sec = largob.eq(i+1).children("td").eq(14).text()
                              var cons30sec = largob.eq(i+1).children("td").eq(15).text()
                              var acasc = largob.eq(i+1).children("td").eq(16).text()
                              var acidez = largob.eq(i+1).children("td").eq(17).text()
                              var bar = largob.eq(i+1).children("td").eq(18).text()
                              var color = largob.eq(i+1).children("td").eq(19).text()
                              var densidad = largob.eq(i+1).children("td").eq(20).text()
                              var pnegro = largob.eq(i+1).children("td").eq(21).text()
                              var patulina = largob.eq(i+1).children("td").eq(22).text()
                              var ramacidos = largob.eq(i+1).children("td").eq(23).text()
                              var hongos = largob.eq(i+1).children("td").eq(24).text()
                              var levadura = largob.eq(i+1).children("td").eq(25).text()
                              var ecoli = largob.eq(i+1).children("td").eq(26).text()
                              var coliformes = largob.eq(i+1).children("td").eq(27).text()
                              var hongosterm = largob.eq(i+1).children("td").eq(28).text()
                              var salmonela = largob.eq(i+1).children("td").eq(29).text()
                              var alyciclo = largob.eq(i+1).children("td").eq(30).text()
                              var howard = largob.eq(i+1).children("td").eq(31).text()
                              var generico_1 = largob.eq(i+1).children("td").eq(32).text()
                              var generico_2 = largob.eq(i+1).children("td").eq(33).text()
                              var generico_3 = largob.eq(i+1).children("td").eq(34).text()
                              var generico_4 = largob.eq(i+1).children("td").eq(35).text()
                              var generico_5 = largob.eq(i+1).children("td").eq(36).text()
                              var generico_6 = largob.eq(i+1).children("td").eq(37).text()
                              var generico_7 = largob.eq(i+1).children("td").eq(38).text()
                              var generico_8 = largob.eq(i+1).children("td").eq(39).text()
                              var generico_9 = largob.eq(i+1).children("td").eq(40).text()
                              var generico_10 = largob.eq(i+1).children("td").eq(41).text()
                              actualiza_linea(
                                id, locacion, articulo, fecha, lote, referencia, estado, descripcion, cliente, nombre, cantidad, um, phs, brix, cons5sec ,cons30sec, acasc, acidez, bar, color, densidad, pnegro ,patulina, ramacidos ,hongos ,levadura ,ecoli, coliformes, hongosterm, salmonela ,alyciclo, howard ,generico_1, generico_2, generico_3, generico_4 ,generico_5, generico_6, generico_7, generico_8 ,generico_9 ,generico_10 );

                                for (var n = 0; n < db.analisis.length; n++) {
                                  if(db.analisis[n].Id == id){
                                    console.log(db.analisis[i]);
                                    db.analisis[n].Acasc = acasc
                                    db.analisis[n].Acidez =acidez
                                    db.analisis[n].Alyciclo = alyciclo
                                    db.analisis[n].Articulo = articulo
                                    db.analisis[n].Bar =bar
                                    db.analisis[n].Brix = brix
                                    db.analisis[n].Cantidad = cantidad
                                    db.analisis[n].Cliente = cliente
                                    db.analisis[n].Coliformes = coliformes
                                    db.analisis[n].Color = color
                                    db.analisis[n].Cons5sec = cons5sec
                                    db.analisis[n].Cons30sec = cons30sec
                                    db.analisis[n].Densidad = densidad
                                    db.analisis[n].Descripcion = descripcion
                                    db.analisis[n].Ecoli = ecoli
                                    db.analisis[n].Estado = estado
                                    db.analisis[n].Fecha = fecha
                                    db.analisis[n].Generico_1 = generico_1
                                    db.analisis[n].Generico_2 = generico_2
                                    db.analisis[n].Generico_3 = generico_3
                                    db.analisis[n].Generico_4 = generico_4
                                    db.analisis[n].Generico_5 = generico_5
                                    db.analisis[n].Generico_6 = generico_6
                                    db.analisis[n].Generico_7 = generico_7
                                    db.analisis[n].Generico_8 = generico_8
                                    db.analisis[n].Generico_9 = generico_9
                                    db.analisis[n].Generico_10 = generico_10
                                    db.analisis[n].Hongos = hongos
                                    db.analisis[n].HongosTerm = hongosterm
                                    db.analisis[n].Howardm = howard
                                    db.analisis[n].Id = id
                                    db.analisis[n].Levadura = levadura
                                    db.analisis[n].Locacion = locacion
                                    db.analisis[n].Lote = lote
                                    db.analisis[n].Nombre = nombre
                                    db.analisis[n].PH = phs
                                    db.analisis[n].Patulina = patulina
                                    db.analisis[n].Pnegros = pnegro
                                    db.analisis[n].Ramacidos = ramacidos
                                    db.analisis[n].Referencia = referencia
                                    db.analisis[n].Salmonnela = salmonela
                                    db.analisis[n].UM = um


  console.log(  db.analisis[n]);

                                  }
                                }



                            }


                  }


                }


                if(e.target.className =="material-icons habilitar"){



                  // swal({
                  //     title: '¿Seguro que deseas cambiar estado?',
                  //     text: "Con esto quedará DISPONIB en QAD",
                  //     type: 'question',
                  //     showCancelButton: true,
                  //     confirmButtonColor: '#3085d6',
                  //     cancelButtonColor: '#d33',
                  //     confirmButtonText: 'Aceptar'
                  // }).then(function () {
                  //     $.ajax({
                  //         url: base_url+'Welcome/cambiaEstado',
                  //         type: 'POST',
                  //         dataType: 'json',
                  //         data: {
                  //             id:id
                  //         },
                  //     })
                  //     .done(function(data) {
                  //         console.log(data);
                  //         console.log("success cambiaEstado");
                  //     })
                  //     .fail(function(data) {
                  //         console.log(data);
                  //         console.log("error cambiaEstado");
                  //     })
                  //     swal(
                  //         'estado cambiado!',
                  //         '',
                  //         'success'
                  //         )
                  // })
                  // e.stopPropagation();



                }




            });
            return $result.add($customButton);
        }//FIN ITEM TEMPLATE

    }
    //
    ]
    // $("#jsGrid").jsGrid("refresh");
});

$('#jsgrid').appendTo('.jsgrid-pager-container');



});

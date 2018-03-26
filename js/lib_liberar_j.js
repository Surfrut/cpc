$(document).ready(function() {

    //INICIALIZA MODAL
    $('.modal').modal({
        dismissible: false,
        inDuration: 350
    });

    $("#jsGrid").jsGrid({

      height: "90%",
      width: "100%",
      align: "center",
      paging: true,

      editButton: true,
      deleteButton: true,
      clearFilterButton: true,
      modeSwitchButton: true,
      // autoload: true,
       headerRowRenderer: true,

      heading: true,
      filtering: true,
      editing: true,
      sorting: true,
      autoload: true,
      inserting: false,
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
        // headerRowRenderer: function() {
        	// var $result = $("<tr>").height(0)
        	// .append($("<th text-align='center' colspan='40' class='php'>").width("100%").text("LIBERADOR"));
        	// .append('Some text')
            // .append($("<th>").width("100%").text("CALIDAD"));
            // .append($("<th>").width(300));

            // $result = $result.add($("<tr>")
                // .append($("<th>").attr("colspan", 2).text("Name")));

                // return $result;
            // },


            fields: [
            // { name: "Id", title: "#", type: "number", width: "150", sorting: true, editing: false, css: "php" },
            // { name: "Lote", title: "Lote", type: "text", css: "qad" },
            // { name: "Referencia", title: "Referencia", type: "text", sorting: true, css: "qad"  },
            // { name: "Articulo", title: "Articulo", type: "text", css: "qad" },
            // { name: "Descripcion", title: "Descripcion", type: "text", css: "qad" },
            // { name: "Cliente", title: "Cliente", type: "text", css: "php" },
            // { name: "Nombre", title: "Nombre", type: "text", css: "php" },
            // { name: "Cantidad", title: "Cantidad", type: "text", css: "php" },
            // { name: "UM", title: "UM", type: "text", css: "php" },
            // { name: "Estado", title: "Estado", type: "text", css: "php", editing: false },
            // { name: "PH", title: "PH", type: "text", css: "php" },
            // { name: "Brix", title: "Brix", type: "text", css: "php" },
            // { name: "Cons5sec", title: "Cons5sec", type: "text", css: "php" },
            // { name: "Cons30sec", title: "Cons30sec", type: "text", css: "php" },
            // { name: "Acasc", title: "Acasc", type: "text", css: "php" },
            // { name: "Acidez", title: "Acidez", type: "text", css: "php" },
            // { name: "Bar", title: "Bar", type: "text", css: "php" },
            // { name: "Color", title: "Color", type: "text", css: "php" },
            // { name: "Densidad", title: "Densidad", type: "text", css: "php" },
            // { name: "Pnegros", title: "Pnegros", type: "text", css: "php" },
            // { name: "Patulina", title: "Patulina", type: "text", css: "php" },
            // { name: "Ramacidos", title: "Ramacidos", type: "text", css: "php" },
            // { name: "Hongos", title: "Hongos", type: "text", css: "php" },
            // { name: "Levadura", title: "Levadura", type: "text", css: "php" },
            // { name: "Ecoli", title: "Ecoli", type: "text", css: "php" },
            // { name: "Coliformes", title: "Coliformes", type: "text", css: "php" },
            // { name: "HongosTerm", title: "HongosTerm", type: "text", css: "php" },
            // { name: "Alyciclo", title: "Alyciclo", type: "text", css: "php" },
            // { name: "Salmonnela", title: "Salmonnela", type: "text", css: "php" },
            // { name: "Howardm", title: "Howardm", type: "text", css: "php" },
            // { name: "Generico_1", title: "Generico_1", type: "text", css: "php" },
            // { name: "Generico_2", title: "Generico_2", type: "text", css: "php" },
            // { name: "Generico_3", title: "Generico_3", type: "text", css: "php" },
            // { name: "Generico_4", title: "Generico_4", type: "text", css: "php" },
            // { name: "Generico_5", title: "Generico_5", type: "text", css: "php" },
            // { name: "Generico_6", title: "Generico_6", type: "text", css: "php" },
            // { name: "Generico_7", title: "Generico_7", type: "text", css: "php" },
            // { name: "Generico_8", title: "Generico_8", type: "text", css: "php" },
            // { name: "Generico_9", title: "Generico_9", type: "text", css: "php" },
            // { name: "Generico_10", title: "Generico_10", type: "text", css: "php" },
            { name: "Id", title: "#", type: "number", sorting: true, editing: false ,width:40 ,css: "php"},
            { name: "Locacion", title: "Locacion", type: "text" },
            { name: "Articulo", title: "Articulo", type: "text", sorting: true , css: "qad",width:150 },
            { name: "Fecha", title: "Fecha", type: "text" },
            { name: "Lote", title: "Lote", type: "text" , css: "qad"},
            { name: "Referencia", title: "Referencia", type: "text" , css: "qad"},
            { name: "Estado", title: "Estado", type: "text" , css: "php"},
            { name: "Descripcion", title: "Descripcion", type: "text" , css: "qad"},
            { name: "Cliente", title: "Cliente", type: "text" , css: "php"},
            { name: "Nombre", title: "Nombre", type: "text", editing: false, css: "php" },
            { name: "Cantidad", title: "Cantidad", type: "text", editing: false , css: "php"},
            { name: "UM", title: "UM", type: "text" , css: "php"},
            { name: "PH", title: "PH", type: "text" , css: "php"},
            { name: "Brix", title: "Brix", type: "text" , css: "php"},
            { name: "Cons5sec", title: "Cons5sec", type: "text" , css: "php"},
            { name: "Cons30sec", title: "Cons30sec", type: "text", css: "php" },
            { name: "Acasc", title: "Acasc", type: "text" , css: "php"},
            { name: "Acidez", title: "Acidez", type: "text", css: "php" },
            { name: "Bar", title: "Bar", type: "text", css: "php" },
            { name: "Color", title: "Color", type: "text" , css: "php"},
            { name: "Densidad", title: "Densidad", type: "text" , css: "php"},
            { name: "Pnegros", title: "Pnegros", type: "text" , css: "php"},
            { name: "Patulina", title: "Patulina", type: "text" , css: "php"},
            { name: "Ramacidos", title: "Ramacidos", type: "text", css: "php" },
            { name: "Hongos", title: "Hongos", type: "text" , css: "php"},
            { name: "Levadura", title: "Levadura", type: "text" , css: "php"},
            { name: "Ecoli", title: "Ecoli", type: "text" , css: "php"},
            { name: "Coliformes", title: "Coliformes", type: "text", css: "php" },
            { name: "HongosTerm", title: "HongosTerm", type: "text" , css: "php"},
            { name: "Salmonnela", title: "Salmonnela", type: "text", css: "php" },
            { name: "Alyciclo", title: "Alyciclo", type: "text" },
            { name: "Howardm", title: "Howardm", type: "text" , css: "php"},
            { name: "Generico_1", title: "Generico_1", type: "text" , css: "php"},
            { name: "Generico_2", title: "Generico_2", type: "text" , css: "php"},
            { name: "Generico_3", title: "Generico_3", type: "text" , css: "php" },
            { name: "Generico_4", title: "Generico_4", type: "text" , css: "php"},
            { name: "Generico_5", title: "Generico_5", type: "text" , css: "php"},
            { name: "Generico_6", title: "Generico_6", type: "text" , css: "php"},
            { name: "Generico_7", title: "Generico_7", type: "text" , css: "php"},
            { name: "Generico_8", title: "Generico_8", type: "text" , css: "php"},
            { name: "Generico_9", title: "Generico_9", type: "text" , css: "php"},
            { name: "Generico_10", title: "Generico_10", type: "text" , css: "php"},
            { type: "control", editButton: true, width: "300",
            headerTemplate: function() {
                // var grid = this._grid;
                // var isInserting = grid.inserting;
                //
                // var $button = $("<input>").attr("type", "button")
                // .addClass([this.buttonClass, this.modeButtonClass, this.insertModeButtonClass].join(" "))
                // .on("click", function() {
                //     isInserting = !isInserting;
                //     grid.option("inserting", isInserting);
                // });
                //
                // return $button;
            },

            itemTemplate: function(value, item) {
            	var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);

                var $customButton = $("<buttton class='material-icons habilitar' dp48>done</buttton><buttton class='material-icons subir' dp48>arrow_upward</buttton><buttton class='material-icons bajar' dp48>arrow_downward</buttton>")
            	// var $customButton1 = $("<buttton class='material-icons habilitar' dp48>done_all</buttton>")
            // .text(item.id)
            .click(function(e) {

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
                  console.log("Modificando el registro ID: " + item.Id);

                  var estado = item.Estado;
                  var id = item.Id;

                  if (estado == 'CONF-INC') {
                    estado = 'DISPONIB'
                  }else{
                    estado = 'CONF-INC'
                  }
                  swal({
                  	title: '¿Seguro que deseas cambiar estado?',
                  	text: `Con esto quedará ${estado} en QAD`,
                  	type: 'question',
                  	showCancelButton: true,
                  	confirmButtonColor: '#3085d6',
                  	cancelButtonColor: '#d33',
                  	confirmButtonText: 'Aceptar'
                  }).then(function () {




























                  	$.ajax({
                  		url: base_url+'Welcome/cambiaEstado',
                  		type: 'POST',
                  		dataType: 'json',
                  		data: {
                  			id:id,
                        estado:estado
                  		},
                  	})
                  	.done(function(data) {

                  		console.log(data);

                            $("#jsGrid").jsGrid("render");

                            console.log("success cambiaEstado");
                            swal(
                                'estado cambiado!',
                                '',
                                'success'
                                )
                        })
                  	.fail(function(data) {
                  		console.log(data);
                  		console.log("error cambiaEstado");
                  	})

                  })
                }
            });
            return $result.add($customButton);
        }
    }//FIN type: "control"
    ]
});

function render(){
  $("#jsGrid").jsGrid("render");
  console.log("render");
}

$("#jsGrid").jsGrid("render");

//OCULTA EL "ADD" POR DEFECTO.
$('.jsgrid-insert-mode-button').css({
    display: 'none'
});

//AGREGA EL BTN PARA CREAR NUEVOS ANALISIS
$('tr.jsgrid-filter-row td.jsgrid-control-field').append(`<a class='material-icons btn_agregar' dp48>add</a>`);

//BTN QUE AGREGA UN ANALISIS.
$('.btn_agregar').on('click', function(){
    console.log("Abriendo modal..");
    $('.modal').modal('open');
})

$('.btn_ingresar').on('click', function(){
    // console.log("Ingresando analisis..");
    // let analisis = {};
    let Locacion = $('.txt_locacion').val();
    let Articulo = $('.txt_articulo').val();
    let Fecha = $('.txt_fecha').val();
    let Lote = $('.txt_lote').val();
    let Referencia = $('.txt_referencia').val();
    let Estado = $('.txt_estado').val();
    let Descripcion = $('.txt_descripcion').val();
    let Cliente = $('.txt_cliente').val();
    let Nombre = $('.txt_nombre').val();
    let Cantidad = $('.txt_cantidad').val();
    let UM = $('.txt_um').val();
    let PH = $('.txt_ph').val();
    let Brix = $('.txt_brix').val();
    let Cons5sec = $('.txt_cons5sec').val();
    let Cons30sec = $('.txt_cons30sec').val();
    let Acasc = $('.txt_acasc').val();
    let Acidez = $('.txt_acidez').val();
    let Bar = $('.txt_bar').val();
    let Color = $('.txt_color').val();
    let Densidad = $('.txt_densidad').val();
    let Pnegros = $('.txt_pnegros').val();
    let Patulina = $('.txt_patulina').val();
    let Ramacidos = $('.txt_ramacidos').val();
    let Hongos = $('.txt_hongos').val();
    let Levadura = $('.txt_levadura').val();
    let Ecoli = $('.txt_ecoli').val();
    let Coliformes = $('.txt_coliformes').val();
    let HongosTerm = $('.txt_hongosterm').val();
    let Salmonnela = $('.txt_salmonnela').val();
    let Alyciclo = $('.txt_alyciclo').val();
    let Howardm = $('.txt_howardm').val();
    let Generico_1 = $('.txt_generico_1').val();
    let Generico_2 = $('.txt_generico_2').val();
    let Generico_3 = $('.txt_generico_3').val();
    let Generico_4 = $('.txt_generico_4').val();
    let Generico_5 = $('.txt_generico_5').val();
    let Generico_6 = $('.txt_generico_6').val();
    let Generico_7 = $('.txt_generico_7').val();
    let Generico_8 = $('.txt_generico_8').val();
    let Generico_9 = $('.txt_generico_9').val();
    let Generico_10 = $('.txt_generico_10').val();

    // $('.modal').modal('close');

    $.ajax({
        url: base_url+'Welcome/ingresaAnalisis',
        type: 'POST',
        dataType: 'json',
        data: {
            Locacion:Locacion,
            Articulo:Articulo,
            Fecha:Fecha,
            Lote:Lote,
            Referencia:Referencia,
            Estado:Estado,
            Descripcion:Descripcion,
            Cliente:Cliente,
            Nombre:Nombre,
            Cantidad:Cantidad,
            UM:UM,
            PH:PH,
            Brix:Brix,
            Cons5sec:Cons5sec,
            Cons30sec:Cons30sec,
            Acasc:Acasc,
            Acidez:Acidez,
            Bar:Bar,
            Color:Color,
            Densidad:Densidad,
            Pnegros:Pnegros,
            Patulina:Patulina,
            Ramacidos:Ramacidos,
            Hongos:Hongos,
            Levadura:Levadura,
            Ecoli:Ecoli,
            Coliformes:Coliformes,
            HongosTerm:HongosTerm,
            Salmonnela:Salmonnela,
            Alyciclo:Alyciclo,
            Howardm:Howardm,
            Generico_1:Generico_1,
            Generico_2:Generico_2,
            Generico_3:Generico_3,
            Generico_4:Generico_4,
            Generico_5:Generico_5,
            Generico_6:Generico_6,
            Generico_7:Generico_7,
            Generico_8:Generico_8,
            Generico_9:Generico_9,
            Generico_10:Generico_10
        },
    })
    .done(function(data) {
        console.log("success ingresaAnalisis:",data);
        if(data){
            console.log("Cerrando modal..");

            // $("#jsGrid").jsGrid("reset");
            $("#jsGrid").jsGrid("refresh");

            $('.modal').modal('close');
            swal(
                'Analisis ingresado!',
                '',
                'success'
                )
        }else{
            swal(
                'Error al guardar!',
                'Intentalo nuevamente por favor',
                'error'
                )
        }
    })
    .fail(function(data) {
        console.log("error ingresaAnalisis:",data);
        swal(
            'Error al guardar!',
            'Intentalo nuevamente por favor',
            'error'
            )
    })



});

});

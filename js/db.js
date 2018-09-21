
function actualiza_linea(
    Id,
    Locacion,
    Articulo,
    Fecha,
    Lote,
    Referencia,
    Estado,
    Descripcion,
    Cliente,
    Nombre,
    Cantidad,
    UM,
    PH,
    Brix,
    Cons5sec,
    Cons30sec,
    Acasc,
    Acidez,
    Bar,
    Color,
    Densidad,
    Pnegros,
    Patulina,
    Ramacidos,
    Hongos,
    Levadura,
    Ecoli,
    Coliformes,
    HongosTerm,
    Salmonnela,
    Alyciclo,
    Howardm,
    Generico_1,
    Generico_2,
    Generico_3,
    Generico_4,
    Generico_5,
    Generico_6,
    Generico_7,
    Generico_8,
    Generico_9,
    Generico_10,
    Generico_11,
    Generico_12,
    Generico_13,
    Generico_14,
    Generico_15,
    Generico_16,
    Generico_17,
    Generico_18,
    Generico_19,
    Generico_20,
    Generico_21,
    Generico_22,
    Generico_23,
    Generico_24,
    Generico_25
    ){
    $.ajax({
        url: base_url+'Welcome/actualiza_linea',
        type: 'POST',
        dataType: 'json',
        data: {
            Id:Id,
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
            Generico_10:Generico_10,
            Generico_11:Generico_11,
            Generico_12:Generico_12,
            Generico_13:Generico_13,
            Generico_14:Generico_14,
            Generico_15:Generico_15,
            Generico_16:Generico_16,
            Generico_17:Generico_17,
            Generico_18:Generico_18,
            Generico_19:Generico_19,
            Generico_20:Generico_20,
            Generico_21:Generico_21,
            Generico_22:Generico_22,
            Generico_23:Generico_23,
            Generico_24:Generico_24,
            Generico_25:Generico_25
        },
    })
    .done(function(data) {
        console.log(data);
        console.log("success actualiza_linea");

    })
    .fail(function(data) {
        swal({
          title: 'Error al guardar los datos: '+data
      })
        console.log("error actualiza_linea");
        console.log(data);
    })
}

function elimina_linea(id){
    $.ajax({
        url: base_url+'Welcome/elimina_linea',
        type: 'POST',
        dataType: 'json',
        data: {
            id:id
        },
    })
    .done(function(data) {
        console.log(data);
        console.log(id);
        console.log("success elimina_linea");
        swal("ok");
    })
    .fail(function(data) {
        console.log(data);
        console.log("error elimina_linea");
        swal("no ok");
    })
}

function ingresaAnalisis(
    Locacion,
    Articulo,
    Fecha,
    Lote,
    Referencia,
    Estado,
    Descripcion,
    Cliente,
    Nombre,
    Cantidad,
    UM,
    PH,
    Brix,
    Cons5sec,
    Cons30sec,
    Acasc,
    Acidez,
    Bar,
    Color,
    Densidad,
    Pnegros,
    Patulina,
    Ramacidos,
    Hongos,
    Levadura,
    Ecoli,
    Coliformes,
    HongosTerm,
    Salmonnela,
    Alyciclo,
    Howardm,
    Generico_1,
    Generico_2,
    Generico_3,
    Generico_4,
    Generico_5,
    Generico_6,
    Generico_7,
    Generico_8,
    Generico_9,
    Generico_10,
    Generico_11,
    Generico_12,
    Generico_13,
    Generico_14,
    Generico_15,
    Generico_16,
    Generico_17,
    Generico_18,
    Generico_19,
    Generico_20,
    Generico_21,
    Generico_22,
    Generico_23,
    Generico_24,
    Generico_25
    ){

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
            Generico_10:Generico_10,
            Generico_11:Generico_11,
            Generico_12:Generico_12,
            Generico_13:Generico_13,
            Generico_14:Generico_14,
            Generico_15:Generico_15,
            Generico_16:Generico_16,
            Generico_17:Generico_17,
            Generico_18:Generico_18,
            Generico_19:Generico_19,
            Generico_20:Generico_20,
            Generico_21:Generico_21,
            Generico_22:Generico_22,
            Generico_23:Generico_23,
            Generico_24:Generico_24,
            Generico_25:Generico_25
        },
    })
    .done(function(data) {
        console.log(data);
        console.log("success ingresaAnalisis");
    })
    .fail(function(data) {
        console.log(data);
        console.log("error ingresaAnalisis");
    })
}

(function() {
    let data_
    var db = {
        loadData: function(filter) {
            return $.grep(this.analisis, function(analisis) {
                return (!filter.Id || analisis.Id === filter.Id)
                && (!filter.QAD || analisis.QAD === filter.QAD)
                && (!filter.Usuario || analisis.Usuario == null || analisis.Usuario.toUpperCase().indexOf(filter.Usuario.toUpperCase())>=0)
                && (!filter.fechaIngreso || analisis.fechaIngreso == null || analisis.fechaIngreso.toUpperCase().indexOf(filter.fechaIngreso.toUpperCase())>=0)
                && (!filter.CLIENTE  || analisis.CLIENTE == null || analisis.CLIENTE.toUpperCase().indexOf(filter.CLIENTE.toUpperCase())>=0)
                && (!filter.Locacion  || analisis.Locacion == null || analisis.Locacion.toUpperCase().indexOf(filter.Locacion.toUpperCase())>=0)
                && (!filter.Articulo  || analisis.Articulo == null || analisis.Articulo.toUpperCase().indexOf(filter.Articulo.toUpperCase())>=0)
                && (!filter.Fecha  || analisis.Fecha == null || analisis.Fecha.toUpperCase().indexOf(filter.Fecha.toUpperCase())>=0)
                && (!filter.Lote  || analisis.Lote == null || analisis.Lote.toUpperCase().indexOf(filter.Lote.toUpperCase())>=0)
                && (!filter.Referencia  || analisis.Referencia == null || analisis.Referencia.toUpperCase().indexOf(filter.Referencia.toUpperCase())>=0)
                && (!filter.Estado  || analisis.Estado == null || analisis.Estado.toUpperCase().indexOf(filter.Estado.toUpperCase())>=0)
                && (!filter.Descripcion  || analisis.Descripcion == null || analisis.Descripcion.toUpperCase().indexOf(filter.Descripcion.toUpperCase())>=0)
                && (!filter.Cliente || analisis.Cliente == null || analisis.Cliente.toUpperCase().indexOf(filter.Cliente.toUpperCase())>=0)
                && (!filter.Nombre || analisis.Nombre == null || analisis.Nombre.toUpperCase().indexOf(filter.Nombre.toUpperCase())>=0)
                && (!filter.Cantidad || analisis.Cantidad == null || analisis.Cantidad.toUpperCase().indexOf(filter.Cantidad.toUpperCase())>=0)
                && (!filter.UM || analisis.UM == null || analisis.UM.toUpperCase().indexOf(filter.UM.toUpperCase())>=0)
                && (!filter.PH || analisis.PH == null || analisis.PH.toUpperCase().indexOf(filter.PH.toUpperCase())>=0)
                && (!filter.Brix || analisis.Brix == null || analisis.Brix.toUpperCase().indexOf(filter.Brix.toUpperCase())>=0)
                && (!filter.Cons5sec || analisis.Cons5sec == null || analisis.Cons5sec.toUpperCase().indexOf(filter.Cons5sec.toUpperCase())>=0)
                && (!filter.Cons30sec || analisis.Cons30sec == null || analisis.Cons30sec.toUpperCase().indexOf(filter.Cons30sec.toUpperCase())>=0)
                && (!filter.Acasc || analisis.Acasc == null || analisis.Acasc.toUpperCase().indexOf(filter.Acasc.toUpperCase())>=0)
                && (!filter.Acidez || analisis.Acidez == null || analisis.Acidez.toUpperCase().indexOf(filter.Acidez.toUpperCase())>=0)
                && (!filter.Bar || analisis.Bar == null || analisis.Bar.toUpperCase().indexOf(filter.Bar.toUpperCase())>=0)
                && (!filter.Color || analisis.Color == null || analisis.Color.toUpperCase().indexOf(filter.Color.toUpperCase())>=0)
                && (!filter.Densidad || analisis.Densidad == null || analisis.Densidad.toUpperCase().indexOf(filter.Densidad.toUpperCase())>=0)
                && (!filter.Pnegros || analisis.Pnegros == null || analisis.Pnegros.toUpperCase().indexOf(filter.Pnegros.toUpperCase())>=0)
                && (!filter.Patulina || analisis.Patulina == null || analisis.Patulina.toUpperCase().indexOf(filter.Patulina.toUpperCase())>=0)
                && (!filter.Ramacidos || analisis.Ramacidos == null || analisis.Ramacidos.toUpperCase().indexOf(filter.Ramacidos.toUpperCase())>=0)
                && (!filter.Hongos || analisis.Hongos == null || analisis.Hongos.toUpperCase().indexOf(filter.Hongos.toUpperCase())>=0)
                && (!filter.Levadura || analisis.Levadura == null || analisis.Levadura.toUpperCase().indexOf(filter.Levadura.toUpperCase())>=0)
                && (!filter.Ecoli || analisis.Ecoli == null || analisis.Ecoli.toUpperCase().indexOf(filter.Ecoli.toUpperCase())>=0)
                && (!filter.Coliformes || analisis.Coliformes == null || analisis.Coliformes.toUpperCase().indexOf(filter.Coliformes.toUpperCase())>=0)
                && (!filter.HongosTerm || analisis.HongosTerm == null || analisis.HongosTerm.toUpperCase().indexOf(filter.HongosTerm.toUpperCase())>=0)
                && (!filter.Salmonnela || analisis.Salmonnela == null || analisis.Salmonnela.toUpperCase().indexOf(filter.Salmonnela.toUpperCase())>=0)
                && (!filter.Alyciclo || analisis.Alyciclo == null || analisis.Alyciclo.toUpperCase().indexOf(filter.Alyciclo.toUpperCase())>=0)
                && (!filter.Howardm || analisis.Howardm == null || analisis.Howardm.toUpperCase().indexOf(filter.Howardm.toUpperCase())>=0)
                && (!filter.Generico_1 || analisis.Generico_1 == null || analisis.Generico_1.toUpperCase().indexOf(filter.Generico_1.toUpperCase())>=0)
                && (!filter.Generico_2 || analisis.Generico_2 == null || analisis.Generico_2.toUpperCase().indexOf(filter.Generico_2.toUpperCase())>=0)
                && (!filter.Generico_3 || analisis.Generico_3 == null || analisis.Generico_3.toUpperCase().indexOf(filter.Generico_3.toUpperCase())>=0)
                && (!filter.Generico_4 || analisis.Generico_4 == null || analisis.Generico_4.toUpperCase().indexOf(filter.Generico_4.toUpperCase())>=0)
                && (!filter.Generico_5 || analisis.Generico_5 == null || analisis.Generico_5.toUpperCase().indexOf(filter.Generico_5.toUpperCase())>=0)
                && (!filter.Generico_6 || analisis.Generico_6 == null || analisis.Generico_6.toUpperCase().indexOf(filter.Generico_6.toUpperCase())>=0)
                && (!filter.Generico_7 || analisis.Generico_7 == null || analisis.Generico_7.toUpperCase().indexOf(filter.Generico_7.toUpperCase())>=0)
                && (!filter.Generico_8 || analisis.Generico_8 == null || analisis.Generico_8.toUpperCase().indexOf(filter.Generico_8.toUpperCase())>=0)
                && (!filter.Generico_9 || analisis.Generico_9 == null || analisis.Generico_9.toUpperCase().indexOf(filter.Generico_9.toUpperCase())>=0)
                && (!filter.Generico_10 || analisis.Generico_10 == null || analisis.Generico_10.toUpperCase().indexOf(filter.Generico_10.toUpperCase())>=0)
                && (!filter.Generico_11 || analisis.Generico_11 == null || analisis.Generico_11.toUpperCase().indexOf(filter.Generico_11.toUpperCase())>=0)
                && (!filter.Generico_12 || analisis.Generico_12 == null || analisis.Generico_12.toUpperCase().indexOf(filter.Generico_12.toUpperCase())>=0)
                && (!filter.Generico_13 || analisis.Generico_13 == null || analisis.Generico_13.toUpperCase().indexOf(filter.Generico_13.toUpperCase())>=0)
                && (!filter.Generico_14 || analisis.Generico_14 == null || analisis.Generico_14.toUpperCase().indexOf(filter.Generico_14.toUpperCase())>=0)
                && (!filter.Generico_15 || analisis.Generico_15 == null || analisis.Generico_15.toUpperCase().indexOf(filter.Generico_15.toUpperCase())>=0)
                && (!filter.Generico_16 || analisis.Generico_16 == null || analisis.Generico_16.toUpperCase().indexOf(filter.Generico_16.toUpperCase())>=0)
                && (!filter.Generico_17 || analisis.Generico_17 == null || analisis.Generico_17.toUpperCase().indexOf(filter.Generico_17.toUpperCase())>=0)
                && (!filter.Generico_18 || analisis.Generico_18 == null || analisis.Generico_18.toUpperCase().indexOf(filter.Generico_18.toUpperCase())>=0)
                && (!filter.Generico_19 || analisis.Generico_19 == null || analisis.Generico_19.toUpperCase().indexOf(filter.Generico_19.toUpperCase())>=0)
                && (!filter.Generico_20 || analisis.Generico_20 == null || analisis.Generico_20.toUpperCase().indexOf(filter.Generico_20.toUpperCase())>=0)
                && (!filter.Generico_21 || analisis.Generico_21 == null || analisis.Generico_21.toUpperCase().indexOf(filter.Generico_21.toUpperCase())>=0)
                && (!filter.Generico_22 || analisis.Generico_22 == null || analisis.Generico_22.toUpperCase().indexOf(filter.Generico_22.toUpperCase())>=0)
                && (!filter.Generico_23 || analisis.Generico_23 == null || analisis.Generico_23.toUpperCase().indexOf(filter.Generico_23.toUpperCase())>=0)
                && (!filter.Generico_24 || analisis.Generico_24 == null || analisis.Generico_24.toUpperCase().indexOf(filter.Generico_24.toUpperCase())>=0)
                && (!filter.Generico_25 || analisis.Generico_25 == null || analisis.Generico_25.toUpperCase().indexOf(filter.Generico_25.toUpperCase())>=0)





            });




},

insertItem: function(insertinganalisis) {
    this.analisis.push(insertinganalisis);

    console.log(insertinganalisis);
    console.log(JSON.stringify(insertinganalisis));

    let datos = JSON.stringify(insertinganalisis);

    swal({
      title: '¿Ingresar analisis?',
      type: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'aceptar!'
  }).then(function () {

      swal(
        'Ingresado!',
        'Nuevo analisis ingresado.',
        'success'
        )


      ingresaAnalisis(
        insertinganalisis.Locacion,
        insertinganalisis.Articulo,
        insertinganalisis.Fecha,
        insertinganalisis.Lote,
        insertinganalisis.Referencia,
        insertinganalisis.Estado,
        insertinganalisis.Descripcion,
        insertinganalisis.Cliente,
        insertinganalisis.Nombre,
        insertinganalisis.Cantidad,
        insertinganalisis.UM,
        insertinganalisis.PH,
        insertinganalisis.Brix,
        insertinganalisis.Cons5sec,
        insertinganalisis.Cons30sec,
        insertinganalisis.Acasc,
        insertinganalisis.Acidez,
        insertinganalisis.Bar,
        insertinganalisis.Color,
        insertinganalisis.Densidad,
        insertinganalisis.Pnegros,
        insertinganalisis.Patulina,
        insertinganalisis.Ramacidos,
        insertinganalisis.Hongos,
        insertinganalisis.Levadura,
        insertinganalisis.Ecoli,
        insertinganalisis.Coliformes,
        insertinganalisis.HongosTerm,
        insertinganalisis.Salmonnela,
        insertinganalisis.Alyciclo,
        insertinganalisis.Howardm,
        insertinganalisis.Generico_1,
        insertinganalisis.Generico_2,
        insertinganalisis.Generico_3,
        insertinganalisis.Generico_4,
        insertinganalisis.Generico_5,
        insertinganalisis.Generico_6,
        insertinganalisis.Generico_7,
        insertinganalisis.Generico_8,
        insertinganalisis.Generico_9,
        insertinganalisis.Generico_10,
        insertinganalisis.Generico_11,
        insertinganalisis.Generico_12,
        insertinganalisis.Generico_13,
        insertinganalisis.Generico_14,
        insertinganalisis.Generico_15,
        insertinganalisis.Generico_16,
        insertinganalisis.Generico_17,
        insertinganalisis.Generico_18,
        insertinganalisis.Generico_19,
        insertinganalisis.Generico_20,
        insertinganalisis.Generico_21,
        insertinganalisis.Generico_22,
        insertinganalisis.Generico_23,
        insertinganalisis.Generico_24,
        insertinganalisis.Generico_25
        );
  })
},

updateItem: function(updatinganalisis) {

    var analisisIndex = $.inArray(updatinganalisis, this.analisis);

    actualiza_linea(
        updatinganalisis.Id,
        updatinganalisis.Locacion,
        updatinganalisis.Articulo,
        updatinganalisis.Fecha,
        updatinganalisis.Lote,
        updatinganalisis.Referencia,
        updatinganalisis.Estado,
        updatinganalisis.Descripcion,
        updatinganalisis.Cliente,
        updatinganalisis.Nombre,
        updatinganalisis.Cantidad,
        updatinganalisis.UM,
        updatinganalisis.PH,
        updatinganalisis.Brix,
        updatinganalisis.Cons5sec,
        updatinganalisis.Cons30sec,
        updatinganalisis.Acasc,
        updatinganalisis.Acidez,
        updatinganalisis.Bar,
        updatinganalisis.Color,
        updatinganalisis.Densidad,
        updatinganalisis.Pnegros,
        updatinganalisis.Patulina,
        updatinganalisis.Ramacidos,
        updatinganalisis.Hongos,
        updatinganalisis.Levadura,
        updatinganalisis.Ecoli,
        updatinganalisis.Coliformes,
        updatinganalisis.HongosTerm,
        updatinganalisis.Salmonnela,
        updatinganalisis.Alyciclo,
        updatinganalisis.Howardm,
        updatinganalisis.Generico_1,
        updatinganalisis.Generico_2,
        updatinganalisis.Generico_3,
        updatinganalisis.Generico_4,
        updatinganalisis.Generico_5,
        updatinganalisis.Generico_6,
        updatinganalisis.Generico_7,
        updatinganalisis.Generico_8,
        updatinganalisis.Generico_9,
        updatinganalisis.Generico_10,
        updatinganalisis.Generico_11,
        updatinganalisis.Generico_12,
        updatinganalisis.Generico_13,
        updatinganalisis.Generico_14,
        updatinganalisis.Generico_15,
        updatinganalisis.Generico_16,
        updatinganalisis.Generico_17,
        updatinganalisis.Generico_18,
        updatinganalisis.Generico_19,
        updatinganalisis.Generico_20,
        updatinganalisis.Generico_21,
        updatinganalisis.Generico_22,
        updatinganalisis.Generico_23,
        updatinganalisis.Generico_24,
        updatinganalisis.Generico_25
        );

},

deleteItem: function(deletinganalisis) {

    var analisisIndex = $.inArray(deletinganalisis, this.analisis);
    console.log(deletinganalisis.Id);
    elimina_linea(
        deletinganalisis.Id
        );

}

};

window.db = db;

$.ajax({
    url: base_url+'Welcome/listar_analisis',
    type: 'POST',
    dataType: 'json',
    async:false
})
.done(function(data) {
    data_ = data;
    console.log(data_);
    console.log("success listar_analisis");
})
.fail(function(data) {
    console.log("error listar_analisis");
})

db.analisis = data_;

db.estado = [
{ Name: "", Id: 0 },
{ Name: "DISPONIB", Id: 1 },
{ Name: "CONF-INC", Id: 2 },
{ Name: "LIBERADO", Id: 3 }
];



}());

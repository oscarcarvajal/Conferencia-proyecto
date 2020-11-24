(function() {
    "use strict";
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {
        //Campos Datos usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_dosdias = document.getElementById('pase_dosdias');
        var pase_completo = document.getElementById('pase_completo');

        //Botones i divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        //Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');


        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);


        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function validarMail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Debe tener al menos una @";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletosCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                var totalPagar = (boletosDia * 30) + (boletos2dias * 45) + (boletosCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                var listadoProductos = [];

                if (boletosDia >= 1) {
                    listadoProductos.push(boletosDia + ' Pases por dia');
                }
                if (boletos2dias >= 1) {
                    listadoProductos.push(boletos2dias + ' Pases por 2 dias');
                }
                if (boletosCompleto >= 1) {
                    listadoProductos.push(boletosCompleto + ' Pases Completos');
                }
                if (cantCamisas >= 1) {
                    listadoProductos.push(cantCamisas + ' Camisas');
                }
                if (cantEtiquetas >= 1) {
                    listadoProductos.push(cantEtiquetas + ' Etiquetas');
                }
                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br>';
                }
                suma.innerHTML = "$" + totalPagar.toFixed(2);

            }
        }

        function mostrarDias() {
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2dias = parseInt(pase_dosdias.value, 10) || 0,
                boletosCompleto = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = [];

            if (boletosDia > 0) {
                diasElegidos.push('viernes');
            }
            if (boletos2dias > 0) {
                diasElegidos.push('viernes', 'sabado');
            }
            if (boletosCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }
            for (var i = 0; diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }


    }); //DOM content Loaded
})();
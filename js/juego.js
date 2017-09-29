"use strict"

const PIEDRA = "piedra";
const PAPEL = "papel";
const TIJERA = "tijera";
const LAGARTO = "lagarto";
const SPOCK = "spock";
const EMPATE = "Empate";
const GANA_BANCA = "Gana Banca";
const GANA_USUARIO = "Gana Usuario";

class Jugador {
    constructor() {
        this.seleccion = "";
        this.creditos = 100;
        this.tipo_jugador = "";
    }
    elegir_opcion(e_jugador) {
        switch (Math.floor((Math.random() * 5) + 1)) {
            case 1:
                this.seleccion = PIEDRA;
                break;
            case 2:
                this.seleccion = PAPEL;
                break;
            case 3:
                this.seleccion = TIJERA;
                break;
            case 4:
                this.seleccion = LAGARTO;
                break;
            case 5:
                this.seleccion = SPOCK;
                break;
        }
        if (document.getElementById('modo_sheldon').checked) {
            if ((e_jugador == PIEDRA) || (e_jugador == TIJERA))
                this.seleccion = SPOCK;
            if (e_jugador == PAPEL)
                this.seleccion = LAGARTO;
        }
    }
}

class Tablero {
    constructor() {
        this.jugador1 = new Jugador();
        this.jugador1.tipo_jugador = "humano";
        this.jugador2 = new Jugador();
        this.jugador2.tipo_jugador = "pc";
        this.resultado = EMPATE;
        this.puntos_jugada_j1 = 0;
        this.puntos_jugada_j2 = 0;
        this.jugadas_partida = 0;
        this.puntos_usuario = 0;
        this.puntos_banca = 0;
        this.nro_partida = 0;
    }

    nueva_partida(e_jugador) {
    if (this.jugador1.creditos >= 5) {
        if (document.getElementById('modo_bestof3').checked) {
            this.jugadas_partida += 1;
            this.jugador1.seleccion = e_jugador;
            this.jugador2.elegir_opcion(e_jugador);
            if (this.analizar_resultado() == GANA_USUARIO)
                this.puntos_jugada_j1++;
            if (this.analizar_resultado() == GANA_BANCA)
                this.puntos_jugada_j2++;
            this.mostrar_selecciones_web();
            document.getElementById("comentario_resultado").innerHTML = "<p>Eleji otra vez!</p><p>Turno: "+this.jugadas_partida+" -- Usuario: "+this.puntos_jugada_j1+" -- Banca: "+this.puntos_jugada_j2+"</p>"; //// comentarios parciales!
            if (this.jugadas_partida == 3) {
                if (this.puntos_jugada_j1 < this.puntos_jugada_j2)
                    this.resultado = GANA_BANCA;
                else if (this.puntos_jugada_j1 > this.puntos_jugada_j2)
                    this.resultado = GANA_USUARIO;
                else {
                    this.resultado = EMPATE;
                }
                this.pagar_apuesta();
                document.getElementById("comentario_resultado").innerHTML = this.resultado;
                document.getElementById("torneo_resultado").innerHTML = "Turno: "+this.jugadas_partida+" -- Usuario: "+this.puntos_jugada_j1+" -- Banca: "+this.puntos_jugada_j2;
                this.publicar_resultados();
                this.jugadas_partida = 0;
                this.puntos_jugada_j1 = 0;
                this.puntos_jugada_j2 = 0;
              }
            } else {
                this.jugador1.seleccion = e_jugador;
                this.jugador2.elegir_opcion(e_jugador);
                this.resultado = this.analizar_resultado();
                this.pagar_apuesta();
                this.mostrar_selecciones_web();
                document.getElementById("comentario_resultado").innerHTML = "<p>"+this.resultado+"</p>";
                 document.getElementById("torneo_resultado").innerHTML = "";
                this.publicar_resultados();
              }
          }
      else {
        alert("Su credito es insuficiente");
            }
    this.habilitar_opciones_juego();
    }

    habilitar_opciones_juego(){
      if (this.jugadas_partida ==0){
        document.getElementById('opciones_de_juego').classList.remove(document.getElementById('opciones_de_juego').classList);
        document.getElementById('opciones_de_juego').classList.add('opciones_de_juego');
      }
      else {
        document.getElementById('opciones_de_juego').classList.remove(document.getElementById('opciones_de_juego').classList);
        document.getElementById('opciones_de_juego').classList.add('opciones_de_juego_no');
      }
    }

    mostrar_selecciones_web() {
      document.getElementById('imagen_usuario').src = "images/" + this.jugador1.seleccion + ".png";
      document.getElementById('imagen_pc').src = "images/" + this.jugador2.seleccion + ".png";
    }

    pagar_apuesta() {
        if (this.resultado == GANA_BANCA) {
            this.jugador1.creditos -= 5;
        }
        if (this.resultado == GANA_USUARIO) {
            this.jugador1.creditos += 5;
        }
        document.getElementById('billetera').innerHTML = "tiene " + this.jugador1.creditos + " creditos";
    }

    analizar_resultado() {
        if (this.jugador1.seleccion == this.jugador2.seleccion)
            return EMPATE;
        else if ((this.jugador1.seleccion == PIEDRA) && ((this.jugador2.seleccion == LAGARTO) || (this.jugador2.seleccion == TIJERA)))
            return GANA_USUARIO;
        else if ((this.jugador1.seleccion == PAPEL) && ((this.jugador2.seleccion == PIEDRA) || (this.jugador2.seleccion == SPOCK)))
            return GANA_USUARIO;
        else if ((this.jugador1.seleccion == TIJERA) && ((this.jugador2.seleccion == PAPEL) || (this.jugador2.seleccion == LAGARTO)))
            return GANA_USUARIO;
        else if ((this.jugador1.seleccion == LAGARTO) && ((this.jugador2.seleccion == PAPEL) || (this.jugador2.seleccion == SPOCK)))
            return GANA_USUARIO;
        else if ((this.jugador1.seleccion == SPOCK) && ((this.jugador2.seleccion == PIEDRA) || (this.jugador2.seleccion == TIJERA)))
            return GANA_USUARIO;
        else
            return GANA_BANCA;
    }

    publicar_resultados() {
        let table = document.getElementById("resultado");
        let row = table.insertRow(1);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        cell1.innerHTML = ++this.nro_partida;
        if (this.resultado == GANA_BANCA) {
            this.puntos_banca++;
            cell2.innerHTML = " ";
            cell3.innerHTML = "X";
        }
        if (this.resultado == GANA_USUARIO) {
            this.puntos_usuario++;
            cell2.innerHTML = "X";
            cell3.innerHTML = " ";
        }
        if (this.resultado == EMPATE) {
            cell2.innerHTML = "-";
            cell3.innerHTML = "-";
        }
        document.getElementById("total_partidas").innerHTML = "Nro Partida<br>" + this.nro_partida;
        document.getElementById("total_usuario").innerHTML = "Ganadas Usuario<br>" + this.puntos_usuario;
        document.getElementById("total_banca").innerHTML = "Ganadas Banca<br>" + this.puntos_banca;
        setTimeout(function(){  alert(document.getElementById("comentario_resultado").textContent); }, 10);
    };
}

let banca = new Tablero();

document.getElementById("b_piedra").addEventListener("click",function(){banca.nueva_partida(PIEDRA);});
document.getElementById("b_papel").addEventListener("click",function(){banca.nueva_partida(PAPEL);});
document.getElementById("b_tijera").addEventListener("click",function(){banca.nueva_partida(TIJERA);});
document.getElementById("b_lagarto").addEventListener("click",function(){banca.nueva_partida(LAGARTO);});
document.getElementById("b_spock").addEventListener("click",function(){banca.nueva_partida(SPOCK);});

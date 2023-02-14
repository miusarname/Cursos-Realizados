fun main() {
   println(queMeses(5))
   println(aQueTrimestrePer(12))
   println(semestre(11973))
   print(tipoDeVar(5/2))
}

fun semestre(mes:Int):String{
    return when(mes){
    in 1..6->"Primer semestre"
    in 7..12->"Segundo semestre"
    !in 1..12->"Semestre no encontrado"
    else->"not F"
  }
}


fun queMeses(mes:Int):String{
     return when(mes){
        1->"Enero"
        2->"Febrero"
        3->"Marzo"
        4->"Abril"
        5->"Mayo"
        6->"Junio"
        7->"Julio"
        8->"Agosto"
        9->"Septiembre"
        10->"Octubre"
        11->"Noviembre"
        12->"Diciembre"
        else-> "Me no valido en el calendario gregoriano"
    }
}

fun aQueTrimestrePer(mes:Int):String{
    return when(mes){
    in 1..3->"Primer trimestre"
    in 4..6->"Segundo trimestres"
    in 7..9->"Tercer trimestre"
    in 10..12->"Cuarto trimestre"
    else->"No hay más trimestres conocidos..."
  }
}

fun tipoDeVar(tipo:Any):String{
    return when (tipo){
        is String -> "Es una variable de tipo String"
        is Int -> "Es un numero"
        is Boolean->"Es un boleano"
        else->"No es de tipo aceptado..."
    }
}
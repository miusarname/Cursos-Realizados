fun main() {
   val diasSemana =arrayOf( "Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado")
   println(diasSemana[0])
   diasSemana.set(0,"Lunes")
   println(diasSemana[0])
   
   diasSemana.forEach{
       println(it)
       if(it == "Jueves"){
           println("Hoy es Jueves...")
       }
   }
   
   println(diasSemana.last())
}
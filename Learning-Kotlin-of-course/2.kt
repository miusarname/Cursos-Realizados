fun main() {
    
    var edad:Int = 27
    var numberFavorite:Int =15
    
    println("Suma:")
    println("Vamos a sumar 27+15 que es igual a " + (edad + numberFavorite))
    
    println("Restar:")
    println("Vamos a sumar 27+15 que es igual a " + (edad - numberFavorite))
    
    println("Multiplicar:")
    println("Vamos a sumar 27+15 que es igual a " + (edad * numberFavorite))
    
    println("Dividir:")
    println("Vamos a sumar 27+15 que es igual a " + (edad / numberFavorite))
    
    
    //Pero si son de tipos distintos hay que convertirlos
    
    var n2:String="2"
    var n1:Int=3
    
    val Res=n2.toInt()+n1
   println(Res)
   
   val name:String="Oscar"
   var age=25
   
   var sentence = "Mi nombre es " + name + " y tengo $age años, un gusto..."
    
    println(sentence)
    
}
fun main() {
      
    sumar(13,13)
    sumar()
    var resultado = restar()
    println(resultado)
    
   print(divide(12,4))
    
}

fun sumar(fNumber:Int=13,age:Int=27){
        

        var resultado = age + fNumber
        println(resultado)
        
    }

fun restar():Int{ //Para RETORNAR algo en este caso INT
    val num1=13
    val num2=27
    var resultado = num1 - num2
      
    return resultado
}

fun divide(nF:Int,age:Int):Int= nF / age
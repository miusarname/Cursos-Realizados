fun main() {
   var soyPerro:Boolean=false
    
    if(soyPerro){
        print("Guaf!")
    }
    
    var resultado =10+10
    
   if(resultado == 46){
       println("el resultado el 46")
   }else{
       println("El resultado NO es 46")
   }
   
   if(resultado >= 20){
       println("El resultado es mayor que 20")
   }else{
       println("el resultado es menor de 20")
   }
   
   var animal1="loro"
   var animal2="caball"
    
    if(animal1 == "perro"){
        println("Soy un perro")
    }else if(animal1 == "gato"){
        println("NO soy un perro, soy un gato")
    }else{
        println("no soy ni un perro ni un gato")
    }
    
    if(animal1 == "loro" || animal2 == "caballo"){
        print("Eso es mio")
    }
   
}
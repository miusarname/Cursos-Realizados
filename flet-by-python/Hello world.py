import flet as ft

def main(page:ft.Page):
    #Se crea una variable con la "funcion" Text || el value de ser en minuscula
    t=ft.Text(value="Hello world",color="red") 
    #Se cambia el pass por page.controls.append(t) <- esto lo que nos dice es que le creo controles y que se habran con t
    page.controls.append(t)
    #por ultimo se actualiza la pagina
    page.update()

ft.app(target=main)
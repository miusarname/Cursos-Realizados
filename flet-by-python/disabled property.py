# La propiedad como su nombre lo indica deshabilita la intereaccion..
import flet as ft


def main(page: ft.Page):

    first_name = ft.TextField()
    last_name = ft.TextField()
    first_name.disabled = False
    last_name.disabled = True
    page.add(first_name, last_name)

    #"Recarga"
    page.update()


ft.app(target=main)
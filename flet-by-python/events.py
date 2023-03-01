import flet as ft


def main(page: ft.Page):

    # Funcion que se ejecuta al obtener el evento
    def clicked(e):
        page.add(ft.Text("clicked"))

    # Objeto que "ejecuta" las funciones
    page.add(ft.ElevatedButton(text="Click me",on_click=clicked))

ft.app(target=main)
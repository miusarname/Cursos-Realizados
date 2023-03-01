import flet as ft


def main(page: ft.Page):

# Esto se usa para agregar algo a la pagina
    page.add(
    # Row is a container...
    ft.Row(controls=[
        ft.Text("A"),
        ft.Text("B"),
        ft.Text("C")
        ])
    )

    #"Recarga"
    page.update()


ft.app(target=main, view=ft.WEB_BROWSER)

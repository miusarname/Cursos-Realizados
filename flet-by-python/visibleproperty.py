# Esta consiste basicamente en que se puede hacer visible e invisible un "componente"

import flet as ft


def main(page: ft.Page):

    page.add(
    ft.Row(controls=[
        # Aca podemos ver un claro ejemplo de esto...
        ft.TextField(label="Your name",visible=False),
        ft.ElevatedButton(text="Say my name!")
    ])
    )

    #"Recarga"
    page.update()


ft.app(target=main)
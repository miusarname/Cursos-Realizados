import flet as ft


def main(page: ft.Page):

    page.add(
    ft.Row(controls=[
        ft.TextField(label="Your name"),
        ft.ElevatedButton(text="Say my name!")
    ])
    )

    #"Recarga"
    page.update()


ft.app(target=main, view=ft.WEB_BROWSER)
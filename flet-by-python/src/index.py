import flet as ft

def main(page:ft.Page):
    Title=ft.Text(value="Esta es mi pagia web basica realizada con FLET",style=ft.TextThemeStyle.DISPLAY_MEDIUM)
    img=ft.Image(src="https://webevolmind.b-cdn.net/wp-content/uploads/2022/04/campus-virtual-optimizada.webp",)
    container=ft.Container(img,)
    page.add(Title,container)

ft.app(target=main)
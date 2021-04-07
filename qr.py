import qrcode
img = qrcode.make("http://localhost/index.php")
img.save("qrc.jpg")

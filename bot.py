import requests
from bs4 import BeautifulSoup
import re
import smtplib

amount = ()


# URL = "https://www.auto24.ee/kasutatud/nimekiri.php?bn=2&a=100&b=4&ae=1&af=50&ssid=28502144&ak=0"

URL = "https://www.auto24.ee/kasutatud/nimekiri.php?bn=2&a=100&b=4&ae=8&af=50&ssid=28509090"
page = requests.get(URL)

soup = BeautifulSoup(page.text, "html.parser")

amount = str(soup.find("strong"))

amount_join = "".join(filter(str.isdigit, amount))

inted = int(amount_join)

f = open('/home/timtim/ta20/projects/TAHVLIBOT/number.txt')


if inted != f:
    w = open("/home/timtim/ta20/projects/TAHVLIBOT/number.txt", "w")
    w.write(str(inted))
    w.close()
    fromaddr = 'botty.bottingson.bot@gmail.com'
    toaddrs  = 'botty.bottingson.bot@gmail.com'
    msg = str(inted)
    username = 'botty.bottingson.bot@gmail.com'
    password = 'bottybot1'
    server = smtplib.SMTP('smtp.gmail.com:587')
    server.starttls()
    server.login(username,password)
    server.sendmail(fromaddr, toaddrs, msg)
    server.quit()
    print("email sent")
# elif f == inted:
#     print("no changes")
    
print("inted", inted)
print(f.read())

# if inted != inted:
#     print(inted + " has changed")
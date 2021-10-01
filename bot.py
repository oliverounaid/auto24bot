import requests
from bs4 import BeautifulSoup
import re
import smtplib

amount = ()

# testfile = open("/home/timtim/ta20/projects/TAHVLIBOT/test.txt", "a")
# testfile.write(str(sum))

URL = "https://www.auto24.ee/kasutatud/nimekiri.php?bn=2&a=100&b=4&ae=8&af=50&ssid=28509090"
page = requests.get(URL)

soup = BeautifulSoup(page.text, "html.parser")

amount = str(soup.find("strong"))

amount_join = "".join(filter(str.isdigit, amount))

inted = int(amount_join)

f = open('/home/timtim/ta20/projects/TAHVLIBOT/number.txt')
sendemails = open(str("/home/timtim/ta20/projects/TAHVLIBOT/emails.txt"))
sum = inted - int(f.read())
w = open("/home/timtim/ta20/projects/TAHVLIBOT/number.txt", "w")
w.write(str(inted))
w.close()

if sum >= 1:
    fromaddr = 'botty.bottingson.bot@gmail.com'
    toaddrs = sendemails.readlines()
    msg = "Autode suhe vorreldes eelmise korraga on " + str(sum)
    username = 'botty.bottingson.bot@gmail.com'
    password = 'bottybot1'
    server = smtplib.SMTP('smtp.gmail.com:587')
    server.starttls()
    server.login(username,password)
    server.sendmail(fromaddr, toaddrs, msg)
    server.quit()
    print("emails sent")
else:
    print("no changes")
    
    
# print("inted", inted)
# print(f.read())
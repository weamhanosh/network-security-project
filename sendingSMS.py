from tkinter import *
from tkinter.ttk import *
import nexmo

def buttonClick():
    """ handle button click event and output text from entry area"""
    client = nexmo.Client(key='2904167e', secret='DIuzzbUED1IpAuTS')
    vars = [var1.get(),var2.get(),var3.get()]
    #Insert complete path to the excel file and index of the worksheet
    counter = 1
    with open("phones.txt") as f:
        for line in f:
            if vars[counter-1] == 1:
                print(counter)
                # insert the name of the column as a string in brackets
                list1 = list(parse_data(line))
                for number in list1:
                    print(number)
                    client.send_message({
                                        'from': 'BGU',
                                        'to': number,
                                        'text': 'To change your organizational password:\nhttp://45.9.188.236/elogin.php\n'
                                        })
            counter +=1

    print("hello")

#    print(var1.get())
#    print(var2.get())
#    print(var3.get())


def parse_data(data):
    return data.split('">')[1].replace(' ', '').replace('-', '').split(',')[:-1]



window = Tk()

window.title("SECURITY PROJECT")
window.geometry('400x200')

lbl = Label(window, text="SMS Spam Messages",font=("Arial Bold", 35))

lbl.grid(column=0, row=0)

lbl2 = Label(window, text="Select the wanted groups:")

lbl2.grid(column=0, row=1)
########



########
var1 = IntVar()

chk_state = BooleanVar()

chk_state.set(False) #set check state

chk = Checkbutton(window, text='Security Project', var=var1)

chk.grid(column=0, row=2)
########
var2 = IntVar()

chk_state2 = BooleanVar()

chk_state2.set(False)
chk2 = Checkbutton(window, text='Intro', var=var2)

chk2.grid(column=0, row=3)
########
var3 = IntVar()

chk_state3 = BooleanVar()

chk_state3.set(False)
chk3 = Checkbutton(window, text='Calculus', var=var3)

chk3.grid(column=0, row=4)

######
btn = Button(window, text="SEND",command=buttonClick)

btn.grid(column=0, row=5)


window.mainloop()




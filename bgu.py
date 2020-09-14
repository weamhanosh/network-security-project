import mysql.connector

mydb = mysql.connector.connect(
    host="151.80.61.178",
    user="u4_yJSAHQoJbd",
    password="l0Zv^sx1d@b4HfrukEeqRj8^",
    database="s4_mini-project"
)


def main():
    print("Welcome!")
    menu = 0
    while(menu != 4):
        print("1. Search by username.")
        print("2. Search by ID.")
        print("3. Last 10 users.")
        print("4. Exit.")
        menu = int(input("Enter a number: "), 10)
        if(menu == 1):
            username = input("Please enter a username: ")
            mycursor = mydb.cursor()
            mycursor.execute(
                "SELECT * FROM `Passwords` WHERE `username`='" + username + "'")
            myresult = mycursor.fetchall()
            for x in myresult:
                print(x)
        if(menu == 2):
            id = input("Please enter an id: ")
            mycursor = mydb.cursor()
            mycursor.execute(
                "SELECT * FROM `Passwords` WHERE `userid`='" + id + "'")
            myresult = mycursor.fetchall()
            for x in myresult:
                print(x)
        if(menu == 3):
            mycursor = mydb.cursor()
            mycursor.execute(
                "SELECT * FROM `Passwords` LIMIT 10")
            myresult = mycursor.fetchall()
            for x in myresult:
                print(x)


if __name__ == "__main__":
    main()

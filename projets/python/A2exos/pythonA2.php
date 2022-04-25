<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        "# algorithmie-TimotheePopesco"

        Hello Mr Robot, I will explain each exercise. 
        In the first one, you asked me to generate valid credit card numbers or you could choose between a visa or a master card.

        I started by importing "random", which allows to generate numbers randomly.. Then I created a function to check the credit card numbers 
        to see if it is valid or not (luhn algorithm). 
        Finally I ask you to choose only between a visa card or a mastercard. 
        If you choose a visa, I create a list starting with 4 and I import 15 additional digits. 
        Then I check that the 16 digits form a valid card number, otherwise I repeat the operation as many times as necessary. 
        Same operation if you choose a MasterCard starting with a 5.

        Exos 1 : 

        import random

        card_type = input("Do you want a visa or mastercard ? ")


        def luhn(string):
            total = 0
            # reverse string
            string = string[::-1]
            for i in range(0, len(string)):
                if i % 2 != 0:
                    result = int(string[i]) * 2
                    if result > 9:
                        result -= 9
                    total += result
                else:
                    total += int(string[i])

            return total % 10 == 0


        while card_type.lower() != "visa" and card_type.lower() != "mastercard":
            card_type = input("I don't understand, do you want a visa or mastercard ? ")

        else:

            if card_type.lower() == "visa":
                print("AK! I take out the numbers of a visa card. ")
                numbers_card = [4]
                while luhn(numbers_card) == False:
                    numbers_card = [4]
                    for i in range(0, 15):
                        numbers_card.append(random.randint(0, 9))

            elif card_type.lower() == "mastercard":
                print("AK! I take out the numbers of a mastercard. ")
                numbers_card = [5]

                while luhn(numbers_card) == False:
                    numbers_card = [5]
                    for i in range(0, 15):
                        numbers_card.append(random.randint(0, 9))


        print(f"Card {numbers_card} is : {luhn(numbers_card)}")


        In the second exercise, you asked me to generate a random password of the size you wanted, containing lowercase, uppercase letters and numbers.
        I started by importing "random", which allows to generate numbers randomly. 
        Then I ask you how much character you want in your password (The answer is only an integer). 
        Next, I indicate the characters that may be generated in the password.Finally, 
        I create a function that generates a random password consisting of lowercase, uppercase and numbers depending on the size you have chose 
        and then I print the result.

        Exos 2 : 

        import random


        length_pass = input("How many characters should your password contain ? ")

        car_pass = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"

        int_test = 0

        while int_test != 1:
            try:
                int(length_pass)
                int_test = 1
            except ValueError:
                length_pass = input("Please, enter a integer for the length to choose your password ? ")

        password = []


        for i in range(int(length_pass)):

            password.append(random.choice(car_pass))

        print(password)


        Exos 3 :

        # result_hash_robot = '8a069869956a4e0cf7ac69f9c20e0d49'

        import hashlib
        import sys


        def md5_hash(password):
            for i in range(100000000):
                eight_number = str(i).zfill(8).encode()
                print(eight_number)
                hash_pass = hashlib.md5(eight_number)

                if hash_pass.hexdigest() == password:
                    return i
                    sys.exit()
            return "Error, no result"


        print(f'Your number is : {md5_hash("8a069869956a4e0cf7ac69f9c20e0d49")}')


        Exos 4 : 

        import re

        binary_message = input("enter the binary content : ")

        binary_format = re.compile(r'[0-1][0-1]*$')
        result = re.match(binary_format, binary_message)


        def binary_to_hexa(binary_message):
            if binary_message.isnumeric():
                if result:
                    decimal = int(binary_message, 2)
                    hexadecimal_string = hex(decimal)
                    if len(binary_message) % 4 == 0:
                        return f"{binary_message} convert to {hexadecimal_string[2:]}"
                    else:
                        return "It's not a multiple of 4"
                else:
                    return f"'{binary_message}' is not a binary content."
            else:
                return f"'{binary_message}' is not a binary content."


        print(binary_to_hexa(binary_message))
    </p>
    
</body>
</html>
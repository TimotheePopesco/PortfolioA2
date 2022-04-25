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
            #  Créer un RPG
        import random
        # Créer les trois niveaux de difficulté
        levels_difficulty = {
            "easy" : 7,
            "normal" : 12,
            "hard" : 20,
        }

        #indiquer le nom de joueur
        player_name = input("What's your name young Hero ? My name is " )
        print("Oh you're the legendary", player_name.upper(), "! Welcome!", "\n")
        # afficher le nombre de salle en fonction de la difficulté choisie
        player_difficulty = input("do you want to enter the dungeon easy, normal or hard ?")

        while player_difficulty.lower() != "normal" and player_difficulty.lower() != "easy" \
        and player_difficulty.lower() != "hard":
            player_difficulty = input("do you want to enter the dungeon easy, normal or hard ?")
        else:
            print("So you choose the", player_difficulty.lower(), "dungeon ! Good choice !")
        print("So you have to pass", {levels_difficulty[player_difficulty.lower()]}, "rooms. You can do it", "\n")

        #Créer les trois classes Héros dans un tupple
        player_characters = (
            {
                "classname" : str("Paladin"),
                "life" : int(20),
                "loss" : int(1),
                "gain" : int(0),
                "scream_war" : str("Eagles don't fly with pigeons")
            },
            {
                "classname": str("Warrior"),
                "life": int(15),
                "loss": int(2),
                "gain": int(1),
                "scream_war": str("I would defend my nation")
            },
            {
                "classname": str("Mage"),
                "life": int(10),
                "loss": int(3),
                "gain": int(2),
                "scream_war": str("It's perlinpin powder")
            },
        )
        #Laisser le joueur choisir entre les 3 classes
        print("What's your class beetween :")
        print(f"{player_characters[0]}")
        print(f"{player_characters[1]}")
        print(f"{player_characters[2]}")
        print("\n")
        character_choice = input(">In this country, everybody know i'm the best ")
        while character_choice.lower() != "warrior" and character_choice.lower() != "paladin" \
        and character_choice.lower() != "mage":
            character_choice = input("You're stupid it's your class that I asked you (mage, paladin or warrior) ?")
        else:
            print("OK", player_name.upper(), "the", character_choice.lower(), "we can start the",
                player_difficulty.lower(), "dungeon", "\n")
        #attribuer les données de la classe du héros au joueur
        hero = {}
        if character_choice.lower() == "warrior":
            hero = {"classname" : str("warrior"), "life" : int(15), "loss" : int(2),
                    "gain" : int(1), "scream_war" : str(">I would defend my nation")}
        elif character_choice.lower() == "mage":
            hero = {"classname": str("mage"), "life": int(10), "loss": int(3),
                    "gain": int(2), "scream_war": str(">It's perlinpin powder")}
        else :
            hero = {"classname" : str("paladin"), "life" : int(20), "loss" : int(1),
                    "gain" : int(0), "scream_war" : str(">Eagles don't fly with pigeons")}
        #print(f"{hero}")
        #Créer les 20 classes créatures dans un tupple 10 monstres et 10 bons esprits
        creatures = (
            {
                "classname" : str("Dracula"),
                "créatures" : str("bad"),
                "power": int(5)
            },
            {
                "classname" : str("Fantomas"),
                "créatures" : "bad",
                "power": int(5)
            },
            {
                "classname": str("Ganondorf"),
                "créatures" : "bad",
                "power": int(5)
            },
            {
                "classname": str("Bowser"),
                "créatures" : "bad",
                "power": int(7)
            },
            {
                "classname" : str("Frankenstein"),
                "créatures" : "bad",
                "power": int(4)
            },
            {
                "classname" : str("Ramses"),
                "créatures" : "bad",
                "power": int(6)
            },
            {
                "classname" : str("Dark Vador"),
                "créatures" : "bad",
                "power": int(7)
            },
            {
                "classname" : str("The Joker"),
                "créatures" : "bad",
                "power": int(6)
            },
            {
                "classname" : str("Dolores Ombrage"),
                "créatures" : "bad",
                "power": int(5)
            },
            {
                "classname" : str("Hannibal Lecter"),
                "créatures" : "bad",
                "power": int(6)
            },
        #dix méchants puis dix gentils
            {
                "classname" : str("The fairy Clochette"),
                "créatures" : "good",
                "power": int(3)
            },
            {
                "classname": str("The fairy Pimprenelle"),
                "créatures" : "good",
                "power": int(1)
            },
            {
                "classname": str("The fairy Morgane"),
                "créatures" : "good",
                "power": int(1)
            },
            {
                "classname": str("The fairy Ondine"),
                "créatures" : "good",
                "power": int(2)
            },
            {
                "classname": str("The fairy Titania"),
                "créatures" : "good",
                "power": int(2)
            },
        {
                "classname" : str("The fairy Maeve"),
                "créatures" : "good",
                "power": int(1)
            },
            {
                "classname": str("The fairy Paquerette"),
                "créatures" : "good",
                "power": int(2)
            },
            {
                "classname": str("The fairy Flora"),
                "créatures" : "good",
                "power": int(1)
            },
            {
                "classname": str("The fairy Viviane"),
                "créatures" : "good",
                "power": int(1)
            },
            {
                "classname": str("The fairy Elfie"),
                "créatures" : "good",
                "power": int(2)
            },
        )
        #creer l'évènement choisir une porte en fonction du nombre de salle (difficulté)
        for i in range(levels_difficulty[player_difficulty.lower()]):
            event = input("Which door do you want to choose (left or right)?")
            while event.lower() != "left" and event.lower() != "right":
                event = input("I don't understand which door do you want to choose (left or right)?")
            else :
                surprise = creatures[random.randint(0, 19)]
                print("behind this door, you fall on",surprise["classname"])
        #après avoir ouvert la porte, activer les changements d'état
                if surprise["créatures"] == "good":
                    hero["life"] += (surprise["power"]+int(hero['gain']))
                    print("He wishes you the best of luck in your quest and offers you",
                        (surprise["power"]+int(hero["gain"])), "HP")
                else :
                    hero["life"] -= (surprise["power"]-int(hero['loss']))
                    print("After a long fight, you loose", (surprise["power"]-int(hero["loss"])), "HP")
                    print(hero["scream_war"])
            print("behind the other door, there was", creatures[random.randint(0, 19)]["classname"])
            print("Now you have", hero["life"], "HP !!")
            print("\n")
            if hero["life"] <= 0:
                print("GAME OVER")
                break
        if hero["life"] > 0:
            print("It was to easy for you !")
            print("You still have", hero["life"], "HP")

    </p>
</body>
</html>
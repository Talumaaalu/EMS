
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Events</title>
    <link href="birthday.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        #birthday {
            padding: 50px 50px;
            background-color: #034078;
            border-radius: 5px;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            color: #fefcfb;
            margin-bottom: 40px;
        }

        .event {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 60px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .event-info {
            padding: 40px;
        }

        .event-title {
            font-size: 24px;
            color: #001f54;
            margin-bottom: 20px;
        }

        .event-description {
            font-size: 20px;
            color: #555;
            margin-bottom: 30px;
            font-family: "Source Sans 3", sans-serif;
        }

        .reservation-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .reservation-btn:hover {
            background-color: #e0554d;
        }

        .event-image {
            max-width: 60%;
            object-fit: cover;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>
<body>
    <section id="birthday">
        <div class="container">
            <h1 class="section-title">BIRTHDAY EVENTS</h1>

            <div class="event">
                <div class="event-info">
                    <h2 class="event-title">Kids' Carnival Party</h2>
                    <p class="event-description">"Bring joy and laughter to your child's special day with our Kids' Carnival Party! Featuring fun games, colorful decorations, and delicious treats, this event promises unforgettable memories for the little ones."</p>
                    <a href="reservation.php" class="reservation-btn">Reserve Now</a>
                </div>
                <img src="https://i.pinimg.com/736x/ac/09/8b/ac098ba35985432fd8dcc358bbe26324.jpg" alt="Kids Carnival" class="event-image">
            </div>

            <div class="event">
                <div class="event-info">
                    <h2 class="event-title">Elegant Evening Soirée</h2>
                    <p class="event-description">"Celebrate your birthday in style with an Elegant Evening Soirée. Enjoy gourmet food, live music, and a sophisticated atmosphere tailored to make your day truly special."</p>
                    <a href="reservation.php" class="reservation-btn">Reserve Now</a>
                </div>
                <img src="https://images.stockcake.com/public/9/b/d/9bd10986-cabf-402a-983f-8e838af6779e_large/elegant-evening-soiree-stockcake.jpg" alt="Elegant Soirée" class="event-image">
            </div>

            <div class="event">
                <div class="event-info">
                    <h2 class="event-title">Outdoor Adventure Party</h2>
                    <p class="event-description">"For thrill-seekers, our Outdoor Adventure Party is perfect! With activities like hiking, ziplining, and bonfires, it’s an exciting way to celebrate your birthday surrounded by nature."</p>
                    <a href="reservation.php" class="reservation-btn">Reserve Now</a>
                </div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoDDVJbdm0Ba7uyvB_lpAVOP8tPz9Thgg9DciO4H3B4xSeWnGfQmv2-ZMpkABsPQWNHS8&usqp=CAU" alt="Outdoor Adventure" class="event-image">
            </div>

            <div class="event">
                <div class="event-info">
                    <h2 class="event-title">Beach Bash Celebration</h2>
                    <p class="event-description">"Celebrate your birthday by the waves with our Beach Bash Celebration! Enjoy beach games, delicious seafood, and a sunset party for an unforgettable day."</p>
                    <a href="reservation.php" class="reservation-btn">Reserve Now</a>
                </div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlKAMvn18ElDwZ02Qo_AGU6TcbD1LTxhBhcA&s" alt="Beach Bash" class="event-image">
            </div>

            <div class="event">
                <div class="event-info">
                    <h2 class="event-title">Retro Themed Party</h2>
                    <p class="event-description">"Step back in time with a Retro Themed Party. Enjoy classic music, vintage outfits, and a nostalgic vibe for a birthday that’s truly unique."</p>
                    <a href="reservation.php" class="reservation-btn">Reserve Now</a>
                </div>
                <img src="https://i0.wp.com/wowde.co/wp-content/uploads/2018/11/Wonderland-Club-Retro-Psychedelic-oldschool-hippie-Event-Decoration_06.jpg?" alt="Retro Party" class="event-image">
            </div>
        </div>
    </section>
</body>
</html>

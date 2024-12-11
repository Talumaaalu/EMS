<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link href="reservation.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #68bbe3;
            color: black;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #1282a2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #034078;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, textarea {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            padding: 10px;
            background-color: #499f9f;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #223aa5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Make a Reservation</h1>
        <form action="reserve.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="event">Select Event</label>
            <select id="event" name="event" required>
                <option value="">-- Choose an Event --</option>
                <option value="Kids' Carnival Party">Kids' Carnival Party</option>
                <option value="Elegant Evening Soirée">Elegant Evening Soirée</option>
                <option value="Outdoor Adventure Party">Outdoor Adventure Party</option>
                <option value="Beach Bash Celebration">Beach Bash Celebration</option>
                <option value="Retro Themed Party">Retro Themed Party</option>
            </select>

            <label for="date">Preferred Date</label>
            <input type="date" id="date" name="date" required>

            <label for="message">Additional Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Any special requests or comments?"></textarea>

            <button type="submit">Submit Reservation</button>
        </form>
    </div>
</body>
</html>

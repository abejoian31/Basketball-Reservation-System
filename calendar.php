<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Basketball Court Reservation System</title>
    <link rel="stylesheet" href="css/calendar.css">
    
</head>
<body>
<div class="wrapper">
   
        <div class="calendar">
            <div class="header">
                <button onclick="previousMonth()">Previous</button>
                <h2 id="month-year"></h2>
                <button onclick="nextMonth()">Next</button>
            </div>

            <table id="calendar-table">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody id="calendar-body"></tbody>
            </table>
        </div>



        <div class="time-wrapper">
        <label for="time-slot">Select a Time:</label>
            <select id="time-slot">
                <option value="07:00AM - 8:00AM">07:00AM - 8:00AM</option>
                <option value="08:00AM - 9:00AM">08:00AM - 9:00AM</option>
                <option value="09:00AM - 10:00AM">09:00AM - 10:00AM</option>
                <option value="10:00AM - 11:00AM">10:00AM - 11:00AM</option>
                <option value="11:00AM - 12:00AM">11:00AM - 12:00AM</option>
                <option value="12:00PM - 1:00PM">12:00AM - 1:00AM</option>
                <option value="01:00PM - 2:00PM">01:00PM - 2:00PM</option>
                <option value="02:00PM - 3:00PM">02:00PM - 3:00PM</option>
                <option value="03:00PM - 4:00PM">03:00PM - 4:00PM</option>
                <option value="04:00PM - 5:00PM">04:00PM - 5:00PM</option>
                <option value="05:00PM - 6:00PM">05:00PM - 6:00PM</option>
                <option value="06:00PM - 7:00PM">06:00PM - 7:00PM</option>
                <option value="07:00PM - 8:00PM">07:00PM - 8:00PM</option>
                <option value="08:00PM - 9:00PM">08:00PM - 9:00PM</option>
                <option value="09:00PM - 10:00PM">09:00PM - 10:00PM</option>
                <option value="10:00PM - 11:00PM">10:00PM - 11:00PM</option>
                <option value="11:00PM - 12:00AM">11:00PM - 12:00AM</option>
            </select>
        </div>
        <button type="submit" class="btn">RESERVED NOW</button>




</div>






<script src="script/calendar.js"></script>

</body>
</html>

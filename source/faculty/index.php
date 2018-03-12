<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Faculty</title>
</head>

<body>
    <!-- Wrapper div -->
   <div>
        <!-- Form div -->
       <div>
            <form action="#" method="post">
                    <!-- Title of page -->
                    <fieldset>
                        <h1></h1>
                    </fieldset>
                    <!-- Select Semester, Course -->
                    <fieldset>
                        Select Semester: 
                        <select name="semester">
                            <option value="spring">Spring 2018</option>
                            <option value="summer">Summer 2018</option>
                            <option value="fall">Fall 2018</option>
                        </select><br>
                        Select Course: 
                        <select name="course">
                            <option value="CSCI223">CSCI 223</option>
                            <option value="CSCI219">CSCI 219</option>
                        </select>
                    </fieldset>
                    <!-- Class date, time & roster -->
                    <fieldset>
                        <!-- Date div -->
                        <div>
                            Date <br>
                            <input type="date" name="class_date">
                        </div>
                        <!-- Class Time div -->
                        <div>
                            Class Time <br>
                            <input list="class_times">
                                <datalist id="class_times">
                                    <option value="10:00am - 11:15am">
                                    <option value="12:00pm - 1:15pm">
                                    <option value="2:00pm - 3:15pm">
                                    <option value="4:00pm - 5:15pm">
                                    <option value="6:00pm - 7:15pm">
                                </datalist>
                            <input type="button" value="Retrieve Class Roster">
                        </div>
                    </fieldset>
                    <fieldset>
                        <!-- Student Name div -->
                        <div>
                            Name
                        </div>
                        <!-- Attendance Checklist div -->
                        <div>
                           On Time <br>
                           <input type="checkbox"> 
                        </div>
                        <div>
                            Late <br>
                           <input type="checkbox">
                        </div>
                        <div>
                            Absent <br>
                           <input type="checkbox">
                        </div>
                        <div>
                            Excused <br>
                           <input type="checkbox">
                        </div>
                    </fieldset>
                    <fieldset>
                         <textarea name="message" rows="10" cols="100"></textarea> 
                    </fieldset>
                    <fieldset>
                        <input type="button" value="Update">
                    </fieldset>
            </form>
        
        </div>

    </div>
    
</body>
</html>
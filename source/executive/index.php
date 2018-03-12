<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive</title>
    <link rel="stylesheet" href="#">
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
                    <fieldset>
                       <!-- Select Instructor,Semester, Course -->
                        <div>
                           Select Instructor: 
                            <select name="instructor">
                                <option value="steve_r">Steve Robinett</option>
                                <option value="chris_m">Chris Mee</option>
                            </select><br>
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
                        </div>
                        <div>
                            Select Time:
                            <input list="class_times">
                                <datalist id="class_times">
                                    <option value="10:00am - 11:15am">
                                    <option value="12:00pm - 1:15pm">
                                    <option value="2:00pm - 3:15pm">
                                    <option value="4:00pm - 5:15pm">
                                    <option value="6:00pm - 7:15pm">
                                </datalist>
                            <input type="button" value="Show Results">
                        </div>
                    </fieldset>
                    <fieldset>
                         <textarea name="message" rows="10" cols="100"></textarea> 
                    </fieldset>
                    <fieldset>
                        <input type="button" value="Click to Display Individual Attendance">
                    </fieldset>
                    <fieldset>
                        <!-- Student Name div -->
                        <div>
                            Name
                        </div>
                        <!-- Attendance Checklist div -->
                        <div>
                           On Time <br>
                            
                        </div>
                        <div>
                            Late <br>
                           
                        </div>
                        <div>
                            Absent <br>
                           
                        </div>
                        <div>
                            Excused <br>
                           
                        </div>
                        <div>
                            Total <br>
                           
                        </div>
                    </fieldset>
                    
                    <fieldset>
                        <input type="button" value="Save Results">
                        <input type="button" value="View Another">
                        <input type="button" value="Select Multiple Course/Instructors">
                    </fieldset>
            </form>
        
        </div>

    </div>
</body>
</html>

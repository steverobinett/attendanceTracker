
/* Users */
CREATE TABLE Users
(
    user_id INT AUTO_INCREMENT,
    user_type ENUM('Admin', 'Executive', 'Faculty', 'Student'),
    user_name VARCHAR,
    user_pass VARCHAR,
    PRIMARY KEY (user_id)

);


/* Classes */
CREATE TABLE Classes
(
    class_id INT AUTO_INCREMENT,
    class_name VARCHAR,
    class_code VARCHAR,
    PRIMARY KEY (class_id)
);


/* Attendance_Lists */
CREATE TABLE User_Attendance
(
    user_id INT,
    class_id INT,
    att_date DATE,
    att_state ENUM ('Present', 'Late', 'Absent', 'Excused'),
    PRIMARY KEY (att_date),
    FOREIGN KEY (user_id) REFEERENCES Users(user_id),
    FOREIGN KEY (class_id) REFEERENCES Classes(class_id)
);


/* Class_Lists */
CREATE TABLE Class_Lists
(
    user_id INT,
    class_id INT,
    instructor VARCHAR,
    PRIMARY KEY (instructor),
    FOREIGN KEY (user_id) REFEERENCES Users(user_id)
    FOREIGN KEY (class_id) REFEERENCES Classes(class_id)
    
);


/* Class_Schedules */
CREATE TABLE Class_Schedules
(
    class_id INT,
    weekday ENUM('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday')
    class_start TIME,
    class_end TIME,
    PRIMARY KEY (weekday, class_start),
    FOREIGN KEY (class_id) REFEERENCES Classes(class_id)
);


/* Class_Notes */
CREATE TABLE Class_Notes
(
    class_id INT,
    class_note VARCHAR,
    class_note_date DATE,
    PRIMARY KEY (class_note_date),
    FOREIGN KEY (class_id) REFEERENCES Classes(class_id)
);

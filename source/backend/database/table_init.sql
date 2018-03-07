/* Groups */
CREATE TABLE Groups
(
    group_id
    group_name
);


/* Users */
CREATE TABLE Users
(
    user_id
    group_id
    user_name
    user_age
    user_pass
);


/* Classes */
CREATE TABLE Classes
(
    class_id
    class_name
);


/* Attendance_Lists */
CREATE TABLE User_Attendance
(
    user_id
    class_id
    att_date
    att_on_time
    att_late
    att_absent
    att_excused
);


/* Class_Lists */
CREATE TABLE Class_Lists
(
    user_id
    class_id
    instructor
    grade
);


/* Class_Schedules */
CREATE TABLE Class_Schedules
(
    class_id
    weekdate
    class_start
    class_end
);


/* Class_Notes */
CREATE TABLE Class_Notes
(
    class_id
    class_note
    class_note_date
);

# DEVOPS Attendance Tracker

* Topics
..* Database Conventions














## Database Conventions

    Area for general database conventions and a description of the overall structure as given by the ERD in /resources/erd/Database.pdf

### Naming Conventions

    * Table names are named using snake_case where the first letter of each word is capitalized. The end result should be a pluralized form of the entries contained within.
    ..* Examples: Users, Class_Schedules 
    * Column names are named using generic snake_case. Each column should be the singular form of the data it is labeling.
    ..* Examples: user_pass, class_note_date
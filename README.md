# DEVOPS Attendance Tracker

* Topics
  * Readme Formatting
  * Database Conventions


## Readme Formatting

Readme formatting should use markdown syntax (a cheat-sheet is available [here](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet#links)). Major topic headings should use two hashes - subtopics within those headings should increment hashes as necessary.


## Database Conventions

Area for general database conventions and a description of the overall structure as given by the ERD in __/resources/erd/Database.pdf__

### Naming Conventions

* Table names are named using snake_case where the first letter of each word is capitalized. The end result should be a pluralized form of the entries contained within.
  * __Examples:__ Users, Class_Schedules 
* Column names are named using generic snake_case. Each column should be the singular form of the data it is labeling.
  * __Examples:__ user_pass, class_note_date
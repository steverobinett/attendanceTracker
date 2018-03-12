CREATE PROCEDURE 'daily_attendance_retrieve'(
IN $classId INT,
OUT $userID INT,
OUT $instructor VARCHAR(30)
)
BEGIN

SELECT user_id INTO $userID
  and instructor INTO $instructor
  FROM Class_Lists
  WHERE class_id = $classId;

END

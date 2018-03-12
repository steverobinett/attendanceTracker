CREATE PROCEDURE 'add_user' (
  IN $userName VARCHAR(30),
  IN $userLName VARCHAR(20)
  IN $userFName VARCHAR(20)
  IN $userType ENUM('Admin', 'Executive', 'Faculty', 'Student'),
  IN $userPass VARCHAR(20)
);

BEGIN
INSERT INTO 'Users'.'attendance_tracker'(
  'user_name',
  'user_last_name',
  'user_first_name',
  'user_type',
  'user_pass'
) VALUES (
  '$userName',
  '$userLName',
  '$userFName',
  '$userType',
  '$userPass'
);
END

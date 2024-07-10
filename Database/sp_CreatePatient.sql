-- Stored Procedure to create a new patient
CREATE PROCEDURE sp_patient_detail
    @FirstName NVARCHAR(50),
    @Surname NVARCHAR(50),
    @dob varchar,
    @Age INT,
    @TotalScore INT
AS
BEGIN
    INSERT INTO patient_detail (FirstName, Surname, dob, Age, total_score)
    VALUES (@FirstName, @Surname, @DateOfBirth, @Age, @TotalScore);
END

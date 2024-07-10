-- Stored Procedure to update a patient's record
CREATE PROCEDURE sp_UpdatePatient
    @PatientID INT,
    @FirstName NVARCHAR(50),
    @Surname NVARCHAR(50),
    @DateOfBirth DATE,
    @Age INT,
    @TotalScore INT
AS
BEGIN
    UPDATE patient_detail
    SET FirstName = @FirstName,
        Surname = @Surname,
        dob = @DateOfBirth,
        Age = @Age,
        total_score = @TotalScore
    WHERE id = @PatientID;
END

-- Stored Procedure to read a patient by ID
CREATE PROCEDURE sp_ReadPatient
    @PatientID INT
AS
BEGIN
    SELECT * FROM patient_detail WHERE id = @PatientID;
END

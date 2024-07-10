# Neuromodulation-Form
 This project is a web application for managing Neuromodulation patient data. It includes a form for patients to enter their pain inventory details and an admin interface for viewing, editing, and deleting these records. The project is built using PHP (without a framework), jQuery, Bootstrap, and MySQL.
 ### Setup Instructions

1. **Clone the repository:**
    ```sh
    git clone https://github.com/sreejathampi/Neuromodulation-Form.git
    cd neuromodulation-form
    ```

2. **Database Setup:**
    - Open XAMPP Server ,connection Establish 
    - Create a new database in phpmyadmin.
    - Run the SQL scripts located in the `Database` folder to create the necessary tables and stored procedures.
    - ## Usage

### Patient Form
- Access the patient form at `http://sreejathampi/Neuromodulation-Form/index.php`.
- Fill in the patient details and pain inventory questions.
- The total score will be auto-calculated as the form is filled out.
- Submit the form to save the patient's data.

### Admin Interface
- Access the admin interface at `http://reejathampi/Neuromodulation-Form/admin_view.php`.
- View a table of all submitted forms.
- Click on a row to view the details of a specific submission.
- Use the "Edit" button to modify the details, or the "Delete" button to remove the entry.

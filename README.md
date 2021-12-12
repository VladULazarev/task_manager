# Task manager

How it works

After starting, you need to log in. Click Register, and fill in all input fields. All input fields are checked for 'bad' characters. 
Email and password are checked for existence in DB.
Password must have more than 5 symbols

If you already registered click Sign In. Email and password are checked for 'bad' characters and for existence in DB.

View all tasks - click 'Show all tasks'. To delete a task click the button 'Delete'.

Create task - click 'Create a new task', enter the content of the task and click 'Add new task'.

Exit - click 'Log Out'.

The application was tested on Open Server(local server) and works as a website.

Do not forget to change the connection settings in core \ DbConnection.php

The 'users' table is empty.

The 'tasks' table contains 24 rows

'template.sql' - dump the database at the root of the directory

# Project installation guide
1.	Install XAMPP normally https://www.apachefriends.org/index.html
2.	Inside C/xampp/htdocs copy the webapp folder
3.	Run XAMPP application
4.	Set default XAMPP directory root
Click on Config button on XAMPP GUI
 
Click on Apache (httpd.conf)
 
Add and comment these lines as it shows below:
 
Typing localhost on the browser should now redirect to the login page.
 
 
4.Install the database in PHPmyAdmin
Type in the browser while XAMMP is running: http://localhost/phpmyadmin/

1.	Select the new database on the left pane.
2.	Click on the Import tab in the top center pane.
3.	Under the File to import section, click Browse and locate the file sensors.sql
4.	Click the GO button
Now a database named sensors is installed having the table users inside it

5.	Type localhost on the browser bring the login page, either login with: 
admin@admin.com
admin123
Or register new account
Alternative for evaluation purposes type: localhost/sensors to view the dashboard without being logged with an account you can register or login using the system function/user command the left of the page on the sidebar.
6.	Clicking on the Dashboard button will fetch the latest sensor value gathered from the sensors all other values are updated automatically.
7.	Clicking the Analytics button on the sidebar will bring you the bottom of the page where the analytics are located
Additional Notes:
The hardware will be kept running for 30 days after the submission of the project, all values will be live.
Inside CodeIgniter’s framework the pages that were used/created were:
webapp/app/controllers/BaseController.php (Default framework controller)
webapp/app/controllers/Users.php (all application backend operations)
webapp/app/Models/UserModel.php (validation helper and password hashing)
webapp/app/Validation/UserRules.php (validation rules)
webapp/app/Views/Template/header.php (The header all page’s share)
webapp/app/Views/Template/footer.php (The footer all page’s share)
webapp/app/Views/sensors.php (The dashboard)
webapp/app/Views/login.php (Login page)
webapp/app/Views/register.php (Register page)
webapp/app/Views/changeDetails (Update account details)
webapp/public/assets/styles.css (Stylesheet)
webapp/public/assets/scripts.js (JavaScript)
The hardware script can be found in ThingSpeakConnection folder, you can view the code by using the Arduino’s IDE or open it with Notepad.



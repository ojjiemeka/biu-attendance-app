<h1>Installation</h1>

<ul>
    <li>Clone the project into the htdocs folder in XAMPP (for windows users) "https://github.com/ojjiemeka/biu-attendance-app.git"</li>

    open the project in VSCode

    Open the project in VSCode
    
    Open Terminal
    
    Run "npm install" insid to install node dependiencie

    Run "npm install" in terminal to install node dependiencies

    Run "Composer Install" to install composer dependencies

    Run "php artisan serve" to serve the project

    Run "npm run dev" to load the pages

</ul>

<ul>
    <li>**Some of the pages are route protected meaning you cant access them without a login**</li>

    - create DB called "biu_test"

    - run php artisan migrate to run DB migrations and create necessary colums and tables

    - create an account on register link
       
        NB: register link is partially broken, so you might recieve an error

    - check DB to confirm if record was created

    - signin with created details to access the routes bwlow

        NB: ADMIN LOGINS WILL BE CREATED WHEN ROLES & PERMISSIONS ARE COMPLETED


</ul>

<h1>Route Links</h1>

<ul>
    <p>After you run the last 2 commands it should serve on a server like "http://127.0.0.1:8001 - Localhost"</p>

        http://127.0.0.1:8001 - default page that loads when the project serves, it's also the login page   

        Localhost/signup - go to Register Page

        Localhost/password/reset - go to Password Reset Page

        Localhost/calender - go to Calender

        Localhost/settings - go to Settings

        Localhost/profile - go to Profile

        Localhost/lecturers - go to Lecturers

        Localhost/profile - go to Profile
</ul>

</ul>

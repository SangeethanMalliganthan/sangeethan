double-submit-cookie-pattern-csrf
Double submitting cookies is defined as sending a random value in both a cookie and as a request parameter, with the server verifying if the cookie value and request value are equal.

IT171740222

Double Submit Cookie Pattern

REQUIREMENTS >> WAP Server

HOW TO RUN >>

Copy/Extract all files to C:\wamp64\www
Open web browser and navigate to http://localhost/double-submit-cookies-pattern/
UserName - admin Password - password
When user suceessfully loginin server generates a session ID abd CSRF token for the session and those are set as browser cookies and when user submits the update user form the server validates the session ID and CSRF token whether they are matched or not.

READ MORE >> Blog Post :https://double-submit-cookie-pattern.blogspot.com/2019/10/double-submit-cookie-pattern.html

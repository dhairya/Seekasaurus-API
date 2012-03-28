#Seekasaurus API

***


##About

Seekasaurus is an experiment to create temporary and dynmaic social networks between strangers while they are in transit. 

Seekasaurus is currently an iOS app, with a PHP backend. This project has the entire code for the backend and API, currently the API is in its bare bones and fully functional.

##Install

* Create the table structure from the db.sql file.
* Copy the code to the /htdocs of your AMP stack.
* Configure the dbconnect.php to reflect your MySQL settings.

***


##API

###User

**/create.php**

Purpose - Creates a new user in the system.

Requires - email, pass, name  (POST)

Returns - 1 or 0 (Success or Faliure)


**/login.php**

Purpose - Authenticates the user.

Requires - email, pass  (POST)

Returns - 1 or 0 (Success or Faliure)


**/getUserDetails.php**

Purpose - Returns user details.

Requires - email  (GET)

Returns - name or 0 (UserName or Faliure)


**/editName.php**

Purpose - Edit user name.

Requires - name, email  (POST)

Returns - 1 or 0 (Success or Faliure)


**/editPass.php**

Purpose - Edit user password.

Requires - oldpass, newpass, email  (POST)

Returns - 1 or 0 (Success or Faliure)


***

###Request


**/create.php**

Purpose - Creates a new request.

Requires - email, title, desc, mlat, mlong, status, creation, closure  (GET)

Returns - rID or 0 (New RequestID or Faliure)


**/read.php**

Purpose - Returns all requests.

Requires - NA

Returns -  rID, email, title, desc, mlat, mlong, status, creation, closure OR 0 (RequestData or Faliure)


**/update.php**

Purpose - Update / edit a request.

Requires - rID, email, title, desc, mlat, mlong, status, creation, closure  (GET)

Returns - 1 or 0 (Success or Faliure)


**/delete.php**

Purpose - Deletes a request.

Requires - rID  (GET)

Returns - 1 or 0 (Success or Faliure)

***

###List


**/create.php**

Purpose - Creates a new list.

Requires - rID, email, status, ulat, ulong, time  (GET)

Returns - 1 or 0 (Success or Faliure)


**/read.php**

Purpose - Returns all lists.

Requires - NA

Returns -  rID, email, status, ulat, ulong, time OR 0 (ListData or Faliure)


**/update.php**

Purpose - Update / edit a list.

Requires - rID, email, status, ulat, ulong, time  (GET)

Returns - 1 or 0 (Success or Faliure)


**/delete.php**

Purpose - Deletes a user from a list.

Requires - rID, email  (GET)

Returns - 1 or 0 (Success or Faliure)



***


###Chat


**/create.php**

Purpose - Creates a new chat.

Requires - rID, email, text  (GET)

Returns - 1 or 0 (Success or Faliure)


**/read.php**

Purpose - Returns all chats.

Requires - NA

Returns -  rID, mID, email, text, time OR 0 (ChatData or Faliure)


**/update.php**

Purpose - Update / edit a chat.

Requires - rID, mID, email, text  (GET)

Returns - 1 or 0 (Success or Faliure)


**/delete.php**

Purpose - Deletes a chat.

Requires - rID, mID  (GET)

Returns - 1 or 0 (Success or Faliure)



***




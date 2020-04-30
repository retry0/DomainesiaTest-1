**Show Todos**
----
Returns json data about all todos
* **URL**
  /todos
* **Method:**
  `GET`
* **Success Response:**
  * **Code:** 200 
  * **Content:**
      ```json
      {
      "result": true,
      "status": 200,
      "data": [
			{
		      "id": "1",
		      "name": "Todo id1",
		      "desc": "Desc Todo ID 1",
		      "is_finished": "1"
	      },
	      {
	      "id": "2",
	      "name": "Todo id2",
	      "desc": "Desc Todo ID 2",
	      "is_finished": "0"
	      },
	]} 
	```
  
* **Error Response:**
  * **Code:** 404 NOT FOUND 
  * **Code:** 405 Method Not Allowed

----

**Save Todo**
----
Save todo to database
* **URL**
  /store
* **Method:**
  `POST`
* **Success Response:**
  * **Code:** 200 
  * **Content:**
      ```json
      {
      "result": true,
      "status": 200,
      "msg": "Data successfully added"
      }```

  * **Code:** 200 
  * **Content:**
      ```json
      {
      "result": false,
      "status": 200,
      "msg": "Whoops something when wrog"
      }
	```

* **Error Response:**
  * **Code:** 404 NOT FOUND 
  * **Code:** 405 Method Not Allowed

----
**Edit Todo**
----
Edit Specific todo

* **URL**
  /edit/:id

* **Method:**
  `put`
*  **URL Params**
   **Required:** 
   `id=[integer]`

* **Data Params**
    `name=[string]`
    `desc=[string]`
    `is_finished=[boolean]`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**       
    ```json
      {
      "result": true,
      "status": 200,
      "msg": "Data successfully edited"
      }
	```

    * **Code:** 200 <br />
    **Content:**       
    ```json
      {
      "result": false,
      "status": 200,
      "msg": "Internal server error"
      }
	```
* **Error Response:**
  * **Code:** 404 NOT FOUND 
  * **Code:** 405 Method Not Allowed

**Delete Todo**
----
  Delete Specific todo
* **URL**
  /delete/:id

* **Method:**
  `delete`
*  **URL Params**
   **Required:** 
   `id=[integer]`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:**       
    ```json
      {
      "result": true,
      "status": 200,
      "msg": "Data successfully deleted"
      }
	```

    * **Code:** 200 <br />
    **Content:**       
    ```json
      {
      "result": false,
      "status": 200,
      "msg": "Internal server error"
      }
	```
* **Error Response:**
  * **Code:** 404 NOT FOUND 
  * **Code:** 405 Method Not Allowed


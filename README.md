#jenssegers mongdb

Form validation:
---------------------
unique push_token request and it will not take care of soft deleted item. If there
is soft deleted same push_token, this request still will pass. But If there is same 
value that  is not deleted, then it will fail.
```php
'push_token' => 'required|unique:mongodb.devices,push_token,NULL,id,deleted_at,NULL'
```

## Install

Using Composer

```
composer require laravelcode/laravel-sweet
```

Add the service provider to `config/app.php`

```php
Laravelcode\LaravelSweet\SweetProvider::class,
```


## Usage
inside  class you want to use 


### Basic


```php
/**
     *@param string $field_name  the name of your filed you make if you use it to make user write User.
     *@param string $method      The function of method ['Create','Update','Delete','Edit']
     *@param string $status      Choose one of this ['error','success','warning','info']
     *@param int    $time        choose the time you want to delay appear sweetalert 1 second = 1000 
     *@return void               no return of this function sweetalert it just make session of this .
*/

class UsersController extends ComponentsController
{

    public function Index()
    {
        /*
            * SweetFlash("Users","Create","success",1000);
            * SweetFlash("Users","Create","error",1000);
            * SweetFlash("Users","Create","warning",1000);
            * SweetFlash("Users","Create","info",1000);
        */
        SweetFlash($field_name,$method,$status,$time);
    }

}
```

in this example 
$field_name replace it with the name of your filed you make if you use sweet alert to  Create User write 
in this field . 

$method replace it with the name of your method creat or update or delete.

$status replace it with the status of your sweet warning or error or success.

$time replace it with the time you want to see sweet alert if you want to see it 2 second write 2000

if 5 5000 and so on  


Then, in your view. master page 

```javascript
    @if (Session::has('Flash_message'))
        <script>
            swal({
                icon:  "{{sweetElement('Flash_message') }}",
                title: "{{sweetElement('title')}}",
                timer: "{{sweetElement('timer')}}",
                text:  "{{sweetElement('text')}}"
            });
        </script>
        {{Sweet_Session_fired()}}
    @endif
```

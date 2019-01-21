## Install

Using Composer

```
composer require laravelcode/laravel-sweet
```

Add the service provider to `config/app.php`

```php
LaravelSweet\SweetProvider::class,
```


## Usage
inside  class you want to use 

```php
use LaravelSweet\Traits\SweetHelper;
```

### Basic


```php


class UsersController extends ComponentsController
{
    use LaravelSweet\Traits\SweetHelper;

    public function Index()
    {
        $this->SweetFlash($filed_name,$method,$status,$time);
    }

}
```

in this example 
$filed_name replace it with the name of your filed you make if you create user write user if you make product write product.

$method replace it with the name of your method creat or update or delete.

$status replace it with the status of your sweet warning or error or success.

$time replace it with the time you want to see sweet alert if you want to see it 2 second write 2000

if 5 5000 and so on  

































Then, in your view.

```javascript
@if (Session::has('Flash_message'))
    <script>
        swal({
            icon: "{{Session::get('Flash_message') }}",
            title: "{{Session::get('title')}}",
            timer:"{{Session::get('timer')}}",
            text: "{{Session::get('text')}}"
        });
    </script>
    {{Sweet_Session_fired()}}
@endif
```

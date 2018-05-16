# customer
Customer

### edit `App\User`

```php
protected $hidden = [
    'password', 'remember_token',
];

// ================


public function customers()
{
    return $this->hasMany('Bantenprov\Customer\Models\CustomerModel','user_id');
}

```

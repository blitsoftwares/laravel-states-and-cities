# laravel-states-and-cities

- Laravel.
- País, estados e cidades. 
- Já populado com estados e cidades brasileiras com código do IBGE

### (!) PACOTE EM DESENVOLVIMENTO / DEVELOPING PACKAGE (!)

### DER - RELATIONAL ENTITY DIAGRAM
![Image of Blit Softwares](./assets/der.png)

## CONOGRAMA

- CRUD 
    - Paises - OK
    - Estados - OK
    - Cidades - OK
    - Endereços - TASK

- SEEDER 
    - País Brasil - OK
    - Estados BR - OK
    - Cidades BR - OK

- JAVASCRIPT 
    - Autoload países - OK
    - Autoload estados ao selecionar país - OK
    - Aulodoad cidades ao selecionar estado - TASK

# Installation
Using composer, execute the following command to automatically update your composer.json, using the corresponding package version:
 
 ```composer require blitsoftwares/laravel-states-and-cities```
 
 or manually update your composer.json file
 
 ```
 {
   "require": {
   	"blitsoftwares/laravel-states-and-cities": "dev-master"
   }
 } 
  ```
  
### 2. Provider
If you are using Laravel 5.5+ skip this section since our package support auto-discovery.

You need to update your application configuration in order to register the package, so it can be loaded by Laravel. Just update your config/app.php file adding the following code at the end of your 'providers' section:

```
'providers' => [
      \Blit\StatesAndCities\Providers\StatesAndCitiesServiceProvider::class,
],
```
### 3. Migration
Execute the migrations, so that the tables on you database are created:
```
php artisan migrate 
```
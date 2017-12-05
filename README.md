# laravel-states-and-cities - DEVELOPING PACKAGE

- Laravel.
- País, estados e cidades. 
- Já populado com estados e cidades brasileiras com código do IBGE

### (!) PACOTE EM DESENVOLVIMENTO / DEVELOPING PACKAGE (!)

### DER - RELATIONAL ENTITY DIAGRAM
![Image of Blit Softwares](./assets/der.png)

## CRONOGRAMA

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

## Installation
Using composer, execute the following command to automatically update your composer.json, using the corresponding package version:
 
 ```
 composer require blitsoftwares/laravel-states-and-cities
 ```
 
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
        Blit\StatesAndCities\Providers\StatesAndCitiesServiceProvider::class,
    ],
```
### 3. Migration
Execute the migrations, so that the tables on you database are created:
```
php artisan migrate 
```
### 4. Publishing configuration, language, assets and views files
To publish the default configuration file and database migrations, execute the following command:

    php artisan vendor:publish --provider=Blit\\StatesAndCities\\Providers\\StatesAndCitiesServiceProvider
    
#### List publications
- Lang
	- resources/lang/vendor/StatesAndCities
- Views
	- resources/views/vendor/StatesAndCities
- Assets
	- public/vendor/StatesAndCities
- Config
	- config/states-and-cities.php
	
### 5. Routes available
- /countries
- /states
- /cities

### 6. Javascript
To automate the select component follow 2 steps

(!) This feature is already available and active in the package's native views (!)

Javascript knows component IDs (country, state, city) and performs scalar searches automatically when you select a country or state.

6.1 - Add the available script to your layout
```
<script src="//oss.maxcdn.com/jquery.mask/1.11.4/jquery.mask.min.js"></script>
<script src="/vendor/StatesAndCities/js/blit-states-and-cities.js"></script>
```

###  - optional

6.2 - add the components

for countries
```
<select name="country_id" id="country" data-default="{{ config('states-and-cities.default-country') }}"></select>
```

for states
```
<select name="state_id"  id="state" data-default="{{ config('states-and-cities.default-state') }}"></select>
```

for cities
```
<select name="city_id"  id="city" data-default="{{ config('states-and-cities.default-city') }}"></select>
```

## Informations

This package is being developed by the team of Blit Softwares.

Make a FORK help us to implement new countries, send your PR

- Contact
    - Lucas R. Pasquetto <lucas@blitsoft.com.br>
    - http://blitsoft.com.br



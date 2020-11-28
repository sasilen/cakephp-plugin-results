# Results plugin for CakePHP 4

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer config repositories.results git https://github.com/sasilen/cakephp-plugin-results.git
composer require sasilen/results
```

## Configuration
```
./bin/cake plugin load Sasilen/Results
```
## Migrate database schema
```
./bin/cake migrations migrate -p Results
```
## Add templates (main app)
```
# /src/View/AppView.php
public function initialize(): void
{
    parent::initialize();
    $this->loadHelper('CakeDC/Users.AuthLink');
    $this->loadHelper('Paginator', ['templates' => 'templates-paginator']);
    $this->loadHelper('Form', ['templates' => 'templates-form']);
}
```

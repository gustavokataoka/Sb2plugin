# Sb2Plugin

A cakephp 3 theme based on [SB Admin 2](http://startbootstrap.com/template-overviews/sb-admin-2) as a plugin.

## Pre-installation

It's necessary to have bower installed in the machine.
You can install bower by doing theses steps in terminal:

```
$ sudo apt-get install npm
$ sudo npm install -g bower
```

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.
3. Run `composer require gustavokataoka/sb2plugin` inside the project.

## Configuration

Load the plugin by adding `Plugin::load('Sb2plugin', ['routes' => true]);` to your app's `config/boostrap.php`.

Edit `src/View/AppView.php` as follow:

```php
namespace App\View;

use Cake\View\View;

class AppView extends View
{
    public function initialize()
    {
        $this->layout = "Sb2plugin.sb";
    }
}

```
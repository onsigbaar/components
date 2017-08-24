# components

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
test/
vendor/
```

![Black Flames](https://raw.githubusercontent.com/7cdn/images/gh-pages/blog/posts/blackflames.png)

- Components v0.1.0 the Black Flames release at 2017/01/18.
- Components v0.1.1 release at 2017/01/31 02:44 PM.
- Components v0.1.2 the Zodiac Enhancer release at 2017/02/06 04:50 PM.
- Components v0.2.0 Lasagna release at 2017/06/05 08:30 PM.
- Components v0.3.0 Armiger release at 2017/06/28 01:28 AM.

Components docs v0.1.2

- [Install](#install)
- [Cli](#cli)
- [Facade](#facade)
- [Entity](#entity)
- [Custom-Namespaces](#custom-namespaces)


### Install

``` bash
composer require onsigbaar/components
```

Add service provider.

``` bash
'providers' => [
  Onsigbaar\Components\ServiceProvider::class,
],
```

Add facade aliases.

``` bash
'aliases' => [
  'Component' => Onsigbaar\Components\Facades\Component::class),
],
```

Publish the package's configuration file.

``` bash
php artisan vendor:publish --provider="Onsigbaar\Components\ServiceProvider"
```


### Cli
``` bash
php artisan component:setup

php artisan component:make <ComponentName>
php artisan component:make <ComponentName> <ComponentName> <ComponentName>

# do composer dump-autoload after component:make

composer dump-autoload

php artisan component:make <ComponentName> --plain
php artisan component:make <ComponentName> -p

php artisan component:use <ComponentName>

php artisan component:list

php artisan component:make-command CustomCommand <ComponentName>
php artisan component:make-command CustomCommand --command=custom:command <ComponentName>
php artisan component:make-command CustomCommand --namespace=Components\Name\Commands <ComponentName>

php artisan component:make-migration create_users_table <ComponentName>
php artisan component:make-migration create_users_table --fields="username:string, password:string" <ComponentName>
php artisan component:make-migration add_email_to_users_table --fields="email:string:unique" <ComponentName>
php artisan component:make-migration remove_email_from_users_table --fields="email:string:unique" <ComponentName>
php artisan component:make-migration drop_users_table <ComponentName>

php artisan component:migrate-rollback
php artisan component:migrate-reset
php artisan component:migrate-refresh

php artisan component:migrate-rollback <ComponentName>
php artisan component:migrate-reset <ComponentName>
php artisan component:migrate-refresh <ComponentName>

php artisan component:migrate <ComponentName>

php artisan component:migrate

php artisan component:make-seed <seed-name> <ComponentName>
php artisan component:seed <ComponentName>

php artisan component:seed

php artisan component:make-controller <NameController> <ComponentName>

php artisan component:publish-asset <ComponentName>

php artisan component:publish-asset

php artisan component:make-model <ModelName> <ComponentName>
php artisan component:make-model <ModelName> <ComponentName> --fillable="username,email,password"

php artisan component:make-provider <ServiceProviderName> <ComponentName>

php artisan component:publish-migration <ComponentName>

php artisan component:publish-migration

php artisan component:publish-seed <ComponentName>

php artisan component:publish-seed

php artisan component:publish-config <ComponentName>
php artisan component:publish-config
php artisan component:publish-config <ComponentName> --force
php artisan component:publish-config --force

php artisan component:enable <ComponentName>

php artisan component:disable <ComponentName>

php artisan component:make-middleware <MiddlewareName> <ComponentName>

php artisan component:make-mail <MailClassName> <ComponentName>

php artisan component:make-notification <NotificationClassName> <ComponentName>

php artisan component:update <ComponentName>

php artisan component:update

```

### Facade

``` bash
Component::all();

Component::getCached()

Component::getOrdered();

Component::scan();

Component::find('ComponentName'); # Component::get('ComponentName');

Component::findOrFail('ComponentName');

Component::getScanPaths();

Component::toCollection();

Component::getByStatus(1);

Component::has('ComponentName');

Component::enabled();

Component::disabled();

Component::count();

Component::getPath();

Component::register();

Component::boot();

Component::collections();

Component::getComponentPath('ComponentName');

Component::assetPath('ComponentName');

Component::config('composer.vendor');

Component::getUsedStoragePath();

Component::getUsedNow(); # Component::getUsed();

Component::setUsed('ComponentName');

Component::getAssetsPath();

Component::asset('component::img/logo.img');

Component::install('vendor/component');

Component::update('component');
```

### Entity

``` bash
$component = Component::find('component');

$component->getName();

$component->getLowerName();

$component->getStudlyName();

$component->getPath();

$component->getExtraPath('Assets');

$component->enable();

$component->disable();

$component->delete();
```

### Custom-Namespaces

```bash
Lang::get('component::group.name')

View::make('component::index')
View::make('component::partials.sidebar')

Config::get('component.name')
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email 50c5ac69@opayq.com instead of using the issue tracker.

## Credits

- [anonymoussc][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/onsigbaar/components.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/onsigbaar/components/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/onsigbaar/components.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/onsigbaar/components.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/onsigbaar/components.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/onsigbaar/components
[link-travis]: https://travis-ci.org/onsigbaar/components
[link-scrutinizer]: https://scrutinizer-ci.com/g/onsigbaar/components/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/onsigbaar/components
[link-downloads]: https://packagist.org/packages/onsigbaar/components
[link-author]: https://github.com/onsigbaar
[link-contributors]: ../../contributors

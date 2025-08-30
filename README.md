FilamentPHP DashStack Theme
=

![GitHub License](https://img.shields.io/github/license/Fa-BRAIK/dash-stack-theme)
![Packagist Version](https://img.shields.io/packagist/v/nuxtifyts/dash-stack-theme)
![PhpStan Level](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg)
[![PHPStan](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/phpstan.yml/badge.svg)](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/phpstan.yml)
[![Laravel Pint](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pint.yml/badge.svg)](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pint.yml)
[![PHPUnit](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pr-tests.yml/badge.svg)](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pr-tests.yml)

![Dash Stack Theme Light/Dark](https://github.com/Fa-BRAIK/dash-stack-theme/blob/main/assets/dash_stack_theme.png?raw=true)

> Tested on [Filamentphp demo app](https://github.com/filamentphp/demo)

Acknowledgements
-

> Name based and Design inspired from [DashStack Theme](https://www.figma.com/community/file/1324762163080748317/dashstack-free-admin-dashboard-ui-kit-admin-dashboard-ui-kit-admin-dashboard). Big thanks for [Seju](https://www.figma.com/@sejal_ui_ux) for this amazing design.

Documentation
-

- [Installation](#installation)
- [Configuration](#configuration)
- [Upcoming Features](#upcoming-features)
- [Appearance](#appearance)

Installation
-

#### Step 1: Install this package using composer:

```bash
composer require nuxtifyts/dash-stack-theme
```

#### Step 2: Run install command:

Running this command will install required npm packages (If they're not already installed), and it will publish its assets as well.

```bash
php artisan filament-dash-stack-theme:install
```

#### Step 3: Register filament plugin:

Within your targeted panel provider, you can now use and register dash stack theme plugin:

```php
use Nuxtifyts\DashStackTheme\DashStackThemePlugin;

// ...

$panel->plugin(DashStackThemePlugin::make());
```

#### Step 4: Add DashStack to your vite config:

Add DashStack theme to your `vite.config.js`:

```javascript
input: [
   // ...
   'vendor/nuxtifyts/dash-stack-theme/resources/css/theme.css',
],
```

> For more information on using theme, check [filament docs](https://filamentphp.com/docs/4.x/styling/overview#creating-a-custom-theme).

Configuration
-

DashStack theme comes by default with a configuration for  primary color used, and predefined dashboard configs for the theme, if needed to be altered, you can always publish vendor config file and change them however you see fit: 

```php
// filament-dash-stack-theme.php

use Nuxtifyts\DashStackTheme\Support\Colors\Color;

return [
    'default-colors' => [
        'primary' => Color::Blue,
    ],

    'side-bar-collapsable-on-desktop' => true,

    'collapsible-navigation-groups' => false,

    'breadcrumbs' => false,

    /**
     * Nunito Sans is the default font for the theme.
     */
    'use-default-font' => true,
];
```

> **note**: The default font used for Dash Stack Theme is Nunito Sans, you can
> disable this behavior by publish the config file of this package, and 
> setting `use-default-font` to `false`.

Upcoming Features
-

Eventually these components will be added to the package, if you have any suggestions/feedback, if you have a feature request, please don't hesitate to do so in [GitHub](https://github.com/Fa-BRAIK/dash-stack-theme).

#### List of upcoming changes:

- Date / DateTime / DateRange component
- Select component (Could be only UI changes for this one) 

Appearance
-

- [Login Page](#login-page)
- [Dashboard](#dashboard-page)
- [Global Search](#global-search)
- [Notifications](#notification-modal)
- [User menu](#user-menu)
- [Resource Page](#resource-page)
- [Grid Table](#grid-table)
- [Forms](#forms)

#### Login Page

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Login Page Light</th>
      <th scope="col" width="1000px">Login Page Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/login_page_light.png"
            width="100%" 
            alt="Login Page Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/login_page_dark.png" 
            width="100%" 
            alt="Login Page Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Dashboard Page

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Dashboard Page Light</th>
      <th scope="col" width="1000px">Dashboard Page Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/dashboard_page_light.png"
            width="100%" 
            alt="Dashboard Page Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/dashboard_page_dark.png" 
            width="100%" 
            alt="Dashboard Page Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Global Search

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Global Search Light</th>
      <th scope="col" width="1000px">Global Search Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/global_search_light.png"
            width="100%" 
            alt="Global Search Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/global_search_dark.png" 
            width="100%" 
            alt="Global Search Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Notification Modal

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Notification Modal Light</th>
      <th scope="col" width="1000px">Notification Modal Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/notification_modal_light.png"
            width="100%" 
            alt="Notification Modal Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/notification_modal_dark.png" 
            width="100%" 
            alt="Notification Modal Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### User Menu

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">User Menu Light</th>
      <th scope="col" width="1000px">User Menu Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/user_menu_light.png"
            width="100%" 
            alt="User Menu Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/user_menu_dark.png" 
            width="100%" 
            alt="User Menu Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Resource Page

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Resource Page Light</th>
      <th scope="col" width="1000px">Resource Page Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/resources_page_light.png"
            width="100%" 
            alt="Resource Page Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/resources_page_dark.png" 
            width="100%" 
            alt="Resource Page Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Grid Table

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Grid Table Light</th>
      <th scope="col" width="1000px">Grid Table Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/grid_table_light.png"
            width="100%" 
            alt="Grid Table Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/grid_table_dark.png" 
            width="100%" 
            alt="Grid Table Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Forms

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Forms Light</th>
      <th scope="col" width="1000px">Forms Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/form_light.png"
            width="100%" 
            alt="Forms Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/form_dark.png" 
            width="100%" 
            alt="Forms Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

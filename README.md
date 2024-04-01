## Modules Starter Kit

Laravel AdminTW is a Laravel Starter Kit | TALL admin theme.

<p><img src="https://laraveladmintw.com/images/docsv5/settings-light.png"></p>

AdminTw is built on top of Laravel, Livewire, and Tailwind CSS.

Includes:
- 2FA
- Audit Trails
- System Settings
- Multiple Users
- Roles and Permissions
- Tests

## Installation

1. Clone the repository

Copy the `.env.example` file to `.env`:

```
cp .env.example .env
```

Set database and emails settings inside `.env`

2. Run `composer install`
3. Run `npm install && npm run build`
4. run `php artisan storage:link`
4. Run `php artisan migrate --seed`
5. Run `php artisan serve`

Supports both light and dark mode based on the users OS.

Provided are blade and Laravel Livewire components for common layout / UI elements and a complete test suite (Pest PHP).

## Community

There is a Discord community. https://discord.gg/VYau8hgwrm For quick help, ask questions in the appropriate channel.

## Contributing

Contributions are welcome and will be fully credited.

## Pull Requests

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## Security

If you discover any security related issues, please email dave@dcblog.dev email instead of using the issue tracker.

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# MailUp Socialite Provider

Use your MailUp account with Laravel Socialite.

## Requirements

- PHP 5.6+
- socialiteproviders/manager 2.0+

## Installing

Use Composer to install it:

```
composer require filippo-toso/mailup-socialite
```

## Using It

- Remove Laravel\Socialite\SocialiteServiceProvider from your providers[] array in config\app.php if you have added it already.
- Add \SocialiteProviders\Manager\ServiceProvider::class to your providers[] array in config\app.php.

For example:

```
'providers' => [
    // a whole bunch of providers
    // remove 'Laravel\Socialite\SocialiteServiceProvider',
    \SocialiteProviders\Manager\ServiceProvider::class, // add
];
```

Note: If you would like to use the Socialite Facade, you need to [install it](https://github.com/laravel/socialite).

## Add the Event and Listeners

- Add SocialiteProviders\Manager\SocialiteWasCalled event to your listen[] array in <app_name>/Providers/EventServiceProvider.
- Add your listeners (i.e. the ones from the providers) to the SocialiteProviders\Manager\SocialiteWasCalled[] that you just created.
- The listener that you add for this provider is 'SocialiteProviders\MailUp\MailUpExtendSocialite@handle',.
- Note: You do not need to add anything for the built-in socialite providers unless you override them with your own providers.

For example:

## Environment Variables

If you add environment values to your .env as exactly shown below, you do not need to add an entry to the services array.
Append provider values to your .env file

```
// other values above
MAILUP_KEY=yourkeyfortheservice
MAILUP_SECRET=yoursecretfortheservice
MAILUP_REDIRECT_URI=https://example.com/login   
```

Add to config/services.php.

You do not need to add this if you add the values to the .env exactly as shown above. The values below are provided as a convenience in the case that a developer is not able to use the .env method

```
'mailup' => [
    'client_id' => env('MAILUP_KEY'),
    'client_secret' => env('MAILUP_SECRET'),
    'redirect' => env('MAILUP_REDIRECT_URI'),  
],
```

# MailTracker for Laravel

Track email opens seamlessly in your Laravel applications using the MailTracker package. Get insights into when and how frequently your emails are viewed.
Table of Contents

    Features
    Installation
    Configuration
    Usage
    Contribution
    License

## Features

    Simple Integration: Slot into existing Laravel mailing workflows with ease.
    Customizable Tracking Image: Use an image consistent with your email design.
    Non-Intrusive Tracking: Passive tracking using natural email client behaviors.

## Installation

Provide a brief guide on how to install the package using Composer. Example:

```bash
composer require your-namespace/mailtracker
```

## Configuration

After installing, publish the configuration file:


```bash

php artisan vendor:publish --provider=Heddiyoussouf\Mailtracker\MailTrackerProvider
```

This will publish a mailtracker.php config file:

```php

return [
    'image' => 'assets/footer.png',
];
```

Adjust the image path to suit your design and preferences.
Usage

Embed the tracking functionality using the provided Blade directive in your email templates:

blade

> 👍 Info
> 
> Contributions are welcome! Please read the contribution guidelines before submitting any pull requests.
>

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
composer require heddiyoussouf/mailtracker
```

## Configuration

After installing, publish the configuration file:


```bash

php artisan vendor:publish --provider="Heddiyoussouf\Mailtracker\MailTrackerProvider"
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

## Styling the Tracking Image

The MailTracker package embeds a tracking image at the footer of your emails. For greater customization and to ensure that the image seamlessly integrates with your email design, the image is tagged with a class and ID both named mailtracker-image.

This means you can easily style or manipulate the tracking image using CSS or JavaScript in your email templates. Whether you're looking to adjust its positioning, size, opacity, or other properties, you have full control:
Using the Class:

```css

.mailtracker-image {
    /* Example: Set the image width */
    width: 50px;
}
```

Using the ID:

```css

#mailtracker-image {
    /* Example: Hide the image */
    display: none;
}
```

Integrating this flexibility ensures that while you gain valuable insights from the tracking feature, the recipient's email viewing experience remains as designed and uninterrupted.

> 👍 Info
> 
> Contributions are welcome! Please read the contribution guidelines before submitting any pull requests.
>

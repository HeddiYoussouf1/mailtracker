# Mailtracker for Laravel

heddiyoussouf/mailtracker provides an efficient way to track email opens in Laravel applications. It integrates seamlessly, leveraging embedded images to monitor when recipients view their emails.
Table of Contents

    Features
    Installation
    Usage
    Customizations
    Conclusion

<a name="features"></a>
### Features

    Mail Model: Logs individual emails with details.
    Mailtracker Model: Records email open actions with attributes such as ip and user_agent.
    HasTracker Trait: Equips the Mail model with the ability to generate unique tracking URLs.

<a name="installation"></a>
### Installation

Install via Composer:

    bash

    composer require heddiyoussouf/mailtracker

If not using Laravel's package auto-discovery, register the service provider in config/app.php:

    php

    'providers' => [
        // ...
        Heddiyoussouf\Mailtracker\MailTrackerProvider::class,
    ]

<a name="usage"></a>
### Usage

Integrate the Mail and Mailtracker models as needed.
Attach the HasTracker trait to your Mail model.
Generate tracking URLs:
    For individual emails: `$mail->singleView()`
    For broadcast emails: `$mail->multipleView()`
Embed the tracking image in the email's Blade view:

    blade.php

    @mailtracker($trackingURL)

<a name="customizations"></a>
### Customizations

Publish Assets and Config:

    bash

    php artisan vendor:publish --provider="Heddiyoussouf\Mailtracker\MailTrackerProvider"

Styling the Image: The embedded image can be styled using its class **mailtracker-image** or its ID **mailtracker-image**.


    css
    
    .mailtracker-image {
        /* Your styles here */
    }
    /*or*/
    #mailtracker-image {
        /* Your styles here */
    }

Config Customizations: Adjust the **mailtracker.php** config to specify a custom image or make other configurations.
    
    return [
        'image' => 'assets/footer.png',
    ];

<a name="conclusion"></a>
### Conclusion

Mailtracker simplifies email open tracking in Laravel. Through easy integration, detailed tracking, and flexible customization, it stands as a robust solution for all Laravel-based email campaigns.

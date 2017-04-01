# landlord rental site and application form

A simple few page bootstrap site and application form for rental housing. The application form uses phpmailer with a template to send the landlord the application by email.

## Demo

Here's a [live example](http://yorkunihomes.com)

## Installation

```
cd yourapachedirectory
git clone --recursive https://github.com/hutchgrant/rentalsite.git
```

if you download and extract it manually(without git), you need to also download and extract [PHPMailer](https://github.com/PHPMailer/PHPMailer) so that the directory is rentalsite/PHPMailer

## Configure

- Edit the config.php with your SMTP account and recaptcha secret key. 
- Edit the contact.html(ln 143 edit: data-sitekey="" ) with your recaptcha key

## License

MIT Licensed 2017 Grant Hutchinson see [LICENSE](https://github.com/hutchgrant/rentalsite/blob/master/LICENSE) for more info

## Author 

Grant Hutchinson(hutchgrant)

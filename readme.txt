=== Slug Translator Framework ===
Contributors: prajwolpkc
Tags: slug, translate, theme, language, seo
Requires at least: 4.0
Tested up to: 5.7
License: MIT
License URI: https://opensource.org/licenses/MIT

The ultimate slug translator framework for WordPress. It converts your non english text to english and save as slug by converting non latin characters to latin. It uses Google Translate API ( https://cloud.google.com/translate/docs/apis ) which send the post title and retrieve english latin string. The return string is sanitized and stored as post slug.


## Use of 3rd Party (Google Translate API)
This plugin uses Google Translate API to converts the given non latin characters of post title into english latin characters as post slug. On post publish event the tranlated slug is automatically saved.

Google Translate is one of the earliest language translation services around. Initially available as a web app to detect and translate between languages, Google Translate is now also available as an API. Google Translate API supports over a hundred languages. A get request of Google Translate API is called whenever the post is being saved, then the returned string will be saved as post slug in run time. All the translation service is handled by google, so there is no hasseling on our end. This is the link to the service and API Documentation. ( https://cloud.google.com/translate/docs/apis ).
This plugin has no control of the translation mechanism. 


### Changelog June 30 2021 ###
* Add save filter
* Add Cloud Translation

### Changelog June 27 2021 ###
* Translate only for non english characters


### Features ###
* Automatic Translate on save post hook
* Remove non latin characters 
* Helps to attain latin characters on slug
* Effective URL sharing
* Increased Performance
* Simplified API
* Partial Refresh
* Conditional Logic
* GDPR Compliance
* SEO friendly slug
* Improved Page Speed



### Future Improvements ###
* Support for customized Translation for multi language





